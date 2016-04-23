<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subCategories()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    static public function getChain($id)
    {
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
        
        return $chain;
    }
}
