

@extends('Theme.layouts.master')

@section('page_header')
    {{trans('quickTrans.Courses')}}
@stop
@section('CustomHead')

@endsection
@section('page_title')
    {{trans('quickTrans.Courses-List')}}


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
                                {{trans('quickTrans.Courses-List')}}
                            </a>
                        </li>
                    @endfor
            </ol>
        </div>
    </div>


@stop
@section('content')



    <!-- Modal add end-->
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="basicModalLabel1">
                        {{trans('quickTrans.Courses-Add')}}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('AddCourse')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label class="mr-sm-2">{{trans('quickTrans.CName_ar')}} :</label>
                                <input id="Name_ar" name="Name_ar" type="text"  class="form-control round">
                            </div>
                            <div class="col-6">
                                <label class="mr-sm-2">{{ trans('quickTrans.CName_en') }} :</label>
                                <input id="Name_en" name="Name_en" type="text" class="form-control round">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label   class="mr-sm-2">{{ trans('quickTrans.CSpecialization') }}:</label>
                                <select  class="form-control round" name="Specialization_id">
                                    @foreach($specializations as $specialization)
                                        <option value="{{$specialization->id}}">{{$specialization->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2">
                                <label   class="mr-sm-2" >{{ trans('sidebar.Status') }}:</label>
                                <input type="checkbox" class="form-control round" name="Status" id="Status" />
                            </div>
                            <div class="col-4">
                                <label   class="mr-sm-2" >{{ trans('quickTrans.CNote') }}:</label>
                                <textarea  class="form-control round" name="Note" id="Note"></textarea>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn grey btn-secondary" data-dismiss="modal">   {{trans('sidebar.Close')}}</button>
                            <button type="submit" class="btn btn-danger">   {{trans('sidebar.Submit')}}</button>
                        </div>

                    </form>

                </div>


            </div>
        </div>
    </div>
    <!-- Modal add  -->



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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary round" data-toggle="modal" data-target="#default">
                                {{trans('quickTrans.Courses-Add')}}
                            </button>
                            <br><br>
                            <!-- end Button trigger modal -->

                            <!-- card-body start-->
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{trans('quickTrans.CName')}} </th>
                                    <th> {{trans('quickTrans.CSpecialization')}}</th>
                                    <th> {{trans('sidebar.Processes')}}</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($courses as $course)
                                    <tr>

                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->Specialization->name}} </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-warning box-shadow-4  mr-1"
                                                    data-toggle="modal" data-target="#edit{{ $course->id }}"
                                                    title="{{ trans('mainTransCustom.Edit') }}">
                                                <i class="ft-bookmark"></i>
                                            </button>

                                            <button type="button" class="btn btn-outline-danger box-shadow-4 mr-1"
                                                    data-toggle="modal" data-target="#delete{{ $course->id }}"
                                                    title="{{ trans('mainTransCustom.Delete') }}">
                                                <i class="ft-book"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit end-->
                                    <div class="modal fade text-left" id="edit{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
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
                                                    <form action="{{route('EditCourse')}}" method="post">

                                                        @csrf
                                                        <input id="id" name="id" type="hidden"  value="{{ $course->id }}"/>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="Name_ar" class="mr-sm-2">{{trans('quickTrans.CName_ar')}} :</label>
                                                                <input id="Name_ar" name="Name_ar" type="text" value="{{$course->getTranslation('name', 'ar')}}" class="form-control round">
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="Name_en" class="mr-sm-2">{{trans('quickTrans.CName_en')}} :</label>
                                                                <input id="Name_en" name="Name_en" type="text" value="{{$course->getTranslation('name', 'en')}}" class="form-control round">
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-6">
                                                                <label   class="mr-sm-2">{{ trans('quickTrans.CSpecialization') }}:</label>
                                                                <select  class="form-control round" name="Specialization_id">
                                                                    <option value="{{$course->Specialization->id}}">{{$course->Specialization->name}}</option>
                                                                    @foreach($specializations as $specialization)
                                                                        <option value="{{$specialization->id}}">{{$specialization->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-2">
                                                                <label for="Status">{{ trans('mainTransCustom.Status') }}:</label>

                                                                <input class="form-control round" type="checkbox"  name="Status" id="Status"  @if ($course->status) checked @endif />
                                                            </div>
                                                            <div class="col-4">
                                                                <label for="Notes">{{ trans('mainTransCustom.Notes') }}:</label>
                                                                <textarea class="form-control round" name="Notes" id="Notes" rows="2">{{$course->notes}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn grey btn-secondary" data-dismiss="modal">   {{trans('mainTransCustom.Close')}}</button>
                                                            <button type="submit" class="btn btn-danger">   {{trans('mainTransCustom.Submit')}}</button>
                                                        </div>
                                                    </form>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Edit  -->

                                    <!-- Modal Delete end-->
                                    <div class="modal fade text-left" id="delete{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="basicModalLabel1">
                                                        {{trans('mainTransCustom.Delete')}}
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('DeleteCourse')}}" method="post">

                                                        @csrf
                                                        <input id="id" name="id" type="hidden"  value="{{ $course->id }}"/>
                                                        {{trans('mainTransCustom.Warning')}}
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn grey btn-secondary" data-dismiss="modal">   {{trans('mainTransCustom.Close')}}</button>
                                                            <button type="submit" class="btn btn-danger">   {{trans('mainTransCustom.Submit')}}</button>
                                                        </div>
                                                    </form>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Delete  -->

                                @endforeach
                                </tbody>
                            </table>
                            <!-- card-body end-->
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

