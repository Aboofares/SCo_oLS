

@extends('Theme.layouts.master')

@section('page_header')
    page_header
@stop
@section('CustomHead')

@stop
@section('page_title')
    page_title


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
