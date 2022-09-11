$(document).ready(function () {
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