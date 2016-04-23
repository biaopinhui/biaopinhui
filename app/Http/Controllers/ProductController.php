<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Category;
use App\Models\Product;
use App\Presenters\BphPresenter;

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
            'slug' => $categorySlug,
            'main' => 1
        ])->firstOrFail();
        $currentCategoryId = $mainCategory->id;

        if (!is_null($subCategorySlug)) {
            $subCategory = Category::where([
                'slug' => $subCategorySlug,
                'parent_id' => $mainCategory->id,
                'main' => 1
            ])->firstOrFail();

            $categoryIds = [$subCategory->id];
            $currentCategoryId = $subCategory->id;
        } else {
            $categoryIds = $mainCategory->subCategories->pluck('id')->all();
        }

        $products = Product::
            join('category_product', 'products.id', '=', 'category_product.product_id')
            ->whereIn('category_id', $categoryIds)
            ->paginate(6);

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
        $category = $product->categories->where('main', 1)->first();

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
