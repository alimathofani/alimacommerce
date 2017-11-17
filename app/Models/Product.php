<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\CategoryProduct;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'discount', 'quantity', 'category_id'];

    public function category_product()
    {
    	return CategoryProduct::where('id', $this->category_id)->first()->name;	
    }
}
