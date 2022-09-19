$(document).ready(function () {
    $('.razorpay').click(function (e) { 
        e.preventDefault();
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

        var data ={
        'fname':fname,
        'lname':lname,
        'email':email,
        'phone':phone,
        'address1':address1,
        'address2':address2,
        'city':city,
        'state':state,
        'country':country,
        'pincode':pincode
            }
         
            $.ajax({
            type: "POST",
            url: "/proceed-to-pay",
            data: "data",
            dataType: "dataType",
            success: function (response) {
                
            }
         });  
        
        
        
        
        }
        
    
    
    });
    
});