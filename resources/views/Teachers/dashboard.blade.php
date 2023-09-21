

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
                                    <span class="d-block mb-1 font-medium-1">My Classes</span>
                                    <h1 class="text-white mb-0">{{\App\Models\Admins\Settings\TeacherClassroom::where('teacher_id',Auth::user()->id)->count()}}</h1>

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


@stop

