@extends('layouts.front')






<div class="container">
  <div class="row">
    <div class="col-md-4 border">
       
    <img height="250px" src="{{asset('/'.$products->image)}}" alt="">
  
    </div>
    <div class="col-md-8 border mt-5">
      <h3>{{$products->name}}</h3>
      <label class="me-3">Orginal price : <s>{{$products->orginal_price}}</s></label>
      <label class="me-3">Selling price : {{$products->selling_price}}</label>
      <hr>
      @if($products->quantity>0)
      <label class="badge bg-success">In Stock</label>
      @else
      <label class="badge bg-danger">Out Of Stock</label>
      @endif
      <div class="row mt-2">
        <div class="col-md-2">
          
        <label for="quantity">Quantity</label>
        <div class="input-group text-center mb-3">
           <span class="input-group-text">-</span>
           <input type="text" name="quantity" value="1" class="form-control">
           <span class="input-group-text">+</span>
        </div>
        </div>
        <div class="col-md-10">
          <br>
          <button type="button" class="btn btn-success float-start me-3">Add to Wishlist</button>
          <button type="button" class="btn btn-success float-start me-3">Add to Cart</button>
        </div>
        
        
      </div>

    </div>
  </div>
</div>


