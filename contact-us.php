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
    <title> <?= $title_constant; ?> : CONTACT US</title>
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
                                <h2 class="captions">Contact LBIIHM</h2>
                                <ol class="breadcrumb">
                                    <li><a href="./">Home</a></li>
                                    <li class="active"><a href="#">Contact</a></li>
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
                    <div class="section section-padding contact-main">
                        <div class="container">
                            <div class="contact-main-wrapper">
                                <div class="row contact-method">
                                    <div class="col-md-4">
                                        <div class="method-item"><i class="fa fa-map-marker"></i>

                                            <p class="sub">VISIT US</p>

                                            <div class="detail">
                                                <p><strong>LBIIHM Tower</strong>, B-98, Pushpanjali Enclave, <br /> Outer Ring Road, Pitam Pura,</p>

                                                <p>Delhi 110034, INDIA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="method-item"><i class="fa fa-phone"></i>

                                            <p class="sub">CALL ON</p>

                                            <div class="detail">
                                                <p>
                                                    <a href="tel:+919560895481">+91 9560 895 481</a> <br />
                                                    <a href="tel:+919560895482">+91 9560 895 482</a> <br />
                                                    <a href="tel:+919560895483">+91 9560 895 483</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="method-item"><i class="fa fa-envelope"></i>

                                            <p class="sub">CONNECT WITH US</p>

                                            <div class="detail">
                                                <p>enquriy@lbihm.com</p>

                                                <p>www.lbiihm.com</p>

                                                <p>Facebook: LBIIHMDELHI | Twitter : LBIIHM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form class="bg-w-form contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">NAME <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input" />
                                                <!--label.control-label.form-label.warning-label(for="") Warning for the above !-->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">EMAIL <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input" />
                                                <!--label.control-label.form-label.warning-label(for="")-->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">PURPOSE</label><select class="form-control form-input selectbox">
                                                    <option value="">Please Select</option>
                                                    <option value="">example 1</option>
                                                    <option value="">example 2</option>
                                                    <option value="">example 3</option>
                                                </select>
                                                <!--label.control-label.form-label.warning-label(for="", hidden)-->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">SUBJECT</label><input type="text" placeholder="" class="form-control form-input" />
                                                <!--label.control-label.form-label.warning-label(for="", hidden)-->
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="contact-question form-group"><label class="control-label form-label">HOW CAN WE HELP? <span class="highlight">*</span></label><textarea class="form-control form-input"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="contact-submit">
                                        <button type="submit" class="btn btn-contact btn-green"><span>SUBMIT CONTACT</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="map" class="section contact-map"></div>
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