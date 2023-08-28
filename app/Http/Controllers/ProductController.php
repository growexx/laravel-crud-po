<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Symfony\Component\HttpKernel\DataCollector\RequestDataCollector;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($request->all());

        return redirect(route('product.index'));

    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $this->validate($request,[
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required',
            'description' => 'nullable'
        ]);

        $product->update($request->all());

        return redirect(route('product.index'))->with('success', 'Product Updated Succesffully');

    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted Succesffully');
    }
}