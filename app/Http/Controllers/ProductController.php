<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Filter;
use App\Models\Product;
use App\Presenters\BphPresenter;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $categorySlug, $subCategorySlug = null)
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

        if ($request->has('series')) {
            $seriesIds = $request->get('series');
            $seriesIds = explode('-', $seriesIds);
            $conditions['series'] = $seriesIds;
        }

        // Get product min price and max price by current conditions
        $productModel = new Product();
        $minPrice = $fromPrice = floor($productModel->getMinPrice($conditions) ?: 0);
        $maxPrice = $toPrice = ceil($productModel->getMaxPrice($conditions) ?: 100);

        if ($request->has('prices')) {
            $prices= $request->get('prices');
            $prices= explode('-', $prices);
            $conditions['prices'] = $prices;

            if (is_numeric($prices[0])) {
                $fromPrice = $prices[0];
            }
            if (is_numeric($prices[1])) {
                $toPrice = $prices[1];
            }
        }

        // Get product list
        $products = $productModel->getProducts($conditions);

        // Get series list
        $series = Filter::getSeries($mainCategory->id, $conditions);

        if ($request->has('series')) {
            // Prepare checkbox data for frontend
            foreach ($series as $key => $value) {
                if (in_array($value['id'], $seriesIds)) {
                   $series[$key]['checked'] = true;
                } else {
                    $series[$key]['checked'] = false;
                }
            }
        }

        // Add series and prices to pagination URL
        $products->appends(['series' => $request->get('series')]);
        $products->appends(['prices' => $request->get('prices')]);

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
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'fromPrice' => $fromPrice,
            'toPrice' => $toPrice
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

    public function create($categoryId)
    {
        $category = Category::find($categoryId);
        $categories = Category::where('parent_id', $category->parent_id)
                            ->pluck('name', 'id')->all();

        $filters = Filter::where('category_id', $category->parent_id)->get();


        return view('admin/product-create')->with([
            'category' => $category,
            'categories' => $categories,
            'filters' => $filters,
        ]);
    }

    public function store(Request $request, $categoryId)
    {
        $this->validate($request, [
            'title' => 'required|unique:products',
            'price' => 'required|numeric',
            'original_price' => 'numeric',
            'excerpt' => 'required',
        ]);

        $product = new Product();
        $product->title          = $request->get('title');
        $product->price          = $request->get('price');
        $product->original_price = $request->get('original_price');
        $product->excerpt        = $request->get('excerpt');
        $product->description    = $request->get('description');
        $product->status         = $request->get('status');
        $product->created_at     = Carbon::now();
        $product->updated_at     = Carbon::now();

        if ($product->save()) {
            // Add category relationship for the product
            $categoryIds = $request->get('categoryIds', []);
            $product->categories()->attach($categoryIds);

            // Add filter relationship for the product
            $seriesIds = $request->get('seriesIds', []);
            $product->series()->attach($seriesIds);
        }

        return redirect('admin/products/' . $categoryId);
    }

    public function edit($categoryId)
    {
        $product = Product::find($categoryId);

        $category = $product->categories[0];
        $filters = Filter::where('category_id', $category->parent_id)->get();

        return view('admin/product-edit')->with([
            'product' => $product,
            'filters' => $filters,
            'category' => $category,
        ]);
    }

    public function update($categoryId)
    {

    }

    public function destroy($productId)
    {
        $product = Product::find($productId);
        $product->delete();
    }
}
