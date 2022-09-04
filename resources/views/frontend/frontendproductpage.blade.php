
@extends('layouts.front')
<h2>{{$category->slug}}</h2>



<div class="py-5 pt-3">
    <div class="container">
      <div class="row ">
     
     
      @foreach($products as $pro)
        <div class="col-md-3">
          <div class="card border">
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