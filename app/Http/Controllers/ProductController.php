<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryProduct;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$category_products = CategoryProduct::all();
    	return view('product.create', compact('category_products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'quantity' => 'required',
            'category_product_id' => 'required',
        ]);

        Product::create([
            'name' => request('name'),
            'description' => request('description'),
            'price' => request('price'),
            'discount' => request('discount'),
            'quantity' => request('quantity'),
            'category_id' => request('category_product_id'),
        ]);

        return redirect()->route('product.index')->withSuccess('Add Post Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category_products = CategoryProduct::all();

        return view('product.edit', compact('product', 'category_products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product)
    {
        $product->update([
            'name' => request('name'),
            'description' => request('description'),
            'price' => request('price'),
            'discount' => request('discount'),
            'quantity' => request('quantity'),
            'category_id' => request('category_product_id'),
        ]);

        return redirect()->route('product.index')->withInfo('Update Post Succes!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
         $product->delete();

        return redirect()->route('product.index')->withDanger('Post Deleted!');
    }
}
