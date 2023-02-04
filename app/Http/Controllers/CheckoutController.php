<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Placeorder;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(){
        $cartitems= Cart::where('user_id', Auth::id())->get();
        return view('frontend.checkout', compact('cartitems'));
    }

    public function placeorder (Request $request){
          $order= new Placeorder();
          $order->fname= $request->input('fname');
          $order->lname= $request->input('lname');
          $order->email= $request->input('email');
          $order->phone= $request->input('phone');
          $order->address1= $request->input('address1');
          $order->address2= $request->input('address2');
          $order->city= $request->input('city');
          $order->state= $request->input('state');
          $order->country= $request->input('country');
          $order->pincode= $request->input('pincode');
          $order->tracking_no= 'firoj'.rand(1111,9999);
          $order->save();
          return response()->json(['status'=> $prod_check->name."Successfully paid by paypal"]);

          $cartitems= Cart::where('user_id', Auth::id())->get();

          foreach($cartitems as $item){
             OrderItem::create([
                'order_id'=>$order->id,
                'prod_id'=>$item->prod_id,
                'qty'=>$item->prod_qty,
                'price'=>$item->product->selling_price,
             ]);
        
             }

    }
}
