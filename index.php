<?php
require __DIR__ . '/assets/config/global.config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $titleConstant; ?> : Home</title>
    <?php
    //Calling Meta Section
    include __DIR__ . '/assets/templates/template-meta.php';
    //Calling Header Section 
    include __DIR__ . '/assets/templates/template-header.php';
    ?>
</head>

<body>

    <!--======================================
        START HEADER AREA
    ======================================-->
    
    <?php
    //Calling Navigation
    include __DIR__ . '/assets/templates/template-navigation.php';
    ?>

    <!--======================================
        END HEADER AREA
======================================-->

    <!--================================
         START SLIDER AREA
=================================-->
    <section class="slider-area">
        <div class="homepage-slide1">
            <div class="single-slide-item slide-bg1">
                <div class="slide-item-table">
                    <div class="slide-item-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="slider-heading">
                                        <h2 class="slider__title">We Help You Learn What You Love</h2>
                                        <p class="slider__text">Emply dummy text of the printing and typesetting industry orem Ipsum has been the
                                            <br>industry's standard dummy text ever sinceprinting and typesetting industry.
                                        </p>
                                        <div class="slider-promo-btn">
                                            <a href="admission" class="theme-btn">let's join now</a>
                                            <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=cRXm1p-CNyk">
                                                Watch Preview <span class="la la-play"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- col-lg-9 -->
                            </div><!-- row -->
                        </div><!-- container -->
                    </div><!-- slide-item-tablecell -->
                </div><!-- slide-item-table -->
            </div><!-- end single-slide-item -->
            <div class="single-slide-item slide-bg2">
                <div class="slide-item-table">
                    <div class="slide-item-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9 mx-auto">
                                    <div class="slider-heading text-center">
                                        <h2 class="slider__title">Join Aduca & Get Your Free Courses!</h2>
                                        <p class="slider__text">Emply dummy text of the printing and typesetting industry orem Ipsum has been the
                                            <br>industry's standard dummy text ever sinceprinting and typesetting industry.
                                        </p>
                                        <div class="slider-promo-btn justify-content-center">
                                            <a href="admission" class="theme-btn">get started now</a>
                                            <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=cRXm1p-CNyk">
                                                Watch Preview <span class="la la-play"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- col-md-7 -->
                            </div><!-- row -->
                        </div><!-- container -->
                    </div><!-- slide-item-tablecell -->
                </div><!-- slide-item-table -->
            </div><!-- end single-slide-item -->
            <div class="single-slide-item slide-bg3">
                <div class="slide-item-table">
                    <div class="slide-item-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9 ml-auto">
                                    <div class="slider-heading text-right">
                                        <h2 class="slider__title">Education Needs Complete Solution</h2>
                                        <p class="slider__text">Emply dummy text of the printing and typesetting industry orem Ipsum has been the
                                            <br>industry's standard dummy text ever sinceprinting and typesetting industry.
                                        </p>
                                        <div class="slider-promo-btn justify-content-end">
                                            <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=cRXm1p-CNyk">
                                                <span class="la la-play"></span> Watch Preview
                                            </a>
                                            <a href="admission" class="theme-btn">get enrolled now</a>
                                        </div>
                                    </div>
                                </div><!-- col-md-7 -->
                            </div><!-- row -->
                        </div><!-- container -->
                    </div><!-- slide-item-tablecell -->
                </div><!-- slide-item-table -->
            </div><!-- end single-slide-item -->
        </div><!-- end homepage-slides -->
    </section><!-- end slider-area -->
    <!--================================
        END SLIDER AREA
=================================-->

    <!--======================================
        START FEATURE AREA
 ======================================-->
    <section class="feature-area text-center">
        <div class="container">
            <div class="row feature-content-wrap">
                <div class="col-lg-4 col-sm-6">
                    <div class="feature-item feature-item1">
                        <div class="hover-overlay"></div>
                        <i class="la la-user feature__icon"></i>
                        <h3 class="feature__title">Life at LBIIHM</h3>
                        <p class="feature__text">LBIIHM provides you with one of the most student-friendly atmospheres to grow in- both personally & professionally.</p>
                        <a href="#" class="feature__btn">read more</a>
                    </div><!-- end feature-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="feature-item feature-item2">
                        <div class="hover-overlay"></div>
                        <i class="la la-paper-plane-o feature__icon"></i>
                        <h3 class="feature__title">Industrial Training</h3>
                        <p class="feature__text">LBIIHM has its own "Training and Placement Department" which provides Placement Assistance to all the deserving candidates of our Institute.</p>
                        <a href="#" class="feature__btn">read more</a>
                    </div><!-- end feature-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="feature-item feature-item3">
                        <div class="hover-overlay"></div>
                        <i class="la la-graduation-cap feature__icon"></i>
                        <h3 class="feature__title">Get Placement</h3>
                        <p class="feature__text">LBIIHM has an active placement cell, which provides all possible assistance for the placement of all qualified and deserving students.</p>
                        <a href="#" class="feature__btn">read more</a>
                    </div><!-- end feature-item -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end feature-area -->
    <!--======================================
        END FEATURE AREA
    ======================================-->

    <!--======================================
        START CATEGORY AREA
