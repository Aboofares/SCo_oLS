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
                    <h1 class="ml12 wow fadeInDown">Chameleon Admin</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome thumb -->

    <a href="#" target="_blank">
        <div class="welcome-thumb mx-auto wow fadeInDown cover atvImg mx-auto d-block">
            <div class="cover atvImg">
                <div class="atvImg-layer" data-img="c"></div>
                <div class="atvImg-layer" data-img="{{ URL::asset('landing-page/img/bg-img/welcome-img.png') }}"></div>
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
                    <p>Extra Components</p>
                    <h1 class="text-header text-uppercase mb-0">COMPONENTS</h1>
                    <hr class="line-style mx-auto d-block">
                    <p class="mt-3">Ready to use different types of components.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-calendar" aria-hidden="true"></div>
                <p>Calendars</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-bar-chart" aria-hidden="true"></div>
                <p>Charts</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-map" aria-hidden="true"></div>
                <p>Maps</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-image" aria-hidden="true"></div>
                <p>Media</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-alert" aria-hidden="true"></div>
                <p>Alerts</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-menu-alt" aria-hidden="true"></div>
                <p>Toastr</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-more-alt" aria-hidden="true"></div>
                <p>Progress</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-star" aria-hidden="true"></div>
                <p>Ratings</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-bolt" aria-hidden="true"></div>
                <p>Icons</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-link" aria-hidden="true"></div>
                <p>Buttons</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-paint-bucket" aria-hidden="true"></div>
                <p>Pickers</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-layout" aria-hidden="true"></div>
                <p>Modals</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-pin-alt" aria-hidden="true"></div>
                <p>Tabs & Pills</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-medall-alt" aria-hidden="true"></div>
                <p>Badges</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-text" aria-hidden="true"></div>
                <p>Typography</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-layout-column3" aria-hidden="true"></div>
                <p>Tables</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-layout-cta-left" aria-hidden="true"></div>
                <p>Wizard</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-angle-down" aria-hidden="true"></div>
                <p>Dropdowns</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-reload" aria-hidden="true"></div>
                <p>Repeater</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-layout-grid2" aria-hidden="true"></div>
                <p>Data Tables</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-pencil" aria-hidden="true"></div>
                <p>Editors</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-control-stop" aria-hidden="true"></div>
                <p>Block UI</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-export" aria-hidden="true"></div>
                <p>File Uploader</p>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-40 icon-hover">
                <div class="h1 ti-plus" aria-hidden="true"></div>
                <p>And More</p>
            </div>
        </div>
    </div>
</section>
<!-- ***** Components End ***** -->

<!-- ***** Pricing Plane Area Start *****==== -->
<section class="pricing-plane-area p-50 clearfix bg-primary" id="purchase">
    <div class="container-fluid text-center">
        <h2 class="text-white">All of these for a Perfect Price</h2>
        <h1 class="mt-4 text-big-md text-white">Only $28 NOW</h1>
        <a href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" class="btn btn-primary mt-4" target="_blank">Purchase Now</a>
    </div>
</section>
<!-- ***** Pricing Plane Area End ***** -->

@endsection
@section('CustomScripts')

@endsection
