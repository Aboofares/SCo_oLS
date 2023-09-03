<!DOCTYPE html>
<html>
<head>
    @include('WebSite.NweBincludes.head')
    @yield('CustomStyles')
</head>

 <body>


 @include('WebSite.NweBincludes.header')


 @yield('content')

 @include('WebSite.NweBincludes.footer')
 @include('WebSite.NweBincludes.footerscripts')

 @yield('CustomScripts')


 </body>
</html>

