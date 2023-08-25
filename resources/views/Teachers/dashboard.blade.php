

@extends('Theme.layouts.master')

@section('page_header')
    page_header
@stop
@section('CustomHead')

@endsection
@section('page_title')
    Teachers
@stop
@section('breadcrumb')
    <div class="breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
                @for($i = 2; $i <= count(Request::segments()); $i++)
                    <li class="breadcrumb-item">
                        <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
                            {{strtoupper(Request::segment($i))}}
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
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card pull-up ecom-card-1 bg-white">
                    <div class="card-content ecom-card2 height-180">
                        <h5 class="text-muted danger position-absolute p-1">Progress Stats</h5>
                        <div>
                            <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                        </div>
                        <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                            <div id="progress-stats-bar-chart"></div>
                            <div id="progress-stats-line-chart" class="progress-stats-shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card pull-up ecom-card-1 bg-white">
                    <div class="card-content ecom-card2 height-180">
                        <h5 class="text-muted info position-absolute p-1">Activity Stats</h5>
                        <div>
                            <i class="ft-activity info font-large-1 float-right p-1"></i>
                        </div>
                        <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                            <div id="progress-stats-bar-chart1"></div>
                            <div id="progress-stats-line-chart1" class="progress-stats-shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card pull-up ecom-card-1 bg-white">
                    <div class="card-content ecom-card2 height-180">
                        <h5 class="text-muted warning position-absolute p-1">Sales Stats</h5>
                        <div>
                            <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
                        </div>
                        <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                            <div id="progress-stats-bar-chart2"></div>
                            <div id="progress-stats-line-chart2" class="progress-stats-shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section end  -->

@endsection
@section('Cjs')


@stop

