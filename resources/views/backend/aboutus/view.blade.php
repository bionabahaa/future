 @extends('layouts.header')
@section('content')

<section class="section-side-image clearfix">
        <div class="img-holder col-md-12 col-sm-12 col-xs-12">
            <div class="background-imgholder" style="background:url(./frontend/images/sliders/services.jpg);"><img class="nodisplay-image" src="{{ asset('frontend/images/sliders/slider-2.jpg')}}" alt=""/> </div>
        </div>
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                    <div class="header-inner less-height">
                        <div class="overlay">
                            <div class="text text-center">
                                <h3 class="uppercase text-white less-mar-1 title">About Us</h3>
                                <div class="ce-title-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=" clearfix"></div>
    <!--end header section -->

    <div class="about-page">
        <div class="sec-padding about-img img-responsive">
            <div class="container">
                <div class="row">

                    @foreach($aboutus_data as $key => $row)
                     @if($key ==0 )
                    <div class="col-lg-5 col-md-12">
                        <img src="{{ URL::to('/') }}/images/aboutus/{{ $row->image }}">
                      </div>
                       <div class="col-lg-7 col-md-12  py-4 caption">
                         <h2 class="font-weight-6 less-mar-1 line-height-5">{{ $row->title }}</h2>
                        <p>

                            {{ $row->description }}
                        </p>

                       </div>
                        @endif
                        @endforeach


                </div>
            </div>
        </div>



        <div class="clearfix"></div>
        <!-- end section -->
        <section class="sec-padding section-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="sec-title-container text-center">
                            <div class="ce-title-line"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <!--end title-->

                    @foreach($aboutus_data as $key => $row)
                    @if($key > 1)
                    <div class="col-md-4">
                        <div class="ce-feature-box-5 text-left margin-bottom">
                            <div class="img-box">
                                <div class="overlay"></div>
                                <img src="{{ URL::to('/') }}/images/aboutus/{{ $row->image }}"> </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div class="text-box no-border">
                                <h5 class="title font-weight-5">{{ $row->title }}</h5>
                                <p>{{ $row->description }}</p>

                            </div>
                        </div>
                    </div>
                    <!--end item-->

                    @endif
                        @endforeach

                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- end section -->

        <div class="sec-padding about-img img-responsive">
            <div class="container">
                <div class="row">
                    @foreach($aboutus_data as $key => $row)
                        @if($key == 1)
                    <div class="col-lg-5 col-md-12">
                        <img src="{{ URL::to('/') }}/images/aboutus/{{ $row->image }}">
                    </div>
                    <div class="col-lg-7 col-md-12  py-4 caption">
                        <h2 class="font-weight-6 less-mar-1 line-height-5">{{ $row->title }}</h2>
                        <p>{{ $row->description }} </p>

                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- end section -->

    </div>

    {{-------------------------------------------start contact us--------------------------------------}}


<section class="contact sec-padding-4 section-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="less-mar-1 font-weight-3 text-white">Interested in working with Us?</h2>
                <div class="clearfix"></div>
                <br>
                <a class="btn btn-border btn-border-1x btn-round white uppercase" href="{{URL('/contactus')}}"> Contact Us</a> </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

{{-- --------------------------------------   end contact us----------------------------------------}}


    @endsection
