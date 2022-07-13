<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   

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
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
    
</head>
<body class="g-sidenav-show  bg-gray-200">
   
 <!-- Scripts -->
 
 
  
  
  

 <script src="{{ asset('admin/js/core/popper.min.js') }}" defer></script>
 <script src="{{ asset('admin/js/core/bootstrap.min.js') }}" defer></script>
 <script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js') }}" defer></script>
 <script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js') }}" defer></script>
 <script src="{{ asset('admin/js/plugins/chartjs.min.js') }}" defer></script>
</body>
</html>
