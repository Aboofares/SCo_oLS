@extends('Theme.layouts.master')

@section('page_header')
    {{trans('sidebar.teachers')}}
@stop
@section('CustomHead')

@endsection
@section('page_title')
    {{trans('teacher.Edit_Teacher')}}
@stop
@section('breadcrumb')
    <div class="breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="{{route('Admindashboard')}}">
                        {{trans('mainTransCustom.Dashboard')}}</a>
                </li>

                    @for($i = 5; $i <= count(Request::segments()); $i++)
                        <li class="breadcrumb-item active">
                            <a href="{{Request::segment($i)}}">
                                {{trans('teacher.Edit_Teacher')}}
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
                            <form action="{{route('TeachersUpdate')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$SelectedTeacher->id}}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="TeacherName">{{trans('teacher.TeacherName_ar')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" value="{{ $SelectedTeacher->getTranslation('name', 'ar') }}" name="Name_ar" class="form-control">
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
                                                    for="TeacherName">{{trans('teacher.TeacherName_en')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" value="{{ $SelectedTeacher->getTranslation('name', 'en') }}" name="Name_en" class="form-control">
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
                                                <label>{{trans('teacher.Birthdate')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input class="form-control" value="{{$SelectedTeacher->dateOfBirth}}" type="date" name="TBirthdate" id="TBirthdate">

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
                                                <label>{{trans('teacher.UniqueIdType')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <select class="form-control" name="UniqueIdType" id="UniqueIdType">

                                                        <option value="{{$SelectedTeacher->Uni_IdType}}">
                                                            @if($SelectedTeacher->Uni_IdType==1)
                                                                {{trans('teacher.UniqueIdSS')}}
                                                            @else
                                                                {{trans('teacher.UniqueIdPA')}}
                                                            @endif
                                                        </option>
                                                        <option value="1">{{trans('teacher.UniqueIdSS')}}</option>
                                                        <option value="2">{{trans('teacher.UniqueIdPA')}}</option>
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
                                                <label>{{trans('teacher.Num')}}</label>
                                                <div class="position-relative has-icon-left">



                                                    <input type="text" name="UniqueIdSS" value="{{$SelectedTeacher->Uni_Id}}" class="form-control">
                                                    @error('UniqueIdSS')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-tag"></i>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="form-group" id="PP" style="display:none;">
                                                <label>{{trans('teacher.NumP')}}</label>
                                                <div class="position-relative has-icon-left">



                                                    <input type="text" value="{{$SelectedTeacher->Uni_Id}}" name="UniqueIdPP" class="form-control">
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
                                                <label for="TeacherName">{{trans('teacher.Gender')}}</label>
                                                <div class="position-relative has-icon-left">

                                                    <select class="form-control" name="Gender_id">
                                                        <option value="{{$SelectedTeacher->gender_id}}">{{$SelectedTeacher->Genders->name}}  </option>
                                                        @foreach($genders as $gender)
                                                            <option value="{{$gender->id}}">{{$gender->name}}</option>
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
                                                    for="TeacherName">{{trans('teacher.Nationality')}}</label>
                                                <div class="position-relative has-icon-left">

                                                    <select class="form-control" name="Nationality_id">
                                                        <option value="{{$SelectedTeacher->nationality_id}}">{{$SelectedTeacher->Nationalities->name}}  </option>
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
                                                    for="TeacherName">{{trans('teacher.religion')}}</label>
                                                <div class="position-relative has-icon-left">

                                                    <select class="form-control" name="religion_id">
                                                        <option value="{{$SelectedTeacher->religion_id}}">{{$SelectedTeacher->Religions->name}}  </option>
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
                                                <label for="jd">{{trans('teacher.Joining_Date')}}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="date" value="{{$SelectedTeacher->hiringDate}}" class="form-control" name="Joining_Date">
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
                                                <label
                                                    for="TeacherName">{{trans('teacher.specialization')}}</label>
                                                <div class="position-relative has-icon-left">

                                                    <select class="form-control" name="Specialization_id">
                                                        <option value="{{$SelectedTeacher->specialization_id}}">{{$SelectedTeacher->Specializations->name}}  </option>
                                                        @foreach($specializations as $specialization)
                                                            <option
                                                                value="{{$specialization->id}}">{{$specialization->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('Specialization_id')
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

                                                    <input type="email" value="{{$SelectedTeacher->email }}" name="Email" class="form-control">
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
                                                    <input type="password" value="{{$SelectedTeacher->password}}" name="password" class="form-control">
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
                                    <a class="btn btn-danger mr-1" href="{{route('TeachersIndex')}}">
                                        <i class="ft-x"></i> {{trans('sidebar.Close')}}
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> {{trans('teacher.Save')}}
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

    <script>
        $(document).ready(function(){
            $('#UniqueIdType').on('change', function() {
                if ( this.value == '2')
                {

                    $("#SS").hide();
                    $("#PP").show();
                }

                else
                {

                    $("#PP").hide();
                    $("#SS").show();
                }
            });
        });
    </script>
@stop

