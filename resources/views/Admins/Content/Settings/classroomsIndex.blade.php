

@extends('Theme.layouts.master')

@section('page_header')

    {{trans('sidebar.Classes')}}

@stop

@section('page_title')

    {{trans('sidebar.Classes-List')}}

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


    <!-- Modal add end-->
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="basicModalLabel1">
                        {{trans('sidebar.Class-Add')}}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('classrooms.store') }}" method="POST">
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
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <label for="Name_ar" class="mr-sm-2">{{ trans('sidebar.Stages') }}  :</label>

                            </div>
                            <div class="col-9">
                                <select id="stage_id" name="stage_id"  class="form-control round"
                                        onchange="console.log($(this).val())">

                                    <option value="" selected disabled>{{ trans('sidebar.Choose-Please') }}</option>
                                    @foreach($Stages as $stage)
                                        <option value="{{$stage->id}}">{{$stage->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <label for="Classes" class="mr-sm-2">{{ trans('sidebar.Classes') }}  :</label>
                            </div>
                            <div class="col-6">
                                <select id="grade_id" name="grade_id"  class="form-control round">

                                    <option value="" selected disabled> ---</option>
                                </select>
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
                        <div class="card-body card-dashboard">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary round" data-toggle="modal" data-target="#default">
                                {{trans('sidebar.Add')}}
                            </button>
                            <br><br><br><br>
                            <!-- end Button trigger modal -->
                            <div id="accordion3" class="card-accordion">

                                <div class="card collapse-icon accordion-icon-rotate">
                                    @foreach ($Stages as $Stage)
                                        <div class="card">
                                            <div class="card-header" id="heading{{$Stage->id}}">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#accordionC{{$Stage->id}}" aria-expanded="false" aria-controls="accordionC{{$Stage->id}}">
                                                        {{$Stage->name}}
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="accordionC{{$Stage->id}}" class="collapse" aria-labelledby="heading{{$Stage->id}}" data-parent="#accordion3">
                                                <div class="card-body">
                                                     <div class="table-responsive">
                                                        <table class="table table-striped table-bordered zero-configuration">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>{{trans('sidebar.Name')}}</th>
                                                                <th>{{trans('sidebar.Notes')}}</th>
                                                                <th>{{trans('sidebar.Status')}}</th>
                                                                <th>{{trans('sidebar.Stage')}}</th>
                                                                <th>{{trans('sidebar.Class')}}</th>
                                                                <th>{{trans('sidebar.Processes')}}</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($Stage->Sections as $listSection)
                                                                <tr>
                                                                    <td>{{$loop->iteration}}</td>
                                                                    <td>{{$listSection->name}}</td>
                                                                    <td>{{$listSection->notes}}</td>
                                                                    <td>
                                                                        @if ($listSection->status === 1)
                                                                            <label
                                                                                class="badge badge-success">{{ trans('sidebar.Status_Ye') }}</label>
                                                                        @else
                                                                            <label
                                                                                class="badge badge-danger">{{ trans('sidebar.Status_No') }}</label>
                                                                        @endif
{{--                                                                        <input class="form-check-input" type="checkbox"   @if ($listSection->status) checked @endif disabled/>--}}
                                                                    </td>
                                                                    <td>
                                                                        {{$listSection->Stage->name}}

                                                                    </td>
                                                                    <td>
                                                                        {{$listSection->Grade->name}}

                                                                    </td>
                                                                    <td>

                                                                        <button type="button" class="btn btn-outline-warning box-shadow-4 mr-1 btn-sm"
                                                                                data-toggle="modal" data-target="#edit{{ $listSection->id }}"
                                                                                title="{{ trans('sidebar.Edit') }}">
                                                                            <i class="ft-bookmark"></i>
                                                                        </button>

                                                                        <button type="button" class="btn btn-outline-danger box-shadow-4 mr-1 btn-sm"
                                                                                data-toggle="modal" data-target="#delete{{ $listSection->id }}"
                                                                                title="{{ trans('sidebar.Delete') }}">
                                                                            <i class="ft-book"></i>
                                                                        </button>
                                                                    </td>

                                                                    <!-- Modal Edit end-->
                                                                    <div class="modal fade text-left" id="edit{{ $listSection->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="basicModalLabel1">
                                                                                        {{trans('sidebar.Edit')}}
                                                                                    </h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="{{route('classrooms.update','test')}}" method="post">
                                                                                        {{method_field('patch')}}
                                                                                        @csrf
                                                                                        <input id="id" name="id" type="hidden"  value="{{ $listSection->id }}"/>
                                                                                        <div class="row">
                                                                                            <div class="col-6">
                                                                                                <label for="Name_ar" class="mr-sm-2">{{ trans('sidebar.Name_ar') }}  :</label>
                                                                                                <input id="Name_ar" name="Name_ar" type="text" value="{{$listSection->getTranslation('name', 'ar')}}" class="form-control round">
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <label for="Name_en" class="mr-sm-2">{{ trans('sidebar.Name_en') }} :</label>
                                                                                                <input id="Name_en" name="Name_en" type="text" value="{{$listSection->getTranslation('name', 'en')}}" class="form-control round">
                                                                                            </div>
                                                                                        </div>
                                                                                        <br>

                                                                                        <div class="row">
                                                                                            <div class="col-3">
                                                                                                <label for="Name_ar" class="mr-sm-2">{{ trans('sidebar.Stages') }}  :</label>

                                                                                            </div>
                                                                                            <div class="col-9">
                                                                                                <select id="stage_id" name="stage_id"  class="form-control round">

                                                                                                    <option value=" {{$listSection->Stage->id}}" > {{$listSection->Stage->name}} </option>
                                                                                                    @foreach($Stages as $stage)
                                                                                                        <option value="{{$stage->id}}">{{$stage->name}}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <br>

                                                                                        <div class="row">
                                                                                            <div class="col-3">
                                                                                                <label for="Name_ar" class="mr-sm-2">{{ trans('sidebar.Class') }}  :</label>

                                                                                            </div>
                                                                                            <div class="col-9">
                                                                                                <select id="grade_id" name="grade_id"  class="form-control round">

                                                                                                    <option value="{{$listSection->Grade->id}}" > {{$listSection->Grade->name}} </option>
{{--                                                                                                                                        @foreach($Grades as $Grade)--}}
{{--                                                                                                                                            <option value="{{$Grade->id}}">{{$Grade->name}}</option>--}}
{{--                                                                                                                                        @endforeach--}}
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-3">
                                                                                                <label for="Status">{{ trans('sidebar.Status') }}:</label>

                                                                                                <input class="form-control round" type="checkbox"  name="Status" id="Status"  @if ($listSection->status) checked @endif />
                                                                                            </div>
                                                                                            <div class="col-9">
                                                                                                <label for="Notes">{{ trans('sidebar.Notes') }}:</label>
                                                                                                <textarea class="form-control round" name="Notes" id="Notes" rows="2">{{$listSection->notes}}</textarea>
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

                                                                    <!-- Modal Edit  -->

                                                                    <!-- Modal Delete end-->
                                                                    <div class="modal fade text-left" id="delete{{ $listSection->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
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
                                                                                    <form action="{{route('classrooms.destroy','test')}}" method="post">
                                                                                        {{method_field('Delete')}}
                                                                                        @csrf
                                                                                        <input id="id" name="id" type="hidden"  value="{{ $listSection->id }}"/>
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

                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end  -->

@endsection

@section('Cjs')

    <!-- URL::to('classes') -->
    <script>
        $(document).ready(function () {
            $('select[name="stage_id"]').on('change', function () {
                var Stage_id = $(this).val();
                if (Stage_id) {
                    $.ajax({
                        url: "{{ URL::to('classes') }}/" + Stage_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="grade_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="grade_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });

    </script>
    <!-- URL::to('classes') -->

@stop
