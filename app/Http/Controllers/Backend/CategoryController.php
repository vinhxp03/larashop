<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
	public function index()
	{
		$categories = Category::get();
		return view('backend.categories.index')->with(compact('categories'));
	}

    public function addCategory(Request $req)
    {
    	if ($req->isMethod('post')) {
    		$this->validate($req,
	    		[
	    			'cate_name' => 'required',
	    			'cate_decription' => 'required',
	    			'cate_url' => 'required',
	    		],
	    		[
	    			'cate_name.required' => 'Tên danh mục không được bỏ trống!',
	    			'cate_decription.required' => 'Mô tả không được bỏ trống!',
	    			'cate_url.required' => 'Url không được bỏ trống!',
	    		]
	    	);
	    	
	    	$category = new Category();
	    	if ($category->create($req)) {
	    		return redirect('admin/category')->with('success', 'Thêm mới danh mục '.$req->cate_name.' thành công!');
	    	}
    	}
    	return view('backend.categories.add_category');
    }
}
