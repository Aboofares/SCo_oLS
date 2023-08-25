



@if (App::getLocale() == 'en')
    <!-- BEGIN: Vendor JS-->
    <script src="{{ URL::asset('Theme/ltr/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ URL::asset('Theme/ltr/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('Theme/ltr/app-assets/js/core/app.js') }}" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <script src="{{ URL::asset('Theme/ltr/app-assets/js/scripts/tables/bootstrap-datatables/en/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('Theme/ltr/app-assets/js/scripts/tables/bootstrap-datatables/en/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('Theme/ltr/app-assets/js/scripts/tables/datatables/datatable-basic.js') }}" type="text/javascript"></script>

@else

    <!-- BEGIN: Vendor JS-->
    <script src="{{ URL::asset('Theme/rtl/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ URL::asset('Theme/rtl/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('Theme/rtl/app-assets/js/core/app.js') }}" type="text/javascript"></script>
    <!-- END: Theme JS-->
    <script src="{{ URL::asset('Theme/rtl/app-assets/js/scripts/tables/bootstrap-datatables/ar/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('Theme/rtl/app-assets/js/scripts/tables/bootstrap-datatables/ar/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('Theme/rtl/app-assets/js/scripts/tables/datatables/datatable-basic.js') }}" type="text/javascript"></script>



 @endif









@yield('Cjs')
