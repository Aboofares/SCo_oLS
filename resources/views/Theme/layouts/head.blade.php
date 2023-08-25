<title>@yield("page_header")</title>

@yield("CustomHead")
@if (App::getLocale() == 'en')
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/assets/css/style.css') }}">
    <!-- END: Custom CSS-->



@else



    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/rtl/app-assets/vendors/css/vendors-rtl.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/rtl/app-assets/css-rtl/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/rtl/app-assets/css-rtl/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/rtl/app-assets/css-rtl/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/rtl/app-assets/css-rtl/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/rtl/app-assets/css-rtl/custom-rtl.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/rtl/app-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/rtl/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/rtl/assets/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->


@endif



