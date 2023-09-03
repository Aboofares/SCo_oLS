

@extends('Theme.layouts.master')

@section('page_header')
{{trans('mainTransCustom.Dashboard')}}


@stop
@section('CustomHead')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/app-assets/css/pages/advanced-cards.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/ltr/app-assets/fonts/simple-line-icons/style.min.css') }}">
@endsection
@section('page_title')



@stop
@section('breadcrumb')
    <div class="breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper mr-1">
                    <ol class="breadcrumb">
                @for($i = 3; $i <= count(Request::segments()); $i++)
                    <li class="breadcrumb-item active">
                        <a href="{{Request::segment($i)}}">
                            {{trans('mainTransCustom.Dashboard')}}
                        </a>
                    </li>
                @endfor

                    </ol>

        </div>
    </div>


@stop
@section('content')


    <!-- section start-->
    <section>
         <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card bg-gradient-x-purple-blue">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-top">
                                    <i class="icon-eye icon-opacity text-white font-large-4 float-left"></i>
                                </div>
                                <div class="media-body text-white text-right align-self-bottom mt-3">
                                    <span class="d-block mb-1 font-medium-1">Teachers</span>
                                    <h1 class="text-white mb-0">{{\App\Models\Teachers\Teacher::count()}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card bg-gradient-x-purple-red">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-top">
                                    <i class="icon-users icon-opacity text-white font-large-4 float-left"></i>
                                </div>
                                <div class="media-body text-white text-right align-self-bottom mt-3">
                                    <span class="d-block mb-1 font-medium-1">Employees</span>
                                    <h1 class="text-white mb-0">{{\App\Models\Admins\Admin::count()}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card bg-gradient-x-blue-green">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-top">
                                    <i class="icon-basket-loaded icon-opacity text-white font-large-4 float-left"></i>
                                </div>
                                <div class="media-body text-white text-right align-self-bottom mt-3">
                                    <span class="d-block mb-1 font-medium-1">Students</span>
                                    <h1 class="text-white mb-0">{{\App\Models\Students\Student::count()}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card bg-gradient-x-orange-yellow">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-top">
                                    <i class="icon-wallet icon-opacity text-white font-large-4 float-left"></i>
                                </div>
                                <div class="media-body text-white text-right align-self-bottom mt-3">
                                    <span class="d-block mb-1 font-medium-1">Family</span>
                                    <h1 class="text-white mb-0">{{\App\Models\Families\Family::count()}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card bg-gradient-directional-warning">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-white text-left align-self-bottom mt-3">
                                    <span class="d-block mb-1 font-medium-1">Stages</span>
                                    <h1 class="text-white mb-0">{{\App\Models\Admins\Settings\Stage::count()}}</h1>
                                </div>
                                <div class="align-self-top">
                                    <i class="icon-tag icon-opacity text-white font-large-4 float-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card bg-gradient-directional-success">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-white text-left align-self-bottom mt-3">
                                    <span class="d-block mb-1 font-medium-1">Grades</span>
                                    <h1 class="text-white mb-0">{{\App\Models\Admins\Settings\Grade::count()}}</h1>
                                </div>
                                <div class="align-self-top">
                                    <i class="icon-earphones-alt icon-opacity text-white font-large-4 float-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card bg-gradient-directional-danger">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-white text-left align-self-bottom mt-3">
                                    <span class="d-block mb-1 font-medium-1">Classes</span>
                                    <h1 class="text-white mb-0">{{\App\Models\Admins\Settings\Classroom::count()}}</h1>
                                </div>
                                <div class="align-self-top">
                                    <i class="icon-speedometer icon-opacity text-white font-large-4 float-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card bg-gradient-directional-info">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-white text-left align-self-bottom mt-3">
                                    <span class="d-block mb-1 font-medium-1">---</span>
                                    <h1 class="text-white mb-0">----</h1>
                                </div>
                                <div class="align-self-top">
                                    <i class="icon-like icon-opacity text-white font-large-4 float-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end  -->
    <!-- section start-->
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@yield('PageTitle')</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Last Updates</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link" id="homeIcon-tab" data-toggle="tab" href="#homeIcon" aria-controls="homeIcon" aria-expanded="true"><i class="ft-box"></i> Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="profileIcon-tab" data-toggle="tab" href="#profileIcon" aria-controls="profileIcon" aria-expanded="false"><i class="ft-user"></i> Profile</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ft-edit"></i> Dropdown
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" id="dropdownIcon1-tab" href="#dropdownIcon1" data-toggle="tab" aria-controls="dropdownIcon1" aria-expanded="true">@fat</a>
                                                        <a class="dropdown-item" id="dropdownIcon2-tab" href="#dropdownIcon2" data-toggle="tab" aria-controls="dropdownIcon2" aria-expanded="true">@mdo</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="aboutIcon-tab" data-toggle="tab" href="#aboutIcon" aria-controls="aboutIcon" aria-expanded="false"><i class="ft-play"></i> About</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1 pt-1">
                                                <div role="tabpanel" class="tab-pane" id="homeIcon" aria-labelledby="homeIcon-tab" aria-expanded="true">
                                                    <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                                </div>
                                                <div class="tab-pane active" id="profileIcon" role="tabpanel" aria-labelledby="profileIcon-tab" aria-expanded="false">
                                                    <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                                </div>
                                                <div class="tab-pane" id="dropdownIcon1" role="tabpanel" aria-labelledby="dropdownIcon1-tab" aria-expanded="false">
                                                    <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                                </div>
                                                <div class="tab-pane" id="dropdownIcon2" role="tabpanel" aria-labelledby="dropdownIcon2-tab" aria-expanded="false">
                                                    <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                                </div>
                                                <div class="tab-pane" id="aboutIcon" role="tabpanel" aria-labelledby="aboutIcon-tab" aria-expanded="false">
                                                    <p>cake.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end  -->







@endsection
@section('Cjs')
    <script src="{{ URL::asset('Theme/ltr/app-assets/js/scripts/cards/card-advanced.js') }}" type="text/javascript"></script>
@stop

