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
                    <li class="menu-item"><a class="menu-item" href="{{route('Profile')}}">{{trans('mainTransCustom.Profile')}} </a></li>
                </ul>
            </li>

{{--setings tab--}}
            <li class=" nav-item"><a href="#"><i class="ft-edit"></i><span class="menu-title" data-i18n="">{{trans('mainTransCustom.Settings')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">{{trans('mainTransCustom.App-Settings')}}</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('rolesIndex')}}">{{trans('mainTransCustom.Roles-List')}}</a>
                            </li>
                            <li><a class="menu-item" href="#">---</a>
                            </li>

                        </ul>
                    </li>
                    <li><a class="menu-item" href="#">{{trans('mainTransCustom.School-Settings')}}</a>
                        <ul class="menu-content">

                            <li>
                                <a class="menu-item" href="{{route('stagesIndex')}}">{{trans('mainTransCustom.Stages')}}
                                </a>
                            </li>

                            <li><a class="menu-item" href="{{route('gradesIndex')}}">{{trans('mainTransCustom.Grades')}}</a>
                            </li>
                            <li><a class="menu-item" href="{{route('ClassroomsIndex')}}">{{trans('mainTransCustom.Classes')}}</a>
                            </li>

                            <li>
                                <a class="menu-item" href="{{route('coursesIndex')}}"> coursesIndex</a>
                            </li>

                        </ul>
                    </li>


                </ul>
            </li>
{{--end tab--}}

{{--users tab--}}
        <li class=" nav-item"><a href="#"><i class="ft-users"></i><span class="menu-title" data-i19n="">{{trans('mainTransCustom.Users')}}</span></a>
            <ul class="menu-content">


                <li><a class="menu-item" href="#">{{trans('sidebar.teachers')}}</a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{route('TeachersIndex')}}"> {{trans('sidebar.teachers-List')}}</a>
                        </li>
                        <li><a class="menu-item" href="{{route('TeachersClassroom')}}">{{trans('sidebar.teachersClassrooms')}} </a>
                        </li>

                    </ul>
                </li>

                <li><a class="menu-item" href="#">{{trans('sidebar.employees')}}</a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{route('employeesIndex')}}">{{trans('sidebar.employees-List')}} </a>
                        </li>
                        <li><a class="menu-item" href="#">dd </a>
                        </li>

                    </ul>
                </li>


                <li><a class="menu-item" href="#">{{trans('sidebar.Students')}}</a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{route('students')}}">{{trans('sidebar.Students-list')}} </a>
                        </li>
                        <li><a class="menu-item" href="{{route('StudentsClassroom')}}">{{trans('sidebar.StudentsClassrooms')}} </a>
                        </li>
                    </ul>
                </li>




            </ul>
        </li>
{{--end tab--}}




        </ul>
    </div>

<!-- END: Main Menu-->