======================================-->
    <section class="category-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="section-heading">
                        <h5 class="section__meta">Categories</h5>
                        <h2 class="section__title">Popular Categories</h2>
                        <span class="section__divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-9 -->
                <div class="col-lg-3">
                    <div class="button-shared h-100 d-flex align-items-center justify-content-end">
                        <a href="#" class="theme-btn">all Categories</a>
                    </div><!-- end button-shared-->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
            <div class="row category-wrapper">
                <div class="col-lg-4">
                    <div class="category-item">
                        <img src="assets/images/img1.jpg" alt="">
                        <div class="category-content">
                            <h3 class="cat__title">business</h3>
                            <p class="cat__meta">9 courses</p>
                            <a href="#" class="cat__link">explore now</a>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="category-item">
                        <img src="assets/images/img2.jpg" alt="">
                        <div class="category-content">
                            <h3 class="cat__title">design</h3>
                            <p class="cat__meta">7 courses</p>
                            <a href="#" class="cat__link">explore now</a>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="category-item">
                        <img src="assets/images/img3.jpg" alt="">
                        <div class="category-content">
                            <h3 class="cat__title">development</h3>
                            <p class="cat__meta">8 courses</p>
                            <a href="#" class="cat__link">explore now</a>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="category-item">
                        <img src="assets/images/img4.jpg" alt="">
                        <div class="category-content">
                            <h3 class="cat__title">health & fitness</h3>
                            <p class="cat__meta">6 courses</p>
                            <a href="#" class="cat__link">explore now</a>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="category-item">
                        <img src="assets/images/img5.jpg" alt="">
                        <div class="category-content">
                            <h3 class="cat__title">photography</h3>
                            <p class="cat__meta">7 courses</p>
                            <a href="#" class="cat__link">explore now</a>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="category-item">
                        <img src="assets/images/img6.jpg" alt="">
                        <div class="category-content">
                            <h3 class="cat__title">math</h3>
                            <p class="cat__meta">8 courses</p>
                            <a href="#" class="cat__link">explore now</a>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end category-area -->
    <!--======================================
        END CATEGORY AREA
======================================-->

    <!--======================================
        START COURSE AREA
======================================-->
    <section class="course-area">
        <div class="course-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-center">
                            <h5 class="section__meta">choose your desired courses</h5>
                            <h2 class="section__title">Browse Our Top Courses</h2>
                            <span class="section__divider"></span>
                        </div><!-- end section-heading -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="course-tab-wrap">
                            <ul class="course-tab-list nav nav-tabs justify-content-center text-center" role="tablist" id="review">
                                <li role="presentation">
                                    <a href="#tab1" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                        business
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab2" role="tab" data-toggle="tab" aria-selected="false">
                                        design
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab3" role="tab" data-toggle="tab" aria-selected="false">
                                        development
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab4" role="tab" data-toggle="tab" aria-selected="false">
                                        web
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab5" role="tab" data-toggle="tab" aria-selected="false">
                                        marketing
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end course-tab-wrap -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end course-wrapper -->
        <div class="course-content-wrapper">
            <div class="container">
                <div class="row course-item-wrap">
                    <div class="col-lg-12">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                                <div class="row course-block">
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img8.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">bestseller</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">beginner</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">WordPress for Beginners – Master WordPress</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">alex smith</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.4</span>
                                                        <span class="star__count">(20)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$58.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img9.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">beginner</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Learn Ethical Hacking from Scratch Your Stepping</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">brad travesy</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.2</span>
                                                        <span class="star__count">(30)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">Free</span>
                                                    <a href="#" class="course__btn">Get Enrolled</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img10.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">highest rated</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Microsoft SQL Server 2019 for Everyone</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">mark hardson</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.5</span>
                                                        <span class="star__count">(40)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$68.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img11.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">User Experience Design - Adobe XD UI UX Design</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">kamran paul</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.4</span>
                                                        <span class="star__count">(20)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">Free</span>
                                                    <a href="#" class="course__btn">Get Enrolled</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img12.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">bestseller</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">The Complete Digital finance Marketing Course</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">jose purtila</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.2</span>
                                                        <span class="star__count">(30)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price"><span class="course__before-price">$189.00</span> $119.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img13.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Complete Python Bootcamp: Go from zero to hero</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">noelle travesy</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.5</span>
                                                        <span class="star__count">(40)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$68.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end course-block -->
                            </div><!-- end tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="row course-block">
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img13.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">beginner</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">WordPress for Beginners – Master WordPress</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">alex smith</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.4</span>
                                                        <span class="star__count">(20)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">Free</span>
                                                    <a href="#" class="course__btn">Get Enrolled</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img12.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">bestseller</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">beginner</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Learn Ethical Hacking from Scratch Your Stepping</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">brad travesy</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.2</span>
                                                        <span class="star__count">(30)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$33.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img11.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">highest rated</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Microsoft SQL Server 2019 for Everyone</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">mark hardson</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.5</span>
                                                        <span class="star__count">(40)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$68.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img10.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">User Experience Design - Adobe XD UI UX Design</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">kamran paul</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.4</span>
                                                        <span class="star__count">(20)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">Free</span>
                                                    <a href="#" class="course__btn">Get Enrolled</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img9.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">bestseller</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">The Complete Digital finance Marketing Course</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">jose purtila</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.2</span>
                                                        <span class="star__count">(30)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price"><span class="course__before-price">$189.00</span> $119.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img8.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Complete Python Bootcamp: Go from zero to hero</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">noelle travesy</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.5</span>
                                                        <span class="star__count">(40)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$68.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end course-block -->
                            </div><!-- end tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                <div class="row course-block">
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img11.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">beginner</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">WordPress for Beginners – Master WordPress</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">alex smith</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.4</span>
                                                        <span class="star__count">(20)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$58.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img12.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">bestseller</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">beginner</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Learn Ethical Hacking from Scratch Your Stepping</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">brad travesy</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.2</span>
                                                        <span class="star__count">(30)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">Free</span>
                                                    <a href="#" class="course__btn">Get Enrolled</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img9.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">highest rated</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Microsoft SQL Server 2019 for Everyone</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">mark hardson</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.5</span>
                                                        <span class="star__count">(40)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$68.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img8.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">User Experience Design - Adobe XD UI UX Design</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">kamran paul</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.4</span>
                                                        <span class="star__count">(20)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$58.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img12.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">bestseller</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">The Complete Digital finance Marketing Course</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">jose purtila</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.2</span>
                                                        <span class="star__count">(30)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price"><span class="course__before-price">$189.00</span> $119.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img13.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Complete Python Bootcamp: Go from zero to hero</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">noelle travesy</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.5</span>
                                                        <span class="star__count">(40)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">Free</span>
                                                    <a href="#" class="course__btn">Get Enrolled</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end course-block -->
                            </div><!-- end tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="tab4">
                                <div class="row course-block">
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img8.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">bestseller</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">beginner</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">WordPress for Beginners – Master WordPress</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">alex smith</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.4</span>
                                                        <span class="star__count">(20)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$58.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img9.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">beginner</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Learn Ethical Hacking from Scratch Your Stepping</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">brad travesy</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.2</span>
                                                        <span class="star__count">(30)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$33.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img10.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">highest rated</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Microsoft SQL Server 2019 for Everyone</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">mark hardson</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.5</span>
                                                        <span class="star__count">(40)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$68.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img11.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">User Experience Design - Adobe XD UI UX Design</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">kamran paul</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.4</span>
                                                        <span class="star__count">(20)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">Free</span>
                                                    <a href="#" class="course__btn">Get Enrolled</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img12.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">bestseller</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">The Complete Digital finance Marketing Course</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">jose purtila</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.2</span>
                                                        <span class="star__count">(30)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price"><span class="course__before-price">$189.00</span> $119.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img13.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Complete Python Bootcamp: Go from zero to hero</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">noelle travesy</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.5</span>
                                                        <span class="star__count">(40)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$68.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end course-block -->
                            </div><!-- end tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="tab5">
                                <div class="row course-block">
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img13.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">bestseller</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">beginner</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">WordPress for Beginners – Master WordPress</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">alex smith</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.4</span>
                                                        <span class="star__count">(20)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$58.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img12.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">beginner</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Learn Ethical Hacking from Scratch Your Stepping</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">brad travesy</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.2</span>
                                                        <span class="star__count">(30)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">Free</span>
                                                    <a href="#" class="course__btn">Get Enrolled</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img11.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">highest rated</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Microsoft SQL Server 2019 for Everyone</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">mark hardson</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.5</span>
                                                        <span class="star__count">(40)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$68.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img10.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">User Experience Design - Adobe XD UI UX Design</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">kamran paul</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.4</span>
                                                        <span class="star__count">(20)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">$58.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img9.jpg" alt=""></a>
                                                <div class="course-tooltip">
                                                    <span class="tooltip-label">bestseller</span>
                                                </div>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">The Complete Digital finance Marketing Course</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">jose purtila</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.2</span>
                                                        <span class="star__count">(30)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price"><span class="course__before-price">$189.00</span> $119.00</span>
                                                    <a href="#" class="course__btn">Add to cart</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="course-item">
                                            <div class="course-img">
                                                <a href="course-details" class="course__img"><img src="assets/images/img8.jpg" alt=""></a>
                                            </div><!-- end course-img -->
                                            <div class="course-content">
                                                <p class="course__label">
                                                    <span class="course__label-text">all levels</span>
                                                    <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="course__title">
                                                    <a href="course-details">Complete Python Bootcamp: Go from zero to hero</a>
                                                </h3>
                                                <p class="course__author">
                                                    <a href="#">noelle travesy</a>
                                                </p>
                                                <div class="rating-wrap d-flex">
                                                    <ul class="review-stars d-flex">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <span class="star-rating-wrap">
                                                        <span class="star__rating">4.5</span>
                                                        <span class="star__count">(40)</span>
                                                    </span>
                                                </div><!-- end rating-wrap -->
                                                <div class="course-meta">
                                                    <ul class="course__list d-flex">
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-play-circle"></i> 45 Classes
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="meta__date">
                                                                <i class="la la-clock-o"></i> 3 hours 20 min
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end course-meta -->
                                                <div class="course-price-wrap">
                                                    <span class="course__price">Free</span>
                                                    <a href="#" class="course__btn">Get Enrolled</a>
                                                </div><!-- end course-price-wrap -->
                                            </div><!-- end course-content -->
                                        </div><!-- end course-item -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end course-block -->
                            </div><!-- end tab-pane -->
                        </div><!-- end tab-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="button-shared text-center">
                            <a href="course-grid" class="theme-btn">browse all Courses</a>
                        </div><!-- end button-shared -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end course-content-wrapper -->
    </section><!-- end courses-area -->
    <!--======================================
        END COURSE AREA
