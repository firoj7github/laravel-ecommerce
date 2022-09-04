<?php

namespace App\Http\Controllers;
use Str;

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
    public function add(Request $request){
        $name= $request->name;
        $slug= $request->slug;
        $cate_id= $request->cate_id;
        $orginal_price= $request->orginal_price;
        $selling_price= $request->selling_price;
        $selling_price= $request->selling_price;
        $quantity= $request->quantity;
        $tax= $request->tax;
       
        $description= $request->description;
        $image= $request->file('image');
        $status= $request->status == TRUE? '1':'0';
        $trending= $request->trending == TRUE? '1':'0';
        


        $data= new Product();
        $data->name= $name;
        $data->slug= $slug;
        $data->cate_id= $cate_id;
        $data->orginal_price= $orginal_price;
        $data->selling_price= $selling_price;
        $data->quantity= $quantity;
        $data->tax= $tax;
       
        $data->description= $description;
        $data->status= $status ;
        $data->trending= $trending ;
        
        if($image){
         $image_name= Str::random(5);
         
         $image_extension=$image-> getClientOriginalExtension();
         $full_name= $image_name.'.'.$image_extension;
         $upload_path='images/product_image/';
         $image_url= $upload_path. $full_name;

         $success= $image->move($upload_path, $full_name );
        
        
        }
        $data->image= $image_url;
        $data->save();
        return redirect()->back();
    }

    public function viewcate($slug){

        if(Category::where('slug', $slug)->exists()){
            $category=Category::where('slug', $slug)->first();
            $products=Product::where('slug', $category->slug)->where('status', '0')->limit(3)->get();
            return view('frontend.frontendproductpage', compact ('category', 'products'));
        }
        
    }

    public function productdetails($cate_slug, $prod_slug){
        if(Category::where('slug', $cate_slug)->exists()){
            if(Product::where('slug', $prod_slug)->exists()){

            }
            else{
                
            }
        }
    }
}
