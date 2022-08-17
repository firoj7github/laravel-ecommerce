<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $category = Product::all();
        return view ('product.product', compact('category'));
    }
    public function addproduct(){
        return view ('product.addproduct');
    }
}
