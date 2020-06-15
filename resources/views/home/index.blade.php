@extends('layouts/app')

@section('intro')
    <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            @php
                $i = 1;
            @endphp
            @foreach ($sliders as $slider)
                <div class="carousel-item {{$i === 1 ? "active" : "" }}">
                    <div class="carousel-background"><img src="{{Voyager::image($slider->image)}}" alt="{{$slider->title}}"></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>{{$slider->title}}</h2>
                            <p>{{$slider->sub_title}}</p>
                            <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                        </div>
                    </div>
                </div>
                @php
                    $i++;
                @endphp
            @endforeach

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->
@endsection

@section('main')
    <main id="main">

        <!--==========================
        Featured Services Section
        ============================-->
        <section id="featured-services">
        <div class="container">
            <div class="row">

            <div class="col-lg-4 box">
                <i class="ion-ios-bookmarks-outline"></i>
                <h4 class="title"><a href="">STRENGTH</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="col-lg-4 box box-bg">
                <i class="ion-ios-stopwatch-outline"></i>
                <h4 class="title"><a href="">PRECISION</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>

            <div class="col-lg-4 box">
                <i class="ion-ios-heart-outline"></i>
                <h4 class="title"><a href="">COSTUMIZED</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>

            </div>
        </div>
        </section><!-- #featured-services -->

        <!--==========================
        About Us Section
        ============================-->
        <section id="about">
        <div class="container">

            <header class="section-header">
            <h3>About Us</h3>
            <p>PT Samitra Nityasa Sakti is engaged in the field of Telecommunication spanning from providing Telecommunication devices, installation and services. Our main services including engineering, design, installation and network integration services. Supported by experienced and talented people makes us confidence in providing the best service and solutions to support our partners continuous growth.</p>
            </header>

            <div class="row about-cols">

            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                <div class="img">
                    <img src="img/about-mission.jpg" alt="" class="img-fluid">
                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                </div>
                <h2 class="title"><a href="#">Our Mission</a></h2>
                <p>
                    To be the most respected company in industry by providing the service and solution to all staleholders.
                </p>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="about-col">
                <div class="img">
                    <img src="img/about-plan.jpg" alt="" class="img-fluid">
                    <div class="icon"><i class="ion-ios-list-outline"></i></div>
                </div>
                <h2 class="title"><a href="#">Our Plan</a></h2>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                </p>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-col">
                <div class="img">
                    <img src="img/about-vision.jpg" alt="" class="img-fluid">
                    <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                </div>
                <h2 class="title"><a href="#">Our Vision</a></h2>
                <p>
                    To become the leading company in Telecommunication industry in Indonesia.
                </p>
                </div>
            </div>

            </div>

        </div>
        </section><!-- #about -->

        <!--==========================
        Services Section
        ============================-->
        <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp">
            <h3>Legality</h3>
            <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
            </header>

            <div class="row">

            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Establishment </a></h4>
                <p class="description">No. 01, Tanggal 2 Okt 2018 Notaris Rusmaedi S.H M.Kn</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                <h4 class="title"><a href="">SK Kemenkumham</a></h4>
                <p class="description">AHU 0046896.AH.01.01 Tahun 2018</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                <h4 class="title"><a href="">Trade License</a></h4>
                <p class="description">No. 81.20.1809.1806</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                <h4 class="title"><a href="">Tax Number and NIB</a></h4>
                <p class="description">86.174.942.2-404-000 and 8120018091806</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                <h4 class="title"><a href="">Akta Perubahan</a></h4>
                <p class="description">No. 04 Tanggal 24 April Tahun 2019</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-ios-people-outline"></i></div>
                <h4 class="title"><a href="">S-PKP</a></h4>
                <p class="description">S-17183KT/WPJ.33/S-17183KT/WPJ.33/</p>
            </div>

            </div>

        </div>
        </section><!-- #services -->

        <!--==========================
        Call To Action Section
        ============================-->
        <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
        </div>
        </section><!-- #call-to-action -->

        <!--==========================
        Skills Section
        ============================-->
        <section id="skills">
        <div class="container">

            <header class="section-header">
            <h3>Our Skills</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
            </header>

            <div class="skills-content">

            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <span class="skill">HTML <i class="val">100%</i></span>
                </div>
            </div>

            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                <span class="skill">CSS <i class="val">90%</i></span>
                </div>
            </div>

            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                </div>
            </div>

            <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                </div>
            </div>

            </div>

        </div>
        </section>

        <!--==========================
        Facts Section
        ============================-->
        <section id="facts"  class="wow fadeIn">
        <div class="container">

            <header class="section-header">
            <h3>Portfolio</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </header>

            <div class="slick pb-5">
                @foreach ($portfolios as $port)
                    <div>
                        <div class="row">
                            <div class="col-md-6 pr-0">
                                <img src="{{Voyager::image($port->image)}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <div class="card card-body rounded-0">
                                    <h3 class="text-uppercase font-weight-bold">{{$port->title}}</h3>
                                    <h5>{{$port->sub_title}}</h5>
                                    <p>{{$port->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        </section><!-- #facts -->

        <!--==========================
        Portfolio Section
        ============================-->
        <section id="portfolio"  class="section-bg" >
        <div class="container">

            <header class="section-header">
            <h3 class="section-title">Our Product</h3>
            </header>

            <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">ODP</li>
                <li data-filter=".filter-card">Cable</li>
                <li data-filter=".filter-web">Cabinet</li>
                </ul>
            </div>
            </div>

            <div class="row portfolio-container">

            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{Voyager::image($product->image)}}" class="img-fluid" alt="{{$product->title}}">
                            <a class="link-preview" style="z-index: 1" data-toggle="modal" data-target="#{{str_replace(' ', '-', $product->title)}}"><i class="fa fa-eye"></i></a>
                            {{-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> --}}
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">{{$product->title}}</a></h4>
                            <p>{{$product->sub_title}}</p>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="{{str_replace(' ', '-', $product->title)}}" tabindex="-1" role="dialog" aria-labelledby="{{str_replace('', '-', $product->title)}}Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 p-0">
                                    <img src="{{Voyager::image($product->image)}}" alt="{{$product->title}}" class="img-fluid">
                                </div>
                                <div class="col-md-6 p-0">
                                    <div class="card card-body rounded-0 border-0">
                                        <h3 class="text-uppercase font-weight-bold">
                                            {{$product->title}}
                                        </h3>
                                        <h5>{{$product->sub_title}}</h5>
                                        <p>{{$product->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                <figure>
                    <img src="img/portfolio/pct2.jpg" class="img-fluid" alt="">
                    <a href="img/portfolio/pct2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="#">ODP Aerial Closure</a></h4>
                    <p>ODP</p>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                <figure>
                    <img src="img/portfolio/pct3.jpg" class="img-fluid" alt="">
                    <a href="img/portfolio/pct3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="#">ODP Pole</a></h4>
                    <p>ODP</p>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                <div class="portfolio-wrap">
                <figure>
                    <img src="img/portfolio/pct4.jpg" class="img-fluid" alt="">
                    <a href="img/portfolio/pct4.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="#">Join Closure</a></h4>
                    <p>ODP</p>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                <figure>
                    <img src="img/portfolio/pct5.jpg" class="img-fluid" alt="">
                    <a href="img/portfolio/pct5.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="#">OTB Terminal Box</a></h4>
                    <p>Cabinet</p>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                <figure>
                    <img src="img/portfolio/pct6.jpg" class="img-fluid" alt="">
                    <a href="img/portfolio/pct6.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="#">Fiber Optic Core</a></h4>
                    <p>Cable</p>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                <div class="portfolio-wrap">
                <figure>
                    <img src="img/portfolio/pct7.jpg" class="img-fluid" alt="">
                    <a href="img/portfolio/pct7.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="#">Passive Splitter</a></h4>
                    <p>Cable</p>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                <figure>
                    <img src="img/portfolio/pct8.jpg" class="img-fluid" alt="">
                    <a href="img/portfolio/pct8.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="#">Preconnectorized</a></h4>
                    <p>Cable</p>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                <figure>
                    <img src="img/portfolio/pct9.jpg" class="img-fluid" alt="">
                    <a href="img/portfolio/pct9.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="#">Optical Distribution Cabinet</a></h4>
                    <p>Cabinet</p>
                </div>
                </div>
            </div>

            </div> --}}

        </div>
        </section><!-- #portfolio -->

        <!--==========================
        Clients Section
        ============================-->
        <section id="clients" class="wow fadeInUp">
        <div class="container">

            <header class="section-header">
            <h3>Our Partners</h3>
            </header>

            <div class="owl-carousel clients-carousel">
            <img src="img/clients/p1.png" alt="">
            <img src="img/clients/p2.png" alt="">
            <img src="img/clients/p3.png" alt="">
            <img src="img/clients/p4.png" alt="">
            <img src="img/clients/client-5.png" alt="">
            <img src="img/clients/client-6.png" alt="">
            <img src="img/clients/client-7.png" alt="">
            <img src="img/clients/client-8.png" alt="">
            </div>

        </div>
        </section><!-- #clients -->

        <!--==========================
        Clients Section
        ============================-->
        <section id="testimonials" class="section-bg wow fadeInUp">
        <div class="container">

            <header class="section-header">
            <h3>Testimonials</h3>
            </header>

            <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
            </div>

            <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
            </div>

            <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
            </div>

            <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
            </div>

            <div class="testimonial-item">
                <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
            </div>

            </div>

        </div>
        </section><!-- #testimonials -->

        <!--==========================
        Team Section
        ============================-->
        <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
            <h3>Team</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row">

            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="member">
                <img src="img/team-1.jpg" class="img-fluid" alt="">
                <div class="member-info">
                    <div class="member-info-content">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="member">
                <img src="img/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                    <div class="member-info-content">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="member">
                <img src="img/team-3.jpg" class="img-fluid" alt="">
                <div class="member-info">
                    <div class="member-info-content">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="member">
                <img src="img/team-4.jpg" class="img-fluid" alt="">
                <div class="member-info">
                    <div class="member-info-content">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            </div>

        </div>
        </section><!-- #team -->

        <!--==========================
        Contact Section
        ============================-->
        <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
            <h3>Contact Us</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h3>Address</h3>
                <address>Jl Cikunir Raya No.2 Jati Asih Kota Bekasi Jawa Barat Indonesia</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3>Phone Number</h3>
                <p><a href="tel:+6229307771">021-29307771</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                <i class="ion-ios-email-outline"></i>
                <h3>Email</h3>
                <p><a href="mailto:info@samitranityasasakti.com">info@samitranityasasakti.com</a></p>
                </div>
            </div>

            </div>

            <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                </div>
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
                </div>
                <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
            </div>

        </div>
        </section><!-- #contact -->

    </main>
@endsection