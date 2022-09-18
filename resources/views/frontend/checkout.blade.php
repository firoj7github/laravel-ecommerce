@extends('layouts.front')

@extends('layouts.inc.frontnavbar')


@section('content-1')
<div class="container mt-5">
  <form action="{{url('placeorder')}}" method="POST">
  {{csrf_field()}}
    <div class="row">
        <div class="col-md-6 ">
        <div class="card">
            <div class="card-body">
               <h4>Basic Details</h4>
               <hr>
               <div class="row checkout-from">
                <div class="col-md-6">
                  <label for="">First Name :</label>
                  <input type="text" name="fname" class="from-control fname" placeholder="Enter first name">
                  <br>
                <span class="text-danger" id="fname_error"></span>

                </div>
                <div class="col-md-6">
                  <label for="">Last Name :</label>
                  <input type="text" name="lname" class="from-control lname" placeholder="Enter last name">
                  <br>
                  <span class="text-danger" id="lname_error"></span>
                </div>
                <div class="col-md-6">
                  <label for="">Email :</label>
                  <input type="text" name="email" class="from-control email" placeholder="Enter email">
                  <br>
                  <span class="text-danger" id="email_error"></span>
                </div>
                <div class="col-md-6">
                  <label for="">Phone Number :</label>
                  <input type="text" name="phone" class="from-control phone" placeholder="Enter phone number">
                  <br>
                  <span class="text-danger" id="phone_error"></span>
                </div>
                <div class="col-md-6">
                  <label for="">Address 1 :</label>
                  <input type="text" name="address1" class="from-control address1" placeholder="Enter address 1">
                  <br>
                  <span class="text-danger" id="address1_error"></span>
                </div>
                <div class="col-md-6">
                  <label for="">Address 2:</label>
                  <input type="text"  name="address2" class="from-control address2" placeholder="Enter address 2">
                  <br>
                  <span class="text-danger" id="address2_error"></span>
                </div>
                <div class="col-md-6">
                  <label for="">City Name :</label>
                  <input type="text"  name="city" class="from-control city" placeholder="Enter city">
                  <br>
                  <span class="text-danger" id="city_error"></span>
                </div>
                <div class="col-md-6">
                  <label for="">State Name :</label>
                
                  <input type="text"  name="state" class="from-control state" placeholder="Enter state">
                  <br>
                  <span class="text-danger" id="state_error"></span>
                </div>
                <div class="col-md-6">
                  <label for="">Country :</label>
                  <input type="text"  name="country" class="from-control country" placeholder="Enter country">
                  <br>
                  <span class="text-danger" id="country_error"></span>
                  <br>
                </div>
                <div class="col-md-6">
                  <label for="">Pin code :</label>
                  <input type="number"  name="pincode" class="from-control pincode" placeholder="Enter pin code ">
                  <br>
                  <span class="text-danger" id="pincode_error"></span>
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
            <h4>Order Details</h4>
            <hr>
            <table class=table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartitems as $item)
                    <tr>
                        <td>{{$item->product->name}}</td>
                        <td>{{$item->prod_qty}}</td>
                        <td>{{$item->product->selling_price}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>

            </table>
          
            <button type="submit" class="btn btn-success w-100 mb-3">Place Order</button>
           
            <button type="button" class="btn btn-primary razorpay  w-100">Pay with Razorpay</button>
            </div>
        </div>
     </div>
 </div>
 </form>
</div>
        
@endsection