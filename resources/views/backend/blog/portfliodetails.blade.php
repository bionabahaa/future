@extends('layouts.header')
@section('content')

<div class="over-loader loader-live">
    <div class="loader">
        <div class="loader-item style4">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
</div>
<!--end loading-->
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
                                    <h3 class="uppercase text-white less-mar-1 title">Portfolio details</h3>
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

<section class="portfolio-page sec-padding">
            <div class="container">
                <div class="row">

                    <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
<!--                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">-->
<!--                            All <div class="cbp-filter-counter"></div>-->
<!--                        </div>-->
<!--                        <div data-filter=".identity" class="cbp-filter-item">-->
<!--                            Identity <div class="cbp-filter-counter"></div>-->
<!--                        </div>-->
<!--                        <div data-filter=".web-design" class="cbp-filter-item">-->
<!--                            Web Design <div class="cbp-filter-counter"></div>-->
<!--                        </div>-->
<!--                        <div data-filter=".graphic" class="cbp-filter-item">-->
<!--                            Graphic <div class="cbp-filter-counter"></div>-->
<!--                        </div>-->
<!--                        <div data-filter=".logos" class="cbp-filter-item">-->
<!--                            Logo <div class="cbp-filter-counter"></div>-->
<!--                        </div>-->
                    </div>

                    <div id="js-grid-juicy-projects" class="cbp">
                        <div class="cbp-item graphic">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset('frontend/images/portfolio/1.jpeg')}}" alt="">
                                    
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="{{asset('frontend/images/portfolio/1.jpeg')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">Hygiene equipment</div>
                        </div>
                        <div class="cbp-item graphic logos">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset('frontend/images/portfolio/3.png')}}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="{{asset('frontend/images/portfolio/3.png')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">Hygiene equipment</div>
                        </div>
                        <div class="cbp-item graphic logos">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset('frontend/images/portfolio/2.jpeg')}}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="{{asset('frontend/images/portfolio/2.jpeg')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">Hygiene equipment</div>
                        </div>
                        <div class="cbp-item web-design graphic">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset('frontend/images/portfolio/7.png')}}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="{{asset('frontend/images/portfolio/7.png')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">Hygiene equipment</div>
                        </div>
                        <div class="cbp-item identity graphic">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset('frontend/images/portfolio/8.jpg')}}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="{{asset('frontend/images/portfolio/8.jpg')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">Hygiene equipment</div>
                        </div>
                        <div class="cbp-item graphic web-design">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset('frontend/images/portfolio/6.png')}}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="{{asset('frontend/images/portfolio/6.png')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">Hygiene equipment</div>
                        </div>






                    </div>

                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- end section -->




        
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