<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $mainCategory = Category::where([
            'slug' => $categorySlug
        ])->firstOrFail();
        $currentCategoryId = $mainCategory->id;

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

        $filters = [];
            
        if (Request::has('series')) {
            $series = Request::get('series');
            $series = explode('-', $series);
            $filters['series'] = $series;
        }

        $products = (new Product())->getProducts($categoryIds, $filters);

        if (Request::has('series')) {
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
            'products' => $products,
            'pagination' => $pagination
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
