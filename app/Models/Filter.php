<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Cache;

class Filter extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    static public function getSeries($categoryId, $conditions = [])
    {
        $cacheKey = 'getSeries_' . $categoryId . '_' . md5(serialize($conditions));
        if (!($series = Cache::get($cacheKey))) {
        	$series = Filter::where([
        		'type' => 'series',
        		'category_id' => $categoryId
        	])->get();

        	// Get product count for each series
        	foreach ($series as $key => $value) {
        		$conditions['series'] = [$value->id];
        		$series[$key]['productCount'] = (new Product())->getProducts($conditions)->total();
        	}

            Cache::put($cacheKey, $series, config('cache.timeout'));
        }

        return $series;
    }
}
