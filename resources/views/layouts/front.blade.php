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


    
    
    
    <!-- another style for frontend -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}"/>

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>
   
    





</head>
<body>
  
  
  




    @yield('heading-1')

    @yield('content-1')

    @yield('heading-2')
    @yield('content-2')
    @yield('content-3')
    @yield('content-4')
    
    @extends('layouts.inc.frontfooter')
   




   
 
 
 
  
  
  

 <script src="{{ asset('frontend/js/jquery-3.6.1.min.js') }}" defer></script>
 <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
 <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" defer></script>
 <script src="{{ asset('frontend/js/custom.js') }}" defer></script>
 <script src="{{ asset('frontend/js/checkout.js') }}" defer></script>


 
 
 
 
 <!-- another script for frontend -->
 
 <script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/slick.min.js')}}"></script>
		<script src="{{asset('js/nouislider.min.js')}}"></script>
		<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
 
 
 
 
 
 
 
 
 
 @yield('scripts')
</body>
</html>
