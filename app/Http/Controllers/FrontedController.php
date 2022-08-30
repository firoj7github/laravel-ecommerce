<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontedController extends Controller
{
    public function front(){
        $product=Product::all();
        $category=Category::all();
        return view('frontend.frontend', compact ('product', 'category'));
    }
}
