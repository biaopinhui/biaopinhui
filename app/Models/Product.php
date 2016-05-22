<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Request;
use Cache;
use DB;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function isOnSale()
    {
        return !empty($this->original_price);
    }

    static public function getProducts($conditions = [])
    {
        $page = Request::get('page', 1);
        $cacheKey = 'getProducts_' . md5(serialize($conditions)) . '_page' . $page;
        
        if (!($products = Cache::get($cacheKey))) {
        	$builder = Product::select('*');

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

            $products = $builder->paginate(config('product.page_number'));

            Cache::put($cacheKey, $products, config('cache.timeout'));
        }

        return $products;
    }
}
