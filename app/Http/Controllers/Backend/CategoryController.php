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
	    			'cate_name' => 'required|unique:categories,name',
	    			'cate_decription' => 'required',
	    			'cate_url' => 'required',
	    		],
	    		[
	    			'cate_name.required' => 'Tên danh mục không được bỏ trống!',
	    			'cate_name.unique' => 'Tên danh mục đã tồn tại!',
	    			'cate_decription.required' => 'Mô tả không được bỏ trống!',
	    			'cate_url.required' => 'Url không được bỏ trống!',
	    		]
	    	);
	    	
	    	$category = new Category();
	    	if ($category->create($req)) {
	    		return redirect('admin/category')->with(['flag' => 'success', 'message' => 'Thêm mới danh mục "'.$req->cate_name.'" thành công!']);
	    	}
    	}
    	return view('backend.categories.add');
    }

    public function editCategory(Request $req, $id = null)
    {
    	if ($req->isMethod('post')) {
    		$this->validate($req,
	    		[
	    			'cate_name' => 'required|unique:categories,name',
	    			'cate_decription' => 'required',
	    			'cate_url' => 'required',
	    		],
	    		[
	    			'cate_name.required' => 'Tên danh mục không được bỏ trống!',
	    			'cate_name.unique' => 'Tên danh mục đã tồn tại!',
	    			'cate_decription.required' => 'Mô tả không được bỏ trống!',
	    			'cate_url.required' => 'Url không được bỏ trống!',
	    		]
	    	);

    		Category::where(['id' => $id])->update([
    			'name' => $req->cate_name,
    			'decription' => $req->cate_decription,
    			'url' => $req->cate_url,
    		]);
    		return redirect('admin/category')->with(['flag' => 'success', 'message' => 'Cập nhật danh mục "'.$req->cate_name.'" thành công!']);
    	}
    	// Get method
    	$category = Category::where(['id' => $id])->first();
    	if ($category) {
    		return view('backend.categories.edit')->with(compact('category'));
    	} else {
    		return redirect('admin/category')->with(['flag' => 'danger', 'message' => 'Danh mục không tồn tại. Vui lòng thử lại!']);
    	}
    }

    public function deleteCategory($id = null)
    {
    	if (!empty($id)) {
    		if (Category::where(['id' => $id])->delete()) {
    			return redirect('admin/category')->with(['flag' => 'success', 'message' => 'Xóa danh mục thành công!']);
    		} else {
    			return redirect('admin/category')->with(['flag' => 'danger', 'message' => 'Danh mục không tồn tại. Vui lòng thử lại!']);
    		}
    	}
    }
}
