
@extends('layouts.front')
@extends('layouts.inc.frontnavbar')

@section('content-1')
<div class="py-3 shadow-sm bg-warning">
    <div class="container">
        <h6>
            <a href="{{url('/')}}">Homa</a>/
            <a href="{{url('wishlist')}}">Wishlist</a>
        </h6>
    </div>
</div>

<div class="container my-5">
    <div class="card">
        <div class="card-body">
            @if($wishlist->count()>0)
            @foreach($wishlist as $item)
   
    <div class="row">
    <div class="col-md-2 ">
        <img src="{{asset('/'.$item->product->image)}}" height="70px" alt="image">
    </div>
    
    <div class="col-md-2 mt-3">
        <h4> Rs{{$item->product->selling_price}}</h4>
    </div>

    <div class="col-md-3 mt-3">
    @if($item->product->quantity>0)
      <label class="badge bg-success">In Stock</label>
      @else
      <label class="badge bg-danger">Out Of Stock</label>
      @endif
    </div>
    
   
    <div class="col-md-3 mt-3">
       
        <button class="btn btn-primary addToCart">Add to Cart</button>
        <button class="btn btn-danger">Remove</button>
    </div>

    </div>
   </div>
  
   @endforeach
            @else
            <h4> Oppos!! There are no product in your wishlist</h4>
            @endif
        </div>
    </div>
</div>
@endsection