<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EN-{{\App\Models\TestSeo::findOrfail(1)->title }}</title>

    <meta name="keywords" content="{{ \App\Models\TestSeo::findOrfail(1)->keywords }}"/>
    <meta name="description" content="{{\App\Models\TestSeo::findOrfail(1)->description }}">
    <meta name="subject" content="{{ \App\Models\TestSeo::findOrfail(1)->subject }}">
    <meta name="author" content="codelayers">

    <!-- Mobile view -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->


    <link rel="shortcut icon" href="{{ asset('seo/'.\App\Models\TestSeo::findOrfail(1)->logo) }}">

    <link rel="icon" href="{{ asset('seo/'.\App\Models\TestSeo::findOrfail(1)->logo) }}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/js/bootstrap/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('frontend/js/bootstrap/ar/bootstrap.min.rtl.css')}}"> -->

    <!-- Google fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">

    <!-- Template's stylesheets -->


    <link rel="stylesheet" href="{{asset('frontend/js/megamenu/stylesheets/screen.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme-default.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/js/loaders/stylesheets/screen.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/corporate.css')}}" type="text/css">
    <link rel="stylesheet" href=" {{asset('frontend/fonts/font-awesome/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css')}}" media="screen" />
    <link rel="stylesheet" href=" {{asset('frontend/fonts/et-line-font/et-line-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/js/revolution-slider/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/js/revolution-slider/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('frontend/js/revolution-slider/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/js/parallax/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/js/cubeportfolio/cubeportfolio.min.css')}}">
    <link href="{{asset('frontend/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/js/tabs/css/responsive-tabs.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('frontend/js/ytplayer/ytplayer.css')}}" />
    <link href="{{asset('frontend/js/accordion/css/smk-accordion.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/shortcodes.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/js/smart-forms/smart-forms.css')}}">




    <!-- Template's stylesheets END -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css">
  

</head>

<body>
  <!---START LOADING ---->
<div class="over-loader loader-live">
    <div class="loader">
        <div class="loader-item style4">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
</div>
<!--end loading-->








  <div class="wrapper-boxed">
      <div class="site-wrapper">
          <!--Start Chat-->
<div class="media">
            <div class="media-image">
                <img src="{{asset('frontend/images/icons/chat.png')}}" id="Chat">
                <!-- <img src="assets/images/icons/CloseChat.png" id="CloseChat"> -->
            </div>
            <div class="media-icons icons-none" id="icons">

                <div class="whatsapp">
<a href="https://api.whatsapp.com/send?phone=2{{ \App\Models\SoicalMedia::findOrfail(1)->whatsup }}" target="_blank">
<img src="{{asset('frontend/images/icons/whatsapp.png')}}">
</a>
                </div>
                <div class="facebook">
                   <a href="https://www.messenger.com/t/{{ \App\Models\SoicalMedia::findOrfail(1)->massenger }}" target="_blank" id="messenger"> 
                   <img src="{{asset('frontend/images/icons/facebook.png')}}"></a>
                </div>
            </div>
        </div>
<!--End Chat-->
          <div class="topbar dark topbar-padding">
              <div class="container display_flex">
                  <div class="topbar-left-items">
                      <ul class="toplist toppadding pull-left paddtop1">
                          <li class="rightl">Phone Number</li>
                          <li>{{ \App\Models\SoicalMedia::findOrfail(1)->phone_number }}</li>
                      </ul>
                  </div>
                  <!--end left-->

                  <div class="topbar-right-items pull-right">
                      <ul class="toplist toppadding">
                        
                        <li>Address:</li>
                         <li>{{ \App\Models\SoicalMedia::findOrfail(1)->address }}</li>
<!--                        
                      </ul>
                       <ul class="toplist toppadding">
                      
 <li>lang</li>
<li><button id="changelang">AR</button></li>


