<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
@yield('title')
<!-- Stylesheets -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


<!-- Responsive File -->
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

 
<link rel="shortcut icon" {{ asset('assets/images/favicon.png') }}" type="image/x-icon">
<link rel="shortcut icon" {{ asset('assets/images/favicon.png') }}" type="image/x-icon">


<!-- Responsive Settings -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="spinner"><div class="inner"><div class="disc"></div><div class="disc"></div><div class="disc"></div></div></div></div>

    <!-- Main Header -->

    @include('layouts.module.header')
    
    <!-- End Main Header -->

 
    @yield('content')
   
    <!-- Main Footer -->
    @include('layouts.module.footer')
   

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/knob.js') }}"></script>
<script src="{{ asset('assets/js/paroller.js') }}"></script>
<script src="{{ asset('assets/js/tilt.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/element-in-view.js') }}"></script>
<script src="{{ asset('assets/js/custom-script.js') }}"></script>
<!--Google Map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHJe2MPH8B-gLzZu5QI0Alc73nvkLuuqQ"></script>
<script src="{{ asset('assets/js/map-script.js') }}"></script>


</body>
</html>