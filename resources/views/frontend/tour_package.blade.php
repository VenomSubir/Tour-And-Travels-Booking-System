@extends('frontend.main_master')
@section('content')
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

    <section class="section section-sm bg-default">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">All Tour Packages</span></h3>
            <div class="row row-sm row-40 row-md-50">
                @foreach($tours as $item)
                <div class="col-sm-12 col-md-12 wow fadeInRight">
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
@endsection
