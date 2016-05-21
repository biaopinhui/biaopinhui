<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Filter extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    static public function getSeries($categoryId, $conditions = [])
    {
    	$series = Filter::where([
    		'type' => 'series',
    		'category_id' => $categoryId
    	])->get();

    	// Get product count for each series
    	foreach ($series as $key => $value) {
    		$conditions['series'] = [$value->id];
    		$series[$key]['productCount'] = Product::getProducts($conditions)->total();
    	}

        return $series;
    }
}
