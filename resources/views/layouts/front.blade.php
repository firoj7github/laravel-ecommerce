<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

   

    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
   
    
</head>
<body>
  
  
  




    @yield('heading-1')

    @yield('content-1')

    @yield('heading-2')
    @yield('content-2')




   
 
 
 
  
  
  

 <script src="{{ asset('frontend/js/jquery-3.6.1.min.js') }}" defer></script>
 <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
 <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" defer></script>
 <script src="{{ asset('frontend/js/custom.js') }}" defer></script>
 
 @yield('scripts')
</body>
</html>
