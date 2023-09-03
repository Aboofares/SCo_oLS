

@extends('Theme.layouts.master')

@section('page_header')
    {{trans('mainTransCustom.Website')}}
@stop
@section('CustomHead')

@endsection
@section('page_title')
    {{trans('mainTransCustom.Website')}}


@stop
@section('breadcrumb')
    <div class="breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="{{route('Admindashboard')}}">
                        {{trans('mainTransCustom.Dashboard')}}</a>
                </li>

                    @for($i = 4; $i <= count(Request::segments()); $i++)
                        <li class="breadcrumb-item active">
                            <a href="{{Request::segment($i)}}">
                                {{trans('mainTransCustom.Website')}}
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
                            <form enctype="multipart/form-data" method="post" action="{{route('WSSettingED')}}">
                                @csrf


                                <div class="row">
                                    <div class="col-6">
                                        <label class="mr-sm-2">{{ trans('sidebar.Name_ar') }}  :</label>
                                        <input  name="school_nameAr" type="text" value="{{ $setting['school_nameAr'] }}" class="form-control round">
                                    </div>
                                    <div class="col-6">
                                        <label class="mr-sm-2">{{ trans('sidebar.Name_en') }} :</label>
                                        <input name="school_nameEn" type="text" value="{{ $setting['school_nameEn'] }}" class="form-control round">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="mr-sm-2">{{ trans('sidebar.school_phone') }}  :</label>
                                        <input  name="school_phone" type="text" value="{{ $setting['school_phone'] }}" class="form-control round">
                                    </div>
                                    <div class="col-6">
                                        <label class="mr-sm-2">{{ trans('sidebar.school_phone2') }} :</label>
                                        <input name="school_phone2" type="text" value="{{ $setting['school_phone2'] }}" class="form-control round">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label class="mr-sm-2">{{ trans('sidebar.school_Address') }}  :</label>
                                       <textarea name="school_Address" class="form-control round" rows="2">{{$setting['school_Address']}}</textarea>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="mr-sm-2">{{ trans('sidebar.school_email') }}  :</label>
                                        <input  name="school_email" type="text" value="{{ $setting['school_email'] }}" class="form-control round">
                                    </div>
                                    <div class="col-4">
                                        <label class="mr-sm-2">{{ trans('sidebar.school_fb') }} :</label>
                                        <input name="school_fb" type="text" value="{{ $setting['school_fb'] }}" class="form-control round">
                                    </div>
                                    <div class="col-4">
                                        <label class="mr-sm-2">{{ trans('sidebar.school_ins') }} :</label>
                                        <input name="school_ins" type="text" value="{{ $setting['school_ins'] }}" class="form-control round">
                                    </div>
                                </div>



                                <hr>

                                <button class="btn btn-primary btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('Students_trans.submit')}}</button>

                            </form>
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