======================================-->

    <!--======================================
        START COURSE 2 AREA
======================================-->
    <section class="course-area course-area2">
        <div class="course-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-center">
                            <h5 class="section__meta">Learn on your schedule</h5>
                            <h2 class="section__title">Trending Courses</h2>
                            <span class="section__divider"></span>
                        </div><!-- end section-heading -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end course-wrapper -->
        <div class="course-content-wrapper">
            <div class="container">
                <div class="row course-item-wrap">
                    <div class="col-lg-12">
                        <div class="tab-content">
                            <div class="course-block course-carousel">
                                <div class="course-item">
                                    <div class="course-img">
                                        <a href="course-details" class="course__img"><img src="assets/images/img9.jpg" alt=""></a>
                                    </div><!-- end course-img -->
                                    <div class="course-content">
                                        <p class="course__label">
                                            <span class="course__label-text">all levels</span>
                                            <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                        </p>
                                        <h3 class="course__title">
                                            <a href="course-details">User Experience Design - Adobe XD UI UX Design</a>
                                        </h3>
                                        <p class="course__author">
                                            <a href="#">kamran paul</a>
                                        </p>
                                        <div class="rating-wrap d-flex">
                                            <ul class="review-stars d-flex">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                            </ul>
                                            <span class="star-rating-wrap">
                                                <span class="star__rating">4.4</span>
                                                <span class="star__count">(20)</span>
                                            </span>
                                        </div><!-- end rating-wrap -->
                                        <div class="course-meta">
                                            <ul class="course__list d-flex">
                                                <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                                                <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                                            </ul>
                                        </div><!-- end course-meta -->
                                        <div class="course-price-wrap">
                                            <span class="course__price">Free</span>
                                            <a href="#" class="course__btn">Get Enrolled</a>
                                        </div><!-- end course-price-wrap -->
                                    </div><!-- end course-content -->
                                </div><!-- end course-item -->
                                <div class="course-item">
                                    <div class="course-img">
                                        <a href="course-details" class="course__img"><img src="assets/images/img11.jpg" alt=""></a>
                                        <div class="course-tooltip">
                                            <span class="tooltip-label">bestseller</span>
                                        </div>
                                    </div><!-- end course-img -->
                                    <div class="course-content">
                                        <p class="course__label">
                                            <span class="course__label-text">all levels</span>
                                            <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                        </p>
                                        <h3 class="course__title">
                                            <a href="course-details">The Complete Digital finance Marketing Course</a>
                                        </h3>
                                        <p class="course__author">
                                            <a href="#">jose purtila</a>
                                        </p>
                                        <div class="rating-wrap d-flex">
                                            <ul class="review-stars d-flex">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                            </ul>
                                            <span class="star-rating-wrap">
                                                <span class="star__rating">4.2</span>
                                                <span class="star__count">(30)</span>
                                            </span>
                                        </div><!-- end rating-wrap -->
                                        <div class="course-meta">
                                            <ul class="course__list d-flex">
                                                <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                                                <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                                            </ul>
                                        </div><!-- end course-meta -->
                                        <div class="course-price-wrap">
                                            <span class="course__price"><span class="course__before-price">$189.00</span> $119.00</span>
                                            <a href="#" class="course__btn">Add to cart</a>
                                        </div><!-- end course-price-wrap -->
                                    </div><!-- end course-content -->
                                </div><!-- end course-item -->
                                <div class="course-item">
                                    <div class="course-img">
                                        <a href="course-details" class="course__img"><img src="assets/images/img12.jpg" alt=""></a>
                                    </div><!-- end course-img -->
                                    <div class="course-content">
                                        <p class="course__label">
                                            <span class="course__label-text">all levels</span>
                                            <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                        </p>
                                        <h3 class="course__title">
                                            <a href="course-details">Complete Python Bootcamp: Go from zero to hero</a>
                                        </h3>
                                        <p class="course__author">
                                            <a href="#">noelle travesy</a>
                                        </p>
                                        <div class="rating-wrap d-flex">
                                            <ul class="review-stars d-flex">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                            </ul>
                                            <span class="star-rating-wrap">
                                                <span class="star__rating">4.5</span>
                                                <span class="star__count">(40)</span>
                                            </span>
                                        </div><!-- end rating-wrap -->
                                        <div class="course-meta">
                                            <ul class="course__list d-flex">
                                                <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                                                <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                                            </ul>
                                        </div><!-- end course-meta -->
                                        <div class="course-price-wrap">
                                            <span class="course__price">$68.00</span>
                                            <a href="#" class="course__btn">Add to cart</a>
                                        </div><!-- end course-price-wrap -->
                                    </div><!-- end course-content -->
                                </div><!-- end course-item -->
                                <div class="course-item">
                                    <div class="course-img">
                                        <a href="course-details" class="course__img"><img src="assets/images/img9.jpg" alt=""></a>
                                    </div><!-- end course-img -->
                                    <div class="course-content">
                                        <p class="course__label">
                                            <span class="course__label-text">all levels</span>
                                            <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                        </p>
                                        <h3 class="course__title">
                                            <a href="course-details">Complete Python Bootcamp: Go from zero to hero</a>
                                        </h3>
                                        <p class="course__author">
                                            <a href="#">noelle travesy</a>
                                        </p>
                                        <div class="rating-wrap d-flex">
                                            <ul class="review-stars d-flex">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                            </ul>
                                            <span class="star-rating-wrap">
                                                <span class="star__rating">4.5</span>
                                                <span class="star__count">(40)</span>
                                            </span>
                                        </div><!-- end rating-wrap -->
                                        <div class="course-meta">
                                            <ul class="course__list d-flex">
                                                <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                                                <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                                            </ul>
                                        </div><!-- end course-meta -->
                                        <div class="course-price-wrap">
                                            <span class="course__price">$68.00</span>
                                            <a href="#" class="course__btn">Add to cart</a>
                                        </div><!-- end course-price-wrap -->
                                    </div><!-- end course-content -->
                                </div><!-- end course-item -->
                                <div class="course-item">
                                    <div class="course-img">
                                        <a href="course-details" class="course__img"><img src="assets/images/img8.jpg" alt=""></a>
                                        <div class="course-tooltip">
                                            <span class="tooltip-label">highest rated</span>
                                        </div>
                                    </div><!-- end course-img -->
                                    <div class="course-content">
                                        <p class="course__label">
                                            <span class="course__label-text">all levels</span>
                                            <a href="#" class="course__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                        </p>
                                        <h3 class="course__title">
                                            <a href="course-details">Complete Python Bootcamp: Go from zero to hero</a>
                                        </h3>
                                        <p class="course__author">
                                            <a href="#">noelle travesy</a>
                                        </p>
                                        <div class="rating-wrap d-flex">
                                            <ul class="review-stars d-flex">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star-o"></span></li>
                                            </ul>
                                            <span class="star-rating-wrap">
                                                <span class="star__rating">4.5</span>
                                                <span class="star__count">(40)</span>
                                            </span>
                                        </div><!-- end rating-wrap -->
                                        <div class="course-meta">
                                            <ul class="course__list d-flex">
                                                <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                                                <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                                            </ul>
                                        </div><!-- end course-meta -->
                                        <div class="course-price-wrap">
                                            <span class="course__price">$68.00</span>
                                            <a href="#" class="course__btn">Add to cart</a>
                                        </div><!-- end course-price-wrap -->
                                    </div><!-- end course-content -->
                                </div><!-- end course-item -->
                            </div><!-- end course-block -->
                        </div><!-- end tab-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end course-content-wrapper -->
    </section><!-- end courses-area -->
    <!--======================================
        END COURSE 2 AREA
