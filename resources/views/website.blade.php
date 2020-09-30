@extends($data['Header'])
@section('content')






 <!-- START REVOLUTION SLIDER 5.0 -->
 <div class="slide-tmargin">
      <div class="slidermaxwidth">
        <div class="rev_slider_wrapper"> 
          <!-- START REVOLUTION SLIDER 5.0 auto mode -->
          <div id="rev_slider" class="rev_slider"  data-version="5.0">
            <ul>
                <?php
                    $rowNum = 0;
                ?>
            @foreach($data['Services'] as $key => $row)
                <?php 
                $rowNum++;
                ?>
              <!-- SLIDE  -->
              <li data-index="rs-<?= $rowNum ?>" data-transition="fade"> 
                
                <!-- MAIN IMAGE --> 
              
                <img src="{{ URL::to('/') }}/images/services/{{ $row->image }}" alt="" class="image-slider"  width="1920" height="1280"> 
                <div class='overLayout'></div>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption roboto white uppercase fweight-7 tp-resizeme" 
			data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			data-y="['top','top','top','top']" data-voffset="['280','200','130','80']" 
			data-fontsize="['70','70','70','40']"
			data-lineheight="['100','100','100','100']"
			data-transform_idle="o:1;"
			data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
			data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
			data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
			data-start="1000" 
			data-splitin="none" 
			data-splitout="none" 
			data-responsive_offset="on" 
			style="z-index: 6; white-space: nowrap; font-size: 30px; line-height: 30px;">
            
            @if($data['EN']==1)
                        <td>{{$row->title}}</td>
                    @else
                        <td>{{$row->title_ar}}</td>
                    @endif
            
  
            
            
            </div>
                
        
           
                
          
              </li>
              @endforeach
              <!-- SLIDE  -->
     
          
            </ul>
          </div>
          <!-- END REVOLUTION SLIDER --> 
        </div>
      </div>
      <!-- END REVOLUTION SLIDER WRAPPER --> 
    </div>
    <div class="clearfix"></div>
    <!-- END OF SLIDER WRAPPER -->

{{-----------------------------------------------------------------------------------------------}}



{{---------------------------------- -  - -start aboutus -----------------------------------------}}
<section class="about sec-padding section-light section-pattren-23">
    <div class="container">

        <div class="row slider-btn-8 no-gutter">
            <div id="owl-demo17" class="owl-carousel owl-theme">
                @foreach($data['AboutUs'] as $key => $row)
                <div class="item">
                    <div class="col-md-6  col-sm-6 col-xs-12 nopadding">
                        <div class="img-box">
                            <div class="overlay"></div>
                            <img src="{{ URL::to('/') }}/images/aboutus/{{ $row->image }}" alt="" class="img-responsive slider_responsivee"/> </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                        <div class="ce-feature-box-10 margin-bottom">
                            <div class="text-box">
                                <div class="col-sm-12 nopadding">
                                    <div class="sec-title-container less-padding-4 text-left">
                                        <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">{{ $row->title }}</h5>
                                        <!-- <h2 class="font-weight-6 less-mar-1 line-height-5">{{ $row->title }}</h2> -->
                                        <div class="ce-title-line align-left"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!--end title-->

                                <p> {{ $row->description }}</p>
                                <br/>
                                <br/>
                                <a class="btn btn-prim btn-medium btn-round uppercase" href="{{URL('/about_us')}}"><i class="fa fa-play-circle" aria-hidden="true"></i> Read more</a> </div>
                        </div>

                    </div>

                    <!--end item-->
                </div>
                <!--end carousel item-->
                @endforeach
            </div>
            <!--end carousel-->

        </div>
    </div>
</section>
<div class="clearfix"></div>
{{---------------------------------- -  - -end aboutus -----------------------------------------}}
{{-----------------------------------------------------------------------------------------------}}


{{---------------------------------- -  - -start services -----------------------------------------}}



<section class="services sec-padding section-primary" style="background:url(./frontend/images/sliders/33.jpg);">
<div class='overLayout'></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="sec-title-container text-center">
                    <h2 class="font-weight-6 less-mar-1 line-height-5">OUR SERVICES</h2>
                    <div class="ce-title-line"></div>
                </div>
            </div>
           
            @foreach($data['Services'] as $key => $row)
           
            <div class="col-md-4 col-sm-6">

                <div class="ce-feature-box-23">
                    <div class="iconbox-tiny round white left icon services_img"><img src="{{ URL::to('/') }}/images/services/{{ $row->image }}"></div>
                    <div class="text-box-right less-padding-1 services_detals">
                        <h6 class="text-white">{{ $row->title }}</h6>
                        <a class="read-more" href="{{route('servicedetails', $row->id)}}">Read more &nbsp; &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            @endforeach

            <!--end item-->
            <div class="col-divider-margin-4"></div>
            <div class="col-divider-margin-4"></div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

{{---------------------------------- -  - -end services -----------------------------------------}}




{{---------------------------------------- start  Portfolio -----------------------------------------}}


{{---------------------------------------- end  Portfolio -----------------------------------------}}



{{---------------------------------------- start  news -----------------------------------------}}

<section class="news sec-padding section-light section-bgimg-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-centered">
                <div class="col-sm-12">
                    <div class="sec-title-container text-center">
                        <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Our Latest news</h5>
                        <h2 class="font-weight-6 less-mar-1 line-height-5">Latest News Posts</h2>
                        <div class="ce-title-line"></div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->
                @foreach($data['News'] as $key => $row)
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 latest_div">
                    <div class="ce-feature-box-34 primary margin-bottom">

                        <div class="clearfix"></div>
                        <br>
                        <h5 class="font-weight-5 title">{{ $row->title }}</h5>
                        <p class="content">{{ $row->description }}</p>
                        <br>
                        <br>
                        <div class="img-box">
                            <div class="imgbox-xtiny left round overflow-hidden"><img src="{{ URL::to('/') }}/images/news/{{ $row->image }}" alt="" class="img-responsive"></div>
                            <div class="text-box-right less-padding text-dark">{{ $row->title }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--end item-->


            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>


{{---------------------------------------- end  news -----------------------------------------}}

{{--------------------------------------------------------------------------------------------}}


{{---------------------------------------- start  clients -----------------------------------------}}


<section class="sec-padding our-team">
  <div class="container">
  <div class="row">

<h4 class="font-weight-6 less-mar-1 line-height-5">OUR Clients</h4>
<div class="ce-title-line"></div>
<div id="js-grid-slider-projects" class="cbp">
@foreach($data['Clients'] as $key => $row)
        <div class="cbp-item graphic">
            <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                    <img src="{{ URL::to('/') }}/images/clients/{{ $row->image }}" alt="">
                </div>
              
            </div>
            
            <!-- <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div> -->
        </div>
      @endforeach
    </div>
  
</div>
  </div>
  </section>





  {{---------------------------------------- end  clients -----------------------------------------}}



<div class="clearfix"></div>

  

  



{{---------------------------------------- end   clients -----------------------------------------}}



{{-------------------------------------------start contact us--------------------------------------}}


<section class="contact sec-padding-4 section-primary contact_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="less-mar-1 font-weight-3 text-white">Interested in working with Us?</h2>
                <div class="clearfix"></div>
                <br>
                <a class="btn btn-border btn-border-1x btn-round white uppercase" href="{{URL('/sendemail')}}"> Contact Us</a> </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

{{-- --------------------------------------   end contact us----------------------------------------}}


@endsection