<?php

namespace App\Repositories;

use App\Models\Product;


class ProductRepository
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function get($with = null) 
    {
        $this->product
            ->when($with, function($query) use ($with) {
                return $query->with($with);
            })
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function store($request, $product = null)
    {
        if (!$product) {
            $product = new Product;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_product_id;
        $product->save();
    }
}
