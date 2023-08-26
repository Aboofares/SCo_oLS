

@extends('Theme.layouts.master')

@section('page_header')
{{trans('mainTransCustom.Profile')}}
@stop
@section('CustomHead')

@endsection
@section('page_title')
    {{trans('mainTransCustom.Profile')}}


@stop
@section('breadcrumb')
    <div class="breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="{{route('Admindashboard')}}">
                        {{trans('mainTransCustom.Dashboard')}}</a>
                </li>

                @for($i = 3; $i <= count(Request::segments()); $i++)
                    <li class="breadcrumb-item active">
                        <a href="{{Request::segment($i)}}">
                            {{trans('mainTransCustom.Profile')}}
                        </a>
                    </li>
                @endfor
            </ol>
        </div>
    </div>


@stop





@section('content')

    <div id="user-profile">

        <div class="row">
            <div class="col-xl-3 col-lg-5 col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="card-title-wrap bar-primary">
                            <div class="card-title">Work History</div>
                            <hr>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0 pt-0 pb-1">
                            <ul>
                                <li>
                                    <strong>99%</strong>
                                    Job Success
                                </li>
                                <li>
                                    <strong>4.9 stars </strong>
                                    <i class="la la-star yellow darken-2"></i>
                                    <i class="la la-star yellow darken-2"></i>
                                    <i class="la la-star yellow darken-2"></i>
                                    <i class="la la-star yellow darken-2"></i>
                                    <i class="la la-star yellow darken-2"></i>
                                <li>
                                    <strong>1022</strong> Hours Worked</li>
                                <li>
                                    <strong>26</strong> Jobs</li>

                            </ul>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="card-title-wrap bar-primary">
                            <div class="card-title">Other Details</div>
                            <hr>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0 pt-0 pb-1">
                            <ul>
                                <li>
                                    <strong>Availability: </strong>
                                    10-30 hrs / week
                                </li>
                                <li>
                                    <strong>24 hours </strong> response time

                                <li>
                                    <strong>Languages: </strong> English/ Spanish</li>


                            </ul>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Project X</h4>
                        <div class="heading-elements">
                            <ul class="list-inline d-block mb-0">
                                <li>
                                    <i class="ft-bar-chart font-large-1 danger"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body pt-0 pb-1">
                            <h6 class="text-bold-600"> Task done:
                                <span>4/10</span>
                            </h6>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <h6 class="text-bold-600 mt-2"> Client:
                                        <span class="info">Xeon Inc.</span>
                                    </h6>
                                    <h6 class="text-bold-600 mt-1"> Deadline:
                                        <span class="blue-grey">June, 2018</span>
                                    </h6>
                                </div>
                                <div class="media-body text-right mt-2">
                                    <ul class="list-unstyled users-list">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-7 col-md-12">
                <!--Project Timeline div starts-->
                <div id="timeline">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title-wrap bar-primary">
                                <div class="card-title">{{ Auth::user()->name }} </div>
                            </div>
                        </div>
                        <div class="card-body">
                            {{ Auth::user()->email}}
                            <br>
                         <input value="{{ Auth::user()->password}}" type="password">


                        </div>
                    </div>
                </div>
                <!--Project Timeline div ends-->
            </div>
        </div>
    </div>


@endsection
@section('Cjs')


@stop

