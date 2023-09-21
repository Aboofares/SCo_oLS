

@extends('Theme.layouts.master')

@section('page_header')
    {{trans('student.students')}}
@stop
@section('CustomHead')

@endsection
@section('page_title')
    {{trans('student.studentsClassrooms')}}


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
                                {{trans('student.studentsClassrooms')}}
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
    <div class="content-body">

        <section>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="collapse">
                                            <i class="ft-minus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-action="reload">
                                            <i class="ft-rotate-cw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-action="expand">
                                            <i class="ft-maximize"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-action="close">
                                            <i class="ft-x"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                            {{-- <th>#</th>--}}
                                            <th>{{trans('sidebar.Stage')}}</th>
                                            <th>{{trans('sidebar.Class')}}</th>
                                            <th>{{trans('sidebar.Name')}}</th>
                                            <th>{{trans('student.students')}}</th>
                                            <th>{{trans('sidebar.Add')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Classrooms as $Classroom)
                                            <tr>
                                                {{--<td>{{$loop->iteration}}</td>--}}
                                                <td>{{$Classroom->Stage->name}}</td>
                                                <td>{{$Classroom->Grade->name}} </td>
                                                <td> {{$Classroom->name}} </td>
                                                <td>
                                                    @foreach($Classroom->students as $StudentClass)
                                                        {{$StudentClass['name']}},
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @if(count($Classroom->students) == 0)
                                                        <button type="button"
                                                                class="btn btn-danger round"
                                                                data-toggle="modal"
                                                                data-target="#addStudentTo{{ $Classroom->id }}"
                                                                title="{{ trans('sidebar.Add') }}">
                                                            <i class="ft-plus"></i>
                                                        </button>
                                                    @else
                                                        <button type="button"
                                                                class="btn btn-warning round"
                                                                data-toggle="modal"
                                                                data-target="#editStudentTo{{ $Classroom->id }}"
                                                                title="{{ trans('sidebar.Edit') }}">
                                                            <i class="ft-plus"></i>
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>

                                            <!-- AddStudentTo-->
                                            <div class="modal fade text-left" id="addStudentTo{{ $Classroom->id }}"
                                                 tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1"
                                                 aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="basicModalLabel1">
                                                                {{ trans('sidebar.AddStudentClassrooms') }}
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('StudentsClassroomStore')}}"
                                                                  method="post">
                                                                @csrf
                                                                <input id="id" name="id" type="hidden"
                                                                       value="{{ $Classroom->id }}"/>
                                                                <div class="form-group">
                                                                    <p class="text-bold-600 font-medium-2">{{ trans('sidebar.teachers') }}</p>
                                                                    <select name="student_id[]" class="form-control"
                                                                            multiple="">
                                                                        @foreach($Students as $Student)
                                                                            <option value="{{$Student->id}}">{{$Student->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>{{ trans('sidebar.CurrentYear') }}</label>
                                                                    <select name="currentyear" class="form-control">

                                                                        <option value="{{$AcademicYear->id}}">{{$AcademicYear->AcademicYear}}</option>

                                                                    </select>
                                                                </div>


                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-secondary"
                                                                            data-dismiss="modal">   {{trans('sidebar.Close')}}</button>
                                                                    <button type="submit"
                                                                            class="btn btn-danger">   {{trans('sidebar.Submit')}}</button>
                                                                </div>
                                                            </form>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <!-- AddStudentTo end  -->

                                            <!-- editTeacherTo-->
                                            <div class="modal fade text-left" id="editStudentTo{{ $Classroom->id }}"
                                                 tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1"
                                                 aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="basicModalLabel1">
                                                                {{ trans('sidebar.EditStudentClassrooms') }}
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('StudentsClassroomUpdate')}}" method="post">
                                                                @csrf
                                                                <input id="id" name="id" type="hidden"
                                                                       value="{{ $Classroom->id }}"/>
                                                                <div class="form-group">
                                                                    <p class="text-bold-600 font-medium-2">{{ trans('sidebar.teachers') }}</p>
                                                                    <select name="student_id[]" class="form-control"
                                                                            multiple="">

                                                                            @foreach($Classroom->students as $StudentClass)
                                                                                <option selected value="{{$StudentClass['id']}}">{{$StudentClass['name']}}</option>
                                                                            @endforeach
                                                                        @foreach($Students as $Student)
                                                                            <option value="{{$Student->id}}">{{$Student->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>{{ trans('sidebar.CurrentYear') }}</label>
                                                                    <select name="currentyear" class="form-control">


                                                                        <option value="2013">2013</option>
                                                                        <option value="2014">2014</option>

                                                                    </select>
                                                                </div>



                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-secondary"
                                                                            data-dismiss="modal">   {{trans('sidebar.Close')}}</button>
                                                                    <button type="submit"
                                                                            class="btn btn-danger">   {{trans('sidebar.Submit')}}</button>
                                                                </div>
                                                            </form>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <!-- editTeacherTo end  -->

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- end-->


@endsection
@section('Cjs')


@stop

