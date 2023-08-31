

@extends('Theme.layouts.masterT')

@section('page_header')
{{trans('mainTransCustom.Profile')}}
@stop
@section('CustomHead')

@endsection
@section('page_title')
    {{trans('mainTransCustom.Profile')}}


@stop
@section('breadcrumb')
    <div class="breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="#">
                        {{trans('mainTransCustom.Dashboard')}}</a>
                </li>

                @for($i = 3; $i <= count(Request::segments()); $i++)
                    <li class="breadcrumb-item active">
                        <a href="{{Request::segment($i)}}">
                            {{trans('mainTransCustom.Profile')}}
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
                       profilee
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <form id="formAddProfilePic" method="POST"  action="" enctype="multipart/form-data" class="form">
                            @csrf
                            <input type="text" value="{{ Auth::user()->id}}" class="form-control round" name="ProfileId" id="ProfileId" />
                            <div class="row">
                                <div class="col-12">
                                    <label for="Status">{{ trans('sidebar.Picture') }}:</label>
                                    <input type="file" class="form-control round" name="ProfilePic" id="ProfilePic" />
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn grey btn-secondary" data-dismiss="modal">   {{trans('sidebar.Close')}}</button>
                                <button type="button" id="btnAddProfilePic" class="btn btn-danger">   {{trans('sidebar.Submit')}}</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Modal add  -->

    <!-- Modal add end-->
    <div class="modal fade text-left" id="Edit" tabindex="-2" role="dialog" aria-labelledby="basicModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="basicModalLabel1">
                        profilee edit
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <form id="formEditProfilePic" method="POST"  action="" enctype="multipart/form-data" class="form">
                            @csrf
                            <input type="text" value="{{ Auth::user()->id}}" class="form-control round" name="ProfileId" id="ProfileId" />
                            <div class="row">
                                <div class="col-12">
                                    <label for="Status">{{ trans('sidebar.Picture') }}:</label>
                                    <input type="file" class="form-control round" name="ProfilePic" id="ProfilePic" />
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn grey btn-secondary" data-dismiss="modal">   {{trans('sidebar.Close')}}</button>
                                <button type="button" id="btnEditProfilePic" class="btn btn-danger">   {{trans('sidebar.Submit')}}</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Modal add  -->


    <div class="row">
        <div class="col-3">
            <!--Project Timeline div starts-->
            <div class="card">

                <div class="card-body">

                    @if( Auth::user()->profileImageURL)

                            <img src="{{ URL::asset('Images/ProfileImages/Teachers/'.Auth::user()->profileImageURL) }}" class="rounded-circle img-border height-100" alt="{{ Auth::user()->name }}">
                        <a href="#"  data-toggle="modal" data-target="#Edit"> Edit</a>
                    @else
               <a href="#" class="profile-image" data-toggle="modal" data-target="#default">
                    <img src="{{ URL::asset('Theme/rtl/app-assets/images/portrait/small/avatar-s-1.png') }}" class="rounded-circle img-border height-100" alt="{{ Auth::user()->name }}">
                </a>
                    @endif

                </div>
            </div>
            <!--Project Timeline div ends-->
        </div>
        <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            {{ Auth::user()->name }}<br>
                            {{ Auth::user()->email}}<br>
                            <hr>
                        <div class="row">
    <div class="col-6">
        <form id="FormResetPassword" method="POST"  action="" enctype="multipart/form-data" class="form">
            @csrf
            <input value="{{Auth::user()->id}}" name="id"  id="id" type="hidden" class="form-control round">
            <label >Password</label>
            <input  name="passNew"  id="passNew" type="password" class="form-control round">
            <br>
            <button type="button" id="btnResetPassword" class="btn btn-danger">   {{trans('sidebar.Reset')}}</button>
        </form>
    </div>
</div>
                        </div>
                    </div>
            </div>
    </div>


@endsection
@section('Cjs')

    {{--strt upload img  --}}
    <script>
        $(document).on('click', '#btnAddProfilePic', function (e) {
            e.preventDefault();
            var formData = new FormData($('#formAddProfilePic')[0]);

            $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{route('TProfileImageUrl')}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {

                    // console.log(data.selectedimg.pimageURL);

                    // $('#AddProfilePicModal').modal('hide');
                    window.location.reload();
                },
                error: function (reject) {

                    console.log(reject);
                }
            });
        });
    </script>
    {{--strt upload img  --}}

    {{--strt upload img  --}}
    <script>
        $(document).on('click', '#btnEditProfilePic', function (e) {
            e.preventDefault();
            var formData = new FormData($('#formEditProfilePic')[0]);

            $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{route('TProfileImageUrlE')}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {

                    // console.log(data.selectedimg.pimageURL);
                    // console.log(data);
                    // $('#AddProfilePicModal').modal('hide');
                    // window.location.reload();

                    // console.log(data.selectedimg.pimageURL);

                    // $('#AddProfilePicModal').modal('hide');
                    window.location.reload();
                },
                error: function (reject) {

                    console.log(reject);
                }
            });
        });
    </script>
    {{--strt upload img  --}}


    {{--strt upload img  --}}
    <script>
        $(document).on('click', '#btnResetPassword', function (e) {
            e.preventDefault();
            var formData = new FormData($('#FormResetPassword')[0]);

            $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{route('TProfilePassword')}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    console.log(data);
                },
                error: function (reject) {
                    console.log(reject);
                }
            });
        });
    </script>
    {{--strt upload img  --}}
@stop

