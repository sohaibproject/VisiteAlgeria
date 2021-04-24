<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> VISITE ALGERIA</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap"
    rel="stylesheet">
    <link rel="shortcut icon" href="{{URL::asset('assets/images/logo_site.png')}}" type="image/x-icon">
  <!-- google fonts -->
  <!-- Template CSS -->
  {{-- URL::asset('') --}}
  <link rel="stylesheet" href="{{  URL::asset('assets/css/style-starter.css')}}">
  <!-- Template CSS -->
</head>

<body>
  <!--header-->
 
  @include('front.includs.header')
  <!-- //header -->
  <!--banner-slider-->
  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="banner-content">
      <div id="demo-1"
        data-zs-src='["{{URL::asset('assets/images/banner1.jpg')}}", "{{URL::asset('assets/images/banner2.jpg')}}","{{URL::asset('assets/images/banner3.jpg')}}", "{{URL::asset('assets/images/banner4.jpg')}}"]'
        data-zs-overlay="dots">
        <div class="demo-inner-content">
          <div class="container">
            <div class="banner-infhny">
              <h3>You don't need to go far to find what matters.</h3>
              <h6 class="mb-3">Discover your next adventure</h6>
              <div class="flex-wrap search-wthree-field mt-md-5 mt-4">
                <form action="#" method="post" class="booking-form">
                  <div class="row book-form">
                    <div class="form-input col-md-4 mt-md-0 mt-3">

                      <select name="selectpicker" class="selectpicker">
                        <option value="">Destinaion</option>
                        <option value="africa">Africa</option>
                        <option value="america">America</option>
                        <option value="asia">Asia</option>
                        <option value="eastern-europe">Eastern Europe</option>
                        <option value="europe">Europe</option>
                        <option value="south-america">South America</option>
                      </select>

                    </div>
                    {{-- <div class="form-input col-md-4 mt-md-0 mt-3">

                      <input type="date" name="" placeholder="Date" required="">
                    </div> --}}
                    <div class="bottom-btn col-md-4 mt-md-0 mt-3">
                      <button class="btn btn-style btn-secondary"><span class="fa fa-search mr-3"
                          aria-hidden="true"></span> Search</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="w3l-content-6 py-5">
    <div class="container py-lg-5">
      <div class="cusrtomer-layout py-5">
        <div class="container py-lg-4 py-md-3 pb-lg-0">
          <div class="heading text-center mx-auto">
            
            <h3 class="hny-title mb-md-5 mb-4">About Us </h3>
          </div>
        
        </div>
       
      </div>
      <div class="row">
        <div class="col-lg-6 content-6-left pr-lg-5">
          <img src="assets/images/banner3.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 content-6-right mt-lg-0 mt-4">
          <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi sunt laboriosam ducimus, odio
            aspernatur fugiat minima blanditiis dignissimos.</p>
            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi sunt laboriosam ducimus, odio
              aspernatur fugiat minima blanditiis dignissimos.</p>
             
        </div>
      </div>
    </div>
