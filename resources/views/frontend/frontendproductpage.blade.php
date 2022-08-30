

<h2>{{$category->slug}}</h2>



<div class="py-5 pt-3">
    <div class="container">
      <div class="row ">
     
     
      @foreach($products as $pro)
        <div class="col-md-3">
          <div class="card border">
            <img height="250px" src="{{asset('/'.$pro->image)}}" alt="">
            <div class="card-body">
             
              <p>{{$pro->description}}</p>
            </div>
          </div>
        </div>

        @endforeach
    
       </div>
        
      </div>
    
    
    
    </div>

  </div>