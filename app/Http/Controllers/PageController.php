<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class PageController extends Controller
{
    public function getIndex()
    {
    	// $slide = Slide::all();
    	// $new_product = \App\Product::where('new', 1)->paginate(8, ['*'], 'pag');

    	// return view('pages.home', ['silde' => $slide]);
    	return view('pages.home.home', compact('slide', 'new_product'));
    }

    public function getProductType()
    {
    	return view('pages.product_type');
    }

    public function getProductDetail()
    {
    	return view('pages.product_detail');
    }

    public function getContact()
    {
    	return view('pages.contact');
    }

    public function getIntroduce()
    {
        return view('pages.introduce');
    }
}
