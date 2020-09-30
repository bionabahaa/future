@extends('layouts.header')
@section('content')

    <div class="clearfix"></div>
    <section class="section-side-image clearfix">
        <div class="img-holder col-md-12 col-sm-12 col-xs-12">
            <div class="background-imgholder" style="background:url(./frontend/images/sliders/slider-2.jpg);"><img class="nodisplay-image" src="images/sliders/slider-2.jpg" alt=""/> </div>
        </div>
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                    <div class="header-inner less-height">
                        <div class="overlay">
                            <div class="text text-center">
                                <h3 class="uppercase text-white less-mar-1 title">CONTACT US</h3>
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

    <section class="sec-padding contact">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="smartforms-modal-body">
                        <div class="smart-wrap">
                            <div class="smart-forms smart-container transparent wrap-full">
                                <div class="form-body no-padd">
                                    <form method="post" action="php/smartprocess.php" id="smart-form" novalidate="novalidate">

                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name">
                                                <span class="field-icon"><i class="fa fa-user"></i></span>
                                            </label>
                                        </div><!-- end section -->

                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address">
                                                <span class="field-icon"><i class="fa fa-envelope"></i></span>
                                            </label>
                                        </div><!-- end section -->



                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                                                <span class="field-icon"><i class="fa fa-comments"></i></span>
                                                <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span>
                                            </label>
                                        </div><!-- end section -->


                                        <div class="result"></div><!-- end .result  section -->

                                        <!-- end .form-body section -->
                                        <div class="form-footer text-right">
                                            <button type="submit" data-btntext-sending="Sending..." class="btn btn-prim btn-medium btn-round uppercase">Submit</button>

                                        </div><!-- end .form-footer section -->
                                    </form>
                                </div><!-- end .form-body section -->
                            </div><!-- end .smart-forms section -->
                        </div><!-- end .smart-wrap section -->
                    </div><!-- end .smart-wrap section -->
                    <!-- end .smart-forms section -->
                </div>
                <!--end item-->

                <div class="col-md-4 text-left">
                    <h2 class="uppercase"><strong>Get in Touch</strong></h2>
                    <br>
                    <h4>Address Info</h4>
                    <h6>{{ \App\Models\SoicalMedia::findOrfail(1)->address }}</h6>
                    <p>
                        Telephone:{{ \App\Models\SoicalMedia::findOrfail(1)->phone_number }}</p>
                    <br>
                    <p>E-mail: mail@future.com</p>
                    <p>Website: www.future.com</p>
                </div>
                <!--end item-->



            </div>
        </div>
    </section>
    <div class="clearfix"></div>

@endsection