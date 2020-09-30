@extends('layouts.header')
@section('content')
<div class="clearfix"></div>
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

                <div class="col-md-8 col-sm-8">
                    <div class="smartforms-modal-body">
                        <div class="smart-wrap">
                            <div class="smart-forms smart-container transparent wrap-full">
                                <div class="form-body no-padd">

                                @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
                                    <form method="post" action="{{url('sendemail/send')}}" id="smart-form" novalidate="novalidate">
                                      {{ csrf_field() }}
                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="name" id="sendername" class="gui-input" placeholder="Enter name">
                                                <span class="field-icon"><i class="fa fa-user"></i></span>
                                            </label>
                                        </div><!-- end section -->

                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="email" name="email" id="emailaddress" class="gui-input" placeholder="Email address">
                                                <span class="field-icon"><i class="fa fa-envelope"></i></span>
                                            </label>
                                        </div><!-- end section -->



                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <!-- <textarea class="gui-textarea" id="message" name="message" placeholder="Enter message"></textarea> -->
                                                <textarea name="message" class="gui-textarea" placeholder="Enter message" id="message"></textarea>
                                                <span class="field-icon"><i class="fa fa-comments"></i></span>
                                            </label>
                                        </div><!-- end section -->


                                        <div class="result"></div><!-- end .result  section -->

                                        <!-- end .form-body section -->
                                        <div class="form-footer text-right">
                                            <!-- <button type="submit" data-btntext-sending="Sending..." class="btn btn-prim btn-medium btn-round uppercase">Submit</button> -->
                                            <input type="submit" name="send" class="btn btn-prim btn-round btn-medium uppercase" value="submit"  data-btntext-sending="Sending..." class="btn btn-prim btn-medium btn-round uppercase"/>

                                        </div><!-- end .form-footer section -->
                                    </form>
                                </div><!-- end .form-body section -->
                            </div><!-- end .smart-forms section -->
                        </div><!-- end .smart-wrap section -->
                    </div><!-- end .smart-wrap section -->
                    <!-- end .smart-forms section -->
                </div>
                <!--end item-->

                <div class="col-md-4 col-sm-4 text-left">
                    <h2 class="uppercase"><strong>Get in Touch</strong></h2>
                    <div class="ce-title-line text-left"></div>
                    <br>
                    <h4>Address Info</h4>
                    <h6>Company name :{{ \App\Models\SoicalMedia::findOrfail(1)->title }}</h6>
                    <p>Address :{{ \App\Models\SoicalMedia::findOrfail(1)->address }}</p>
                        Telephone: {{ \App\Models\SoicalMedia::findOrfail(1)->phone_number }}
                      
                    <br>
                    <p>E-mail: mail@future.com</p>
                    <!-- <p>Website: www.yoursitename.com</p> -->
                </div>
                <!--end item-->



            </div>
        </div>
    </section>
    <div class="clearfix"></div>


    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="gmaps-holder-2">
            <div class="col-md-12 nopadding"> <br/>
              <div id="map_extended_full" class="map">
                <p>This will be replaced with the Google Map.</p>
              </div>
            </div>
          </div>
          <!--end item--> 
          
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
@endsection


