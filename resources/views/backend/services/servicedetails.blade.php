@extends('layouts.header')
@section('content')

<section class="section-side-image clearfix">
        <div class="img-holder col-md-12 col-sm-12 col-xs-12">
            <div class="background-imgholder" style="background:url(../frontend/images/sliders/services.jpg);"><img class="nodisplay-image" src="images/sliders/services.jpg" alt=""/> </div>
        </div>
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                    <div class="header-inner less-height">
                        <div class="overlay">
                            <div class="text text-center">
                                <h3 class="uppercase text-white less-mar-1 title">Service Details</h3>
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
 







    <section class="sec-padding wow slideInLeft ServicesDetails" data-wow-duration="2s" data-wow-delay="5s">
        <div class="container">
          <div class="row">
        
            <div class="col-md-7 margin-bottom"> <img src="{{ URL::to('/') }}/images/services/{{ $data['currentservice']->image}}" alt="" class="img-responsive"> </div>
            <!--end item-->
            
            <div class="col-md-5 margin-bottom">
              <h3 class="uppercase">{{ $data['currentservice']->title }} </h3>
             <br>
             <p>
             {{ $data['currentservice']->description }} 
             </p>
             <div class="clearfix"></div>
             <br><br>
              </div>
            <!--end item--> 

          </div>
        </div>
      </section>
        <div class="clearfix"></div>




        <div class="style">
        <section class="services sec-padding section-primary">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-xs-12">
                  <div class="sec-title-container text-center">
                    <h2 class="font-weight-6 less-mar-1 line-height-5">MORE SERVICES</h2>
                    <div class="ce-title-line"></div>
                  </div>
                </div>
                @foreach($data['allservice'] as $key => $row)
                @if ($row->id !=$data['currentservice']->id)
            <div class="col-md-4 col-xs-12">

                <div class="ce-feature-box-23">
                    <div class="iconbox-tiny round white left icon"><img src="{{ URL::to('/') }}/images/services/{{ $row->image }}"></div>
                    <div class="text-box-right less-padding-1">
                        <h6 class="text-white">{{ $row->title }}</h6>
                        <a class="read-more" href="{{route('servicedetails', $row->id)}}">Read more &nbsp; &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>

                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <!--end item-->
            <div class="col-divider-margin-4"></div>
            <div class="col-divider-margin-4"></div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<!-- end section -->


<!-- our clients  -->



<div class="divider-line solid light"></div>
    <section class="client sec-padding-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="sec-title-container text-center">
              <h2 class="font-weight-6 less-mar-1 line-height-5">Our Clients</h2>
              <div class="ce-title-line"></div>
          </div>
          </div>
          <div id="owl-demo11" class="owl-carousel owl-theme">
            <div class="owl-wrapper-outer"><div class="owl-wrapper"><div class="owl-item"><div class="item">
              <ul class="clients-list grid-cols-5 hover-7 noborder">
                <li><a href="#"><img src="{{asset('frontend/images/icons/15.png')}}" alt=""></a></li>

                

                
                <li><a href="#"><img src="{{asset('frontend/images/icons/11.png')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('frontend/images/icons/12.png')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('frontend/images/icons/13.png')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('frontend/images/icons/14.png')}}" alt=""></a></li>
              </ul>
            </div></div><div class="owl-item"><div class="item">

            </div></div></div></div>
            <!--end carousel item-->
            
            
            <!--end carousel item--> 
            
          </div>
          <!--end carousel--> 
          
        </div>
      </div>
    </section>
    <div class="clearfix"></div>

<!-- end clients  -->





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



@endsection