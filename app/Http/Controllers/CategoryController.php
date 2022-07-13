<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        return view ('category.category');
    }
    public function addcategory(){
        return view ('category.addcategory');
    }
}
