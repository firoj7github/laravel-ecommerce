$(document).ready(function () {


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
           alert(response.status);
      }
    });
    
  });
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
  });