</ul>  -->
                  </div>
              </div>
          </div>
          <div class="clearfix"></div>
      
          <div class="col-md-12 nopadding">
      <div class="header-section dark-dropdowns style4 pin-style">
        <div class="container">
          <div class="mod-menu">
            <div class="row">
              <div class="col-sm-2"> <a href="" title="" class="logo-middle"> <img src="{{ asset('seo/'.\App\Models\TestSeo::findOrfail(1)->logo) }}" alt=""> </a> </div>
              <div class="col-sm-10">
                <div class="main-nav">
                  <ul class="nav navbar-nav top-nav">
                   
                   
                    <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                  </ul>
                  <div id="menu" class="collapse">
                  <ul class="nav navbar-nav">
                                              <li class="right active"> <a href="{{URL('/website')}}">Home</a> <span class="arrow"></span></li>
                                              <li class="right"> <a href="{{URL('/about_us')}}">ABOUT US</a> <span class="arrow"></span> </li>
                                              <li class="right"> <a href="{{URL('/choose_elamin')}}">Choose Future</a> <span class="arrow"></span> </li>

                                            
                                              <li class="right"> <a href="{{URL('/service_3m')}}">OUR-SERVICES</a> <span class="arrow"></span></li>
                                              <li class="right"> <a href="{{URL('/portflio')}}">Portfolio</a> <span class="arrow"></span></li>
                                              <li class="right"> <a href="{{URL('/questions')}}">FAQ</a> <span class="arrow"></span></li>
                                              <li class="right"> <a href="{{URL('/sendemail')}}">CONTACT US</a> <span class="arrow"></span></li>
                                              <li class="right"><a class="twitter" href="#">|</a></li>

                                          <li class="right"><a class="twitter" href="http://{{ \App\Models\SoicalMedia::findOrfail(1)->twitter }}.com"><i class="fa fa-twitter"></i></a></li>
                              <li class="right"><a href="http://{{ \App\Models\SoicalMedia::findOrfail(1)->facebook }}.com/Future-Facility-Management-107567747431152/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a></li>
                              <li class="right"><a class="active" href="http://{{ \App\Models\SoicalMedia::findOrfail(1)->gmail }}.com"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu--> 
      
    </div>

        

          <div class="clearfix"></div>

          <!--end header section -->

              @yield('content')


          <div class="sec-padding section-fulldark">
              <div class="container">
                  <div class="row">
                      <div class=" col-md-12 col-centered text-center">
                          <div class="logo-middle">
                              <img src="{{ asset('backend/logo/future_logo.png')}}" alt="">

                              <div class="clearfix"></div>
                          </div>
                          <br>
                          <br>
                          <h4 class="text-white">Address</h4>
                          <h6 class="text-light">{{ \App\Models\SoicalMedia::findOrfail(1)->address }}<br>
                            
                          {{ \App\Models\SoicalMedia::findOrfail(1)->phone_number }}</h6>
                          <div class="clearfix"></div>
                          <ul class="footer-quick-links">
                              <li class="right"> <a href="{{URL('/website')}}">Home</a> <span class="arrow"></span></li>
                              <li class="right"> <a href="{{URL('/about_us')}}">ABOUT US</a> <span class="arrow"></span> </li>
                              <li class="right"> <a href="{{URL('/choose_elamin')}}">Choose Future</a> <span class="arrow"></span> </li>

                              <li class="right"> <a href="{{URL('/service_3m')}}">OUR-SERVICES</a> <span class="arrow"></span></li>
                              <li class="right"> <a href="{{URL('/portflio')}}">Portfolio</a> <span class="arrow"></span></li>
                              <li class="right"> <a href="{{URL('/questions')}}">FAQ</a> <span class="arrow"></span></li>
                              <li class="right"> <a href="{{URL('/sendemail')}}">CONTACT US</a> <span class="arrow"></span></li>
                          </ul>
                          <div class="divider-line solid light opacity-1"></div>
                          <ul class="footer-social-icons round">
                              <li><a class="twitter" href="http://{{ \App\Models\SoicalMedia::findOrfail(1)->twitter }}.com"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="http://{{ \App\Models\SoicalMedia::findOrfail(1)->facebook }}.com/Future-Facility-Management-107567747431152/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="active" href="http://{{ \App\Models\SoicalMedia::findOrfail(1)->gmail }}.com"><i class="fa fa-google-plus"></i></a></li>
                              <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                          </ul>
                          <div class="col-md-12">
                              <p class="text-gray">Copyright © 2019 <br>
                                  Design &amp; 
                                  <a href="http://{{ \App\Models\TestSeo::findOrfail(1)->footer }}.com">{{ \App\Models\TestSeo::findOrfail(1)->footer }}</a>
                                  </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="clearfix"></div>
          <!-- end section -->

          <div class="divider-line solid dark opacity-1"></div>

          <div class="clearfix"></div>
          <!-- end section -->

      </div>
      <!--end site wrapper-->
  </div>
  <!--end wrapper boxed-->









