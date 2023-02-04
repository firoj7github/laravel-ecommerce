@extends('layouts.front')

@extends('layouts.inc.frontnavbar')


@section('content-1')
<div class="container mt-5 footer-maintain">
  <form action="{{url('placeorder')}}" method="POST">
  {{csrf_field()}}
    <div class="row">
        <div class="col-md-6 ">
        <div class="card">
          <div class="card-header">
          <h4>Basic Details</h4>
          </div>
            <div class="card-body">
               
              
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
                  <label for="">Your Email :</label>
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
          <div class="card-header">
          <h4>Order Details</h4>
          </div>
            <div class="card-body">
            
            
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
         
           <div id="paypal-buttons-container"></div>
         
           
            </div>
        </div>
     </div>
 </div>
 </form>
</div>
        
@endsection

@section('scripts')
<script src="https://www.paypal.com/sdk/js?client-id=Ac9j_45GCW2zOuBIa8bAk2yYMnpvgYazOIpFriB5I3nnGBf57IOw3qD9D51MFoi4XjHQju4ruPVCaOCn"></script>

<script>
    paypal.Buttons({
  createOrder: function(data, actions) {
    // This function sets up the details of the transaction, including the amount and line item details.
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: '500'
        }
      }]
    });
  },
  onApprove: function(data, actions) {
    // This function captures the funds from the transaction.
    return actions.order.capture().then(function(details) {
      // This function shows a transaction success message to your buyer.
      alert('Transaction completed by ' + details.payer.name.given_name);
      var fname = $('.fname').val();
        var lname = $('.lname').val();
        var email = $('.email').val();
        var phone = $('.phone').val();
        var address1 = $('.address1').val();
        var address2 = $('.address2').val();
        var city = $('.city').val();
        var state = $('.state').val();
        var country = $('.country').val();
        var pincode = $('.pincode').val();
        if(!fname){
            fname_error="First name requered";
            $('#fname_error').html('');
            $('#fname_error').html(fname_error);
        }
        else{
            fname_error="";
            $('#fname_error').html('');
        }
        if(!lname){
            lname_error="Last name requered";
            $('#lname_error').html('');
            $('#lname_error').html(lname_error);
        }
        else{
            lname_error="";
            $('#lname_error').html('');
        }
        if(!email){
            email_error="Email requered";
            $('#email_error').html('');
            $('#email_error').html(email_error);
        }
        else{
            email_error="";
            $('#email_error').html('');
        }
        if(!phone){
            phone_error="Phone number requered";
            $('#phone_error').html('');
            $('#phone_error').html(phone_error);
        }
        else{
            phone_error="";
            $('#phone_error').html('');
        }
        if(!address1){
            address1_error="Address1 requered";
            $('#address1_error').html('');
            $('#address1_error').html(address1_error);
        }
        else{
            address1_error="";
            $('#address1_error').html('');
        }
        if(!address2){
            address2_error="Address2 requered";
            $('#address2_error').html('');
            $('#address2_error').html(address2_error);
        }
        else{
            address2_error="";
            $('#address2_error').html('');
        }
        if(!city){
            city_error="City requered";
            $('#city_error').html('');
            $('#city_error').html(city_error);
        }
        else{
            city_error="";
            $('#city_error').html('');
        }
        if(!state){
            state_error="State requered";
            $('#state_error').html('');
            $('#state_error').html(state_error);
        }
        else{
            state_error="";
            $('#state_error').html('');
        }
        if(!country){
            country_error="Country requered";
            $('#country_error').html('');
            $('#country_error').html(country_error);
        }
        else{
            country_error="";
            $('#country_error').html('');
        }
        if(!pincode){
            pincode_error="Pincode requered";
            $('#pincode_error').html('');
            $('#pincode_error').html(pincode_error);
        }
        else{
            country_error="";
            $('#pincode_error').html('');
        }


   
        if(fname_error !=''|| lname_error !='' || email_error !='' || address1_error !='' || address2_error !='' || phone_error !='' || city_error !='' || state_error !='' || country_error !='' || pincode_error!='')
        {
         return false;
        }
        else{
          $.ajax({
     
     method: "POST",
     url: "/addtowishlist",
     data: {
      'fname':fname,
        'lname':lname,
        'email':email,
        'phone':phone,
        'address1':address1,
        'address2':address2,
        'city':city,
        'state':state,
        'country':country,
        'pincode':pincode,
        
       
       
      
     },
     
     success: function (response) {
          alert(response.status);
     }
   });
        }
      
    });
  }
}).render('#paypal-buttons-container');
//This function displays payment buttons on your web page.
  </script>

@endsection