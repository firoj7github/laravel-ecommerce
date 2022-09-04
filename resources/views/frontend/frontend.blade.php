@extends('layouts.front')


@extends('layouts.inc.slider')
@extends('layouts.inc.frontnavbar')

@section('title')
EShop
@endsection
@section('content-1')


@section('heading-1')

<h2 class="heading">Future Product</h2>
@endsection

  <div class="py-5 pt-3">
    <div class="container">
      <div class="row ">
     
     
      @foreach($product as $pro)
        <div class="col-md-3">
          <div class="card border">
            <img height="250px" src="{{asset('/'.$pro->image)}}" alt="">
            <div class="card-body">
              <h6>${{$pro->selling_price}}</h6>
              <h5>{{$pro->name}}</h5>
              <p>{{$pro->description}}</p>
            </div>
          </div>
        </div>

        @endforeach
    
       </div>
        
      </div>
    
    
    
    </div>

  </div>
@endsection



@section('heading-2')

<h2 class="heading-2">Category</h2>
@endsection

@section('content-2')
<div class="py-5 pt-3">
    <div class="container">
      <div class="row ">
     
     
      @foreach($category as $cate)
        <div class="col-md-3">
          <a href="{{url('category/'.$cate->slug)}}">
          <div class="card border">
            <img height="250px" src="{{asset('/'.$cate->image)}}" alt="">
            <div class="card-body">
              <h6>{{$cate->slug}}</h6>
             
              <p>{{$cate->description}}</p>
            </div>
          </div>
          </a>
        </div>

        @endforeach
    
       </div>
        
      </div>
    
    
    
    </div>

  </div>
@endsection

