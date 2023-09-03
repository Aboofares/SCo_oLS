

@extends('Theme.layouts.masterT')

@section('page_header')
    {{trans('mainTransCustom.Dashboard')}}
@stop
@section('CustomHead')

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



    </section>
    <!-- section end  -->

@endsection
@section('Cjs')


@stop

