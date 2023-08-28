

@extends('Theme.layouts.master')

@section('page_header')
    {{trans('sidebar.employees')}}
@stop
@section('CustomHead')

@endsection
@section('page_title')
    {{trans('sidebar.employees-List')}}


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
                                {{trans('sidebar.employees-List')}}
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

                            <!-- Button   -->
                            <a  class="btn btn-primary round" aria-pressed="true" href="{{route('employeesCreate')}}">
                                {{trans('employee.Add_Employee')}}
                            </a>
                            <br>
                            <br>
                            <!-- end Button  -->
                            <!-- table-->
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{trans('employee.EmployeeName')}}</th>
                                    <th>{{trans('employee.Departments')}}</th>
                                    <th>{{trans('employee.Gender')}}</th>
                                    <th>{{trans('employee.religion')}}</th>
                                    <th>{{trans('employee.Nationality')}}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Admins as $Admin)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$Admin->name}}</td>
                                        <td>{{$Admin->Departments->name}}</td>
                                        <td>{{$Admin->Genders->name}}</td>
                                        <td>{{$Admin->Religions->name}}</td>
                                        <td>{{$Admin->Nationalities->name}}</td>


                                        <td>
                                            <a href="{{route('employeesEdit',$Admin->id)}}"
                                               class="btn btn-outline-warning box-shadow-4  mr-1"
                                               role="button" aria-pressed="true" title=" {{ trans('sidebar.Edit') }}">
                                                <i class="ft-bookmark"></i>
                                            </a>

                                            <button type="button" class="btn btn-outline-danger box-shadow-4 mr-1"
                                                    data-toggle="modal" data-target="#delete{{ $Admin->id }}"
                                                    title="{{ trans('sidebar.Delete') }}">
                                                <i class="ft-book"></i>
                                            </button>

                                        </td>
                                    </tr>
                                    <!-- Modal Delete end-->
                                    <div class="modal fade text-left" id="delete{{ $Admin->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="basicModalLabel1">
                                                        {{trans('sidebar.Delete')}}
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('employeesDel',$Admin->id)}}" method="post">
                                                        @csrf
                                                        <input  type="hidden" id="id" name="id"   value="{{ $Admin->id }}"/>
                                                        {{trans('sidebar.Warning')}}
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn grey btn-secondary" data-dismiss="modal">   {{trans('sidebar.Close')}}</button>
                                                            <button type="submit" class="btn btn-danger">   {{trans('sidebar.Submit')}}</button>
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
                            <!-- table-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end-->


@endsection
@section('Cjs')


@stop

