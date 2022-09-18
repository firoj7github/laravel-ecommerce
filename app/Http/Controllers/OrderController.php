<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placeorder;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function myorder(){
        $orders= Placeorder::all();
        return view('frontend.myorder', compact('orders'));
    }
}
