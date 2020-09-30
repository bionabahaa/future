@extends('layouts.header')
@section('content')


    <section class="section-side-image clearfix">
        <div class="img-holder col-md-12 col-sm-12 col-xs-12">
            <div class="background-imgholder" style="background:url(./frontend/images/sliders/services.jpg);"><img class="nodisplay-image" src="{{ asset('frontend/images/sliders/services.jpg')}}" alt=""/> </div>


        </div>
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                    <div class="header-inner less-height">
                        <div class="overlay">
                            <div class="text text-center">
                                <h3 class="uppercase text-white less-mar-1 title">FAQ</h3>
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

    <section class="FAQ sec-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="col-md-12 nopadding">
                        @foreach($faq_data as $key => $row)
                        <div class="accordion_head style-2"><i class="fa fa-pencil" aria-hidden="true"></i>{{ $row->title }}<span class="plusminus">+</span>

                        </div>
                        <div class="accordion_body" style="display: none;">
                            <p>{{ $row->description }}</p>
                        </div>


                       @endforeach
                    </div>
                    <!--end item-->



                    <div class="clearfix"></div>
                    <!-- end section -->
                </div>
                <!--end left col-->
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <div class="divider-line solid light"></div>




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