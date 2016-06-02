<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cache;

class Category extends Model
{
    public function subCategories()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }

    public function parentCategory()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    static public function getChain($id)
    {
        $cacheKey = 'getSeries_' . $id;
        if (!($chain = Cache::get($cacheKey))) {
        	$chain = [];

        	while (true) {
        		$category = Category::find($id);
        		array_unshift($chain, $category);

        		if ($category->parent_id) {
        			$id = $category->parent_id;
        		} else {
        			break;
        		}
        	}

            Cache::put($cacheKey, $chain, config('cache.timeout'));
        }
        
        return $chain;
    }
}
