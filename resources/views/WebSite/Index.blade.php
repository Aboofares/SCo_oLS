@extends('WebSite.NweBincludes.NewWebsiteMaster')
@section('title', 'NewWEb')

@section('CustomStyles')


@stop

@section('content')



<!-- ***** Wellcome Area Start ***** -->
<section class="wellcome_area clearfix mb-100" id="home">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-md text-center">
                <div class="wellcome-heading">
                    <h1 class="ml12 wow fadeInDown">{{ $setting['school_nameEn'] }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome thumb -->

    <a href="#" target="_blank">
        <div class="welcome-thumb mx-auto wow fadeInDown cover atvImg mx-auto d-block">
            <div class="cover atvImg">
                <div class="atvImg-layer" data-img="c"></div>
                <div class="atvImg-layer" data-img="{{ URL::asset('Images/ProfileImages/WebSite/'.$setting['logo']) }}"></div>
{{--                {{ URL::asset('landing-page/img/bg-img/welcome-img.png') }}--}}
            </div>
        </div>
    </a>
    <div class="text-center">
        <h5 class="mt-5 mb-4 text-min-white">School-Name<br>we are prof.</h5>
        <a class="btn btn-primary" target="_blank" href="#">Other</a>
        <a class="btn btn-primary ml-3 ml-md-1" target="_blank" href="#">Application</a>
    </div>
</section>
<!-- ***** Wellcome Area End ***** -->

<!-- ***** Demos ***** -->
<section class="bg-grey p-80" id="demos">
    <div class="special_description_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                      <h1 class="text-header text-uppercase m-0">About</h1>
                        <hr class="line-style mx-auto d-block">
                    </div>
                </div>
                <div class="col-lg-8 col-12 mt-8 text-center demo-3">
                    <h5 class="text-center mb-3">Welcome:</h5>
                  <p>sdgdsgsdgsdgsdg</p>
                </div>
                <div class="col-lg-4 col-12 mt-4 text-center demo-3 image-hover wow fadeInDown">

                    <a href="#" target="_blank">
                        <img class="border-grey" src="{{ URL::asset('landing-page/img/scr-img/app-3.png') }}" alt="Apps Image"></a>
                        <div class="btn-group mt-2" role="group" aria-label="Basic example">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Demos End ***** -->

<!-- ***** Cool Facts Area Start ***** -->
<section class="cool-facts-area clearfix" id="counters">
    <div class="container-fluid">
        <div class="row text-center">
            <!-- Single Cool Fact-->
            <div class="col-lg-12">
                <p>gfgfg</p>
            </div>

        </div>
        <hr>
        <div class="row text-center">
            <!-- Single Cool Fact-->
            <div class="col-lg-3 col-6 mt-4">
                <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-area">
                        <h3><span class="counter">100</span>+</h3>
                    </div>
                    <div class="cool-facts-content">
                        <p>Teachers</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-lg-3 col-6 mt-4">
                <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-area">
                        <h3><span class="counter">200</span>+</h3>
                    </div>
                    <div class="cool-facts-content">
                        <p>Certificates</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-lg-3 col-6 mt-4">
                <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-area">
                        <h3><span class="counter">50</span>+</h3>
                    </div>
                    <div class="cool-facts-content">
                        <p>Schools</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-lg-3 col-6 mt-4">
                <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.8s">
                    <div class="counter-area">
                        <h3><span class="counter">100</span>+</h3>
                    </div>
                    <div class="cool-facts-content">
                        <p>Generations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Cool Facts Area End ***** -->

<!-- ***** Components ***** -->
<section class="bg-white p-80 pb-150" id="components">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12 mb-4">
                <div class="section-heading">
                    <h1 class="text-header text-uppercase mb-0">School Features</h1>
                    <hr class="line-style mx-auto d-block">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-calendar" aria-hidden="true"></div>
                <p>Calendars</p>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-bar-chart" aria-hidden="true"></div>
                <p>Charts</p>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-map" aria-hidden="true"></div>
                <p>Maps</p>
            </div>
        </div>
    </div>
</section>
<!-- ***** Components End ***** -->

<!-- ***** Demos ***** -->
<section class="bg-grey p-80" id="layouts">
    <div class="special_description_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h1 class="text-header text-uppercase m-0">Contact Us</h1>
                        <hr class="line-style mx-auto d-block">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 text-center" >
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label class="mr-sm-2">{{ trans('sidebar.Email') }}  :</label>
                                <input  name="Uemail" type="email" class="form-control round">
                            </div>
                            <div class="col-6">
                                <label class="mr-sm-2">{{ trans('sidebar.Name') }} :</label>
                                <input  name="Uname" type="text"  class="form-control round">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="mr-sm-2">{{ trans('sidebar.UMassage') }}  :</label>
                                <textarea name="UMassage" type="email" class="form-control round" rows="3">  </textarea>
                            </div>

                        </div>
                        <hr>
                        <button type="submit" class="btn btn-danger">   {{trans('mainTransCustom.Submit')}}</button>
                    </form>
                </div>
                <div class="col-lg-3 text-center" >



                </div>
                <div class="col-lg-1 text-center" >
                    <table  style="width: 100%">
                        <tr>
                            <td>
                                <div class="icon-hover">
                                <a href="{{ $setting['school_fb'] }}"><div class="ti-facebook" aria-hidden="true"> </div></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>

                                <div class="icon-hover">
                                    <a href="{{ $setting['school_ins'] }}"><div class="ti-instagram" aria-hidden="true"> </div></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="icon-hover">
                                    <a href="{{ $setting['school_email'] }}"><div class="ti-email" aria-hidden="true"> </div></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="icon-hover">
                                    <a href="{{ $setting['school_email'] }}"><div class="ti-mobile" aria-hidden="true"> </div></a>
                                </div>
                            </td>
                            <td>
                                {{ $setting['school_phone'] }}<br>
                                {{ $setting['school_phone2'] }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Demos End ***** -->




@endsection
@section('CustomScripts')

@endsection
