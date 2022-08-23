<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function product(){
        $product = Product::all();
        return view ('product.product', compact('product'));
    }
    public function addproduct(){
        $category = Category::all();
        return view ('product.addproduct', compact('category'));
    }
}
