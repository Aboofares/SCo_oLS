

@extends('Theme.layouts.master')

@section('page_header')
    {{trans('mainTransCustom.Admission')}}
@stop
@section('CustomHead')

@endsection
@section('page_title')
    {{trans('mainTransCustom.Admission-List')}}


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
                                {{trans('mainTransCustom.Admission')}}
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
                            <a href=""  class="btn btn-primary round">
                                {{trans('sidebar.Add')}}
                            </a>
                            <br><br>
                            <!-- card-body start-->
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>#</th>
                                        <th>#</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($AdmissionAll as $Admission)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$Admission->name}}</td>
                                        <td>{{$Admission->dateOfBirth}}</td>
                                        <td>
                                                            <span class="dropdown">
                                                                <button id="btnSearchDrop12" type="button" class="btn btn-sm btn-icon btn-pure font-medium-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ft-more-vertical"></i>
                                                                </button>
                                                                <span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="ft-trash-2"></i> Edit</a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="ft-edit-2"></i> Delete</a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="ft-plus-circle primary"></i> Projects</a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="ft-plus-circle info"></i> Team</a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="ft-plus-circle warning"></i> Clients</a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="ft-plus-circle success"></i> Friends</a>
                                                                </span>
                                                            </span>
                                        </td>
                                    </tr>
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

