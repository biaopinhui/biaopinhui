<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public function getProducts($categoryIds, $filters = [])
    {
        $builder = Product::
            join('category_product', 'products.id', '=', 'category_product.product_id')
            ->whereIn('category_id', $categoryIds);

        if (!empty($filters['series'])) {
        	$builder->join('filter_product', 'products.id', '=', 'filter_product.product_id');
            $builder->whereIn('filter_id', $filters['series']);
        }
            
        $products = $builder->paginate(config('product.page_number'));

        return $products;
    }
}