======================================-->

    <!-- ================================
       START FUNFACT AREA
================================= -->
    <section class="funfact-area text-center">
        <div class="container">
            <div class="funfact-row">
                <div class="funfact-item">
                    <div class="funfact-inner-item">
                        <span class="la la-graduation-cap"></span>
                        <h4 class="funfact__title counter">800</h4>
                        <p class="funfact__meta">STUDENTS ENROLLED</p>
                    </div><!-- end client-testimonial -->
                </div><!-- end col-lg-3 -->
                <div class="funfact-item">
                    <div class="funfact-inner-item">
                        <span class="la la-globe"></span>
                        <h4 class="funfact__title counter">27</h4>
                        <p class="funfact__meta">ALUMNI PRESENCE</p>
                    </div><!-- end client-testimonial -->
                </div><!-- end col-lg-3 -->
                <div class="funfact-item">
                    <div class="funfact-inner-item">
                        <span class="la la-users"></span>
                        <h4 class="funfact__title counter">40</h4>
                        <p class="funfact__meta">HIRING PARTNERS</p>
                    </div><!-- end client-testimonial -->
                </div><!-- end col-lg-3 -->
                <div class="funfact-item">
                    <div class="funfact-inner-item">
                        <span class="la la-certificate"></span>
                        <h4 class="funfact__title counter">15</h4>
                        <p class="funfact__meta">YEARS EXPERIENCE</p>
                    </div><!-- end client-testimonial -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end funfact-area -->
    <!-- ================================
       START FUNFACT AREA
