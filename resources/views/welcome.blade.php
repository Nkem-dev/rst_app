@extends('layout.app')

@section('content')



    

    <div class="wrapper">

        <section class="main-banner">
            <div class="container">
                <div class="banner-text">
                    <h2>We deliver the taste of life</h2>
                    <span class="semi-bold text-capitalize">Get it delivered right to your door.</span>
                    <form>
                        <input type="text" name="location" class="half-radius" placeholder="Enter your location">
                        <button type="submit" class="btn-default">Search Food<span></span></button>
                    </form>
                </div><!--banner-text end-->
            </div>
        </section><!--main-banner end-->

        <section class="services-section">
            <div class="container">
                <div class="services-sec">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="service">
                                <h2 class="semi-bold">01.</h2>
                                <span class="text-uppercase"><img src="assets/images/icons/location.svg" alt="">Step 1</span>
                                <h4 class="semi-bold text-capitalize"><a href="#" title="">Choose Location</a></h4>
                                <p>Enter your address or choose your current location using app. </p>
                            </div><!--service end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="service">
                                <h2 class="semi-bold">02.</h2>
                                <span class="text-uppercase"><img src="assets/images/icons/meat.svg" alt="">Step 2</span>
                                <h4 class="semi-bold text-capitalize"><a href="#" title="">Order favorite food</a></h4>
                                <p>Choose your favorite food and a payment method.</p>
                            </div><!--service end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="service">
                                <h2 class="semi-bold">03.</h2>
                                <span class="text-uppercase"><img src="assets/images/icons/box.html" alt="">Step 3</span>
                                <h4 class="semi-bold text-capitalize"><a href="#" title="">fast Delivery</a></h4>
                                <p>Get it delivered right to your door in 1 hour or less.</p>
                            </div><!--service end-->
                        </div>
                    </div>
                </div><!--services end-->
            </div>
        </section><!--services section end-->

        <section class="sec-block pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <span>Featured </span>
                    <h2 class="text-capitalize">restaurants & Cafes</h2>
                    <p class="mx-auto">The best restaurants and cafes that have been working with us for a long time.</p>
                </div><!--sec-title end-->
                <div class="featured-sec">
                    <div class="row mb-70">
                        <div class="col-md-6">
                            <div class="featured-item">
                                <img src="assets/images/resources/ft1.jpg" alt="" class="w-100">
                                <ul class="ftz">
                                    <li>
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.8333 3.33337H4.16667C3.24619 3.33337 2.5 4.07957 2.5 5.00004V16.6667C2.5 17.5872 3.24619 18.3334 4.16667 18.3334H15.8333C16.7538 18.3334 17.5 17.5872 17.5 16.6667V5.00004C17.5 4.07957 16.7538 3.33337 15.8333 3.33337Z" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M2.5 8.33337H17.5" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.3333 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66669 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        Monday - Sunday
                                    </li>
                                    <li>
                                        <span>
                                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 18.3333C14.6024 18.3333 18.3334 14.6023 18.3334 9.99996C18.3334 5.39759 14.6024 1.66663 10 1.66663C5.39765 1.66663 1.66669 5.39759 1.66669 9.99996C1.66669 14.6023 5.39765 18.3333 10 18.3333Z" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 5V10L13.3333 11.6667" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        9:00am - 11:00pm
                                    </li>
                                </ul>
                                <div class="feat-optz">
                                    <span class="text-capitalize">restaurant</span>
                                    <h2 class="text-capitalize"><a href="restaurant-details.html" title="">bulgarian restaurant</a></h2>
                                </div>
                            </div><!--featured-item end-->
                        </div>
                        <div class="col-md-6">
                            <div class="featured-item">
                                <img src="assets/images/resources/ft2.jpg" alt="" class="w-100">
                                <ul class="ftz">
                                    <li>
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.8333 3.33337H4.16667C3.24619 3.33337 2.5 4.07957 2.5 5.00004V16.6667C2.5 17.5872 3.24619 18.3334 4.16667 18.3334H15.8333C16.7538 18.3334 17.5 17.5872 17.5 16.6667V5.00004C17.5 4.07957 16.7538 3.33337 15.8333 3.33337Z" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M2.5 8.33337H17.5" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.3333 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66669 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        Monday - Sunday
                                    </li>
                                    <li>
                                        <span>
                                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 18.3333C14.6024 18.3333 18.3334 14.6023 18.3334 9.99996C18.3334 5.39759 14.6024 1.66663 10 1.66663C5.39765 1.66663 1.66669 5.39759 1.66669 9.99996C1.66669 14.6023 5.39765 18.3333 10 18.3333Z" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 5V10L13.3333 11.6667" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        9:00am - 11:00pm
                                    </li>
                                </ul>
                                <div class="feat-optz">
                                    <span class="text-capitalize">Asian Food</span>
                                    <h2 class="text-capitalize"><a href="restaurant-details.html" title="">Sushi Taste</a></h2>
                                </div>
                            </div><!--featured-item end-->
                        </div>
                        <div class="col-md-8">
                            <div class="featured-item">
                                <img src="assets/images/resources/ft3.jpg" alt="" class="w-100">
                                <ul class="ftz">
                                    <li>
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.8333 3.33337H4.16667C3.24619 3.33337 2.5 4.07957 2.5 5.00004V16.6667C2.5 17.5872 3.24619 18.3334 4.16667 18.3334H15.8333C16.7538 18.3334 17.5 17.5872 17.5 16.6667V5.00004C17.5 4.07957 16.7538 3.33337 15.8333 3.33337Z" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M2.5 8.33337H17.5" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.3333 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66669 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        Monday - Sunday
                                    </li>
                                    <li>
                                        <span>
                                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 18.3333C14.6024 18.3333 18.3334 14.6023 18.3334 9.99996C18.3334 5.39759 14.6024 1.66663 10 1.66663C5.39765 1.66663 1.66669 5.39759 1.66669 9.99996C1.66669 14.6023 5.39765 18.3333 10 18.3333Z" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 5V10L13.3333 11.6667" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        9:00am - 11:00pm
                                    </li>
                                </ul>
                                <div class="feat-optz">
                                    <span class="text-capitalize">Cafe</span>
                                    <h2 class="text-capitalize"><a href="restaurant-details.html" title="">Hot Pastry Cafe</a></h2>
                                </div>
                            </div><!--featured-item end-->
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item">
                                <img src="assets/images/resources/ft4.jpg" alt="" class="w-100">
                                <ul class="ftz">
                                    <li>
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.8333 3.33337H4.16667C3.24619 3.33337 2.5 4.07957 2.5 5.00004V16.6667C2.5 17.5872 3.24619 18.3334 4.16667 18.3334H15.8333C16.7538 18.3334 17.5 17.5872 17.5 16.6667V5.00004C17.5 4.07957 16.7538 3.33337 15.8333 3.33337Z" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M2.5 8.33337H17.5" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.3333 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66669 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        Monday - Sunday
                                    </li>
                                    <li>
                                        <span>
                                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 18.3333C14.6024 18.3333 18.3334 14.6023 18.3334 9.99996C18.3334 5.39759 14.6024 1.66663 10 1.66663C5.39765 1.66663 1.66669 5.39759 1.66669 9.99996C1.66669 14.6023 5.39765 18.3333 10 18.3333Z" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 5V10L13.3333 11.6667" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        9:00am - 11:00pm
                                    </li>
                                </ul>
                                <div class="feat-optz">
                                    <span class="text-capitalize">Pub</span>
                                    <h2 class="text-capitalize"><a href="restaurant-details.html" title="">Beer Power</a></h2>
                                </div>
                            </div><!--featured-item end-->
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-12">
                            <a href="restaurants.html" title="" class="btn-default">View all list <span></span></a>
                        </div>
                    </div>
                </div><!--featured-sec end-->
            </div>
        </section><!--featured-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="section-title text-center">
                    <span>The reason why </span>
                    <h2 class="text-capitalize">why people choose us</h2>
                    <p class="mx-auto">We have many advantages but we will highlight only some of them, look below.</p>
                </div><!--sec-title end-->
                <div class="our-proptz text-center">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="proptz">
                                <div class="propt-icon">
                                    <img src="assets/images/icons/discount.svg" alt="">
                                </div>
                                <h3 class="semi-bold text-capitalize">discount system</h3>
                                <p>We have a favorable discount system for our regular customers.</p>
                            </div><!--proptz end-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="proptz">
                                <div class="propt-icon">
                                    <img src="assets/images/icons/delivery.svg" alt="">
                                </div>
                                <h3 class="semi-bold text-capitalize">Express Delivery</h3>
                                <p>The hottest food & fastest delivery to any location of your city.</p>
                            </div><!--proptz end-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="proptz">
                                <div class="propt-icon">
                                    <img src="assets/images/icons/food.svg" alt="">
                                </div>
                                <h3 class="semi-bold text-capitalize">50+ restaurants</h3>
                                <p>Large selection of restaurants and cafes throughout the country.</p>
                            </div><!--proptz end-->
                        </div>
                    </div>
                </div><!--our-proptz end-->
            </div>
        </section><!--our-proptz-section end-->

        <section class="sec-block">
            <div class="fixed-bg bg1"></div>
            <div class="container">
                <div class="promotion">
                    <h2 class="text-capitalize">Make Your first order and get <span>50% off</span></h2>
                    <span class="text-capitalize semi-bold">Get it delivered right to your door.</span>
                    <p>If you order food delivery from us for the first time then we have a gift - 50% discount for you on the first order. You just need to register and order your favorite food.</p>
                    <a href="restaurants.html" title="" class="btn-default">Order Products <span></span></a>
                </div><!--promotion end-->
            </div>
        </section>

        <section class="sec-block pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <span>Testimonials </span>
                    <h2 class="text-capitalize">happy clients say</h2>
                </div><!--sec-title end-->
                <div class="testimonials text-center">
                    <div class="testimonial-slide">
                        <p>Very fast delivery. I recommend to everyone. The food is very hot and fresh and also as tasty as in a restaurant. The application is very convenient and understandable.</p>
                        <div class="testimonial-by">
                            <img src="assets/images/resources/meta.jpg" alt="">
                            <h4 class="text-capitalize semi-bold">Marco Bituchini</h4>
                            <span>May 16, 2020</span>
                        </div>
                    </div><!--testimonial-slide end-->
                    <div class="testimonial-slide">
                        <p>Very fast delivery. I recommend to everyone. The food is very hot and fresh and also as tasty as in a restaurant. The application is very convenient and understandable.</p>
                        <div class="testimonial-by">
                            <img src="assets/images/resources/meta.jpg" alt="">
                            <h4 class="text-capitalize semi-bold">Marco Bituchini</h4>
                            <span>May 16, 2020</span>
                        </div>
                    </div><!--testimonial-slide end-->
                    <div class="testimonial-slide">
                        <p>Very fast delivery. I recommend to everyone. The food is very hot and fresh and also as tasty as in a restaurant. The application is very convenient and understandable.</p>
                        <div class="testimonial-by">
                            <img src="assets/images/resources/meta.jpg" alt="">
                            <h4 class="text-capitalize semi-bold">Marco Bituchini</h4>
                            <span>May 16, 2020</span>
                        </div>
                    </div><!--testimonial-slide end-->
                </div><!--testimonials end-->
            </div>
        </section>

        <section class="sec-block">
            <div class="container-fluid">
                <div class="section-title text-center">
                    <span>Amazing taste </span>
                    <h2 class="text-capitalize">Popular dishes</h2>
                </div><!--sec-title end-->
                <div class="popular-dishes text-center">
                    <div class="options">
                        <div class="option-isotop">
                            <ul id="filter" class="option-set filters-nav" data-option-key="filter">
                                <li><a class="selected" data-option-value=".meat">Meat</a></li>
                                <li><a data-option-value=".pizza">Pizza</a></li>
                                <li><a data-option-value=".fastfood">Fastfood</a></li>
                                <li><a data-option-value=".sushi">Sushi</a></li>
                                <li><a data-option-value=".vegitarian">Vegitarian food</a></li>
                            </ul>
                        </div>
                    </div><!--options end-->
                    <div class="row">
                        <div class="masonary">
                            <div class="col-lg-3 col-md-6 col-sm-6 meat">
                                <div class="pd-item">
                                    <div class="pd-thumbnail">
                                        <img src="assets/images/resources/img1.jpg" alt="" class="w-100">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="restaurant-details.html" title="">Rib-eye Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$15.69</strong>
                                    <a href="cart.html" title="" class="btn-default gradient-bg half-radius height-2">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 meat">
                                <div class="pd-item">
                                    <div class="pd-thumbnail">
                                        <img src="assets/images/resources/img2.jpg" alt="" class="w-100">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="restaurant-details.html" title="">Top Sirloin Steaks </a></h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$25.39</strong>
                                    <a href="cart.html" title="" class="btn-default gradient-bg half-radius height-2">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 meat">
                                <div class="pd-item">
                                    <div class="pd-thumbnail">
                                        <img src="assets/images/resources/img3.jpg" alt="" class="w-100">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="restaurant-details.html" title="">T-Bone Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$18.99</strong>
                                    <a href="cart.html" title="" class="btn-default gradient-bg half-radius height-2">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 meat">
                                <div class="pd-item">
                                    <div class="pd-thumbnail">
                                        <img src="assets/images/resources/img4.jpg" alt="" class="w-100">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="restaurant-details.html" title="">Strip Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$16.89</strong>
                                    <a href="cart.html" title="" class="btn-default gradient-bg half-radius height-2">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 sushi fastfood">
                                <div class="pd-item">
                                    <div class="pd-thumbnail">
                                        <img src="assets/images/resources/img1.jpg" alt="" class="w-100">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="restaurant-details.html" title="">Rib-eye Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$15.69</strong>
                                    <a href="cart.html" title="" class="btn-default gradient-bg half-radius height-2">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 vegitarian fastfood">
                                <div class="pd-item">
                                    <div class="pd-thumbnail">
                                        <img src="assets/images/resources/img2.jpg" alt="" class="w-100">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="restaurant-details.html" title="">Top Sirloin Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$25.39</strong>
                                    <a href="cart.html" title="" class="btn-default gradient-bg half-radius height-2">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 sushi pizza vegitarian">
                                <div class="pd-item">
                                    <div class="pd-thumbnail">
                                        <img src="assets/images/resources/img3.jpg" alt="" class="w-100">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="restaurant-details.html" title="">T-Bone Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$18.99</strong>
                                    <a href="cart.html" title="" class="btn-default gradient-bg half-radius height-2">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 fastfood sushi vegitarian">
                                <div class="pd-item">
                                    <div class="pd-thumbnail">
                                        <img src="assets/images/resources/img4.jpg" alt="" class="w-100">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="restaurant-details.html" title="">Strip Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$16.89</strong>
                                    <a href="cart.html" title="" class="btn-default gradient-bg half-radius height-2">Add to cart <span></span></a>
                                </div>
                            </div>
                        </div><!--masonary end-->
                    </div>
                </div><!--popular-dishes end-->
            </div>
        </section>

        <section class="sec-block oder-sec">
            <div class="fixed-bg bg2"></div>
            <div class="container">
                <div class="order-appliction">
                    <h2>Make orders With Our <span>Application</span></h2>
                    <ul class="vl-fzt">
                        <li>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69278 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 4L12 14.01L9 11.01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <div class="vs-info">
                                <h4>Order and pay in a few minutes</h4>
                                <p>Сhoose food and pay for the order in a couple of clicks online also choose you current location using GPS.</p>
                            </div>
                        </li>
                        <li>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69278 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 4L12 14.01L9 11.01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <div class="vs-info">
                                <h4>Check Delivery Status</h4>
                                <p>Follow the status of your order in real time and also track the delivery path until you get it.</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="btnss">
                        <li><img src="assets/images/btn1.png" alt=""></li>
                        <li><img src="assets/images/btn2.png" alt=""></li>
                    </ul>
                </div><!--promotion end-->
            </div>
        </section>

        <section class="sec-block pb-0">
            <div class="container">
                <div class="offer-posts">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="offer-post">
                                <img src="assets/images/resources/blog1.jpg" alt="" class="w-100">
                                <h2><a href="blog-single.html" title="">Get paid as a courier partner</a></h2>
                                <a href="#" title="" class="arrow">
                                    <img src="assets/images/icons/arrow.svg" alt="">
                                </a>
                            </div><!--blog end-->
                        </div>
                        <div class="col-md-6">
                            <div class="offer-post">
                                <img src="assets/images/resources/blog2.jpg" alt="" class="w-100">
                                <h2><a href="blog-single.html" title="">Become a restaurant partner</a></h2>
                                <a href="#" title="" class="arrow">
                                    <img src="assets/images/icons/arrow.svg" alt="">
                                </a>
                            </div><!--blog end-->
                        </div>
                    </div>
                </div><!--offer-post end-->
            </div>
        </section>

        <section class="sec-block pb-0">
            <div class="container">
                <div class="newsletter-sec">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="newsletter-text">
                                <h2>Newsletter</h2>
                                <p>Don’t miss promotions and discounts.</p>
                            </div><!--newsletter-text end-->
                        </div>
                        <div class="col-lg-8">
                            <form>
                                <input type="email" name="email" class="half-radius" placeholder="Enter your email">
                                <button type="submit" class="btn-default">Subscribe <span></span></button>
                            </form>
                        </div>
                    </div>
                    <h4 class="section_title">Subscribe</h4>
                </div><!--newsletter-sec end-->
            </div>
        </section><!--newsletter end-->

        <section class="sec-block">
            <div class="container">
                <div class="section-title text-center">
                    <span>Our blog </span>
                    <h2 class="text-capitalize">Latest posts & articles</h2>
                    <p class="mx-auto">Here you can find recipes from the most famous chefs and read useful information.</p>
                </div><!--sec-title end-->
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog">
                                <div class="blog-thumbnail">
                                    <img src="assets/images/resources/post1.jpg" alt="" class="w-100">
                                    <span class="category">recipe</span>
                                </div>
                                <div class="blog-info">
                                    <ul class="meta">
                                        <li>
                                            <img src="assets/images/resources/meta.jpg" alt="">
                                            <a href="#" title="">Antonio Refflis</a>
                                        </li>
                                        <li>
                                            <a href="#" title="">May 15, 2020</a>
                                        </li>
                                    </ul>
                                    <h2 class="blog-title"><a href="blog-single.html" title="">The Traditional recipe of apple pie</a></h2>
                                </div>
                            </div><!--blog end-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog">
                                <div class="blog-thumbnail">
                                    <img src="assets/images/resources/post2.jpg" alt="" class="w-100">
                                    <span class="category">recipe</span>
                                </div>
                                <div class="blog-info">
                                    <ul class="meta">
                                        <li>
                                            <img src="assets/images/resources/meta.jpg" alt="">
                                            <a href="#" title="">Carlos Bolitti</a>
                                        </li>
                                        <li>
                                            <a href="#" title="">May 14, 2020</a>
                                        </li>
                                    </ul>
                                    <h2 class="blog-title"><a href="blog-single.html" title="">famous vanilla bean cupcakes</a></h2>
                                </div>
                            </div><!--blog end-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog">
                                <div class="blog-thumbnail">
                                    <img src="assets/images/resources/post3.jpg" alt="" class="w-100">
                                    <span class="category">recipe</span>
                                </div>
                                <div class="blog-info">
                                    <ul class="meta">
                                        <li>
                                            <img src="assets/images/resources/meta.jpg" alt="">
                                            <a href="#" title="">Nicolas Mano</a>
                                        </li>
                                        <li>
                                            <a href="#" title="">May 12, 2020</a>
                                        </li>
                                    </ul>
                                    <h2 class="blog-title"><a href="blog-single.html" title="">the most tasty cake we’ve ever made</a></h2>
                                </div>
                            </div><!--blog end-->
                        </div>
                    </div>
                </div><!--blog-posts end-->
            </div>
        </section>

        
    </div><!--wrapper end-->

@endsection