</section>
{{-- end aboutus --}}
  <!-- /main-slider -->
  <!-- //banner-slider-->

  <!--/grids-->
  <section class="w3l-grids-3 py-5">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
        <h6 class="sub-title">Visit</h6>
        <h3 class="hny-title">Popular Destinations</h3>
      </div>
      <div class="row bottom-ab-grids">
  <!--/row-grids-->
        <div class="col-lg-6 subject-card mt-lg-0 mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{URL::asset('assets/images/g1.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Paris</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1650</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-6 subject-card mt-lg-0 mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="assets/images/g2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Bankok</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1850</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
          <!--//row-grids-->
            <!--/row-grids-->
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{URL::asset('assets/images/g3.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Maldives</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1350</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{URL::asset('assets/images/g4.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Greece</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1650</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
          <!--//row-grids-->
            <!--/row-grids-->
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{URL::asset('assets/images/g5.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>London</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1750</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{URL::asset('assets/images/g6.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Julian Alps</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1950</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
          <!--//row-grids-->
                  <!--/row-grids-->
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{URL::asset('assets/images/g7.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Thailand</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1750</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{URL::asset('assets/images/g8.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Singapore</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1950</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
          <!--//row-grids-->
      </div>
    </div>
  </section>
  <!--//grids-->
  <!-- stats -->
  <section class="w3l-stats py-5" id="stats">
    <div class="gallery-inner container py-lg-0 py-3">
      <div class="row stats-con pb-lg-3">
        <div class="col-lg-3 col-6 stats_info counter_grid">
          <p class="counter">730</p>
          <h4>Branches</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid1">
          <p class="counter">1680</p>
          <h4>Travel Guides</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
          <p class="counter">812</p>
          <h4>Happy Customers</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid2 mt-lg-0 mt-5">
          <p class="counter">990</p>
          <h4>Awards</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->
  <!--/-->
  {{-- <section class="w3l-cta4 py-5"> --}}
 
{{-- </section> --}}
  <div class="best-rooms py-5">
    <div class="container py-md-5">
      <div class="cusrtomer-layout py-5">
        <div class="container py-lg-4 py-md-3 pb-lg-0">
          <div class="heading text-center mx-auto">
            
            <h3 class="hny-title mb-md-5 mb-4">Best images in algeria </h3>
          </div>
        
        </div>
       
      </div>
        <div class="ban-content-inf row">
            <div class="maghny-gd-1 col-lg-6">
              <div class="maghny-grid">
                <figure class="effect-lily border-radius  m-0">
                    <img class="img-fluid" src="{{URL::asset('assets/images/g10.jpg')}}" alt="" />
                    <figcaption>
                        <div>
                            <h4>3Days, 4 Nights</h4>
                            <p>From 1720$ </p>
                        </div>

                    </figcaption>
                </figure>
            </div>
            </div>
            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row">
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{URL::asset('assets/images/g9.jpg')}}" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1220$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{URL::asset('assets/images/g8.jpg')}}" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1620$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{URL::asset('assets/images/g7.jpg')}}" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1820$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{URL::asset('assets/images/g6.')}}jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1520$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <section class="w3l-clients" id="clients">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
      <div class="container py-lg-4 py-md-3 pb-lg-0">
        <div class="heading text-center mx-auto">
          <h6 class="sub-title text-center">Here’s what they have to say</h6>
          <h3 class="hny-title mb-md-5 mb-4">our clients do the talking</h3>
        </div>
        <!-- /grids -->
        <div class="testimonial-width">
          <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="{{URL::asset('assets/images/c1.jpg')}}" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Rohit Paul</h3>
                      <p class="indentity">Example City</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="{{URL::asset('assets/images/c2.jpg')}}" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Shveta</h3>
                      <p class="indentity">Example City</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="{{URL::asset('assets/images/c3.jpg')}}" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Roy Linderson</h3>
                      <p class="indentity">Example City</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="{{URL::asset('assets/images/c4.jpg')}}" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Mike Thyson</h3>
                      <p class="indentity">Example City</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <!-- /grids -->
    </div>
    <!-- //grids -->
  </section>

  {{-- begin contact us --}}
  <section class="w3l-contact" id="contact">
    <div class="contact-infubd py-5">
      <div class="container py-lg-3">
        <div class="cusrtomer-layout py-5">
          <div class="container py-lg-4 py-md-3 pb-lg-0">
            <div class="heading text-center mx-auto">
              
              <h3 class="hny-title mb-md-5 mb-4">Contact Us </h3>
            </div>
          
          </div>
         
        </div>
        <div class="contact-grids row">
          <div class="col-lg-6 contact-left">
            <div class="partners">
              <div class="cont-details">
                <h5>Get in touch</h5>
                <p class="mt-3 mb-4">Hi there, We are available 24/7 by fax, e-mail or by phone. Drop us line so we can talk
                  futher about that.</p>
              </div>
              <div class="hours">
                <h6 class="mt-4">Email:</h6>
                <p> <a href="contact@VisiteAlgeria.com">
                  contact@VisiteAlgeria.com</a></p>
                <h6 class="mt-4">Visit Us:</h6>
                <p> msila/bousaada/street:17 June bousaada </p>
                <h6 class="mt-4">phone:</h6>
                <p class="margin-top"><a href="tel:+44-255-366-88">+213-676964248</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-5 contact-right">
            <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
              <div class="input-grids">
                <div class="form-group">
                  <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input" />
                </div>
                <div class="form-group">
                  <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="" />
                </div>
                <div class="form-group">
                  <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input" />
                </div>
              </div>
              <div class="form-group">
                <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
              </div>
              <div class="text-right">
                <button class="btn btn-style btn-primary">Send Message</button>
              </div>
            </form>
          </div>
  
        </div>
        <div class="map mt-5 pt-md-5">
          <h5>Map</h5>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13038.480871154077!2d4.185878443781586!3d35.215927749796144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128bb3c644644ec3%3A0x7f746dd09dad9a9f!2z2KjZiNiz2LnYp9iv2Kk!5e0!3m2!1sar!2sdz!4v1619228654199!5m2!1sar!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
       
        </div>
      </div>
  </section>
  {{-- end contact us --}}
  <!-- //testimonials -->

  <!--/w3l-footer-29-main-->
  @include('front.includs.footer')
  <!-- Template JavaScript -->
  <script src="{{URL::asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/theme-change.js')}}"></script>
  <!--/slider-js-->
  <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery.zoomslider.min.js')}}"></script>
  <!--//slider-js-->
  <script src="{{URL::asset('assets/js/owl.carousel.js')}}"></script>
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: true
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- stats number counter-->
  <script src="{{URl::asset('assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery.countup.js')}}"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

</body>

</html>