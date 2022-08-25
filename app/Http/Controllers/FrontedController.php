<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontedController extends Controller
{
    public function front(){
        return view('frontend.frontend');
    }
}
