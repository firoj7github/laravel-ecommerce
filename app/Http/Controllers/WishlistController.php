<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function wishlist(){
        $wishlist= Wishlist::where('user_id', Auth::id())->get();
       return view('frontend.wishlist', compact('wishlist')); 
    }


    public function addWishlist(Request $request){
        

        if(Auth::check()){
            $product_id = $request->input('product_id');
            if(Product::find($product_id))
            {
                $wish = new Wishlist();
                $wish->prod_id=$product_id;
                $wish->user_id=Auth::id();
                $wish->save();
                return response()->json(['status'=> "Add to wishlist"]);
            }
            else{
                return response()->json(['status'=>"product does not exits"]);
            }
           
            }
            else{
                return response()->json(['status' => "Login to Continue"]);
        }
    }


    public function wishlistcount(){
        $wishlistcount=Wishlist::where('user_id', Auth::id())->count();
        return response()->json(['count'=> $wishlistcount]);
    }
}
