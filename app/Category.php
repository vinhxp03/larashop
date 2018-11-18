<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';

	public function create($req)
	{
		$category = new Category();

		$category->parent_id = 0;
		$category->name = $req->cate_name;
    	$category->decription = $req->cate_decription;
    	$category->url = $req->cate_url;
    	$category->status = 1;

    	if ($category->save()) {
    		return true;
    	} else {
    		return false;
    	}
	}
}
