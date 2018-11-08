<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'type_products';

    public function product()
    {
    	// Kết với bảng sản phẩm
    	return $this->hasMany('App\Product', 'id_type', 'id');
    }
}
