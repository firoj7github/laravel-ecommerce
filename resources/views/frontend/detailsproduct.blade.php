@extends('layouts.front')
@extends('layouts.inc.frontnavbar')






@section('content-1')
<div class="container mt-5 mb-5 ">
  <div class="card shadow product_data footer-control">
    <div class="card-body">
   
    <div class="row">
    <div class="col-md-4 ">
       
    <img height="250px" src="{{asset('/'.$products->image)}}" alt="">
  
    </div>
    <div class="col-md-7 border mt-5">
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
        <div class="col-md-3">
          <input type="hidden" value="{{$products->id}}" class="prod_id">
        <label for="quantity">Quantity</label>
        <div class="input-group text-center ">
           <span  class="input-group-text decrement-btn">-</span>
           <input type="text" name="quantity" value="1" class="form-control qty-input" >
           <span class="input-group-text increment-btn">+</span>
        </div>
        </div>
        <div class="col-md-10">
          <br>
          <button type="button" class="btn btn-success addToWishlist float-start me-3">Add to Wishlist</button>
          <button type="button" class="btn btn-success addToCart float-start me-3">Add to Cart</button>
        </div>
        
        
      </div>

    </div>
  </div>
    </div>
  </div>
  
</div>
@endsection




