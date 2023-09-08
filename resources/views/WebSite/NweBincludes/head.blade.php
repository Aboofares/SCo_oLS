

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="author" content="Mostafa-@-Assem-@-Tharwat">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') |{{ config('app.name') }}</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


<!-- Favicon -->
<link rel="icon" href="{{ URL::asset('landing-page/img/core-img/favicon.png') }}">

<!-- Core Stylesheet -->
<link href="{{ URL::asset('landing-page/style.min.css') }}" rel="stylesheet">

<!-- Responsive CSS -->
<link href="{{ URL::asset('landing-page/css/responsive.min.css') }}" rel="stylesheet">

<!-- 3d Card Effect-->
<link href="{{ URL::asset('landing-page/css/3dcard.min.css') }}" rel="stylesheet">

<!-- Menu CSS-->
<link href="{{ URL::asset('landing-page/css/menu.min.css') }}" rel="stylesheet">




@if (App::getLocale() == 'en')





    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/assets/css/style.css') }}">
    <!-- END: Custom CSS-->



@else



    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/rtl/assets/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->


@endif

