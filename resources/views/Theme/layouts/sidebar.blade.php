<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" data-img="{{ URL::asset('Theme/ltr/app-assets/images/backgrounds/04.jpg') }}">

    @if (auth('web')->check())
        @include('Theme.layouts.sidebars.webSidebar')
    @endif

    @if (auth('student')->check())
        @include('Theme.layouts.sidebars.studentSidebar')
    @endif

    @if (auth('teacher')->check())
        @include('Theme.layouts.sidebars.teacherSidebar')
    @endif

    @if (auth('admin')->check())
        @include('Theme.layouts.sidebars.adminSidebar')
    @endif

    @if (auth('family')->check())
        @include('Theme.layouts.sidebars.familySidebar')
    @endif





</div>
<!-- END: Main Menu-->
