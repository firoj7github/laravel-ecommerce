@extends('layouts.front')


<div class="py-3 shadow-sm bg-warning">
    <div class="container">
        <h6>
            <a href="{{url('/')}}">Homa</a>/
            <a href="{{url('cart')}}">Cart</a>
        </h6>
    </div>
</div>



<div class="container mt-5">
  <div class="card shadow product_data">
    <div class="card-body">
        @php
             $total=0;
        @endphp
   @foreach($cartitems as $item)
   
    <div class="row">
    <div class="col-md-2 ">
        <img src="{{asset('/'.$item->product->image)}}" height="70px" alt="image">
    </div>
    <div class="col-md-3 mt-3">
        <h4>{{$item->product->name}}</h4>
    </div>
    <div class="col-md-2 mt-3">
        <h4> Rs{{$item->product->selling_price}}</h4>
    </div>
    <div class="col-md-3">
    <input type="hidden" value="{{$item->product->id}}" class="prod_id">
    <label for="quantity">Quantity</label>
        <div class="input-group text-center mb-3">
           <span  class="input-group-text changeQuantity decrement-btn">-</span>
           <input type="text" name="quantity" value="{{$item->prod_qty}}" class="form-control qty-input" >
           <span class="input-group-text changeQuantity increment-btn">+</span>
    </div>
   
    <div class="col-md-3">
       
        <button class="btn btn-danger">Remove</button>
    </div>

    </div>
   </div>
   @php
             $total += $item->product->selling_price*$item->prod_qty;
   @endphp
   @endforeach
  </div>
  <div class="card-footer">
    <h5>Total Price :{{$total}}</h5>
    <a href="{{url('checkout')}}" class="btn btn-outline-success float-end ">Proceed to Checkout</a>
  </div>
 </div>
</div>





