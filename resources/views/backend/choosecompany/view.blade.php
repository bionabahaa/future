@extends('layouts.header')
@section('content')
    <div class="clearfix"></div>
    <section class="section-side-image clearfix choose-page">
        <div class="img-holder col-md-12 col-sm-12 col-xs-12">
            <div class="background-imgholder" style="background:url(./frontend/images/sliders/services.jpg);"><img class="nodisplay-image" src="{{ asset('frontend/images/sliders/slider-2.jpg')}}" alt=""/> </div>
        </div>
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                    <div class="header-inner less-height">
                        <div class="overlay">
                            <div class="text text-center">
                                <h3 class="uppercase text-white less-mar-1 title">Why are Choose Future Company ?                    </h3>
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



    <section class="choose sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="uppercase">Choose Future</h4>
                </div>
                <div class="clearfix"></div>
                <br>

                <!--end item-->
                <ol class="list-1 border-dark">
                    @foreach($choose_data as $key => $row)
                        <div class="col-md-4">

                            <li>{{ $row->title }}</li>


                        </div>
                    @endforeach
                </ol>
                <!--end item-->

            </div>
        </div>
    </section>
    <div class="clearfix"></div>



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