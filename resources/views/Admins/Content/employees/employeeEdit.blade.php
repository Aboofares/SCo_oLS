@extends('Theme.layouts.master')

@section('page_header')
    {{trans('sidebar.employees')}}
@stop
@section('CustomHead')

@endsection
@section('page_title')
    {{trans('employee.Edit_Employee')}}
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
                                {{trans('employee.Add_Employee')}}
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


                            <form action="{{route('employeesUpdate')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{$SelectedAdmin->id}}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="TeacherName">{{trans('employee.EmployeeName_ar')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" value="{{ $SelectedAdmin->getTranslation('name', 'ar') }}" name="Name_ar" class="form-control">
                                                    @error('Name_ar')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-type"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="TeacherName">{{trans('employee.EmployeeName_en')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" value="{{ $SelectedAdmin->getTranslation('name', 'en') }}" name="Name_en" class="form-control">
                                                    @error('Name_en')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-type"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>{{trans('employee.Birthdate')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input class="form-control" value="{{$SelectedAdmin->dateOfBirth}}"  type="date" name="TBirthdate" id="TBirthdate">

                                                    @error('TBirthdate')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>{{trans('employee.UniqueIdType')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <select class="form-control" name="UniqueIdType" id="UniqueIdType">
                                                        <option value="{{$SelectedAdmin->Uni_IdType}}">
                                                            @if($SelectedAdmin->Uni_IdType==1)
                                                                {{trans('employee.UniqueIdSS')}}
                                                            @else
                                                                {{trans('employee.UniqueIdPA')}}
                                                            @endif
                                                        </option>
                                                        <option value="1">{{trans('employee.UniqueIdSS')}}</option>
                                                        <option value="2">{{trans('employee.UniqueIdPA')}}</option>
                                                    </select>

                                                    @error('UniqueIdType')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-anchor"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" id="SS">
                                                <label>{{trans('employee.Num')}}</label>
                                                <div class="position-relative has-icon-left">



                                                    <input type="text" value="{{$SelectedAdmin->Uni_Id}}" name="UniqueIdSS" class="form-control">
                                                    @error('UniqueIdSS')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-tag"></i>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="form-group" id="PP" style="display:none;">
                                                <label>{{trans('employee.NumP')}}</label>
                                                <div class="position-relative has-icon-left">



                                                    <input type="text" value="{{$SelectedAdmin->Uni_Id}}" name="UniqueIdPP" class="form-control">
                                                    @error('UniqueIdPP')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-tag"></i>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="TeacherName">{{trans('employee.Gender')}}</label>
                                                <div class="position-relative has-icon-left">

                                                    <select class="form-control" name="Gender_id">
                                                        <option value="{{$SelectedAdmin->gender_id}}">{{$SelectedAdmin->Genders->name}}  </option>
                                                        @foreach($genders as $gender)
                                                            <option
                                                                value="{{$gender->id}}">{{$gender->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('Gender_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-shield"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    for="TeacherName">{{trans('employee.Nationality')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <select class="form-control" name="Nationality_id">
                                                    <option value="{{$SelectedAdmin->nationality_id}}">{{$SelectedAdmin->Nationalities->name}}  </option>
                                                        @foreach($Nationalities as $Nationality)
                                                            <option
                                                                value="{{$Nationality->id}}">{{$Nationality->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('Nationality_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-flag"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    for="TeacherName">{{trans('employee.religion')}}</label>
                                                <div class="position-relative has-icon-left">

                                                    <select class="form-control" name="religion_id">
                                                        <option value="{{$SelectedAdmin->religion_id}}">{{$SelectedAdmin->Religions->name}}  </option>
                                                        @foreach($religions as $religion)
                                                            <option
                                                                value="{{$religion->id}}">{{$religion->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('religion_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-cloud"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">{{trans('employee.Joining_Date')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input value="{{$SelectedAdmin->hiringDate}}" type="date" class="form-control" name="Joining_Date">
                                                    <div class="form-control-position">
                                                        <i class="ft-at-sign"></i>
                                                    </div>
                                                    @error('Joining_Date')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{trans('employee.Departments')}}</label>
                                                <div class="position-relative has-icon-left">

                                                    <select class="form-control" name="Department_id">
                                                        <option value="{{$SelectedAdmin->department_id}}">{{$SelectedAdmin->Departments->name}}  </option>
                                                        @foreach($departments as $department)
                                                            <option
                                                                value="{{$department->id}}">{{$department->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('Department_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-briefcase"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="TeacherName">{{trans('family.Email')}}</label>
                                                <div class="position-relative has-icon-left">

                                                    <input type="email"  value="{{$SelectedAdmin->email}}" name="Email" class="form-control">
                                                    @error('Email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-mail"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">{{trans('family.Password')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="password"  value="{{$SelectedAdmin->password}}" name="password" class="form-control">
                                                    @error('password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions right">
                                    <a class="btn btn-danger mr-1" href="{{route('employeesIndex')}}">
                                        <i class="ft-x"></i> {{trans('sidebar.Close')}}
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> {{trans('employee.Save')}}
                                    </button>
                                </div>
                            </form>
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

