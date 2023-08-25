
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Scho_ols</title>
    <link rel="apple-touch-icon" href="{{ URL::asset('Theme/ltr/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('Theme/ltr/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/app-assets/css/components.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/app-assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/app-assets/css/pages/coming-soon.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  comingsoonFlat blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-color="bg-gradient-x-purple-red" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- coming soon flat design -->
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-12 p-0">
                        <div class="card card-transparent box-shadow-0 border-0">
                            <div class="card-header card-transparent  border-0">
                                <div class="text-center mb-1">
                                    <img src="{{ URL::asset('Theme/ltr/app-assets/images/logo/logo.png') }}" alt="branding logo">
                                </div>
                                <div class="font-large-1  text-center white">
                                    {{trans('sidebar.Welcome')}}
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="text-center">

                                    <div class="col-12 pt-1">
                                        <p class="card-text lead white">{{trans('sidebar.ChooseHowtologin')}}</p>
                                    </div>
                                    <div class="col-12 text-center pt-1">
                                        <a href="{{route('login.show','web')}}" class="font-large-1 white p-2 ">
                                            <img  width="100px;" src="{{URL::asset('Theme/rtl/app-assets/images/loginPics/Engineer.png')}}" alt="{{trans('sidebar.loginStu')}}">
                                        </a>
                                        <a href="{{route('login.show','admin')}}" class="font-large-1 white p-2 ">
                                            <img  width="100px;" src="{{URL::asset('Theme/rtl/app-assets/images/loginPics/new.jpg')}}" alt="{{trans('sidebar.loginStu')}}">
                                        </a>
                                        <a href="{{route('login.show','family')}}" class="font-large-1 white p-2">
                                            <img  width="100px;" src="{{URL::asset('Theme/rtl/app-assets/images/loginPics/parent.png')}}" alt="{{trans('sidebar.loginFam')}}">
                                        </a>
                                        <a href="{{route('login.show','student')}}" class="font-large-1 white p-2">
                                            <img  width="100px;" src="{{URL::asset('Theme/rtl/app-assets/images/loginPics/studentn.png')}}" alt="{{trans('sidebar.loginEmp')}}">
                                        </a>
                                        <a href="{{route('login.show','teacher')}}" class="font-large-1 white p-2">
                                            <img  width="100px;" src="{{URL::asset('Theme/rtl/app-assets/images/loginPics/teacher.png')}}" alt="{{trans('sidebar.loginStu')}}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ coming soon flat design -->
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{ URL::asset('Theme/ltr/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ URL::asset('Theme/ltr/app-assets/vendors/js/coming-soon/jquery.countdown.min.js') }}" type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ URL::asset('Theme/ltr/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('Theme/ltr/app-assets/js/core/app.js" type="text/javascript') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ URL::asset('Theme/ltr/app-assets/js/scripts/coming-soon/coming-soon.js') }}" type="text/javascript"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>

