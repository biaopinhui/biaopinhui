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
    public function index($categoryName, $subCategoryName = null)
    {
        $mainCategory = Category::where('name', $categoryName)->firstOrFail();

        if (!is_null($subCategoryName)) {
            $subCategory = Category::where([
                'name' => $subCategoryName,
                'parent_id' => $mainCategory->id
            ])->firstOrFail();

            $currentCategory = $subCategory;
            $categoryIds = [$subCategory->id];
        } else {
            $categoryIds = $mainCategory->subCategories->pluck('id')->all();
        }

        $products = Product::
            join('category_product', 'products.id', '=', 'category_product.product_id')
            ->whereIn('category_id', $categoryIds)
            ->paginate(6);

        $pagination = (new BphPresenter($products))->render();

        return view('pages.biaopai-list')->with([
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

        return view('pages.single-product')->with([
            'product' => $product
        ]);
    }
}
