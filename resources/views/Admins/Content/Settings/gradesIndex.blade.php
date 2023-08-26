

@extends('Theme.layouts.master')

@section('page_header')

    {{trans('sidebar.Grades')}}

@stop

@section('page_title')

    {{trans('sidebar.Grades-List')}}

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
    <div class="modal fade" id="default" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="basicModalLabel1">
                        {{trans('sidebar.Grades-Add')}}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="form row" action="{{route('grades.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                        <div class="repeater-default">
                            <div data-repeater-list="listGrades">
                                <div data-repeater-item>
                                    <div class="form row">

                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <label for="Name_ar">{{ trans('sidebar.Name_ar') }}:</label>
                                            <br>
                                            <input id="Name_ar" name="Name_ar" type="text"  class="form-control round">
                                        </div>
                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <label for="Name_en" >{{ trans('sidebar.Name_en') }}:</label>
                                            <br>
                                            <input id="Name_en" name="Name_en" type="text" class="form-control round">
                                        </div>
                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <label for="Stages" >{{ trans('sidebar.Stages') }}  :</label>
                                            <br>
                                            <select id="stage_id" name="stage_id"  class="form-control round">

                                                <option value="0" >----- </option>
                                                @foreach($Stages as $stage)
                                                    <option value="{{$stage->id}}">{{$stage->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="skin skin-flat form-group mb-1 col-sm-12 col-md-2">
                                            <label for="Status">{{ trans('sidebar.Status') }}:</label>
                                            <br>
                                            <input type="checkbox" class="form-control round" name="Status" id="Status" />
                                        </div>
                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                            <label for="Notes">{{ trans('sidebar.Notes') }}:</label>
                                            <br>
                                            <textarea class="form-control round" name="Notes" id="Notes" rows="2"></textarea>
                                        </div>


                                        <div class="form-group col-sm-12 col-md-2 text-center mt-2">
                                            <button type="button" class="btn btn-danger" data-repeater-delete>
                                                <i class="ft-x"></i> </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group overflow-hidden">
                                <div class="col-12">
                                    <button type="button" data-repeater-create class="btn btn-primary">
                                        <i class="ft-plus"></i> Add
                                    </button>
                                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">   {{trans('sidebar.Close')}}</button>
                                    <button type="submit" class="btn btn-danger">   {{trans('sidebar.Submit')}}</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>


                </div>


            </div>
        </div>
    </div>
    <!-- Modal add  -->

    <!-- حذف مجموعة صفوف -->
    <div class="modal fade" id="delete_all" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                        {{ trans('sidebar.Delete-All') }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('delete_all') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        {{trans('sidebar.Warning')}}
                        <input class="text" type="hidden" id="delete_all_id" name="delete_all_id" value=''>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('sidebar.Close')}}</button>
                        <button type="submit" class="btn btn-danger">{{trans('sidebar.Submit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- حذف مجموعة صفوف -->

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
                            <div class="row">
                                <div class="col-3">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary round" data-toggle="modal" data-target="#default">
                                        {{trans('sidebar.Add')}}
                                    </button>
                                    <!-- end Button trigger modal -->
                                </div>
                                 <div class="col-3">
                                     <!-- Button trigger btn_delete_all -->
                                     <button type="button" class="btn btn-danger round" id="btn_delete_all" data-toggle="modal" >
                                         {{ trans('sidebar.Delete-All') }}
                                     </button>
                                     <!-- Button trigger btn_delete_all -->
                                 </div>

                                <div class="col-6">
                                    <form action="{{ route('Filter_Grades') }}" method="POST">
                                        {{ csrf_field() }}

                                        <select class="custom-select mr-sm-2"   name="Stage_id" required  onchange="this.form.submit()">
                                            <option value="" selected disabled>{{ trans('sidebar.Search_By_Stage') }}</option>
                                            @foreach ($Stages as $Stage)
                                                <option value="{{ $Stage->id }}">{{ $Stage->name }}</option>
                                            @endforeach
                                        </select>
                                    </form>
                                </div>
                            </div>
<br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr style="text-align: center;">
                                        <th><input name="select_all" id="example-select-all" type="checkbox" onclick="CheckAll('box1', this)" /> </th>
                                        <th>#</th>
                                        <th>{{trans('sidebar.Name')}}</th>
                                        <th>{{trans('sidebar.Notes')}}</th>
                                        <th>{{trans('sidebar.Status')}}</th>
                                        <th>{{trans('sidebar.Stage')}}</th>
                                        <th>{{trans('sidebar.Processes')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @if (isset($details))

                                        <?php
                                        $ListGrades = $details; ?>
                                    @else

                                        <?php $ListGrades = $Grades; ?>
                                    @endif


                                    @foreach($ListGrades as $Grade)
                                        <tr>
                                            <td style="text-align: center;"><input type="checkbox"  value="{{ $Grade->id }}" class="box1"  ></td>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$Grade->name}}</td>
                                            <td>{{$Grade->notes}}</td>
                                            <td>

                                                <input class="form-check-input" type="checkbox"   @if ($Grade->status) checked @endif disabled/>
                                            </td>
                                            <td>
                                                {{$Grade->Stage->name}}

                                            </td>
                                            <td>

                                                <button type="button" class="btn btn-outline-warning box-shadow-4 mr-1"
                                                        data-toggle="modal" data-target="#edit{{ $Grade->id }}"
                                                        title="{{ trans('sidebar.Edit') }}">
                                                    <i class="ft-bookmark"></i>
                                                </button>

                                                <button type="button" class="btn btn-outline-danger box-shadow-4 mr-1"
                                                        data-toggle="modal" data-target="#delete{{ $Grade->id }}"
                                                        title="{{ trans('sidebar.Delete') }}">
                                                    <i class="ft-book"></i>
                                                </button>
                                            </td>

                                            <!-- Modal Edit end-->
                                            <div class="modal fade text-left" id="edit{{ $Grade->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
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
                                                            <form action="{{route('grades.update','test')}}" method="post">
                                                                {{method_field('patch')}}
                                                                @csrf
                                                                <input id="id" name="id" type="hidden"  value="{{ $Grade->id }}"/>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <label for="Name_ar" class="mr-sm-2">{{ trans('sidebar.Name_ar') }}  :</label>
                                                                        <input id="Name_ar" name="Name_ar" type="text" value="{{$Grade->getTranslation('name', 'ar')}}" class="form-control round">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="Name_en" class="mr-sm-2">{{ trans('sidebar.Name_en') }} :</label>
                                                                        <input id="Name_en" name="Name_en" type="text" value="{{$Grade->getTranslation('name', 'en')}}" class="form-control round">
                                                                    </div>
                                                                </div>
                                                                <br>

                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <label for="Name_ar" class="mr-sm-2">{{ trans('sidebar.Stages') }}  :</label>

                                                                    </div>
                                                                    <div class="col-9">
                                                                        <select id="stage_id" name="stage_id"  class="form-control round">

                                                                            <option value=" {{$Grade->Stage->id}}" > {{$Grade->Stage->name}} </option>
                                                                            @foreach($Stages as $stage)
                                                                                <option value="{{$stage->id}}">{{$stage->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <label for="Status">{{ trans('sidebar.Status') }}:</label>

                                                                        <input class="form-control round" type="checkbox"  name="Status" id="Status"  @if ($Grade->status) checked @endif />
                                                                    </div>
                                                                    <div class="col-9">
                                                                        <label for="Notes">{{ trans('sidebar.Notes') }}:</label>
                                                                        <textarea class="form-control round" name="Notes" id="Notes" rows="2">{{$Grade->notes}}</textarea>
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
                                            <div class="modal fade text-left" id="delete{{ $Grade->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
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
                                                            <form action="{{route('grades.destroy','test')}}" method="post">
                                                                {{method_field('Delete')}}
                                                                @csrf
                                                                <input id="id" name="id" type="hidden"  value="{{ $Grade->id }}"/>
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
            </div>
        </div>
    </section>
    <!-- section end  -->


@endsection

@section('Cjs')




    <script>
        function CheckAll(className, elem) {
            var elements = document.getElementsByClassName(className);
            var l = elements.length;

            if (elem.checked) {
                for (var i = 0; i < l; i++) {
                    elements[i].checked = true;
                }
            } else {
                for (var i = 0; i < l; i++) {
                    elements[i].checked = false;
                }
            }
        }
    </script>

    <script type="text/javascript">
        $(function() {
            $("#btn_delete_all").click(function() {
                var selected = new Array();
                $("input.box1:checkbox:checked").each(function() {
                    selected.push(this.value);
                });

                if (selected.length > 0) {
                    $('#delete_all').modal('show')
                    $('input[id="delete_all_id"]').val(selected);
                }
                else{
                    alert('Please choose First');
                }
            });
        });

    </script>





    <script src="{{ URL::asset('Theme/ltr/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('Theme/ltr/app-assets/js/scripts/forms/form-repeater.js') }}" type="text/javascript"></script>
@stop