================================= -->

    <div class="section-divider"></div>
    <section class="benefit-area benefit-area2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="benefit-img">
                        <img src="images/img13.jpg" alt="">
                        <img src="images/img14.jpg" alt="">
                        <img src="images/img12.jpg" alt="">
                        <img src="images/img11.jpg" alt="">
                    </div><!-- end benefit-img -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="benefit-heading">
                        <div class="section-heading">
                            <h5 class="section__meta section__meta3">WELCOME TO LBIIHM</h5>
                            <h2 class="section__title">A WORLD CLASS HOTEL MANAGEMENT INSTITUTE IN DELHI.</h2>
                            <span class="section__divider"></span>
                            <p class="section__desc">
                                <strong>LBIIHM</strong> is an ISO 9001:2008 certified institute, established in the year 2003 to cater students in the field of <b>Hotel Management</b> and is now recognized as a centre of excellence in providing quality hospitality education. Since now the institute has endeavoured to stand apart and be counted among the best <i><strong>Hotel Management Institutes in India</strong></i>.
                                <h5>- Dr. Kamal Kumar</h5>
                                Message From Director | Director, LBIIHM
                            </p>
                            <br />
                            <div class="row benefit-course-box">
                                <div class="col-lg-4">
                                    <div class="benefit-item benefit-item1">
                                        <span class="la la-mouse-pointer benefit__icon"></span>
                                        <h4 class="benefit__title">100,000 courses</h4>
                                    </div><!-- end benefit-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4">
                                    <div class="benefit-item benefit-item2">
                                        <span class="la la-bolt benefit__icon"></span>
                                        <h4 class="benefit__title">Live Learning</h4>
                                    </div><!-- end benefit-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4">
                                    <div class="benefit-item benefit-item3">
                                        <span class="la la-users benefit__icon"></span>
                                        <h4 class="benefit__title">Expert Teachers</h4>
                                    </div><!-- end benefit-item -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end row -->
                            <div class="get-start-btn">
                                <a href="#" class="theme-btn theme-btn2">read director message</a>
                            </div>
                        </div><!-- end section-heading -->
                    </div><!-- end benefit-heading -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <div class="section-divider"></div>
    <!--======================================
        START SPEAKER AREA
