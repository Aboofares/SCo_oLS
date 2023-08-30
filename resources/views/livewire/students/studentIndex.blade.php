

@extends('Theme.layouts.master')

@section('page_header')
        {{trans('sidebar.Students')}}
@stop
@section('CustomHead')
    @livewireStyles
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/wizard.css') }}">

@endsection
@section('page_title')
        {{trans('sidebar.Students-list')}}

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
                        {{trans('sidebar.Students-list')}}
                        </a>
                    </li>
                @endfor
            </ol>
        </div>
    </div>

@stop
@section('content')

    <!-- Start -->
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <!-- end-->


    <!-- Start -->
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

                            <livewire:students.student />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end-->

@endsection
@section('Cjs')
    @livewireScripts

@stop