<!-- Scripts -->
<script src="{{asset('frontend/js/jquery/jquery.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/less/less.min.js')}}" data-env="development"></script>
<script type="text/javascript" src="{{asset('frontend/js/cubeportfolio/jquery.cubeportfolio.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontend/js/cubeportfolio/mosaic-flat.js')}}"></script>
<!-- Scripts END -->
<!-- Template scripts -->
<script src="{{asset('frontend/js/megamenu/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/ytplayer/jquery.mb.YTPlayer.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/ytplayer/elementvideo-custom.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/ytplayer/play-pause-btn.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
(Load Extensions only on Local File Systems !
The following part can be removed on Server for On Demand Loading) -->

<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('frontend/js/revolution-slider/slider-custom-5.js')}}"></script>
<script src="{{asset('frontend/js/revolution-slider/rev-video-1.js')}}"></script>
<script src="{{asset('frontend/js/loaders/loading-custom.js')}}"></script>
<script src="{{asset('frontend/js/parallax/parallax-background.min.js')}}"></script>
<script src="{{asset('frontend/js/parallax/parallax-custom.js')}}"></script>
<script src="{{asset('frontend/js/tabs/js/responsive-tabs.min.js')}}" type="text/javascript"></script>

<script src="{{asset('frontend/js/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/js/owl-carousel/custom.js')}}"></script>
<script src="{{asset('frontend/js/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/js/accordion/js/smk-accordion.js')}}"></script>
<script src="{{asset('frontend/js/accordion/js/custom.js')}}"></script>
<script src="{{asset('frontend/js/progress-circle/raphael-min.js')}}"></script>
<script src="{{asset('frontend/js/progress-circle/custom.js')}}"></script>
<script src="{{asset('frontend/js/progress-circle/jQuery.circleProgressBar.js')}}"></script>
<script src="{{asset('frontend/js/functions/functions.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/cubeportfolio/cols-3.js')}}"></script>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAcjJcWIgmLyfrhWte18ul3Z3Zd89xGYfQ&' + 'callback=GmapInit"></script> 
<script type="text/javascript" src="{{asset('frontend/js/gmaps/jquery.gmap.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontend/js/gmaps/examples.js')}}"></script> 

<script  href="{{asset('frontend/css/WOW-master/dist/wow.js')}}" type="text/javascript"></script>

  <script>
         $("#changelang").click(function () {
          $.ajax({
              type: "GET",
              url: "{{URL('/ChangeLang')}}",

              success: function () {
                  location.reload(true);
              }
          });

      });


      $(document).ready(function () {
          //toggle the component with class accordion_body
          $(".accordion_head").click(function () {
              if ($('.accordion_body').is(':visible')) {
                  $(".accordion_body").slideUp(300);
                  $(".plusminus").text('+');
              }
              if ($(this).next(".accordion_body").is(':visible')) {
                  $(this).next(".accordion_body").slideUp(300);
                  $(this).children(".plusminus").text('+');
              } else {
                  $(this).next(".accordion_body").slideDown(300);
                  $(this).children(".plusminus").text('-');
              }
          });
      });

      $("#Chat").click(function(){ 
  var imageSrc= $(this).attr('src') ;
 if(imageSrc =="{{asset('frontend/images/icons/chat.png')}}"){
     $("#Chat").attr ("src" , "{{asset('frontend/images/icons/CloseChat.png')}}")
     $("#icons").removeClass("icons-none")

 }
 else{
 $("#Chat").attr("src" , "{{asset('frontend/images/icons/chat.png')}}")
 $("#icons").addClass("icons-none")
} 
  })
  new WOW().init();
  </script>

<script type="text/javascript" src="{{asset('frontend/js/cubeportfolio/slider-projects.js')}}"></script> 
 </body>
</html>