======================================-->
    <section class="speaker-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">expert people</h5>
                        <h2 class="section__title">Meet Our Professional & Expert Instructors</h2>
                        <span class="section__divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row speaker-content-wrap">
                <div class="col-lg-4">
                    <div class="speaker-item speaker-item1">
                        <div class="speaker-img-box">
                            <img src="assets/images/team.jpg" alt="">
                            <ul class="speaker__profile">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="speaker-detail">
                            <div class="speaker-title-box">
                                <h3 class="speaker__title"><a href="teacher-detail">alex smith</a></h3>
                                <p class="speaker__meta">Teacher</p>
                                <p class="speaker__text">
                                    Pellentesque tellus arcu, laoreet volutpavenenatis molest
                                    commodo lorem lectus pretium vehicula.
                                </p>
                                <a href="teacher-detail" class="speaker__link">view profile</a>
                            </div>
                        </div>
                    </div><!-- end speaker-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="speaker-item speaker-item2">
                        <div class="speaker-img-box">
                            <img src="assets/images/team2.jpg" alt="">
                            <ul class="speaker__profile">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="speaker-detail">
                            <div class="speaker-title-box">
                                <h3 class="speaker__title"><a href="teacher-detail">rose taylor</a></h3>
                                <p class="speaker__meta">Teacher</p>
                                <p class="speaker__text">
                                    Pellentesque tellus arcu, laoreet volutpavenenatis molest
                                    commodo lorem lectus pretium vehicula.
                                </p>
                                <a href="teacher-detail" class="speaker__link">view profile</a>
                            </div>
                        </div>
                    </div><!-- end speaker-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="speaker-item speaker-item3">
                        <div class="speaker-img-box">
                            <img src="assets/images/team3.jpg" alt="">
                            <ul class="speaker__profile">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="speaker-detail">
                            <div class="speaker-title-box">
                                <h3 class="speaker__title"><a href="teacher-detail">jef collin</a></h3>
                                <p class="speaker__meta">Teacher</p>
                                <p class="speaker__text">
                                    Pellentesque tellus arcu, laoreet volutpavenenatis molest
                                    commodo lorem lectus pretium vehicula.
                                </p>
                                <a href="teacher-detail" class="speaker__link">view profile</a>
                            </div>
                        </div>
                    </div><!-- end speaker-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="speaker-item speaker-item4">
                        <div class="speaker-img-box">
                            <img src="assets/images/team4.jpg" alt="">
                            <ul class="speaker__profile">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="speaker-detail">
                            <div class="speaker-title-box">
                                <h3 class="speaker__title"><a href="teacher-detail">mike hardson</a></h3>
                                <p class="speaker__meta">Teacher</p>
                                <p class="speaker__text">
                                    Pellentesque tellus arcu, laoreet volutpavenenatis molest
                                    commodo lorem lectus pretium vehicula.
                                </p>
                                <a href="teacher-detail" class="speaker__link">view profile</a>
                            </div>
                        </div>
                    </div><!-- end speaker-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="speaker-item speaker-item5">
                        <div class="speaker-img-box">
                            <img src="assets/images/team5.jpg" alt="">
                            <ul class="speaker__profile">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="speaker-detail">
                            <div class="speaker-title-box">
                                <h3 class="speaker__title"><a href="teacher-detail">john smith</a></h3>
                                <p class="speaker__meta">Teacher</p>
                                <p class="speaker__text">
                                    Pellentesque tellus arcu, laoreet volutpavenenatis molest
                                    commodo lorem lectus pretium vehicula.
                                </p>
                                <a href="teacher-detail" class="speaker__link">view profile</a>
                            </div>
                        </div>
                    </div><!-- end speaker-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="speaker-item speaker-item6">
                        <div class="speaker-img-box">
                            <img src="assets/images/team6.jpg" alt="">
                            <ul class="speaker__profile">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="speaker-detail">
                            <div class="speaker-title-box">
                                <h3 class="speaker__title"><a href="teacher-detail">kevin martin</a></h3>
                                <p class="speaker__meta">Teacher</p>
                                <p class="speaker__text">
                                    Pellentesque tellus arcu, laoreet volutpavenenatis molest
                                    commodo lorem lectus pretium vehicula.
                                </p>
                                <a href="teacher-detail" class="speaker__link">view profile</a>
                            </div>
                        </div>
                    </div><!-- end speaker-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="button-shared text-center">
                        <a href="teachers" class="theme-btn">view all teachers</a>
                    </div><!-- end button-shared -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end speaker-area -->
    <!--======================================
        END SPEAKER AREA
======================================-->

    <!--================================
         START TESTIMONIAL AREA
=================================-->
    <section class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">testimonials</h5>
                        <h2 class="section__title">See What Our Lovely Students Said</h2>
                        <span class="section__divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-md-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Kevin Martin</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    My children and I LOVE Aduca! The courses are fantastic and the
                                    instructors are so fun and knowledgeable.
                                    I only wish we found it sooner.
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img2.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Jessica Brown</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    No matter what you want to learn, you’ll find an
                                    amazing selection of courses here.
                                    The instructors are so knowledgable while
                                    being fun and interesting. Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ad blanditiis consectetur
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img3.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Mike Hardson</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    I really recommend this site to all my friends and anyone who’s willing to
                                    learn real skills. This platform gives
                                    you the opportunity to learn from experts at a convenient time.
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img4.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Bernice Pease</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    Thank you Aduca! You've renewed my passion for
                                    learning and my dream of becoming a web developer.
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Daniel Ward</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    I came across this site when I had no funds to pay for a college education.
                                    This site has literally been a lifesaver as
                                    I can now earn from freelance working using the skills
                                    I learned from here.
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img5.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Kevin Martin</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    This site has helped me with all the resources I need to become a
                                    freelance web developer. I have a renewed passion
                                    for learning more thanks to all the helpful
                                    and amazing instructors
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img6.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Jessica Brown</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    Thank you Aduca! You've renewed my passion for
                                    learning and my dream of becoming a web developer.
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img2.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Mike Hardson</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    I work in project management and joined Aduca because I get great courses
                                    for less. The instructors are fantastic,
                                    interesting, and helpful. Thank you Aduca
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img3.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Bernice Pease</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    No matter what you want to learn, you’ll find an amazing selection of courses here.
                                    The instructors are so knowledgable while being fun and interesting.
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img4.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Daniel Ward</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    The best part about Aduca is the selection.
                                    You can find a course for anything you want to learn!
                                    really Aduca i closed with you.
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Kevin Martin</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    I came across this site when I had no funds to pay for a college education.
                                    This site has literally been a lifesaver as I can
                                    now earn from freelance working using the skills I learned from here.
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img5.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Jessica Brown</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    Studying free courses in the privacy of my home allows me to be a
                                    role model for my children. My children know my goals are to complete courses
                                    to help fill in the gaps I have in my learning to improve my chances of
                                    getting a job in my field. Having the opportunity
                                    to change my life by studying without having to pay is awesome.
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img6.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Mike Hardson</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    Aduca opens the doors for new opportunities. The concept of continued
                                    learning has really improved my mental acuity and has given me a sense of personal fulfilment.
                                    I’ve also gained more confidence and so have a much better lifestyle.
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img2.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Bernice Pease</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    Esther is an enthusiastic Aduca student from Nigeria.
                                    Esther first learned to speak Spanish with Aduca. She thinks Aduca i...
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item">
                            <div class="testimonial__name">
                                <img src="assets/images/testi-img3.jpg" alt="small-avatar">
                                <h3 class="testimonial__name-title">Daniel Ward</h3>
                                <span class="testimonial__name-meta">student</span>
                                <span class="testimonial__name-rating">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div><!-- end testimonial__name -->
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    I really recommend this site to all my friends and anyone who’s
                                    willing to learn real skills. This platform
                                    gives you the opportunity to learn
                                    from experts at a convenient time.
                                </p>
                            </div><!-- end testimonial__desc -->
                        </div><!-- end testimonial-item -->
                    </div><!-- end testimonial-wrap -->
                </div><!-- end col-md-12 -->
            </div><!-- end row -->
        </div><!-- container-fluid -->
    </section><!-- end testimonial-area -->
    <!--================================
        END TESTIMONIAL AREA
