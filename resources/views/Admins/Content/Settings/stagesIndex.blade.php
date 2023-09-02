

@extends('Theme.layouts.master')

@section('page_header')
    {{trans('mainTransCustom.Stages')}}
@stop
@section('CustomHead')

@endsection
@section('page_title')
    {{trans('mainTransCustom.Stages')}}


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
                                {{trans('mainTransCustom.Stages')}}
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
                        {{trans('sidebar.Stages-Add')}}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('AddStage')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label for="Name_ar" class="mr-sm-2">{{ trans('sidebar.Name_ar') }}  :</label>
                                <input id="Name_ar" name="Name_ar" type="text"  class="form-control round">
                            </div>
                            <div class="col-6">
                                <label for="Name_en" class="mr-sm-2">{{ trans('sidebar.Name_en') }} :</label>
                                <input id="Name_en" name="Name_en" type="text" class="form-control round">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="Status">{{ trans('sidebar.Status') }}:</label>
                                <input type="checkbox" class="form-control round" name="Status" id="Status" />
                            </div>
                            <div class="col-9">
                                <label for="Notes">{{ trans('sidebar.Notes') }}:</label>
                                <textarea class="form-control round" name="Notes" id="Notes" rows="2"></textarea>
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
                                {{trans('sidebar.Add')}}
                            </button>
                            <br><br><br><br>
                            <!-- end Button trigger modal -->

                            <!-- card-body start-->
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{trans('sidebar.Name')}}</th>
                                    <th>{{trans('sidebar.Notes')}}</th>
                                    <th>{{trans('sidebar.Status')}}</th>
                                    <th>{{trans('sidebar.Processes')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Stages as $stage)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$stage->name}}</td>
                                        <td>{{$stage->notes}}</td>
                                        <td><input class="form-control round" type="checkbox"   @if ($stage->status) checked @endif disabled/></td>
                                        <td>
                                            <button type="button" class="btn btn-outline-warning box-shadow-4  mr-1"
                                                    data-toggle="modal" data-target="#edit{{ $stage->id }}"
                                                    title="{{ trans('mainTransCustom.Edit') }}">
                                                <i class="ft-bookmark"></i>
                                            </button>

                                            <button type="button" class="btn btn-outline-danger box-shadow-4 mr-1"
                                                    data-toggle="modal" data-target="#delete{{ $stage->id }}"
                                                    title="{{ trans('mainTransCustom.Delete') }}">
                                                <i class="ft-book"></i>
                                            </button>

                                        </td>

                                    </tr>

                                    <!-- Modal Edit end-->
                                    <div class="modal fade text-left" id="edit{{ $stage->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
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
                                                    <form action="{{route('EditStage')}}" method="post">

                                                        @csrf
                                                        <input id="id" name="id" type="hidden"  value="{{ $stage->id }}"/>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="Name_ar" class="mr-sm-2">{{ trans('sidebar.Name_ar') }}  :</label>
                                                                <input id="Name_ar" name="Name_ar" type="text" value="{{$stage->getTranslation('name', 'ar')}}" class="form-control round">
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="Name_en" class="mr-sm-2">{{ trans('sidebar.Name_en') }} :</label>
                                                                <input id="Name_en" name="Name_en" type="text" value="{{$stage->getTranslation('name', 'en')}}" class="form-control round">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label for="Status">{{ trans('mainTransCustom.Status') }}:</label>

                                                                <input class="form-control round" type="checkbox"  name="Status" id="Status"  @if ($stage->status) checked @endif />
                                                            </div>
                                                            <div class="col-9">
                                                                <label for="Notes">{{ trans('mainTransCustom.Notes') }}:</label>
                                                                <textarea class="form-control round" name="Notes" id="Notes" rows="2">{{$stage->notes}}</textarea>
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
                                    <div class="modal fade text-left" id="delete{{ $stage->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
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
                                                    <form action="{{route('DeleteStage')}}" method="post">

                                                        @csrf
                                                        <input id="id" name="id" type="hidden"  value="{{ $stage->id }}"/>
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

