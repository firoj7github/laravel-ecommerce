
@extends('layouts.front')
@extends('layouts.inc.frontnavbar')



@section('content-2')
<h2 class="mt-5 ms-5">{{$category->slug}}</h2>
<div class="py-5 pt-3 mt-5 footer-control">
    <div class="container">
      <div class="row ">
     
     
      @foreach($products as $pro)
        <div class="col-md-3">
          <div class="card  shadow bg-gray">
            <a href="{{url('category/'.$category->slug.'/'.$pro->name)}}">
            <img height="200px" src="{{asset('/'.$pro->image)}}" alt="">
            <div class="card-body">
             
              <p>{{$pro->description}}</p>
              <span class=float-start>{{$pro->selling_price}}</span>
              <span class=float-end> <s> {{$pro->orginal_price}}</s></span>
            </div>
            </a>
          </div>
        </div>

        @endforeach
    
       </div>
        
      </div>
    
    
    
    </div>

  </div>
  @endsection