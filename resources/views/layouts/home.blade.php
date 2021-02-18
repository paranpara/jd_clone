@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.footer')
@section('title', 'Home Page')

@section('content')

<div class="home-outer">
    <div id="site-wrapper" class="site-wrapper home-main">
        <div class="content-wrap">
            <section id="section-01" class="home-main-intro">
                <div class="home-main-intro-container">
                    <div class="container">
                        <div class="heading mb-9">
                            <h1 class="mb-7">
                                <span class="d-block" data-animate="slideInLeft">Discover</span>
                                <span class="font-weight-light d-block" data-animate="fadeInRight">great places near you</span>
                            </h1>
                            <p class="h5 font-weight-normal text-secondary mb-0" data-animate="fadeInDown">
                                Find great places to stay, eat, shop, or visit from local experts.
                            </p>
                        </div>
                        <div class="form-search form-search-style-02 pb-9" data-animate="fadeInDown">
                            <form>
                                <div class="row align-items-end no-gutters">
                                    <div class="col-xl-6 mb-4 mb-xl-0 py-3 px-4 bg-white border-right position-relative rounded-left form-search-item">
                                        <label for="key-word" class="font-size-md font-weight-semibold text-dark mb-0 lh-1">What</label>
                                        <div class="input-group dropdown show">
                                            <input
                                                type="text"
                                                autocomplete="off"
                                                id="key-word"
                                                name="key-word"
                                                class="form-control form-control-mini border-0 px-0 bg-transparent"
                                                placeholder="Ex: food, service, barber, hotel"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                            />
                                            <a href="#" class="input-group-append text-decoration-none" data-toggle="dropdown">
                                                <i class="fal fa-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu form-search-ajax" aria-labelledby="key-word">
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span class="font-size-md">Foods & Restaurants</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-bed">
                                                            <use xlink:href="#icon-bed"></use>
                                                        </svg>
                                                        <span class="font-size-md">Hotels & Resorts</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-pharmaceutical">
                                                            <use xlink:href="#icon-pharmaceutical"></use>
                                                        </svg>
                                                        <span class="font-size-md">Healths & Medicals</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-cog">
                                                            <use xlink:href="#icon-cog"></use>
                                                        </svg>
                                                        <span class="font-size-md">Services</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-car">
                                                            <use xlink:href="#icon-car"></use>
                                                        </svg>
                                                        <span class="font-size-md">Automotive</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 mb-4 mb-xl-0 py-3 px-4 bg-white position-relative rounded-right form-search-item">
                                        <label for="key-word" class="font-size-md font-weight-semibold text-dark mb-0 lh-1">Where</label>
                                        <div class="input-group dropdown show">
                                            <input
                                                type="text"
                                                autocomplete="off"
                                                id="region"
                                                name="region"
                                                class="form-control form-control-mini border-0 px-0 bg-transparent"
                                                placeholder="San Francisco"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                            />
                                            <a href="#" class="input-group-append text-decoration-none" data-toggle="dropdown">
                                                <i class="fal fa-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu form-search-ajax" aria-labelledby="region">
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        Austin
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        Boston
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        Chicago
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        Denver
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        Los Angeles
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        New York
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        San Francisco
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        Seattle
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        Washington
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 button">
                                        <button type="submit" class="btn btn-primary btn-lg btn-icon-left btn-block"><i class="fal fa-search"></i>Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="font-size-lg mb-4">
                            Or browse the highlights
                        </div>
                        <div class="list-inline pb-8 flex-wrap my-n2">
                            <div class="list-inline-item py-2">
                                <a href="#" class="card border-0 icon-box-style-01 link-hover-dark-white">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-pizza">
                                            <use xlink:href="#icon-pizza"></use>
                                        </svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                            Foods
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-inline-item py-2">
                                <a href="#" class="card border-0 icon-box-style-01 link-hover-dark-white">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-bed">
                                            <use xlink:href="#icon-bed"></use>
                                        </svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                            Hotels
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-inline-item py-2">
                                <a href="#" class="card border-0 icon-box-style-01 link-hover-dark-white">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-brush2">
                                            <use xlink:href="#icon-brush2"></use>
                                        </svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                            Jobs
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-inline-item py-2">
                                <a href="#" class="card border-0 link-hover-dark-white icon-box-style-01">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-pharmaceutical">
                                            <use xlink:href="#icon-pharmaceutical"></use>
                                        </svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                            Medicals
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-inline-item py-2">
                                <a href="#" class="card border-0 link-hover-dark-white icon-box-style-01">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-cog">
                                            <use xlink:href="#icon-cog"></use>
                                        </svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                            Services
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-inline-item py-2">
                                <a href="#" class="card border-0 link-hover-dark-white icon-box-style-01">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-bag">
                                            <use xlink:href="#icon-bag"></use>
                                        </svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                            Shopping
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-inline-item py-2">
                                <a href="#" class="card border-0 link-hover-dark-white icon-box-style-01">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-car">
                                            <use xlink:href="#icon-car"></use>
                                        </svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                            Automotive
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="home-main-how-it-work bg-white pt-11">
                        <div class="container">
                            <h2 class="mb-8">
                                <span>See</span>
                                <span class="font-weight-light">How It Works</span>
                            </h2>
                            <div class="row no-gutters pb-11">
                                <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
                                    <div class="media icon-box-style-02" data-animate="fadeInDown">
                                        <div class="d-flex flex-column align-items-center mr-6">
                                            <svg class="icon icon-checkmark-circle">
                                                <use xlink:href="#icon-checkmark-circle"></use>
                                            </svg>
                                            <span class="number h1 font-weight-bold">1</span>
                                        </div>
                                        <div class="media-body lh-14">
                                            <h5 class="mb-3 lh-1">
                                                Choose What To Do
                                            </h5>
                                            <p class="font-size-md text-gray mb-0 text-muted">
                                                Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
                                    <div class="media icon-box-style-02" data-animate="fadeInDown">
                                        <div class="d-flex flex-column align-items-center mr-6">
                                            <svg class="icon icon-checkmark-circle">
                                                <use xlink:href="#icon-checkmark-circle"></use>
                                            </svg>
                                            <span class="number h1 font-weight-bold">2</span>
                                        </div>
                                        <div class="media-body lh-14">
                                            <h5 class="mb-3 lh-1">
                                                Find What You Want
                                            </h5>
                                            <p class="font-size-md text-gray mb-0 text-muted">
                                                Search and filter hundreds of listings, read reviews, explore photos and find the perfect spot.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
                                    <div class="media icon-box-style-02" data-animate="fadeInDown">
                                        <div class="d-flex flex-column align-items-center mr-6">
                                            <svg class="icon icon-checkmark-circle">
                                                <use xlink:href="#icon-checkmark-circle"></use>
                                            </svg>
                                            <span class="number h1 font-weight-bold">3</span>
                                        </div>
                                        <div class="media-body lh-14">
                                            <h5 class="mb-3 lh-1">
                                                Explore Amazing Places
                                            </h5>
                                            <p class="font-size-md text-gray mb-0 text-muted">
                                                Go and have a good time or even make a booking directly from the listing page. All of those, thanks to TheDir!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-03" class="pb-8 our-directory">
                <div class="container">
                    <div class="mb-7">
                        <h2 class="mb-0">
                            <span class="font-weight-semibold">Our </span>
                            <span class="font-weight-light">Directory</span>
                        </h2>
                    </div>
                    <div class="d-flex align-items-center pb-8">
                        <ul class="nav nav-pills tab-style-01" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">all</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="featured-tab" data-toggle="tab" href="#feature" role="tab" aria-controls="feature" aria-selected="false">featured</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="best-rate-tab" data-toggle="tab" href="#best-rate" role="tab" aria-controls="best-rate" aria-selected="false">best rate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="most-view-tab" data-toggle="tab" href="#most-view" role="tab" aria-controls="most-view" aria-selected="false">most view </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="false">popular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ad-directory" role="tab" aria-controls="ad-directory" aria-selected="false">ad directory</a>
                            </li>
                        </ul>
                        <div class="ml-auto d-flex slick-custom-nav pl-5">
                            <div class="arrow slick-prev disabled" id="previous"><i class="fas fa-chevron-left"></i></div>
                            <div class="arrow slick-next" id="next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="container container-1720">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all">
                            <div
                                class="slick-slider arrow-top full-slide custom-nav equal-height"
                                data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'
                            >
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex w-lg show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                    <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <svg class="icon icon-chart-bars">
                                                            <use xlink:href="#icon-chart-bars"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Dummy Hotel for Testing</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$56.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bed">
                                                            <use xlink:href="#icon-bed"></use>
                                                        </svg>
                                                        <span>Hotel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury's Russell Square and a 2 minutes' walk from the tube station of the same name...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none link-hover-secondary-blue"> San Francisco, CA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-2.jpg" alt="store 2" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Best Rate</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-2.jpg" data-gtf-mfp="true" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Karly Gomez Cake</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>8 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Florencia, Italy</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-3.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Most view</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-3.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$10.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-5.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">After a yoga class changed her life, Maz became vegan, launched...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Miami, FL</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-4.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-4.jpg" class="item viewing" data-toggle="tooltip" data-gtf-mfp="true" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Red Wings Shoes Store</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>6 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$75.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bag">
                                                            <use xlink:href="#icon-bag"></use>
                                                        </svg>
                                                        <span>Shopping</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-3.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Established in 1895, these style merchants have set the standard in Sydney suiting for generations...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address"> Paris, France</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-5.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">AD</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-5.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" data-gtf-mfp="true" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Packing & Delivery Service</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.5</span><span>2 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="text-danger font-weight-semibold">Get a quote</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-cog">
                                                            <use xlink:href="#icon-cog"></use>
                                                        </svg>
                                                        <span>Service</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Most items can be packed securely in these boxes, which are available in several sizes...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">New York, USA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address py-1">Ubud, Indonesia</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="feature" role="tabpanel" aria-labelledby="feature">
                            <div
                                class="slick-slider arrow-top full-slide custom-nav equal-height"
                                data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'
                            >
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex w-lg show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                    <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <svg class="icon icon-chart-bars">
                                                            <use xlink:href="#icon-chart-bars"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$56.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bed">
                                                            <use xlink:href="#icon-bed"></use>
                                                        </svg>
                                                        <span>Hotel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury's Russell Square and a 2 minutes' walk from the tube station of the same name...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none link-hover-secondary-blue"> San Francisco, CA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-2.jpg" alt="store 2" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Best Rate</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-2.jpg" data-gtf-mfp="true" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Karly Gomez Cake</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>8 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Florencia, Italy</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-3.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Most view</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-3.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$10.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-5.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">After a yoga class changed her life, Maz became vegan, launched...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Miami, FL</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-4.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-4.jpg" class="item viewing" data-toggle="tooltip" data-gtf-mfp="true" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Red Wings Shoes Store</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>6 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$75.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bag">
                                                            <use xlink:href="#icon-bag"></use>
                                                        </svg>
                                                        <span>Shopping</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-3.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Established in 1895, these style merchants have set the standard in Sydney suiting for generations...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address"> Paris, France</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-5.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">AD</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-5.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" data-gtf-mfp="true" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Packing & Delivery Service</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.5</span><span>2 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="text-danger font-weight-semibold">Get a quote</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-cog">
                                                            <use xlink:href="#icon-cog"></use>
                                                        </svg>
                                                        <span>Service</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Most items can be packed securely in these boxes, which are available in several sizes...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">New York, USA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address py-1">Ubud, Indonesia</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="best-rate" role="tabpanel" aria-labelledby="best-rate">
                            <div
                                class="slick-slider arrow-top full-slide custom-nav"
                                data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'
                            >
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex w-lg show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                    <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <svg class="icon icon-chart-bars">
                                                            <use xlink:href="#icon-chart-bars"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$56.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bed">
                                                            <use xlink:href="#icon-bed"></use>
                                                        </svg>
                                                        <span>Hotel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury's Russell Square and a 2 minutes' walk from the tube station of the same name...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none link-hover-secondary-blue"> San Francisco, CA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-2.jpg" alt="store 2" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Best Rate</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-2.jpg" data-gtf-mfp="true" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Karly Gomez Cake</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>8 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Florencia, Italy</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-3.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Most view</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-3.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$10.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-5.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">After a yoga class changed her life, Maz became vegan, launched...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Miami, FL</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-4.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-4.jpg" class="item viewing" data-toggle="tooltip" data-gtf-mfp="true" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Red Wings Shoes Store</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>6 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$75.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bag">
                                                            <use xlink:href="#icon-bag"></use>
                                                        </svg>
                                                        <span>Shopping</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-3.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Established in 1895, these style merchants have set the standard in Sydney suiting for generations...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address"> Paris, France</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-5.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">AD</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-5.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" data-gtf-mfp="true" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Packing & Delivery Service</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.5</span><span>2 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="text-danger font-weight-semibold">Get a quote</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-cog">
                                                            <use xlink:href="#icon-cog"></use>
                                                        </svg>
                                                        <span>Service</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Most items can be packed securely in these boxes, which are available in several sizes...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">New York, USA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address py-1">Ubud, Indonesia</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="most-view" role="tabpanel" aria-labelledby="most-view">
                            <div
                                class="slick-slider arrow-top full-slide custom-nav"
                                data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'
                            >
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex w-lg show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                    <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <svg class="icon icon-chart-bars">
                                                            <use xlink:href="#icon-chart-bars"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$56.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bed">
                                                            <use xlink:href="#icon-bed"></use>
                                                        </svg>
                                                        <span>Hotel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury's Russell Square and a 2 minutes' walk from the tube station of the same name...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none link-hover-secondary-blue"> San Francisco, CA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-2.jpg" alt="store 2" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Best Rate</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-2.jpg" data-gtf-mfp="true" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Karly Gomez Cake</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>8 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Florencia, Italy</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-3.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Most view</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-3.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$10.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-5.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">After a yoga class changed her life, Maz became vegan, launched...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Miami, FL</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-4.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-4.jpg" class="item viewing" data-toggle="tooltip" data-gtf-mfp="true" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Red Wings Shoes Store</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>6 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$75.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bag">
                                                            <use xlink:href="#icon-bag"></use>
                                                        </svg>
                                                        <span>Shopping</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-3.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Established in 1895, these style merchants have set the standard in Sydney suiting for generations...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address"> Paris, France</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-5.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">AD</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-5.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" data-gtf-mfp="true" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Packing & Delivery Service</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.5</span><span>2 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="text-danger font-weight-semibold">Get a quote</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-cog">
                                                            <use xlink:href="#icon-cog"></use>
                                                        </svg>
                                                        <span>Service</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Most items can be packed securely in these boxes, which are available in several sizes...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">New York, USA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address py-1">Ubud, Indonesia</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular">
                            <div
                                class="slick-slider arrow-top full-slide custom-nav"
                                data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'
                            >
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex w-lg show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                    <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <svg class="icon icon-chart-bars">
                                                            <use xlink:href="#icon-chart-bars"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('website') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Dummy Hotel for Test</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$56.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bed">
                                                            <use xlink:href="#icon-bed"></use>
                                                        </svg>
                                                        <span>Hotel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury's Russell Square and a 2 minutes' walk from the tube station of the same name...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none link-hover-secondary-blue"> San Francisco, CA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-2.jpg" alt="store 2" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Best Rate</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-2.jpg" data-gtf-mfp="true" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Karly Gomez Cake</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>8 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Florencia, Italy</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-3.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Most view</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-3.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$10.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-5.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">After a yoga class changed her life, Maz became vegan, launched...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Miami, FL</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-4.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-4.jpg" class="item viewing" data-toggle="tooltip" data-gtf-mfp="true" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Red Wings Shoes Store</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>6 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$75.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bag">
                                                            <use xlink:href="#icon-bag"></use>
                                                        </svg>
                                                        <span>Shopping</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-3.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Established in 1895, these style merchants have set the standard in Sydney suiting for generations...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address"> Paris, France</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-5.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">AD</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-5.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" data-gtf-mfp="true" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Packing & Delivery Service</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.5</span><span>2 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="text-danger font-weight-semibold">Get a quote</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-cog">
                                                            <use xlink:href="#icon-cog"></use>
                                                        </svg>
                                                        <span>Service</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Most items can be packed securely in these boxes, which are available in several sizes...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">New York, USA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address py-1">Ubud, Indonesia</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ad-directory" role="tabpanel" aria-labelledby="ad-directory">
                            <div
                                class="slick-slider arrow-top full-slide custom-nav"
                                data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'
                            >
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex w-lg show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                    <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <svg class="icon icon-chart-bars">
                                                            <use xlink:href="#icon-chart-bars"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$56.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bed">
                                                            <use xlink:href="#icon-bed"></use>
                                                        </svg>
                                                        <span>Hotel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury's Russell Square and a 2 minutes' walk from the tube station of the same name...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none link-hover-secondary-blue"> San Francisco, CA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-2.jpg" alt="store 2" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Best Rate</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-2.jpg" data-gtf-mfp="true" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Karly Gomez Cake</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>8 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Florencia, Italy</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-3.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Most view</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-3.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$10.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-5.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">After a yoga class changed her life, Maz became vegan, launched...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">Miami, FL</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-4.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-4.jpg" class="item viewing" data-toggle="tooltip" data-gtf-mfp="true" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Red Wings Shoes Store</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>6 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$75.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bag">
                                                            <use xlink:href="#icon-bag"></use>
                                                        </svg>
                                                        <span>Shopping</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-3.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Established in 1895, these style merchants have set the standard in Sydney suiting for generations...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address"> Paris, France</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-5.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">AD</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-5.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" data-gtf-mfp="true" title="Quick view">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2">
                                                <span class="letter-spacing-25">Packing & Delivery Service</span>
                                                <span class="check">
                                                    <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                                                </span>
                                            </a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.5</span><span>2 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="text-danger font-weight-semibold">Get a quote</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-cog">
                                                            <use xlink:href="#icon-cog"></use>
                                                        </svg>
                                                        <span>Service</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Most items can be packed securely in these boxes, which are available in several sizes...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">New York, USA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="{{ url('directory') }}">
                                                <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Featured</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="{{ url('directory') }}" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
                                                            <use xlink:href="#icon-pizza"></use>
                                                        </svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address py-1">Ubud, Indonesia</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-main-testimonial pt-12 pb-13" id="section-04">
                <div class="container">
                    <h2 class="mb-8">
                        <span class="font-weight-semibold">About </span>
                        <span class="font-weight-light">Us</span>
                    </h2>
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-12">
                                <div>
                                    <p>
                                        We are a group of dedicated entrepreneurs, acting as a team towards bring up every individual entrepreneurs compete in the present higher generation of digitalised universe. Through our world class platform, served at very simple reach to every entrepreneurs. 
                                    </p>
                                    <p>
                                        Making a statement very clear, that we are with you towards building a ethical prosperous and verified business supportive entrepreneurship towards making a country economically stable along with implementation of digital literacy in rural sector and bringing them to corporate reach by supporting their business and putting up spotlight on creating a unique business profile which is digitally designed by a company.
                                    </p>
                                    <p>
                                        Join with us and Boost Your Business today with our first time in India rural entrepreneurship program initiated for betterment of every individual entrepreneurs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <div id="login-popup" class="mfp-hide">
        <div class="form-login-register">
            <div class="tabs mb-8">
                <ul class="nav nav-pills tab-style-01 text-capitalize justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true"><h3>Log In</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false"><h3>Register</h3></a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <div class="form-login">
                        <form>
                            <div class="font-size-md text-dark mb-5">Log In Your Account</div>
                            <div class="form-group mb-2">
                                <label for="username" class="sr-only">Username</label>
                                <input id="username" type="text" class="form-control" placeholder="Username" />
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap align-items-center">
                                    <label for="password" class="sr-only">Password</label>
                                    <input id="password" type="text" class="form-control" placeholder="Password" />
                                    <a href="#" class="input-group-append text-decoration-none">Forgot?</a>
                                </div>
                            </div>
                            <div class="form-group mb-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check" />
                                    <label class="custom-control-label text-dark" for="check">Remember</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm mb-8">
                                Log In
                            </button>
                        </form>
                        <div class="font-size-md text-dark mb-5">Or Log In With</div>
                        <div class="social-icon origin-color si-square">
                            <ul class="row no-gutters list-inline text-center">
                                <li class="list-inline-item si-facebook col-3">
                                    <a target="_blank" title="Facebook" href="#">
                                        <i class="fab fa-facebook-f"> </i>
                                        <span>Facebook</span>
                                    </a>
                                </li>
                                <li class="list-inline-item si-twitter col-3">
                                    <a target="_blank" title="Twitter" href="#">
                                        <i class="fab fa-twitter"> </i>
                                        <span>Twitter</span>
                                    </a>
                                </li>
                                <li class="list-inline-item si-google col-3">
                                    <a target="_blank" title="Google plus" href="#">
                                        <svg class="icon icon-google-plus-symbol">
                                            <use xlink:href="#icon-google-plus-symbol"></use>
                                        </svg>
                                        <span>Google plus</span>
                                    </a>
                                </li>
                                <li class="list-inline-item si-rss col-3">
                                    <a target="_blank" title="RSS" href="#">
                                        <i class="fas fa-rss"></i>
                                        <span>RSS</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                    <div class="form-register">
                        <form>
                            <div class="font-size-md text-dark mb-5">Create Your Account</div>
                            <div class="form-group mb-2">
                                <label for="username-rt" class="sr-only">Username</label>
                                <input id="username-rt" type="text" class="form-control" placeholder="Username" />
                            </div>
                            <div class="form-group mb-2">
                                <label for="email" class="sr-only">Email</label>
                                <input id="email" type="text" class="form-control" placeholder="Email Address" />
                            </div>
                            <div class="form-group mb-2">
                                <label for="password-rt" class="sr-only">Username</label>
                                <input id="password-rt" type="password" class="form-control" placeholder="Password" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="r-password" class="sr-only">Username</label>
                                <input id="r-password" type="password" class="form-control" placeholder="Retype password" />
                            </div>
                            <div class="form-group mb-8">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check-term" />
                                    <label class="custom-control-label text-dark" for="check-term">You agree with our Terms Privacy Policy and</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm">
                                Create an account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <form></form>
        </div>
    </div>
    <div id="search-popup" class="mfp-hide">
        <div class="search-popup text-center">
            <h2 class="mb-8">Search</h2>
            <div class="form-search">
                <form>
                    <div class="row align-items-end">
                        <div class="form-search-item col-md-7 mb-4 mb-md-0 text-left bg-white">
                            <label for="key-word-02" class="pt-4 mb-0 text-dark font-weight-semibold font-size-lg lh-1">What</label>
                            <div class="input-group dropdown show pr-0 bg-transparent align-items-start">
                                <input
                                    type="text"
                                    autocomplete="off"
                                    id="key-word-02"
                                    class="form-control bg-transparent border-0 p-0 font-size-md lh-1"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    placeholder="Ex: food, service, barber, hotel"
                                />
                                <button type="submit" class="btn text-dark btn-link input-group-append font-weight-normal p-0">
                                    <i class="fal fa-search"></i>
                                </button>
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="key-word-02">
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-pizza">
                                                <use xlink:href="#icon-pizza"></use>
                                            </svg>
                                            <span class="font-size-md">Foods & Restaurants</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-bed">
                                                <use xlink:href="#icon-bed"></use>
                                            </svg>
                                            <span class="font-size-md">Hotels & Resorts</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-pharmaceutical">
                                                <use xlink:href="#icon-pharmaceutical"></use>
                                            </svg>
                                            <span class="font-size-md">Healths & Medicals</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-cog">
                                                <use xlink:href="#icon-cog"></use>
                                            </svg>
                                            <span class="font-size-md">Services</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-car">
                                                <use xlink:href="#icon-car"></use>
                                            </svg>
                                            <span class="font-size-md">Automotive</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-search-item col-md-5 mb-4 mb-md-0 text-left bg-white">
                            <label for="region-02" class="pt-4 mb-0 text-dark font-weight-semibold font-size-lg lh-1">Where</label>
                            <div class="input-group dropdown show pr-0 bg-transparent align-items-start">
                                <input type="text" autocomplete="off" id="region-02" class="form-control bg-transparent border-0 p-0 font-size-md lh-1" data-toggle="dropdown" aria-haspopup="true" placeholder="San Francisco" />
                                <a href="#" class="input-group-append text-decoration-none" data-toggle="dropdown">
                                    <i class="fal fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="region-02">
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Austin
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Boston
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Chicago
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Denver
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Los Angeles
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            New York
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            San Francisco
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Seattle
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Washington
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="heading mb-4">
                <div class="pt-8 font-size-lg mb-5">
                    Or browse the highlights
                </div>
            </div>
            <div class="list-inline flex-wrap my-n2">
                <div class="list-inline-item py-2">
                    <a href="#" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-pizza">
                                <use xlink:href="#icon-pizza"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Foods
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="#" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-bed">
                                <use xlink:href="#icon-bed"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Hotels
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="#" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-brush2">
                                <use xlink:href="#icon-brush2"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Jobs
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="#" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-pharmaceutical">
                                <use xlink:href="#icon-pharmaceutical"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Medicals
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="#" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-cog">
                                <use xlink:href="#icon-cog"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Services
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="#" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-bag">
                                <use xlink:href="#icon-bag"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Shopping
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="#" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-car">
                                <use xlink:href="#icon-car"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Automotive
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <a href="#" class="d-inline-block button-close mt-11 pt-1 text-dark font-size-lg font-weight-semibold text-decoration-none">
                <span class="d-block"><i class="fal fa-times"></i></span>
                <span class="d-block">Close</span>
            </a>
        </div>
    </div>
</div>


@endsection