@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.footer')
@section('title', 'Home Page')

@section('content')
<div id="wrapper-content" class="wrapper-content pb-0 pt-0">
    <div class="image-gallery">
        <div
            class="slick-slider arrow-center"
            data-slick-options='{"slidesToShow": 1, "autoplay":true,"infinite": true,"centerMode": true,"centerPadding": "0","dots":false,"variableWidth": true, "variableHeight": true,"focusOnSelect": true,"responsive":[{"breakpoint": 576,"settings": {"arrows": false,"autoplay":true}}]}'
        >
            <div class="box"><img src="images/shop/hotel-2.jpg" alt="Gallery 01" /></div>
            <div class="box center"><img src="images/shop/hotel-5.jpg" alt="Gallery 02" /></div>
            <div class="box"><img src="images/shop/hotel-4.jpg" alt="Gallery 03" /></div>
        </div>
    </div>
    <div class="page-title bg-gray-06 pt-8 pb-9">
        <div class="container">
            <ul class="breadcrumb breadcrumb-style-03 mb-6">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Hotels & Resorts </a></li>
                <li class="breadcrumb-item">Roman Kraft Hotel</li>
            </ul>
            <div class="explore-details-top d-flex flex-wrap flex-lg-nowrap">
                <div class="store">
                    <div class="d-flex flex-wrap">
                        <h2 class="text-dark mr-3 mb-2">Roman Kraft Hotel</h2>
                        <span class="check font-weight-semibold text-green mb-2">
                            <svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
                            Verified
                        </span>
                    </div>
                    <ul class="list-inline store-meta d-flex flex-wrap align-items-center">
                        <li class="list-inline-item">
                            <span class="badge badge-success d-inline-block mr-1">5.0</span>
                            <span>4 rating</span>
                        </li>
                        <li class="list-inline-item separate"></li>
                        <li class="list-inline-item">
                            <a href="#" class="text-link text-decoration-none d-flex align-items-center">
                                <span class="d-inline-block mr-2 font-size-md">
                                    <svg class="icon icon-bed">
                                        <use xlink:href="#icon-bed"></use>
                                    </svg>
                                </span>
                                <span>Hotel</span>
                            </a>
                        </li>
                        <li class="list-inline-item separate"></li>
                        <li class="list-inline-item">
                            <span class="mr-1"><i class="fal fa-clock"></i></span>
                            <span>Posted 15 hours ago</span>
                        </li>
                    </ul>
                </div>
                <div class="ml-0 ml-lg-auto mt-4 mt-lg-0 d-flex flex-wrap flex-sm-nowrap">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-white font-size-md mb-3 mb-sm-0 py-1 px-2 rounded-sm">
                                <span class="d-inline-block mr-1">
                                    <i class="fal fa-exclamation-triangle"></i>
                                </span>
                                Report
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-white font-size-md mb-3 mb-sm-0 py-1 px-3 rounded-sm">
                                <span class="d-inline-block mr-1">
                                    <i class="fal fa-share-alt"></i>
                                </span>
                                Share
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-white font-size-md mb-3 mb-sm-0 py-1 px-4 rounded-sm">
                                <span class="d-inline-block mr-1">
                                    <i class="fal fa-bookmark"></i>
                                </span>
                                Save
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-white font-size-md mb-3 mb-sm-0 py-1 px-2 rounded-sm">
                                <span class="d-inline-block">
                                    <svg class="icon icon-chart-bars">
                                        <use xlink:href="#icon-chart-bars"></use>
                                    </svg>
                                </span>
                                Compare
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-container">
            <div class="row">
                <div class="page-content col-xl-8 mb-8 mb-xl-0">
                    <div class="explore-details-container">
                        <div class="mb-9">
                            <h3 class="font-size-lg text-uppercase font-weight-semibold border-bottom pb-1 pt-2 mb-6">
                                description
                            </h3>
                            <h4 class="font-size-md mb-4">Introduce</h4>
                            <div class="mb-7">
                                <p class="mb-6">
                                    Thai’s Taste Restaurant (often shortened to Thai‘s Flavour) is a 1950s style diner located in Madison, Wisconsin. Opened in 1946 by Daniel Raclift, and located just across the street from Camp
                                    Randall Stadium, it has become a popular game day Thai’s Taste Restaurant (often shortened to Thai‘s Taste) is a 1950s style diner located in Madison, Wisconsin.<br />
                                    Opened in 1946 by Robert Downey Jr, and located just across the street from Camp Randall Stadium, it has become a popular game day tradition amongst many Badger fans. The diner is well known
                                    for its breakfast selections, especially the Scrambler, which is a large mound of potatoes, eggs, cheese, gravy, and a patrons’ choice of other toppings.
                                </p>
                                <p class="mb-0">
                                    Thai‘s Taste has also been featured on “Todd’s Taste of the Town” during one of ESPN’s college football broadcasts adition amongst many Badger fans. The diner is well known for its breakfast
                                    selections, especially the Scrambler, which is a large mound of potatoes, eggs, cheese, gravy, and a patrons’ choice of other toppings.
                                </p>
                            </div>
                            <h4 class="font-size-md mb-4">
                                Amenities
                            </h4>
                            <div class="row">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <ul class="list-group list-group-flush list-group-borderless">
                                        <li class="list-group-item px-0 bg-transparent py-0 lh-19">
                                            <span class="d-inline-block mr-2 font-size-md">
                                                <i class="fal fa-credit-card"></i>
                                            </span>
                                            <span class="text-dark">
                                                Accept Credit Cards
                                            </span>
                                        </li>
                                        <li class="list-group-item px-0 bg-transparent py-0 lh-19">
                                            <span class="d-inline-block mr-2 font-size-md">
                                                <i class="fas fa-user-friends"></i>
                                            </span>
                                            <span class="text-dark">
                                                Family/Kids Friendly
                                            </span>
                                        </li>
                                        <li class="list-group-item px-0 bg-transparent py-0 lh-19">
                                            <span class="d-inline-block mr-2 font-size-md">
                                                <i class="far fa-calendar"></i>
                                            </span>
                                            <span class="text-dark">
                                                Reservation
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <ul class="list-group list-group-flush list-group-borderless">
                                        <li class="list-group-item px-0 bg-transparent py-0 lh-19">
                                            <span class="d-inline-block mr-2 font-size-md">
                                                <i class="fas fa-mug-hot"></i>
                                            </span>
                                            <span class="text-dark">
                                                Breakfast Include
                                            </span>
                                        </li>
                                        <li class="list-group-item px-0 bg-transparent py-0 lh-19">
                                            <span class="d-inline-block mr-2 font-size-md">
                                                <i class="fas fa-wifi"></i>
                                            </span>
                                            <span class="text-dark">
                                                Wireless/Internet
                                            </span>
                                        </li>
                                        <li class="list-group-item px-0 bg-transparent py-0 lh-1">
                                            <span class="d-inline-block mr-2 font-size-h5">
                                                <svg class="icon icon-ionicons_svg_logo-model-s">
                                                    <use xlink:href="#icon-ionicons_svg_logo-model-s"></use>
                                                </svg>
                                            </span>
                                            <span class="text-dark">
                                                Car Parking
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <ul class="list-group list-group-flush list-group-borderless">
                                        <li class="list-group-item px-0 bg-transparent py-0 lh-19">
                                            <span class="d-inline-block mr-2 font-size-md">
                                                <i class="fas fa-paw"></i>
                                            </span>
                                            <span class="text-dark">
                                                Pet Allowed
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="block-review">
                            <h3 class="font-size-lg text-uppercase border-bottom pb-1 mb-6">
                                Reviews & Ratings
                            </h3>
                            <h4 class="font-size-md mb-1">02 Reviews for Thai’s Taste Restaurant</h4>
                            <div class="reviews">
                                <div class="py-6 media border-top">
                                    <a href="#" class="author-image">
                                        <img src="images/listing/jobs-testimonial-1.png" alt="Author 1" class="rounded-circle" />
                                    </a>
                                    <div class="media-body">
                                        <div class="mb-4 row flex-md-nowrap mb-5">
                                            <div class="col-12 col-md-10">
                                                <div class="h5 mb-1">Great place and very love it!</div>
                                                <ul class="list-inline text-gray">
                                                    <li class="list-inline-item">
                                                        <span>by</span>
                                                        <a href="#">Ron Weasley</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>|</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>15 hours ago</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ml-0 ml-md-auto text-left text-md-right col-12 col-md-2 mt-2 mt-md-0">
                                                <span class="badge badge-success d-inline-block font-size-h5 font-weight-semibold">5.0</span>
                                                <span class="text-dark font-weight-semibold font-size-md d-block">Excellent</span>
                                            </div>
                                        </div>
                                        <p class="mb-0">This place is the epitome of an amazing college town diner! Badger decor, huge portions, completely affordable, hearty meals and awesome service!</p>
                                        <div class="images d-flex flex-wrap">
                                            <img src="images/listing/review-01.jpg" alt="Review 1" class="mt-4" />
                                            <img src="images/listing/review-02.jpg" alt="Review 2" class="mt-4" />
                                            <img src="images/listing/review-03.jpg" alt="Review 3" class="mt-4" />
                                        </div>
                                        <div class="icons d-flex mt-4">
                                            <div class="mr-5 like">
                                                <i class="fal fa-thumbs-up"></i>
                                                12
                                            </div>
                                            <div class="love">
                                                <i class="fal fa-heart"></i>
                                                8
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-6 media border-top">
                                    <a href="#" class="author-image">
                                        <img src="images/listing/review-athor-01.jpg" alt="Author 2" class="rounded-circle" />
                                    </a>
                                    <div class="media-body">
                                        <div class="mb-4 row flex-md-nowrap mb-5">
                                            <div class="col-12 col-md-10">
                                                <div class="h5 mb-1">Delicious & Fast Support</div>
                                                <ul class="list-inline d-flex text-gray">
                                                    <li class="list-inline-item">
                                                        <span>by</span>
                                                        <a href="#">Anna Molly </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>|</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>17 hours ago</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="rating ml-0 ml-md-auto text-left text-md-right col-12 col-md-2 mt-2 mt-md-0">
                                                <span class="badge badge-success d-inline-block font-size-h5 font-weight-semibold">5.0</span>
                                                <span class="text-dark font-weight-semibold font-size-md d-block">Excellent</span>
                                            </div>
                                        </div>
                                        <p class="mb-0">
                                            This place is the epitome of an amazing college town diner! Badger decor, huge portions, completely affordable, hearty meals and awesome service! The ambiance is very chill and comfy.
                                            Just moved to Thai’s Taste and already went here twice (two days in a row) because there's really nothing like this place. It's going to be hard to find another place like this in
                                            regards to service, taste, portions & price! My husband and I will definitely be regulars here!
                                        </p>
                                        <div class="icons d-flex mt-4">
                                            <div class="like mr-5">
                                                <i class="fal fa-thumbs-up"></i>
                                                5
                                            </div>
                                            <div class="love">
                                                <i class="fal fa-heart"></i>
                                                3
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-form-review bg-gray-06 px-5 pb-6">
                            <h4 class="font-size-md pb-1 border-bottom pt-4 mb-4">
                                Rate Us & Write A Review
                            </h4>
                            <form>
                                <div class="row mb-4 flex-md-nowrap align-items-center">
                                    <div class="form-group d-flex form-rate col-md-6 align-items-center mb-4 mb-md-0">
                                        <span class="d-inline-block mr-2">Select your rating</span>
                                        <div class="rate-input d-flex">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="mb-0">
                                                <svg class="icon icon-ionicons_svg_md-star">
                                                    <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                </svg>
                                            </label>
                                            <input type="radio" id="star4" name="rate" value="4" checked />
                                            <label for="star4" title="text" class="mb-0">
                                                <svg class="icon icon-ionicons_svg_md-star">
                                                    <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                </svg>
                                            </label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="mb-0">
                                                <svg class="icon icon-ionicons_svg_md-star">
                                                    <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                </svg>
                                            </label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="mb-0">
                                                <svg class="icon icon-ionicons_svg_md-star">
                                                    <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                </svg>
                                            </label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="mb-0">
                                                <svg class="icon icon-ionicons_svg_md-star">
                                                    <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="upload-file col-md-6 text-left text-md-right">
                                        <input type="file" id="file" /><label for="file" class="btn btn-white btn-icon-left mb-0 px-6"><i class="fas fa-cloud-upload"></i>Add a Photo</label>
                                    </div>
                                </div>
                                <div class="form-row mx-0">
                                    <div class="col-sm-4 form-group mb-4 pl-0 pr-0 pr-sm-3">
                                        <input class="form-control" placeholder="Name" />
                                    </div>
                                    <div class="col-sm-4 form-group pl-0 mb-4 pr-0 pr-sm-3">
                                        <input class="form-control" placeholder="Email Address" />
                                    </div>
                                    <div class="col-sm-4 form-groupmb-4 px-0">
                                        <input class="form-control" placeholder="Subject" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <textarea class="form-control" placeholder="Write your review here..."></textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary font-size-md btn-lg lh-base">Sign Up & Submit Review</button>
                                </div>
                            </form>
                        </div>
                        <div class="block-more-listing mt-8 border-top pt-6">
                            <h4 class="font-size-md mb-5">More Listing By <span class="text-danger">Ron Weasley</span></h4>
                            <div class="slick-slider arrow-top store-grid-style" data-slick-options='{"slidesToShow": 2, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 1}}]}'>
                                <div class="box">
                                    <div class="store card rounded-0 border-0">
                                        <div class="position-relative store-image">
                                            <a href="listing-details-full-image.html">
                                                <img src="images/shop/popular-place-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-right ml-auto d-flex">
                                                    <a href="images/shop/full-popular-place-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pb-4 border-right border-left">
                                            <a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Japan Rice Mixed Seafood</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">5.0</span><span class="number">4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.0</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="text-green">Open now!</span></li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury’s Russell Square and a 2 minutes’ walk from the tube station of the same name...</div>
                                            </div>
                                        </div>
                                        <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
                                            <div class="border-top pt-3">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"></i>
                                                </span>
                                                <a href="#" class="text-secondary pr-3 text-decoration-none address">534 Salem Rd St, Newark, NY</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="store card rounded-0 border-0">
                                        <div class="position-relative store-image">
                                            <a href="listing-details-full-image.html">
                                                <img src="images/shop/popular-place-2.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-right ml-auto d-flex">
                                                    <a href="images/shop/full-popular-place-2.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pb-4 border-right border-left">
                                            <a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Fruit Cake - Halsey St </span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">4.8</span><span class="number">2 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$4.0</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="text-green">Open now!</span></li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
                                            <div class="border-top pt-3">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"></i>
                                                </span>
                                                <a href="#" class="text-secondary pr-3 text-decoration-none address">92 Halsey St, Brooklyn, NY</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="store card rounded-0 border-0">
                                        <div class="position-relative store-image">
                                            <a href="listing-details-full-image.html">
                                                <img src="images/shop/popular-place-1.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-right ml-auto d-flex">
                                                    <a href="images/shop/full-popular-place-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pb-4 border-right border-left">
                                            <a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Japan Rice Mixed Seafood</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">5.0</span><span class="number">4 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.0</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="text-green">Open now!</span></li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury’s Russell Square and a 2 minutes’ walk from the tube station of the same name...</div>
                                            </div>
                                        </div>
                                        <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
                                            <div class="border-top pt-3">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"></i>
                                                </span>
                                                <a href="#" class="text-secondary pr-3 text-decoration-none address">534 Salem Rd St, Newark, NY</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="store card rounded-0 border-0">
                                        <div class="position-relative store-image">
                                            <a href="listing-details-full-image.html">
                                                <img src="images/shop/popular-place-2.jpg" alt="store 1" class="card-img-top rounded-0" />
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-right ml-auto d-flex">
                                                    <a href="images/shop/full-popular-place-2.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
                                                            <use xlink:href="#icon-expand"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pb-4 border-right border-left">
                                            <a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Fruit Cake - Halsey St </span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">4.8</span><span class="number">2 rating</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$4.0</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="text-green">Open now!</span></li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle" /> </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...</div>
                                            </div>
                                        </div>
                                        <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
                                            <div class="border-top pt-3">
                                                <span class="d-inline-block mr-1">
                                                    <i class="fal fa-map-marker-alt"></i>
                                                </span>
                                                <a href="#" class="text-secondary pr-3 text-decoration-none address">534 Salem Rd St, Newark, NY</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar col-xl-4">
                    <div class="card p-4 widget border-0 rounded-0 reservation bg-gray-06 mb-6">
                        <div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
                            <span class="text-secondary mr-3"><i class="fal fa-calendar"></i></span>
                            <span> Make An online Reservation</span>
                        </div>
                        <div class="card-body px-0">
                            <div class="text-danger font-weight-semibold mb-2">
                                <span>From: $49/Night</span>
                            </div>
                            <div class="form-reservation">
                                <form>
                                    <div class="d-flex">
                                        <div class="form-group person">
                                            <label for="person">Persons:</label>
                                            <div class="arrows bg-white">
                                                <select id="person" class="form-control form-control-sm bg-transparent">
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group type">
                                            <label for="type">Type</label>
                                            <div class="select-custom bg-white">
                                                <select class="form-control form-control-sm bg-transparent" id="type">
                                                    <option value="1">Standard Room ($49.00/Ni)</option>
                                                    <option value="2">Vip Room ($100.00/Ni)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="datepicker-style-01" data-datepicker="true" data-picker-option='{"inline":true,"language":"my-lang"}'></div>
                                        <input type="hidden" id="datepicker_send" />
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Book Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="widget map mb-6 position-relative mb-6 rounded-0">
                        <div id="googleMap" data-google-map="true" class="small-map" style="width: 100%; height: 240px;"></div>
                        <div class="button-direction position-absolute">
                            <a href="#" class="btn btn-sm btn-icon-left">
                                <i class="fas fa-location-arrow"></i>
                                Get Direction
                            </a>
                        </div>
                        <div class="card p-4 widget border-0 infomation pt-0 bg-gray-06">
                            <div class="card-body px-0 py-2">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                        <span class="item-icon mr-3"><i class="fal fa-map-marker-alt"></i></span>
                                        <span class="card-text">125 Mountain St, Brooklyn, NY</span>
                                    </li>
                                    <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                        <span class="item-icon mr-3">
                                            <svg class="icon icon-telephone">
                                                <use xlink:href="#icon-telephone"></use>
                                            </svg>
                                        </span>
                                        <span class="card-text">(301) 453-8688</span>
                                    </li>
                                    <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                        <span class="item-icon mr-3"><i class="fal fa-globe"></i></span>
                                        <span class="card-text"><a href="#">www.thaistaste.com</a></span>
                                    </li>
                                    <li class="list-group-item bg-transparent d-flex text-dark px-0 pt-4">
                                        <div class="social-icon origin-color si-square text-center">
                                            <ul class="list-inline">
                                                <li class="list-inline-item si-facebook">
                                                    <a target="_blank" title="Facebook" href="#">
                                                        <i class="fab fa-facebook-f"> </i>
                                                        <span>Facebook</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item si-twitter">
                                                    <a target="_blank" title="Twitter" href="#">
                                                        <i class="fab fa-twitter"> </i>
                                                        <span>Twitter</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item si-google">
                                                    <a target="_blank" title="Google plus" href="#">
                                                        <svg class="icon icon-google-plus-symbol">
                                                            <use xlink:href="#icon-google-plus-symbol"></use>
                                                        </svg>
                                                        <span>Google plus</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item si-tumblr">
                                                    <a target="_blank" title="Tumblr" href="#">
                                                        <i class="fab fa-tumblr"></i>
                                                        <span>Tumblr</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item si-rss">
                                                    <a target="_blank" title="RSS" href="#">
                                                        <i class="fas fa-rss"></i>
                                                        <span>RSS</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 widget border-0 gallery bg-gray-06 rounded-0 mb-6">
                        <div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
                            <span class="text-secondary mr-3">
                                <svg class="icon icon-ionicons_svg_md-images">
                                    <use xlink:href="#icon-ionicons_svg_md-images"></use>
                                </svg>
                            </span>
                            <span> photo gallery</span>
                        </div>
                        <div class="card-body px-0 pt-6 pb-3">
                            <div class="photo-gallery d-flex flex-wrap justify-content-between">
                                <a href="images/shop/full-hotels-shop-2.jpg" class="photo-item" data-gtf-mfp="true" data-gallery-id="01">
                                    <img src="images/listing/gallery-01.jpg" alt="Gallery 01" />
                                </a>
                                <a href="images/listing/full-gallery-02.jpg" class="photo-item" data-gtf-mfp="true" data-gallery-id="01"> <img src="images/listing/gallery-02.jpg" alt="Gallery 02" /></a>

                                <a href="images/listing/full-gallery-03.jpg" class="photo-item" data-gtf-mfp="true" data-gallery-id="01"> <img src="images/listing/gallery-03.jpg" alt="Gallery 03" /></a>

                                <a href="images/listing/full-gallery-04.jpg" class="photo-item" data-gtf-mfp="true" data-gallery-id="01"> <img src="images/listing/gallery-04.jpg" alt="Gallery 04" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 widget border-0 bg-gray-06 rounded-0 mb-6">
                        <div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
                            <span>additional details</span>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                    <label class="mb-0">Self Check-in</label>
                                    <span class="ml-auto font-weight-semibold">Smartlock</span>
                                </li>
                                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                    <label class="mb-0">Room Type</label>
                                    <span class="ml-auto font-weight-semibold">Private Room</span>
                                </li>
                                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                    <label class="mb-0">Beds</label>
                                    <span class="ml-auto font-weight-semibold">6</span>
                                </li>
                                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                    <label class="mb-0">Bed Type</label>
                                    <span class="ml-auto font-weight-semibold">Fixed With Air Condition</span>
                                </li>
                                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                    <label class="mb-0">Happy Hours</label>
                                    <span class="text-green ml-auto font-weight-semibold">Yes</span>
                                </li>
                                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                    <label class="mb-0">Smoking</label>
                                    <span class="text-danger ml-auto font-weight-semibold">No</span>
                                </li>
                                <li class="list-group-item bg-transparent d-flex text-dark px-0 pt-3">
                                    <a href="#">
                                        Show More <span class="d-inline-block ml-2"><i class="fal fa-chevron-down"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card p-4 widget border-0 contact bg-gray-06 rounded-0 mb-6">
                        <div class="card-title mb-0 border-bottom pb-2">
                            <div class="media">
                                <div class="image mr-3"><img src="images/listing/jobs-testimonial-1.png" alt="Contact me" class="rounded-circle" /></div>
                                <div class="media-body lh-14 font-size-sm">
                                    <span class="font-weight-semibold text-dark text-capitalize d-block font-size-md name">Ron Weasley</span>
                                    <span class="text-gray d-block mb-2">San Francisco, CA, USA</span>
                                    <div class="d-flex pb-4 align-items-center">
                                        <a href="#" class="btn btn-primary font-size-base py-0 px-1 mr-2 rounded-sm">Follow</a>
                                        <span class="text-dark font-weight-semibold d-inline-block mr-2">2,865</span>
                                        <span class="text-gray">Followers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-3">
                            <div class="card-title text-uppercase text-dark font-weight-semibold font-size-md">
                                <span class="text-secondary d-inline-block mr-2"><i class="fas fa-envelope"></i></span>
                                <span>Contact me</span>
                            </div>
                            <div class="contact-form">
                                <form>
                                    <div class="form-group mb-2">
                                        <label class="sr-only" for="name">Name</label>
                                        <input type="text" id="name" class="form-control form-control-sm border-0 bg-white" placeholder="Name:" />
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="sr-only" for="email">Email</label>
                                        <input type="text" id="email" class="form-control form-control-sm border-0 bg-white" placeholder="Email Address:" />
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="sr-only" for="message">Message</label>
                                        <textarea class="form-control border-0" id="message" placeholder="Message..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block btn-sm">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 widget border-0 relate-listing bg-gray-06 rounded-0">
                        <div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
                            <span>related listing</span>
                        </div>
                        <div class="card-body px-0 pb-0 pt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent text-dark px-0 py-3 h-100">
                                    <div class="store media align-items-stretch">
                                        <div class="store-image">
                                            <a href="listing-details-full-image.html">
                                                <img src="images/shop/recent-view-1.jpg" alt="Recent view 1" />
                                            </a>
                                        </div>
                                        <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0 pr-0">
                                            <a href="listing-details-full-image.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-1 lh-11">
                                                <span class="letter-spacing-25">
                                                    Canabo View Street,<br />
                                                    Main St
                                                </span>
                                            </a>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="pr-3"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span class="number">6 rating</span></div>
                                            </div>
                                            <div>
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">77 Main St, Queen, NY</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item bg-transparent text-dark px-0 py-3 h-100">
                                    <div class="store media align-items-stretch">
                                        <div class="store-image">
                                            <a href="listing-details-full-image.html">
                                                <img src="images/shop/recent-view-2.jpg" alt="Recent view 1" />
                                            </a>
                                        </div>
                                        <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0 pr-0">
                                            <a href="listing-details-full-image.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-1 lh-11">
                                                <span class="letter-spacing-25">
                                                    Japan's Sushi <br />
                                                    10th Ave St
                                                </span>
                                            </a>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="pr-3"><span class="badge badge-success d-inline-block mr-1">5.0</span><span class="number">7 rating</span></div>
                                            </div>
                                            <div>
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                                <a href="#" class="text-secondary text-decoration-none address">99 10th Ave St, Mahattan</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="recent-view pt-7 bg-white pb-10">
        <div class="container">
            <div class="mb-6">
                <h5 class="mb-0">
                    Recently Viewed
                </h5>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="store media align-items-stretch bg-white">
                        <div class="store-image position-relative">
                            <a href="listing-details-full-image.html">
                                <img src="images/shop/recent-view-1.jpg" alt="Recent view 1" />
                            </a>
                            <div class="image-content position-absolute d-flex align-items-center">
                                <div class="content-right ml-auto d-flex">
                                    <a href="images/shop/full-top-place-3.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                        <svg class="icon icon-expand">
                                            <use xlink:href="#icon-expand"></use>
                                        </svg>
                                    </a>
                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
                            <a href="listing-details-full-image.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span class="letter-spacing-25">Canabo View Street, Main St</span> </a>
                            <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span class="number">6 rating</span></li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$8.00</span></li>
                            </ul>
                            <div>
                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                <a href="#" class="text-secondary text-decoration-none address">77 Main St, Queen, NY</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="store media align-items-stretch bg-white">
                        <div class="store-image position-relative">
                            <a href="listing-details-full-image.html">
                                <img src="images/shop/recent-view-2.jpg" alt="Recent view 1" />
                            </a>
                            <div class="image-content position-absolute d-flex align-items-center">
                                <div class="content-right ml-auto d-flex">
                                    <a href="images/shop/full-top-place-4.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                        <svg class="icon icon-expand">
                                            <use xlink:href="#icon-expand"></use>
                                        </svg>
                                    </a>
                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
                            <a href="listing-details-full-image.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span class="letter-spacing-25">Japan's Sushi - 10th Ave St</span> </a>
                            <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span class="number">7 rating</span></li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
                            </ul>
                            <div>
                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                <a href="#" class="text-secondary text-decoration-none address">99 10th Ave St, Mahattan, NY</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="store media align-items-stretch bg-white">
                        <div class="store-image position-relative">
                            <a href="listing-details-full-image.html">
                                <img src="images/shop/recent-view-3.jpg" alt="Recent view 1" />
                            </a>
                            <div class="image-content position-absolute d-flex align-items-center">
                                <div class="content-right ml-auto d-flex">
                                    <a href="images/shop/full-top-place-5.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                        <svg class="icon icon-expand">
                                            <use xlink:href="#icon-expand"></use>
                                        </svg>
                                    </a>
                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
                            <a href="listing-details-full-image.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span class="letter-spacing-25">Korean Bingsu Shop</span></a>
                            <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span class="number">7 rating</span></li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
                            </ul>
                            <div>
                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span>
                                <a href="#" class="text-secondary text-decoration-none address">534 Salem Rd St, Newark, NY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection