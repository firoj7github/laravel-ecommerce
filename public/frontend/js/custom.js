$(document).ready(function () {

  loadcart();
  loadwishlist();

  $('.addToCart').click(function (e) { 
    e.preventDefault();
    var product_id =$(this).closest('.product_data').find('.prod_id').val();
    var product_qty =$(this).closest('.product_data').find('.qty-input').val();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
     
      method: "POST",
      url: "/addtocart",
      data: {
        'product_id':product_id,
        'product_qty':product_qty,
        
       
      },
      
      success: function (response) {
        if(res.status=='success'){
          alert(response.status);
          loadcart();
        }
      }
    });
    
  });
  $('.addToWishlist').click(function (e) { 
    e.preventDefault();
    var product_id =$(this).closest('.product_data').find('.prod_id').val();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
     
      method: "POST",
      url: "/addtowishlist",
      data: {
        'product_id':product_id,
        
        
       
      },
      
      success: function (response) {
           alert(response.status);
      }
    });
  });

  
  
  function loadcart(){
    $.ajax({
      method: "GET",
      url: "/loadcart",
     success: function (response) {
      $('.cartcount').html('');
      $('.cartcount').html(response.count);
        
      }
    });
  }
  
  function loadwishlist(){
    $.ajax({
      method: "GET",
      url: "/loadwishlist",
     success: function (response) {
      $('.wishlistcount').html('');
      $('.wishlistcount').html(response.count);
        
      }
    });
  }
    
  
  
  
  
  $('.increment-btn').click(function (e) { 
      e.preventDefault();
      var qty_value=$('.qty-input').val();
      var value = parseInt(qty_value, 10);
      value = isNaN(value) ? 0 : value;
      if(value<10){
        value++;
        $('.qty-input').val(value);

      }
    });
    
    
  $('.decrement-btn').click(function (e) { 
      e.preventDefault();
      var dec_value=$('.qty-input').val();
      var value = parseInt(dec_value, 10);
      value = isNaN(value) ? 0 : value;
      if(value>1){
        value--;
        $('.qty-input').val(value);

      }
    });

    // update cart quantity

    $('.changeQuantity').click(function (e) { 
      e.preventDefault();
      var product_id =$(this).closest('.product_data').find('.prod_id').val();
     var product_qty =$(this).closest('.product_data').find('.qty-input').val();
     $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
     
      method: "POST",
      url:"updatecart",
      data: {
        'product_id':product_id,
        'product_qty':product_qty,
        
       
      },
      
      success: function (response) {
           alert(response.status);
      }
    });
    
    });
  });