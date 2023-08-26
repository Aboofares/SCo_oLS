<!-- BEGIN: Main Menu-->

    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ url('/dashboard') }}">
                    <img class="brand-logo" alt="logo" src="{{ URL::asset('Theme/ltr/app-assets/images/logo/logo.png') }}" />
                    <h3 class="brand-text">{{trans('sidebar.App-Name')}} </h3>
                </a></li>
            <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{route('dashboard')}}"><i class="ft-home"></i>
                    <span class="menu-title" data-i18n="">{{trans('sidebar.Dashboard')}}</span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="#">{{trans('sidebar.Profile')}}</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-monitor"></i><span class="menu-title" data-i18n="">{{trans('sidebar.Settings')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">{{trans('sidebar.App-Settings')}}</a>
                        <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="#">Settings 1</a>
                            </li>
                            <li>
                                <a class="menu-item" href="#">Settings 2</a>
                            </li>

                        </ul>
                    </li>
                    <li><a class="menu-item" href="#">{{trans('sidebar.School-Settings')}}</a>
                        <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="{{route('stages.index')}}">{{trans('sidebar.Stages-list')}}</a>
                            </li>
                            <li>
                                <a class="menu-item" href="{{route('grades.index')}}">{{trans('sidebar.Grades-List')}}</a>
                            </li>
                            <li>
                                <a class="menu-item" href="{{route('classrooms.index')}}">{{trans('sidebar.Classes-List')}}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>



            <li class="nav-item"><a href="#"><i class="ft-monitor"></i>
                    <span class="menu-title" data-i18n="">{{trans('sidebar.Families-List')}}</span>
                    </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{url('add-family')}}">{{trans('sidebar.Families')}}</a>
                    </li>

                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="ft-monitor"></i>
                    <span class="menu-title" data-i18n="">{{trans('sidebar.teachers')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('teachers.index')}}">{{trans('sidebar.teachers-List')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('teachersClassrooms.index')}}">{{trans('sidebar.teachersClassrooms')}}</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"><a href="#"><i class="ft-monitor"></i>
                    <span class="menu-title" data-i19n="">{{trans('student.students')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('students.index')}}">{{trans('student.list_students')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('students.create')}}">{{trans('student.add_student')}}</a>
                    </li>

                </ul>
            </li>


            <li class="nav-item"><a href="#"><i class="ft-monitor"></i>
                    <span class="menu-title" data-i19n="">{{trans('sidebar.Administrators')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{url('Administrators/index')}}">{{trans('sidebar.Administrators-List')}}</a>
                    </li>


                </ul>
            </li>

        </ul>
    </div>

<!-- END: Main Menu-->
