@extends('layouts.front')

@extends('layouts.inc.frontnavbar')


@section('content-1')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 ">
        <div class="card">
            <div class="card-body">
               <h4>Basic Details</h4>
               <hr>
               <div class="row checkout-from">
                <div class="col-md-6">
                  <label for="">First Name :</label>
                  <input type="text" class="from-control" placeholder="Enter first name">
                </div>
                <div class="col-md-6">
                  <label for="">Last Name :</label>
                  <input type="text" class="from-control" placeholder="Enter last name">
                </div>
                <div class="col-md-6">
                  <label for="">Email :</label>
                  <input type="text" class="from-control" placeholder="Enter email">
                </div>
                <div class="col-md-6">
                  <label for="">Phone Number :</label>
                  <input type="text" class="from-control" placeholder="Enter phone number">
                </div>
                <div class="col-md-6">
                  <label for="">Address 1 :</label>
                  <input type="text" class="from-control" placeholder="Enter address 1">
                </div>
                <div class="col-md-6">
                  <label for="">Address 2:</label>
                  <input type="text" class="from-control" placeholder="Enter address 2">
                </div>
                <div class="col-md-6">
                  <label for="">City Name :</label>
                  <input type="text" class="from-control" placeholder="Enter city">
                </div>
                <div class="col-md-6">
                  <label for="">State Name :</label>
                
                  <input type="text" class="from-control" placeholder="Enter state">
                </div>
                <div class="col-md-6">
                  <label for="">Country :</label>
                  <input type="text" class="from-control" placeholder="Enter country">
                </div>
                <div class="col-md-6">
                  <label for="">Pin code :</label>
                  <input type="number" class="from-control" placeholder="Enter pin code ">
                </div>
               </div>
            </div>
        </div>
     </div>
 </div>
</div>
        <div class="col-md-4 orderstyle float-end ">
        <div class="card">
            <div class="card-body">
            <h6>Order Details</h6>
            </div>
        </div>
     </div>
 </div>
</div>
        
@endsection