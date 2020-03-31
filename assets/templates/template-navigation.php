<!-- 
    Top & Navigation BAR 

-->


<!-- Top Bar -->
<div class="header-topbar">
    <div class="container">
        <div class="topbar-left pull-left">
            <div class="email"><a href="mailto:info@lbiihm.com"><i class="topbar-icon fa fa-envelope-o"></i><span>info@lbiihm.com</span></a></div>
            <div class="hotline"><a href="tel:+919560895483"><i class="topbar-icon fa fa-phone"></i><span>+91 9560 895 483</span></a></div>
        </div>
        <!-- <div class="topbar-right pull-right">
            <div class="socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a><a href="#" class="blog"><i class="fa fa-rss"></i></a><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></div>
            <div class="group-sign-in"><a href="login.html" class="login">login</a><a href="register.html" class="register">register</a></div>
        </div> -->
    </div>
</div>

<!-- Mani Navigation -->
<div class="header-main <?= ($url == 'index' || $url ==  'index.php' || $url ==  '') ? 'homepage-02' : 'homepage-01'; ?>">
    <div class="container">
        <div class="header-main-wrapper">
            <div class="navbar-heade">
                <div class="logo pull-left"><a href="./" class="header-logo"><img src="assets/images/logo-color-1.png" style="width: 165px;" alt=" LBIIHM Logo" /></a></div>
                <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <nav class="navigation collapse navbar-collapse pull-right">
                <ul class="nav-links nav navbar-nav">
                    <li class="<?= ($url == 'index' || $url ==  'index.php' || $url ==  '') ? 'active' : ''; ?>"><a href=" ./" class="main-menu">HOME</a></li>
                    <li class="dropdown <?= ($url == 'about-us' || $url ==  'about-us.php') ? 'active' : ''; ?>"><a href="javascript:void(0)" class="main-menu">ABOUT LBIIHM<span class="fa fa-angle-down icons-dropdown"></span></a>
                        <ul class="dropdown-menu edugate-dropdown-menu-1">
                            <li><a href="about-us.php" class="link-page">ABOUT US</a></li>
                            <li><a href="courses-detail.html" class="link-page">WHY LBIIHM?</a></li>
                            <li><a href="events.html" class="link-page">VISION & MISSION </a></li>
                            <li><a href="event-detail.html" class="link-page">AWARDS & ACHIEVEMENTS</a></li>
                            <li><a href="event-detail.html" class="link-page">MESSAGE FROM CHAIRMAN</a></li>
                            <li><a href="event-detail.html" class="link-page">MESSAGE FROM DIRECTOR</a></li>
                            <li><a href="event-detail.html" class="link-page">ADVISORY BOARD MEMBERS</a></li>
                            <li><a href="event-detail.html" class="link-page">OUR NETWORK</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="main-menu">COURSES<span class="fa fa-angle-down icons-dropdown"></span></a>
                        <ul class="dropdown-menu edugate-dropdown-menu-1">
                            <li><a href="javascript:void(0)" class="link-page">OUR COURSES</a></li>
                            <li class="dropdown-submenu">
                                <a href="courses-detail.html" class="link-page dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> OUR SYLLABUS <span class="fa fa-angle-right icons-dropdown"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="link-page" href="#">B.SC. HAH</a></li>
                                    <li><a class="link-page" href="#">M.SC. HAH</a></li>
                                    <li><a class="link-page" href="#">DIPLOMA IN FOOD PRODUCTION</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="admission-procedure.php" class="main-menu">ADMISSIONS</a></li>
                    <li><a href="our-campus.php" class="main-menu">OUR CAMPUS</a></li>
                    <li><a href="skilling-india.php" class="main-menu">SKILLING INDIA</a></li>
                    <li class="dropdown"><a href="javascript:void(0)" class="main-menu">PLACEMENTS<span class="fa fa-angle-down icons-dropdown"></span></a>
                        <ul class="dropdown-menu edugate-dropdown-menu-1">
                            <li><a href="training-placement.php" class="link-page">TRAINING &amp; PLACEMENTS</a></li>
                            <li><a href="employability-training.php" class="link-page">EMPLOYABILITY TRAINING</a></li>
                            <li><a href="industrial-training.php" class="link-page">INDUSTRIAL TRAINING</a></li>
                            <li><a href="our-partners.php" class="link-page">OUR PARTNERS</a></li>
                            <li><a href="our-stars.php" class="link-page">OUR STARS</a></li>
                            <li><a href="training-usa.php" class="link-page">USA TRAINING PROGRAM</a></li>
                            <li><a href="training-dubai.php" class="link-page">TRAINING IN DUBAI</a></li>
                            <li><a href="training-malaysia.php" class="link-page">TRAINING IN MALAYSIA</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html" class="main-menu">CONTACT US</a></li>
                    <!-- <li class="button-search">
                        <p class="main-menu"><i class="fa fa-search"></i></p>
                    </li>
                    <div class="nav-search hide">
                        <form><input type="text" placeholder="Search" class="searchbox" />
                            <button type="submit" class="searchbutton fa fa-search"></button>
                        </form>
                    </div> -->
                </ul>
            </nav>
        </div>
    </div>
</div>