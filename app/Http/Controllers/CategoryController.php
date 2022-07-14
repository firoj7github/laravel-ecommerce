<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    public function category(){
        $category = Category::all();
        return view ('category.category', compact('category'));
    }
    public function addcategory(){
        return view ('category.addcategory');
    }
    public function insert(Request $request){
        $name= $request->name;
        $slug= $request->slug;
        $description= $request->description;
        $image= $request->file('image');
        $status= $request->status == TRUE? '1':'0';
        $popular= $request->popular == TRUE? '1':'0';


        $data= new Category();
        $data->name= $name;
        $data->slug= $slug;
        $data->description= $description;
        $data->status= $status ;
        $data->popular= $popular ;
        if($image){
         $image_name= Str::random(5);
         
         $image_extension=$image-> getClientOriginalExtension();
         $full_name= $image_name.'.'.$image_extension;
         $upload_path='images/post_image/';
         $image_url= $upload_path. $full_name;

         $success= $image->move($upload_path, $full_name );
        
        
        }
        $data->image= $image_url;
        $data->save();
        return redirect()->back();
    }
}
