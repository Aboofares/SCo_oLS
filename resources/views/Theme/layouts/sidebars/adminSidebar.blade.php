<!-- BEGIN: Main Menu-->

    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ url('admin/dashboard') }}">
                    <img class="brand-logo" alt="logo" src="{{ URL::asset('Theme/ltr/app-assets/images/logo/logo.png') }}" />
                    <h3 class="brand-text">{{trans('mainTransCustom.App-Name')}} </h3>
                </a></li>
            <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="#"><i class="ft-home"></i>
                    <span class="menu-title" data-i18n="">{{trans('mainTransCustom.Dashboard')}} </span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('Profile')}}">{{trans('mainTransCustom.Profile')}} </a></li>
                </ul>
            </li>

{{--setings tab--}}
            <li class=" nav-item"><a href="#"><i class="ft-edit"></i><span class="menu-title" data-i18n="">{{trans('mainTransCustom.Settings')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">{{trans('mainTransCustom.App-Settings')}}</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#">{{trans('mainTransCustom.Second App Setting')}}</a>
                            </li>
                            <li><a class="menu-item" href="#">{{trans('mainTransCustom.First App Setting')}}</a>
                            </li>

                        </ul>
                    </li>
                    <li><a class="menu-item" href="#">{{trans('mainTransCustom.School-Settings')}}</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('stagesIndex')}}">{{trans('mainTransCustom.Stages')}}</a>
                            </li>
                            <li><a class="menu-item" href="#">{{trans('mainTransCustom.Grades')}}</a>
                            </li>
                            <li><a class="menu-item" href="#">{{trans('mainTransCustom.Classes')}}</a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </li>
{{--end tab--}}

        </ul>
    </div>

<!-- END: Main Menu-->