=================================-->

    <!--======================================
        START GET-START AREA
======================================-->
    <section class="get-start-area">
        <div id="perticles-js"></div>
        <div class="box-icons">
            <div class="box-one"></div>
            <div class="box-two"></div>
            <div class="box-three"></div>
            <div class="box-four"></div>
        </div><!-- end box-icons -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h5 class="section__meta section__meta2">start online learning</h5>
                        <h2 class="section__title section__title2">Enhance Your skills With Best Online Courses</h2>
                        <span class="section__divider section__divider2"></span>
                        <div class="get-start-btn">
                            <a href="#" class="theme-btn">get started now</a>
                        </div>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="box-icons2">
            <div class="box-one"></div>
            <div class="box-two"></div>
            <div class="box-three"></div>
            <div class="box-four"></div>
            <div class="box-five"></div>
        </div><!-- end box-icons2 -->
    </section><!-- end get-start-area -->
    <!--======================================
        END GET-START AREA
======================================-->

    <!--======================================
        START BENEFIT AREA
======================================-->
    <section class="benefit-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="benefit-heading">
                        <div class="section-heading">
                            <h5 class="section__meta">get start with aduca</h5>
                            <h2 class="section__title">Benefits of Learning With Aduca</h2>
                            <span class="section__divider"></span>
                            <p class="section__desc">
                                Smply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry’s when an unknown printerit to make a type specimen book
                                Pellentesque tellus arcu
                            </p>
                            <div class="row benefit-course-box">
                                <div class="col-lg-4">
                                    <div class="benefit-item benefit-item1">
                                        <span class="la la-mouse-pointer benefit__icon"></span>
                                        <h4 class="benefit__title">100,000 courses</h4>
                                    </div><!-- end benefit-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4">
                                    <div class="benefit-item benefit-item2">
                                        <span class="la la-bolt benefit__icon"></span>
                                        <h4 class="benefit__title">Live Learning</h4>
                                    </div><!-- end benefit-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4">
                                    <div class="benefit-item benefit-item3">
                                        <span class="la la-users benefit__icon"></span>
                                        <h4 class="benefit__title">Expert Teachers</h4>
                                    </div><!-- end benefit-item -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end row -->
                            <div class="get-start-btn">
                                <a href="#" class="theme-btn">learn more</a>
                            </div>
                        </div><!-- end section-heading -->
                    </div><!-- end benefit-heading -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="benefit-img">
                        <img src="assets/images/img13.jpg" alt="">
                        <img src="assets/images/img14.jpg" alt="">
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end benefit-area -->
    <!--======================================
        END BENEFIT AREA
======================================-->

    <div class="section-divider"></div>

    <!--======================================
        START REGISTER AREA
======================================-->
    <section class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="register-wrap">
                        <div class="contact-form-action">
                            <h3 class="contact-title">Quick Enquriy for Course</h3>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name" placeholder="Your Name">
                                            <span class="la la-user input-icon"></span>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email" placeholder="Email Address">
                                            <span class="la la-envelope-o input-icon"></span>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                                            <span class="la la-phone input-icon"></span>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="subject" placeholder="Subject">
                                            <span class="la la-book input-icon"></span>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12 col-sm-12">
                                        <button class="theme-btn" type="submit">apply now</button>
                                    </div><!-- end col-md-12 -->
                                </div><!-- end row -->
                            </form>
                        </div><!-- end contact-form-action -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-7">
                    <div class="register-heading">
                        <div class="section-heading">
                            <h5 class="section__meta">register</h5>
                            <h2 class="section__title">Get ahead with Learning Paths. Stay Sharp.</h2>
                            <span class="section__divider"></span>
                            <p class="section__desc register__desc">
                                Education is the process of acquiring the body of knowledge and skills
                                that people are expected have in your society.
                                A education develops a critical thought process in addition to learning.
                                Bimply dummy text of the printing and typesetting istryrem
                                Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                when an unknown printer.when an unknown printer
                                took a galley of type and scramble
                            </p>
                            <p class="section__desc register__desc2">
                                tryrem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                when an unknown printer.
                            </p>
                            <div class="get-start-btn">
                                <a href="#" class="theme-btn">get started</a>
                            </div>
                        </div><!-- end section-heading -->
                    </div><!-- end register-heading -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end register-area -->
    <!--======================================
        END REGISTER AREA
======================================-->

    <div class="section-divider"></div>

    <!-- ================================
       START CLIENTLOGO AREA
================================= -->
    <section class="clientlogo-area">
        <div class="stroke-line">
            <span class="stroke__line"></span>
            <span class="stroke__line"></span>
            <span class="stroke__line"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">our partners</h5>
                        <h2 class="section__title">Trusted by companies of all sizes</h2>
                        <span class="section__divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-md-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-logo">
                        <div class="client-logo-item">
                            <a href="#"><img src="assets/images/sponsor-img.png" alt="brand image"></a>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <a href="#"><img src="assets/images/sponsor-img2.png" alt="brand image"></a>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <a href="#"><img src="assets/images/sponsor-img3.png" alt="brand image"></a>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <a href="#"><img src="assets/images/sponsor-img4.png" alt="brand image"></a>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <a href="#"><img src="assets/images/sponsor-img5.png" alt="brand image"></a>
                        </div><!-- end client-logo-item -->
                    </div><!-- end client-logo -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="stroke-line2">
            <span class="stroke__line"></span>
            <span class="stroke__line"></span>
            <span class="stroke__line"></span>
        </div>
    </section><!-- end clientlogo-area -->
    <!-- ================================
       START CLIENTLOGO AREA
