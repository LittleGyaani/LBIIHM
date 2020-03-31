<?php
//Include Global Configuration File
include 'assets/libs/config/global.config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include Meta -->
    <?php
    //Calling META Section
    include 'assets/templates/template-meta.php';
    ?>
    <title> <?= $title_constant; ?> : ABOUT US</title>
    <!-- Include Header -->
    <?php
    //Calling HEADER & HEADER SCRIPTS 
    include 'assets/templates/template-header.php';
    ?>
</head>

<body>
    <!-- HEADER-->
    <header>
        <!-- Include Navigation -->
        <?php
        //Calling Main Navigation
        include 'assets/templates/template-navigation.php';
        ?>
    </header>
    <!-- WRAPPER-->
    <div id="wrapper-content">
        <!-- PAGE WRAPPER-->
        <div id="page-wrapper">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <!-- CONTENT-->
                <div class="content">
                    <div class="section background-opacity page-title set-height-top">
                        <div class="container">
                            <div class="page-title-wrapper">
                                <!--.page-title-content-->
                                <h2 class="captions">about us</h2>
                                <ol class="breadcrumb">
                                    <li><a href="./">Home</a></li>
                                    <li class="active"><a href="#">About</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="section nav-subscribe">
                        <div class="container">
                            <div class="nav-subscribe-wrapper">
                                <div class="nav-subscribe-left">
                                    <p class="subscribe-text">Subscribe <b class="focus">Edugate</b> to learn new creative skill</p>
                                </div>
                                <div class="nav-subscribe-right">
                                    <button class="btn btn-green btn-bold"><span>SUBSCRIBE NOW</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--INTRO EDUGATE-->
                    <div class="section intro-edu">
                        <div class="container">
                            <div class="intro-edu-wrapper">
                                <div class="row">
                                    <div class="col-md-5"><img src="assets/images/people-avatar-8.png" alt="" class="intro-image fadeInLeft animated wow" /></div>
                                    <div class="col-md-7">
                                        <div class="intro-title">ABOUT US : <b>LBIIHM</b> ?</div>
                                        <div class="intro-content">
                                            <p><b>Lakshya Bhartee Institute of International Hotel Management (LBIIHM)</b> is a renowned learning institute, covering all aspects of hospitality management. We provide a broad range of educational approach and focus on emphasizing professional skills in students to promote leadership quality in them and develop their overall personality. We provide professional training environment to our students to enhance their professional growth in various aspects of the hospitality.</p>

                                            <p>Offers comprehensive Hotel Management courses - M.Sc in Hotel Management & Tourism (Equivalent to MBA-Hospitality) course for 2 years and B.Sc. in Hotel Administration and Hospitality course for 3 years. We are instrumental in providing technical knowledge and skills in hotel operation to groom students into professional leaders in the hospitality industries. The course has extensive practical training which focuses on developing the students' knowledge, expertise and leadership qualities with a wide industry exposure keeping in relation to the operations of leading reputed hotels.</p>
                                        </div>
                                        <div class="group-button">
                                            <button class="btn btn-transition-2"><span>purchase theme</span></button>
                                            <button class="btn btn-green"><span>start learn now</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding edu-ab">
                        <div class="container">
                            <div class="edu-ab">
                                <div class="group-title-index edu-ab-title">
                                    <h2 class="center-title">WITH <b>LBIIHM</b> YOU CAN</h2>
                                    <h4 class="top-title">We assist students in building skills to move upward in the industry</h4>
                                </div>
                                <div class="edu-ab-content">
                                    <ul class="list-unstyled list-inline">
                                        <li>
                                            <div class="circle-icon"><i class="fa fa-wifi fa-2x"></i></div>
                                            <span>Best Hotel Management Institutes in India</span>
                                        </li>
                                        <li>
                                            <div class="circle-icon fa-2x"><i class="fa fa-search"></i></div>
                                            <span>Specialized Training</span>
                                        </li>
                                        <li>
                                            <div class="circle-icon fa-2x"><i class="fa fa-thumbs-up"></i></div>
                                            <span>Complete Job-Oriented Courses</span>
                                        </li>
                                        <li>
                                            <div class="circle-icon fa-2x"><i class="fa fa-user-plus"></i></div>
                                            <span>Innovative Teaching Methodology</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding edu-feature">
                        <div class="container">
                            <div class="edu-feature-wrapper">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="group-title-index edu-feature-text">
                                                    <h2 class="center-title">excellence is the only vision of LBIIHM</h2>

                                                    <p class="top-title">LBIIHM has now tied-up with London School Of Business Management (LSBM) for 8 months paid internship at the UK, to provide the best hospitality industry exposure through international internship training. It is a diploma program offered by LSBM, to make the students excel in their field of hotel management (2 months study and 6 months work).</p>
                                                    <p>The college provides the perfect ambience to foster students with the world class hospitality education to bring about holistic development and making them capable to face future challenges with managerial skills. We provide a platform of hospitality to the students who wish to pursue their career in the discipline of the hospitality management with an opportunity to know the core functionalities of hospitality industry.</p>
                                                    <p>LBIIHM was awarded with <strong>Gurukul Jyoti Award in 2006</strong> for excellence in education and is recognized as one of the best Hotel Management Institutes in India. According to CSR Survey in April 2008, LBIIHM was listed as the 2nd Best Hotel Management Institute in Delhi for their successful contribution to Hotel Management education, we are proud of being recognized as the Center of Excellence in Education.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul id="accordion" role="tablist" class="panel-group list-unstyled edu-feature-list">
                                                    <li class="panel">
                                                        <div role="tab" id="item-1" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#lesson" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>90% lessons</span> are video</a></div>
                                                        <div id="lesson" role="tabpanel" aria-labelledby="item-1" class="collapse">
                                                            <div class="panel-body col-item-2">Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre.</div>
                                                        </div>
                                                    </li>
                                                    <li class="panel">
                                                        <div role="tab" id="item-2" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#display" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>Displaying</span> clear curriculum</a></div>
                                                        <div id="display" role="tabpanel" aria-labelledby="item-2" class="collapse">
                                                            <div class="panel-body col-item-2">Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre.</div>
                                                        </div>
                                                    </li>
                                                    <li class="panel">
                                                        <div role="tab" id="item-3" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#discuss" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>Discussion</span> with other students</a></div>
                                                        <div id="discuss" role="tabpanel" aria-labelledby="item-3" class="collapse">
                                                            <div class="panel-body col-item-2">Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre.</div>
                                                        </div>
                                                    </li>
                                                    <li class="panel">
                                                        <div role="tab" id="item-4" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#capability1" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>Compatible</span> with Ubermenu</a></div>
                                                        <div id="capability1" role="tabpanel" aria-labelledby="item-4" class="collapse">
                                                            <div class="panel-body col-item-2">Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre.</div>
                                                        </div>
                                                    </li>
                                                    <li class="panel">
                                                        <div role="tab" id="item-5" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#capability2" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>Compatible</span> with Many Popular Plugins</a></div>
                                                        <div id="capability2" role="tabpanel" aria-labelledby="item-5" class="collapse">
                                                            <div class="panel-body col-item-2">Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre.</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"><img src="assets/images/picture-8.png" alt="" class="computer-image" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PROGRESS BARS-->
                    <div class="section progress-bars section-padding">
                        <div class="container">
                            <div class="progress-bars-content">
                                <div class="progress-bar-wrapper">
                                    <h2 class="title-2">Some important facts about us</h2>

                                    <div class="row">
                                        <div class="content">
                                            <div class="col-sm-3">
                                                <div class="progress-bar-number">
                                                    <div data-from="0" data-to="800" data-speed="1000" class="num">0</div>
                                                    <p class="name-inner">STUDENTS ENROLLED</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="progress-bar-number">
                                                    <div data-from="0" data-to="27" data-speed="1000" class="num">0</div>
                                                    <p class="name-inner">ALUMNI PRESENCE</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="progress-bar-number">
                                                    <div data-from="0" data-to="40" data-speed="1000" class="num">0</div>
                                                    <p class="name-inner">HIRING PARTNERS</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="progress-bar-number">
                                                    <div data-from="0" data-to="15" data-speed="1000" class="num">0</div>
                                                    <p class="name-inner">YEARS COMPLETED</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group-button">
                                        <button onclick="window.location.href='categories.html'" class="btn btn-transition-3"><span>Purchase theme</span></button>
                                        <button onclick="window.location.href='about-us.html'" class="btn btn-green-3"><span>start Learn now</span></button>
                                    </div>
                                    <div class="group-btn-slider">
                                        <div class="btn-prev"><i class="fa fa-angle-left"></i></div>
                                        <div class="btn-next"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BEST STAFF-->
                    <div class="section section-padding background-opacity best-staff">
                        <div class="container">
                            <div class="group-title-index">
                                <h4 class="top-title">learn from the best</h4>
                                <h2 class="center-title">Our Esteemed Faculty</h2>

                                <div class="bottom-title"><i class="bottom-icon icon-icon-05"></i></div>
                            </div>
                            <div class="best-staff-wrapper">
                                <div class="best-staff-content">
                                    <div class="staff-item">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="assets/images/people-avatar-2.jpg" alt="" class="img-responsive" /></a><a href="#" class="staff-name">Dr Kamal Kumar</a>

                                                <div class="staff-job">Director</div>
                                                <div class="staff-desctiption">PhD (Corporate Social Inclusion)
                                                    PGDM (XIMB)
                                                    B.A. (Eco) - D.U.</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="assets/images/people-avatar-3.jpg" alt="" class="img-responsive" /></a><a href="#" class="staff-name">Shobana Chadha</a>

                                                <div class="staff-job">Vice Principal</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="assets/images/people-avatar-4.jpg" alt="" class="img-responsive" /></a><a href="#" class="staff-name">Ms Priya</a>

                                                <div class="staff-job">Head Admissions &amp; Administration, Sr. Soft Skills Trainer</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="assets/images/people-avatar-5.jpg" alt="" class="img-responsive" /></a><a href="#" class="staff-name">Ms Anita Gulati</a>

                                                <div class="staff-job">Placement Officer, Lecturer HRM</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="assets/images/people-avatar-5.jpg" alt="" class="img-responsive" /></a><a href="#" class="staff-name">Bhaskar Maurya</a>

                                                <div class="staff-job">Faculty, Food Production</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="assets/images/people-avatar-5.jpg" alt="" class="img-responsive" /></a><a href="#" class="staff-name">Anita Chhikara</a>

                                                <div class="staff-job">Housekeeping Faculty, B.Sc. in Hotel Management</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group-btn-slider">
                            <div class="btn-prev"><i class="fa fa-angle-left"></i></div>
                            <div class="btn-next"><i class="fa fa-angle-right"></i></div>
                        </div>
                    </div>
                    <!-- SLIDER TALK ABOUT US-->
                    <div class="section background-opacity slider-talk-about-us">
                        <div class="container">
                            <div id="people-talk" data-ride="carousel" data-interval="5000" class="slider-talk-about-us-wrapper carousel slide">
                                <div role="listbox" class="slider-talk-about-us-content carousel-inner">
                                    <div class="peopel-item item active">
                                        <p class="peopel-comment">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>

                                        <div class="group-peole-info">
                                            <div class="peopel-avatar"><img src="assets/images/people-avatar-1.jpg" alt="" class="img-responsive" /></div>
                                            <div class="peopel-name">john doe</div>
                                            <div class="people-job">Microshop Crop.SEO</div>
                                        </div>
                                    </div>
                                    <div class="peopel-item item">
                                        <p class="peopel-comment">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>

                                        <div class="group-peole-info">
                                            <div class="peopel-avatar"><img src="assets/images/people-avatar-1.jpg" alt="" class="img-responsive" /></div>
                                            <div class="peopel-name">john doe</div>
                                            <div class="people-job">Microshop Crop.SEO</div>
                                        </div>
                                    </div>
                                    <div class="peopel-item item">
                                        <p class="peopel-comment">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>

                                        <div class="group-peole-info">
                                            <div class="peopel-avatar"><img src="assets/images/people-avatar-1.jpg" alt="" class="img-responsive" /></div>
                                            <div class="peopel-name">john doe</div>
                                            <div class="people-job">Microshop Crop.SEO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group-btn-slider"><a href="#people-talk" role="button" data-slide="prev">
                                <div class="btn-prev carousel-control left"><i class="fa fa-angle-left"></i></div>
                            </a><a href="#people-talk" role="button" data-slide="next">
                                <div class="btn-next carousel-control right"><i class="fa fa-angle-right"></i></div>
                            </a></div>
                    </div>
                    <!-- SLIDER LOGO-->
                    <div class="section slider-logo">
                        <div class="container">
                            <div class="slider-logo-wrapper">
                                <div class="slider-logo-content">
                                    <div class="carousel-logos owl-carousel">
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-1.png" alt="" class="img-responsive" /></a></div>
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-2.png" alt="" class="img-responsive" /></a></div>
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-3.png" alt="" class="img-responsive" /></a></div>
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-4.png" alt="" class="img-responsive" /></a></div>
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-5.png" alt="" class="img-responsive" /></a></div>
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-6.png" alt="" class="img-responsive" /></a></div>
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-1.png" alt="" class="img-responsive" /></a></div>
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-2.png" alt="" class="img-responsive" /></a></div>
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-3.png" alt="" class="img-responsive" /></a></div>
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-4.png" alt="" class="img-responsive" /></a></div>
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-5.png" alt="" class="img-responsive" /></a></div>
                                        <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-6.png" alt="" class="img-responsive" /></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER-->

    <!-- Include Footer -->
    <?php
    //Include Footer Section
    include 'assets/templates/template-footer.php';
    ?>
</body>

</html>

<!-- Include Scripts -->
<?php
//Include Scripts Section
include 'assets/templates/template-scripts.php';
?>