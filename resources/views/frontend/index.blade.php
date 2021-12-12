@extends('frontend.main_master')
@section('content')
    <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
        <div class="swiper-wrapper text-left">
            @foreach($banner as $item)
            <div class="swiper-slide context-dark" data-slide-bg="{{ asset($item->banner_image) }}">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">{{ $item->banner_title }}</h6>
                                <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>{{ $item->banner_title_heading_h1 }}</span><span class="font-weight-bold"> {{ $item->banner_title_heading }}</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
    </section>
    <!-- Section Box Categories-->
    <section class="section section-lg section-top-1 bg-gray-4">
        <div class="container offset-negative-1">
            <div class="box-categories cta-box-wrap">
                <div class="box-categories-content">
                    <div class="row justify-content-center">
                        <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                            <ul class="list-marked-2 box-categories-list">
                                <li><a href="#"><img src="{{ asset('assets/frontend/images/image/local.jpg') }}" alt="" style="width: 368px; height: 420px;"/></a>
                                    <h5 class="box-categories-title">Local Holiday</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                            <ul class="list-marked-2 box-categories-list">
                                <li><a href="#"><img src="{{ asset('assets/frontend/images/image/mountain.jpg') }}" alt="" style="width: 368px; height: 420px;"/></a>
                                    <h5 class="box-categories-title">Mountain Holiday</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                            <ul class="list-marked-2 box-categories-list">
                                <li><a href="#"><img src="{{ asset('assets/frontend/images/image/beach.jpg') }}" alt="" style="width: 368px; height: 420px;"/></a>
                                    <h5 class="box-categories-title">Beach Holidays</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><a class="link-classic wow fadeInUp" href="{{ url('/tour_package') }}">Other Tours<span></span></a>
            <!-- Owl Carousel-->
        </div>
    </section>
    <!-- Discover New Horizons-->
    <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
            <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
                <div class="col-lg-6 text-center wow fadeInUp"><img src="{{ asset('assets/frontend/images/image/cox2.jpg') }}" alt="" width="556" height="382"/>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                    <div class="box-width-lg-470">
                        <h3>Discover New Horizons</h3>
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                            <!-- Nav tabs-->
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">About us</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab">Why choose us</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3" data-toggle="tab">Our mission</a></li>
                            </ul>
                            <!-- Tab panes-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-7-1">
                                    <p>Wonder Tour is committed to bringing our clients the best in value and quality travel arrangements. We are passionate about travel and sharing the world's wonders with you.</p>
                                    <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="{{ url('/contact') }}">Get in Touch</a><a class="button button-black-outline button-md" href="{{ url('/about') }}">Read More</a></div>
                                </div>
                                <div class="tab-pane fade" id="tabs-7-2">
                                    <p>We are proud to offer excellent quality and value for money in our tours, which give you the chance to experience your chosen destination in an authentic and exciting way.</p>
                                    <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="{{ url('/contact') }}">Get in Touch</a><a class="button button-black-outline button-md" href="{{ url('/about') }}">Read More</a></div>
                                </div>
                                <div class="tab-pane fade" id="tabs-7-3">
                                    <p>Our mission is to provide the ultimate travel planning experience while becoming a one-stop shop for every travel service available in the industry.</p>
                                    <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="{{ url('/contact') }}">Get in Touch</a><a class="button button-black-outline button-md" href="{{ url('/about') }}">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Our Services-->
    <section class="section section-sm">
        <div class="container">
            <h3>Our Services</h3>
            <div class="row row-30">
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">Personalized Matching</a></h5>
                                <p class="box-icon-classic-text">Our unique matching system lets you find just the tour you want for your next holiday.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">Wide Variety of Tours</a></h5>
                                <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations all over the globe.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-favourites5"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">Highly Qualified Service</a></h5>
                                <p class="box-icon-classic-text">Our tour managers are qualified, skilled, and friendly to bring you the best service.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-headphones32"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">24/7 Support</a></h5>
                                <p class="box-icon-classic-text">You can always get professional support from our staff 24/7 and ask any question you have.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-hot67"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">Handpicked Hotels</a></h5>
                                <p class="box-icon-classic-text">Our team offers only the best selection of affordable and luxury hotels to our clients.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-wallet26"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">Best Price Guarantee</a></h5>
                                <p class="box-icon-classic-text">If you find tours that are cheaper than ours, we will compensate the difference.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Hot tours-->
    <section class="section section-sm bg-default">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Hot Tours</span></h3>
            <div class="row row-sm row-40 row-md-50">
                @foreach($hot_tour as $item)
                <div class="col-sm-6 col-md-12 wow fadeInRight">
                    <!-- Product Big-->
                    <article class="product-big">
                        <div class="unit flex-column flex-md-row align-items-md-stretch">
                            <div class="unit-left"><a class="product-big-figure" href="#"><img src="{{ asset($item->image) }}" alt="" width="600" height="366"/></a></div>
                            <div class="unit-body">
                                <div class="product-big-body">
                                    <h5 class="product-big-title"><a href="#">{{ $item->name }}</a></h5>
                                    <div class="group-sm group-middle justify-content-start">
                                        <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">{{ $item->review }} customer reviews</a>
                                    </div>
                                    <p class="product-big-text">{{ $item->description }}</p><a class="button button-black-outline button-ujarak" href="{{ route('user.booking',$item->id) }}">Buy This Tour</a>
                                    <div class="product-big-price-wrap"><span class="product-big-price">BDT-{{ $item->price }}</span></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Different People-->
    <section class="section section-sm">
        <div class="container">
            <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Different People — One Mission</span></h3>
            <div class="row row-30 justify-content-center box-ordered">
                <div class="col-sm-6 col-md-5 col-lg-3">
                    <!-- Team Modern-->
                    <article class="team-modern">
                        <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="{{ asset('assets/frontend/images/image/subir.jpg') }}" alt="" width="118" height="118"/></a>
                            <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                        <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                        </div>
                        <div class="team-modern-caption">
                            <h6 class="team-modern-name"><a href="#">Subir Kundo</a></h6>
                            <p class="team-modern-status">Founder, Owner</p>
                            <h6 class="team-modern-phone"><a href="tel:#">+8801726365060</a></h6>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                    <!-- Team Modern-->
                    <article class="team-modern">
                        <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="{{ asset('assets/frontend/images/image/Mastura.jpg') }}" alt="" width="118" height="118"/></a>
                            <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                        <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                        </div>
                        <div class="team-modern-caption">
                            <h6 class="team-modern-name"><a href="#">Mastura Tasnim Mayumi</a></h6>
                            <p class="team-modern-status">HR, Manager</p>
                            <h6 class="team-modern-phone"><a href="tel:#">+8801776082670</a></h6>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                    <!-- Team Modern-->
                    <article class="team-modern">
                            <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="{{ asset('assets/frontend/images/image/fahad.jpg') }}" alt="" width="118" height="118"/></a>
                            <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                        <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                        </div>
                        <div class="team-modern-caption">
                            <h6 class="team-modern-name"><a href="#">Fahadul Islam</a></h6>
                            <p class="team-modern-status">Travel Agent</p>
                            <h6 class="team-modern-phone"><a href="tel:#">+8801634330455</a></h6>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                    <!-- Team Modern-->
                    <article class="team-modern">
                        <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="{{ asset('assets/frontend/images/image/Maruf.jpg') }}" alt="" width="118" height="118"/></a>
                            <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                        <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                        </div>
                        <div class="team-modern-caption">
                            <h6 class="team-modern-name"><a href="#">Maruf Hossain</a></h6>
                            <p class="team-modern-status">Tour Consultant</p>
                            <h6 class="team-modern-phone"><a href="tel:#">+88801799631258</a></h6>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                    <!-- Team Modern-->
                    <article class="team-modern">
                        <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="{{ asset('assets/frontend/images/image/turjo.jpg') }}" alt="" width="118" height="118"/></a>
                            <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                        <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                        </div>
                        <div class="team-modern-caption">
                            <h6 class="team-modern-name"><a href="#">Kowshik Sarker</a></h6>
                            <p class="team-modern-status">PR Manager</p>
                            <h6 class="team-modern-phone"><a href="tel:#">+8801869699991</a></h6>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Subscribe-->
    <section class="section bg-default text-center offset-top-50">
        <div class="parallax-container" data-parallax-img="{{ asset('assets/frontend/images/image/bangladesh.jpg') }}">
            <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
                <div class="container">
                    <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">First-class Impressions</span><span class="d-block font-weight-light">are Waiting for You!</span></h2>
                    <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Our agency offers travelers various tours and excursions with destinations all over the world. Browse our website to find your dream tour!</p><a class="button button-secondary button-pipaluk" href="{{ url('/tour_package') }}">Book a Tour Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--	Instagrram wondertour-->
    <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
        <div class="container-fluid">
            <h6 class="gallery-title">Gallery</h6>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary">
                    <div class="thumbnail-mary-figure"><img src="{{ asset('assets/frontend/images/image/image1.jpg') }}" alt="" style="width: 270px; height: 195px"/>
                    </div>
                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ asset('assets/frontend/images/image/image1.jpg') }}" data-lightgallery="item"><img src="{{ asset('assets/frontend/images/image/image1.jpg') }}" alt="" style="width: 270px; height: 195px"/></a>
                    </div>
                </article>
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary">
                    <div class="thumbnail-mary-figure"><img src="{{ asset('assets/frontend/images/image/image2.jpg') }}" alt="" style="width: 270px; height: 195px"/>
                    </div>
                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ asset('assets/frontend/images/image/image2.jpg') }}" data-lightgallery="item"><img src="{{ asset('assets/frontend/images/image/image2.jpg') }}" alt="" style="width: 270px; height: 195px"/></a>
                    </div>
                </article>
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary">
                    <div class="thumbnail-mary-figure"><img src="{{ asset('assets/frontend/images/image/image3.jpg') }}" alt="" style="width: 270px; height: 195px"/>
                    </div>
                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ asset('assets/frontend/images/image/image3.jpg') }}" data-lightgallery="item"><img src="{{ asset('assets/frontend/images/image/image3.jpg') }}" alt="" style="width: 270px; height: 195px"/></a>
                    </div>
                </article>
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary">
                    <div class="thumbnail-mary-figure"><img src="{{ asset('assets/frontend/images/image/image4.jpg') }}" alt="" style="width: 270px; height: 195px"/>
                    </div>
                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ asset('assets/frontend/images/image/image4.jpg') }}" data-lightgallery="item"><img src="{{ asset('assets/frontend/images/image/image4.jpg') }}" alt="" style="width: 270px; height: 195px"/></a>
                    </div>
                </article>
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary">
                    <div class="thumbnail-mary-figure"><img src="{{ asset('assets/frontend/images/image/image5.jpg') }}" alt="" style="width: 270px; height: 195px"/>
                    </div>
                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ asset('assets/frontend/images/image/image5.jpg') }}" data-lightgallery="item"><img src="{{ asset('assets/frontend/images/image/image5.jpg') }}" alt="" style="width: 270px; height: 195px"/></a>
                    </div>
                </article>
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary">
                    <div class="thumbnail-mary-figure"><img src="{{ asset('assets/frontend/images/image/image6.jpg') }}" alt="" style="width: 270px; height: 195px"/>
                    </div>
                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ asset('assets/frontend/images/image/image6.jpg') }}" data-lightgallery="item"><img src="{{ asset('assets/frontend/images/image/image.jpg') }}" alt="" style="width: 270px; height: 195px"/></a>
                    </div>
                </article>
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary">
                    <div class="thumbnail-mary-figure"><img src="{{ asset('assets/frontend/images/image/image7.jpg') }}" alt="" style="width: 270px; height: 195px"/>
                    </div>
                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ asset('assets/frontend/images/image/image7.jpg') }}" data-lightgallery="item"><img src="{{ asset('assets/frontend/images/image/image7.jpg') }}" alt="" style="width: 270px; height: 195px"/></a>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
