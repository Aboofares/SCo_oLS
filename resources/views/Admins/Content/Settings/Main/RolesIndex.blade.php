

@extends('Theme.layouts.master')

@section('page_header')
    {{trans('mainTransCustom.Roles')}}
@stop
@section('CustomHead')

@endsection
@section('page_title')
    {{trans('mainTransCustom.Roles-List')}}


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
                                {{trans('mainTransCustom.Roles-List')}}
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
                        {{trans('sidebar.Roles')}}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('rolesStore')}}" method="POST">
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
                            <div class="col-9">
                                <label for="Notes">{{ trans('sidebar.Notes') }}:</label>
                                <textarea class="form-control round" name="Notes" id="Notes" rows="2"></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-9">
                                @foreach (config('customeperm.permissions') as $name => $value)

                                        <label class="checkbox-inline">
                                            <input type="checkbox" class="chk-box" name="permissions[]" value="{{ $name }}">  {{ $value }}
                                        </label>

                                @endforeach
                            </div>

                        </div>
                        <hr>
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

                                </tr>
                                </thead>
                                <tbody>


                                @isset($roles)
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{$role->name}}</td>

                                            <td>
                                                @foreach($role -> permissions as $permission)
                                                    {{$permission}} ,
                                                @endforeach

                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-warning box-shadow-4  mr-1"
                                                        data-toggle="modal" data-target="#edit{{ $role->id }}"
                                                        title="{{ trans('mainTransCustom.Edit') }}">
                                                    <i class="ft-bookmark"></i>
                                                </button>

                                                <button type="button" class="btn btn-outline-danger box-shadow-4 mr-1"
                                                        data-toggle="modal" data-target="#delete{{ $role->id }}"
                                                        title="{{ trans('mainTransCustom.Delete') }}">
                                                    <i class="ft-book"></i>
                                                </button>

                                            </td>
                                        </tr>
                                        <!-- Modal Edit end-->
                                        <div class="modal fade text-left" id="edit{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
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
                                                            <input id="id" name="id" type="text"  value="{{ $role->id }}"/>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label for="Name_ar" class="mr-sm-2">{{ trans('sidebar.Name_ar') }}  :</label>
                                                                    <input id="Name_ar" name="Name_ar" value="{{$role->getTranslation('name', 'ar')}}" type="text"  class="form-control round">
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="Name_en" class="mr-sm-2">{{ trans('sidebar.Name_en') }} :</label>
                                                                    <input id="Name_en" name="Name_en" value="{{$role->getTranslation('name', 'en')}}" type="text" class="form-control round">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <label for="Notes">{{ trans('sidebar.Notes') }}:</label>
                                                                    <textarea class="form-control round" name="Notes" id="Notes" rows="2">{{$role->Role_Description}}</textarea>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    @foreach (config('customeperm.permissions') as $name => $value)

                                                                        <label class="checkbox-inline">
                                                                            <input type="checkbox" class="chk-box" name="permissions[]" value="{{ $name }}"  {{ in_array($name, $role->permissions)? 'checked' : '' }}>  {{ $value }}
                                                                        </label>

                                                                    @endforeach
                                                                </div>

                                                            </div>
                                                            <hr>
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
                                        <div class="modal fade text-left" id="delete{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
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
                                                        <form action="{{route('rolesDel')}}" method="post">

                                                            @csrf
                                                            <input id="id" name="id" type="hidden"  value="{{ $role->id }}"/>
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
                                @endisset


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

