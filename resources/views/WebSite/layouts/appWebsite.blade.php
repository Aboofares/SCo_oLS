<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="Mostafa-@-Assem-@-Tharwat">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') |{{ config('app.name') }}</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">


    <link href="{{asset('WebSite/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href=" {{asset('WebSite/css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{asset('WebSite/css/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="  {{asset('WebSite/css/owl.theme.default.min.css')}}" rel="stylesheet">

    <link href=" {{asset('WebSite/css/templatemo-medic-care.css')}}" rel="stylesheet">
    @yield('styles')
</head>

 <body  id="top">


 @include('WebSite.includes.header')


 @yield('content')

 @include('WebSite.includes.footer')


 @yield('scripts')


 <!-- Start -->
 {{-- {{asset('')}}--}}
 <!-- End -->

 <!-- JAVASCRIPT FILES -->
 <script src="{{asset('WebSite/js/jquery.min.js')}}"></script>
 <script src="{{asset('WebSite/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('WebSite/js/owl.carousel.min.js')}}"></script>
 <script src="{{asset('WebSite/js/scrollspy.min.js')}}"></script>
 <script src="{{asset('WebSite/js/custom.js')}}"></script>
 </>
</html>

