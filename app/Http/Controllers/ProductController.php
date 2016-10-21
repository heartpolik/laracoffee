<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests;


class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
    return view('/products.index',['products' => $products]);

    }

    public function show($id){
        $product = Product::find($id);
        return view('/products.show',['product'=>$product]);

    }

    public function destroy($id){
        $product=Product::find($id);
        $product->delete();
//        redirect('/products.index');
    }

}