================================= -->

    <!-- ================================
       START BLOG AREA
================================= -->
    <section class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h5 class="section__meta section__meta2">news feeds</h5>
                        <h2 class="section__title section__title2">Latest News & Articles</h2>
                        <span class="section__divider section__divider2"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-md-12 -->
            </div><!-- end row -->
            <div class="row blog-post-wrapper">
                <div class="col-lg-12">
                    <div class="blog-post-carousel">
                        <div class="blog-post-item">
                            <div class="blog-post-img">
                                <img src="assets/images/img9.jpg" alt="blog image" class="blog__img">
                                <div class="blog__date">
                                    <span>24 may</span>
                                </div><!-- end blog__date -->
                            </div><!-- end blog-post-img -->
                            <div class="post-body">
                                <div class="blog-title">
                                    <a href="blog-single" class="blog__title">
                                        User Experience Design Essentials
                                    </a>
                                </div>
                                <ul class="blog__panel d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">Admin</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end post-body -->
                        </div><!-- end blog-post-item -->
                        <div class="blog-post-item">
                            <div class="blog-post-img">
                                <img src="assets/images/img12.jpg" alt="blog image" class="blog__img">
                                <div class="blog__date">
                                    <span>25 jun</span>
                                </div><!-- end blog__date -->
                            </div><!-- end blog-post-img -->
                            <div class="post-body">
                                <div class="blog-title">
                                    <a href="blog-single" class="blog__title">
                                        Ultimate Photoshop Training: From Beginner
                                    </a>
                                </div>
                                <ul class="blog__panel d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">Admin</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end post-body -->
                        </div><!-- end blog-post-item -->
                        <div class="blog-post-item">
                            <div class="blog-post-img">
                                <img src="assets/images/img11.jpg" alt="blog image" class="blog__img">
                                <div class="blog__date">
                                    <span>26 jul</span>
                                </div><!-- end blog__date -->
                            </div><!-- end blog-post-img -->
                            <div class="post-body">
                                <div class="blog-title">
                                    <a href="blog-single" class="blog__title">
                                        Sales Training: Practical Techniques
                                    </a>
                                </div>
                                <ul class="blog__panel d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">Admin</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end post-body -->
                        </div><!-- end blog-post-item -->
                        <div class="blog-post-item">
                            <div class="blog-post-img">
                                <img src="assets/images/img10.jpg" alt="blog image" class="blog__img">
                                <div class="blog__date">
                                    <span>27 aug</span>
                                </div><!-- end blog__date -->
                            </div><!-- end blog-post-img -->
                            <div class="post-body">
                                <div class="blog-title">
                                    <a href="blog-single" class="blog__title">
                                        Complete Financial Analyst Course
                                    </a>
                                </div>
                                <ul class="blog__panel d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">Admin</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end post-body -->
                        </div><!-- end blog-post-item -->
                        <div class="blog-post-item">
                            <div class="blog-post-img">
                                <img src="assets/images/img12.jpg" alt="blog image" class="blog__img">
                                <div class="blog__date">
                                    <span>28 sept</span>
                                </div><!-- end blog__date -->
                            </div><!-- end blog-post-img -->
                            <div class="post-body">
                                <div class="blog-title">
                                    <a href="blog-single" class="blog__title">
                                        Complete Financial Analyst Course
                                    </a>
                                </div>
                                <ul class="blog__panel d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">Admin</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end post-body -->
                        </div><!-- end blog-post-item -->
                        <div class="blog-post-item">
                            <div class="blog-post-img">
                                <img src="assets/images/img11.jpg" alt="blog image" class="blog__img">
                                <div class="blog__date">
                                    <span>29 oct</span>
                                </div><!-- end blog__date -->
                            </div><!-- end blog-post-img -->
                            <div class="post-body">
                                <div class="blog-title">
                                    <a href="blog-single" class="blog__title">
                                        Complete Financial Analyst Course
                                    </a>
                                </div>
                                <ul class="blog__panel d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">Admin</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end post-body -->
                        </div><!-- end blog-post-item -->
                        <div class="blog-post-item">
                            <div class="blog-post-img">
                                <img src="assets/images/img9.jpg" alt="blog image" class="blog__img">
                                <div class="blog__date">
                                    <span>3 nov</span>
                                </div><!-- end blog__date -->
                            </div><!-- end blog-post-img -->
                            <div class="post-body">
                                <div class="blog-title">
                                    <a href="blog-single" class="blog__title">
                                        Complete Financial Analyst Course
                                    </a>
                                </div>
                                <ul class="blog__panel d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">Admin</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end post-body -->
                        </div><!-- end blog-post-item -->
                    </div><!-- end blog-post-carousel -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end blog-area -->
    <!-- ================================
       START BLOG AREA
================================= -->

    <!--======================================
        START SUBSCRIBER AREA
======================================-->
    <section class="subscriber-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h5 class="section__meta">newsletter</h5>
                        <h2 class="section__title">Subscribe Our Newsletter to Get Latest Updates</h2>
                        <span class="section__divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-6">
                    <div class="subscriber-form-wrap">
                        <div class="subscriber-form">
                            <input class="form-control" type="email" name="email" placeholder="Enter Your Email" required>
                            <span class="la la-envelope-o"></span>
                            <button class="theme-btn" type="button">subscribe</button>
                        </div>
                    </div><!-- end form-group -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end subscriber-area -->
    <!--======================================
        END SUBSCRIBER AREA
======================================-->


    <!-- ================================
         START FOOTER AREA
================================= -->

    <?php
    //Calling Footer Section
    include __DIR__ . '/assets/templates/template-footer.php';
    ?>

    <!-- ================================
          END FOOTER AREA
================================= -->

</body>
</html>

<!-- ================================
         START SCRIPTS AREA
================================= -->

<?php
//Calling Footer Section
include __DIR__ . '/assets/templates/template-scripts.php';
?>

<!-- ================================
          END SCRIPTS AREA
================================= -->