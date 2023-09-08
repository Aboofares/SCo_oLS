

@extends('Theme.layouts.master')

@section('page_header')
    {{trans('quickTrans.AcademicYearT')}}
@stop
@section('CustomHead')
{{--    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Theme/rtl/app-assets/css/pages/advanced-cards.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href={{ URL::asset('Theme/rtl/app-assets/vendors/css/timeline/vertical-timeline.css') }}">--}}
@endsection
@section('page_title')
    {{trans('quickTrans.AcademicYearT-list')}}


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
                                {{trans('quickTrans.AcademicYearT-list')}}
                            </a>
                        </li>
                    @endfor
            </ol>
        </div>
    </div>


@stop
@section('content')




<div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Basic Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('AddAY')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <label  class="mr-sm-2">{{ trans('quickTrans.AcademicYear') }}  : <span class="text-danger">*</span></label>
                        </div>
                        <div class="col-10">

                            <select class="form-control rounded" name="AcademicYearName">
                                <option>{{trans('Parent_trans.Choose')}}...</option>
                                @php
                                    $current_year = date("Y");
                                    $current_year1 = date("Y")+1;
                                    $current_year2 = date("Y")+2;
                                @endphp

                                <option value="{{$current_year1.'/'.$current_year}}">{{$current_year1}}/{{ $current_year}}</option>
                                <option value="{{ $current_year2}}/{{$current_year1}}">{{ $current_year2}}/{{$current_year1}}</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label  >{{ trans('quickTrans.FirstTermStartDate') }}  :</label>
                            <input type="date" name="FirstTermStartDate" class="form-control rounded">
                        </div>
                        <div class="col-6">
                            <label  >{{ trans('quickTrans.FirstTermEndDate') }}  :</label>
                            <input type="date" name="FirstTermEndDate" class="form-control rounded">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label >{{ trans('quickTrans.MiddleExamsStartDate') }}  :</label>
                            <input type="date" name="MiddleExamsStartDate" class="form-control rounded">
                        </div>
                        <div class="col-6">
                            <label  >{{ trans('quickTrans.MiddleExamsEndDate') }}  :</label>
                            <input type="date" name="MiddleExamsEndDate" class="form-control rounded">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label  >{{ trans('quickTrans.SecondTermStartDate') }}  :</label>
                            <input type="date" name="SecondTermStartDate" class="form-control rounded">
                        </div>
                        <div class="col-6">
                            <label  >{{ trans('quickTrans.SecondTermEndDate') }}  :</label>
                            <input type="date" name="SecondTermEndDate" class="form-control rounded">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label >{{ trans('quickTrans.FinalExamsStartDate') }}  :</label>
                            <input type="date" name="FinalExamsStartDate" class="form-control rounded">
                        </div>
                        <div class="col-6">
                            <label  >{{ trans('quickTrans.FinalExamsEndDate') }}  :</label>
                            <input type="date" name="FinalExamsEndDate" class="form-control rounded">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label >{{ trans('quickTrans.SummerStartDate') }}  :</label>
                            <input type="date" name="SummerStartDate" class="form-control rounded">
                        </div>
                        <div class="col-6">
                            <label  >{{ trans('quickTrans.SummerEndDate') }}  :</label>
                            <input type="date" name="SummerEndDate" class="form-control rounded">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label  >{{ trans('quickTrans.AdmissionStartDate') }}  :</label>
                            <input type="date" name="AdmissionStartDate" class="form-control rounded">
                        </div>
                        <div class="col-6">
                            <label >{{ trans('quickTrans.AdmissionEndDate') }}  :</label>
                            <input type="date" name="AdmissionEndDate" class="form-control rounded">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label  >{{ trans('quickTrans.AcademicYearStatus') }}  :</label>
                            <input type="checkbox" name="AcademicYearStatus" class="form-control rounded">
                        </div>
                        <div class="col-8">
                            <label >{{ trans('quickTrans.AcademicYearNote') }}  :</label>
                            <textarea name="AcademicYearNote" class="form-control rounded" rows="2" ></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-secondary" data-dismiss="modal">{{trans('mainTransCustom.Close')}}</button>
                        <button type="submit" class="btn btn-danger">{{trans('mainTransCustom.Submit')}}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
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
                            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#large">
                                {{trans('quickTrans.AcademicYearAdd')}}
                            </button>

                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{trans('quickTrans.AcademicYear')}}</th>
                                    <th>{{trans('sidebar.Status')}}</th>
                                    <th>{{ trans('quickTrans.FirstTermStartDate') }} </th>
                                    <th>{{ trans('quickTrans.FirstTermEndDate') }} </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($AcademicYears as $AcademicYear)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$AcademicYear->AcademicYear}}</td>
                                        <td><input class="form-control " type="checkbox"   @if ($AcademicYear->AcademicYearStatus) checked @endif disabled/> </td>
                                        <td><input type="date" class="form-control" value="{{$AcademicYear->FirstTermStartDate}}" id="FTSD"></td>
                                        <td><input type="date" class="form-control " value="{{$AcademicYear->FirstTermEndDate}}" id="FTED"></td>

                                        <td>
                                             @php
                                                 $FirstTermEndDate =$AcademicYear->FirstTermEndDate;
                                                 $FirstTermStartDate =$AcademicYear->FirstTermStartDate;
                                                 $diff = strtotime($FirstTermEndDate) - strtotime($FirstTermStartDate);
                                                 $numberOfDays =abs(round($diff / 86400));
                                                  $numberOfWeeks = floor($numberOfDays / 7);

                                                 echo $numberOfWeeks;
                                             @endphp

                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-warning box-shadow-4  mr-1"
                                                    data-toggle="modal" data-target="#edit{{ $AcademicYear->id }}"
                                                    title="{{ trans('mainTransCustom.Edit') }}">
                                                <i class="ft-bookmark"></i>
                                            </button>
                                        </td>
                                     </tr>
                                    <!-- Modal Edit end-->
                                    <div class="modal fade text-left" id="edit{{ $AcademicYear->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="basicModalLabel1">
                                                        {{trans('mainTransCustom.Edit')}}
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('rolesUpdate')}}" method="post">

                                                        @csrf
                                                        <input id="id" name="id" type="text"  value="{{ $AcademicYear->id }}"/>

                                                    </form>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Edit  -->

                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section end  -->
<!-- section start-->

<!-- section end  -->
@endsection
@section('Cjs')

{{--    <script src="{{ URL::asset('Theme/rtl/app-assets/js/scripts/cards/card-advanced.js') }}" type="text/javascript"></script>--}}
@stop


