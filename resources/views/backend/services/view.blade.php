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
                                <h3 class="uppercase text-white less-mar-1 title">Our Services</h3>
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



    <section class="Service-page sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sec-title-container text-center">
                        <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Our Services</h5>
                        <h2 class="font-weight-6 less-mar-1 line-height-5">Best Popular Services</h2>
                        <div class="ce-title-line"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->
                @foreach($Services_data as $key => $row)
                <div class="col-md-4">

                    <div class="ce-feature-box-12 text-left">
                        <div class="icon-plain-small center icon"><img src="{{ URL::to('/') }}/images/services/{{ $row->image }}"></div>
                        <br>
                        <h5 class="title font-weight-5">{{ $row->title }} </h5>
                        <a class="read-more" href="{{route('servicedetails', $row->id)}}">Read more &nbsp; &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>

                </div>

            @endforeach
                <!--end item-->



                <div class="clearfix"></div>


            </div>
        </div>
    </section>



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