<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Request;
use Cache;
use DB;

class Product extends Model
{
    use SoftDeletes;

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function series()
    {
        return $this->belongsToMany('App\Models\Filter');
    }

    public function isOnSale()
    {
        return !empty($this->original_price);
    }

    public function getProducts($conditions = [])
    {
        $page = Request::get('page', 1);
        $cacheKey = 'getProducts_' . md5(serialize($conditions)) . '_page' . $page;

        if (!($products = Cache::get($cacheKey))) {
            $builder = Product::select('*')->groupBy('id');
            $builder = $this->processBuilder($builder, $conditions);

            $products = $builder->paginate(config('product.page_number'));

            Cache::put($cacheKey, $products, config('cache.timeout'));
        }

        return $products;
    }

    public function getMinPrice($conditions = [])
    {
        $cacheKey = 'getMinPrice_' . md5(serialize($conditions));

        if (!($minPrice = Cache::get($cacheKey))) {
            $builder = DB::table('products');
            $builder = $this->processBuilder($builder, $conditions);
            $minPrice = $builder->min('price');

            Cache::put($cacheKey, $minPrice, config('cache.timeout'));
        }

        return $minPrice;
    }

    public function getMaxPrice($conditions = [])
    {
        $cacheKey = 'getMaxPrice_' . md5(serialize($conditions));

        if (!($maxPrice = Cache::get($cacheKey))) {
        	$builder = DB::table('products');
            $builder = $this->processBuilder($builder, $conditions);
            $maxPrice = $builder->max('price');

            Cache::put($cacheKey, $maxPrice, config('cache.timeout'));
        }

        return $maxPrice;
    }

    private function processBuilder($builder, $conditions)
    {
        // Filtered by category ids
        if (!empty($conditions['categoryIds'])) {
            $builder->join('category_product', 'products.id', '=', 'category_product.product_id');
            $builder->whereIn('category_id', $conditions['categoryIds']);
        }

        // Filtered by series
        if (!empty($conditions['series'])) {
            $builder->join('filter_product', 'products.id', '=', 'filter_product.product_id');
            $builder->whereIn('filter_id', $conditions['series']);
        }

        // Filtered by prices
        if (!empty($conditions['prices'])) {
            if (is_numeric($conditions['prices'][0])) {
                $builder->where('price', '>=', $conditions['prices'][0]);
            }
            if (is_numeric($conditions['prices'][1])) {
                $builder->where('price', '<=', $conditions['prices'][1]);
            }
        }

        return $builder;
    }
}
