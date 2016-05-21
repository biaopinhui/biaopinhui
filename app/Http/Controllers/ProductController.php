<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Filter;
use App\Models\Product;
use App\Presenters\BphPresenter;
use Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categorySlug, $subCategorySlug = null)
    {
        // Get main category
        $mainCategory = Category::where([
            'slug' => $categorySlug
        ])->firstOrFail();
        $currentCategoryId = $mainCategory->id;

        // Get sub categories
        if (!is_null($subCategorySlug)) {
            $subCategory = Category::where([
                'slug' => $subCategorySlug,
                'parent_id' => $mainCategory->id
            ])->firstOrFail();

            $categoryIds = [$subCategory->id];
            $currentCategoryId = $subCategory->id;
        } else {
            $categoryIds = $mainCategory->subCategories->pluck('id')->all();
        }

        // Prepare query conditions for products
        $conditions = ['categoryIds' => $categoryIds];

        if (Request::has('series')) {
            $seriesIds = Request::get('series');
            $seriesIds = explode('-', $seriesIds);
            $conditions['series'] = $seriesIds;
        }

        // Get product list
        $products = Product::getProducts($conditions);

        // Get series list
        $series = Filter::getSeries($mainCategory->id, $conditions);

        if (Request::has('series')) {
            // Prepare checkbox data for frontend
            foreach ($series as $key => $value) {
                if (in_array($value['id'], $seriesIds)) {
                   $series[$key]['checked'] = true;
                } else {
                    $series[$key]['checked'] = false;
                }
            }

            // Add series to pagination URL
            $products->appends(['series' => Request::get('series')]);
        }

        $pagination = (new BphPresenter($products))->render();

        // Generate breadcrumb data
        $categoryChain = Category::getChain($currentCategoryId);
        $breadcrumb = [];
        $url = '';
        foreach ($categoryChain as $category) {
            $url .= '/' . $category->slug;
            $breadcrumb[] = [
                'title' => $category->name,
                'url' => url($url)
            ];
        }

        return view('pages.biaopai-list')->with([
            'breadcrumb' => $breadcrumb,
            'series' => $series,
            'products' => $products,
            'pagination' => $pagination,
            'minPrice' => 0,
            'maxPrice' => 3000
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $category = $product->categories->first();

        // Generate breadcrumb data
        $categoryChain = Category::getChain($category->id);
        $breadcrumb = [];
        $url = '';
        foreach ($categoryChain as $category) {
            $url .= '/' . $category->slug;
            $breadcrumb[] = [
                'title' => $category->name,
                'url' => url($url)
            ];
        }

        $breadcrumb[] = [
            'title' => $product->title,
            'url' => url($product->id)
        ];

        return view('pages.single-product')->with([
            'breadcrumb' => $breadcrumb,
            'product' => $product
        ]);
    }
}
