<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"> </i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>

                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            @if (App::getLocale() == 'ar')
                                {{ LaravelLocalization::getCurrentLocaleName() }}
                                <i class="flag-icon flag-icon-eg"></i>
                            @else
                                {{ LaravelLocalization::getCurrentLocaleName() }}
                                <i class="flag-icon flag-icon-us"></i>
                            @endif
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <div class="arrow_box">

                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                        @if (  $properties['native']  == 'English')

                                            <i class="flag-icon flag-icon-us"></i>{{$properties['native']}}
                                        @else

                                            <i class="flag-icon flag-icon-eg"></i>{{$properties['native']}}
                                        @endif




                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </li>

                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="{{ URL::asset('Images/ProfileImages/Admins/'.Auth::user()->profileImageURL) }}" alt="{{ Auth::user()->name }}"><i></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="{{ URL::asset('Images/ProfileImages/Admins/'.Auth::user()->profileImageURL) }}" alt="{{ Auth::user()->name }}">

                                        <span class="user-name text-bold-700 ml-1"> {{ Auth::user()->name }} </span></span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('Profile')}}"><i class="ft-user"></i> {{trans('mainTransCustom.Profile')}}</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-item">
                                @if(auth('student')->check())
                                <form method="GET" action="{{ route('logout','student') }}">
                                @elseif(auth('teacher')->check())
                                <form method="GET" action="{{ route('logout','teacher') }}">
                                @elseif(auth('family')->check())
                                <form method="GET" action="{{ route('logout','family') }}">
                                @elseif(auth('admin')->check())
                                <form method="GET" action="{{ route('logout','admin') }}">
                                @else
                                <form method="GET" action="{{ route('logout','web') }}">
                                @endif

                                @csrf
                                <a class="dropdown-item" href="#" onclick="event.preventDefault();this.closest('form').submit();"><i class="ft-power"></i>
                                    {{trans('mainTransCustom.Logout')}}
                                </a>
                                </form>
                                </div>


                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->
