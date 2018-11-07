<!DOCTYPE html>
<html lang="en">
<head>

    <title>Khayat Dana Al-Fariej - A Family Tailor</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/assets/template/images/icon.png">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Ehtezaz Ahmed">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/template/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/template/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/template/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/template/css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/template/css/my-style.css">
    <!-- MODEL CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/template/css/model.css">


</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>


<!-- HEADER -->
<header>
    <div class="container" style="text-align: right;">
<!--        <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">INFO@KDAF.COM</a></span>-->
        <span class="user-icon"><i class="fa fa-user-circle-o"></i> <a href="#login_modal" data-toggle="modal">LOGIN</a></span>
    </div>

<!-- MODAL -->
    <div id="login_modal" class="modal fade text-center">
        <div class="modal-dialog">
            <div class="col-lg-12 col-sm-12 col-12 main-section">
                <div class="modal-content">
                    <div class="col-lg-12 col-sm-12 col-12 user-img">
                        <img src="<?php echo base_url(); ?>/assets/template/images/man.png">
                    </div>
                    <div class="col-lg-12 col-sm-12 col-12 user-name">
                        <h1>User Login</h1>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="col-lg-12 col-sm-12 col-12 form-input">
                        <form id="login_submit_form" method="post">
                            <span id="success_msg"> </span>
                            <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url();?>">

                            <div class="input-group form-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="email" name="admin_email" id="admin_email" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group form-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" id="admin_password" class="form-control" name="admin_password" placeholder="Password">
                            </div>
                            <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-success width">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>


<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="#" class="navbar-brand"><i class="fa fa-k-square"></i>K D A F</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#about_us" class="smoothScroll">About Us</a></li>
                <li><a href="#team" class="smoothScroll">Team</a></li>
                <li><a href="#products" class="smoothScroll">Products</a></li>
                <li><a href="#contact_us" class="smoothScroll">Contact Us</a></li>
                <li class="appointment-btn"><a href="#order">Make an Order</a></li>
            </ul>
        </div>

    </div>
</section>


<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="owl-carousel owl-theme">
                <div class="item item-first">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>مرحبًا بكم في</h3>
                            <h1>خیاط دانہ الفریج</h1>
                            <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Team</a>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Welcome to</h3>
                            <h3>Khayat Dana Al-Fariej</h3>
                            <h1>K  D  A  F.</h1>
                            <a href="#about_us" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>A Family Tailor</h3>
                            <h1>A Clothing Store in Kuwait</h1>
                            <a href="#products" class="section-btn btn btn-default btn-blue smoothScroll">Our Products</a>
                        </div>
                    </div>
                </div>

                <div class="item item-fourth">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Knows Your Style</h3>
                            <h1>A Perfect Dress </h1>
                            <a href="#about_us" class="section-btn btn btn-default btn-gray smoothScroll">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section id="about_us">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">KHAYAT DANA AL-FARIEJ  Welcome to Your Family Store</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <p>Khayat Dana Al-Fariej (KDAF) a family clothing store in Kuwait City. We provide you with the latest products from the industry that is best for you. </p>
                        <p>You don't need really expensive clothes to look cute.</p>
                        <p>The dress must follow the body, not the body following the shape of the dress</p>
                        <p>I don't design clothes. I design dreams.</p>
                    </div>
                    <figure class="profile wow fadeInUp" data-wow-delay="1s">
                        <img src="<?php echo base_url(); ?>/assets/template/images/author-image.jpg"
                             class="img-responsive" alt="Owner_image">
                        <figcaption>
                            <h3>Ishtiaq Ahmed</h3>
                            <p>Owner / Founder</p>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- TEAM  -->
<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Team</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <img src="<?php echo base_url(); ?>/assets/template/images/team-image1.jpg" class="img-responsive"
                         alt="">

                    <div class="team-info">
                        <h3>Ishtiaq Ahmed</h3>
                        <p>Owner / Founder</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 0096 2245 3301</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">owner@company.com</a></p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-linkedin-square"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <img src="<?php echo base_url(); ?>/assets/template/images/team-image2.jpg" class="img-responsive"
                         alt="">

                    <div class="team-info">
                        <h3>M. Naeem </h3>
                        <p>Senior Product Manager</p>
<!--                        <p>The joy of dressing is an art.</p>-->
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 010-070-0170</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">manager@company.com</a></p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                            <li><a href="#" class="fa fa-flickr"></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <img src="<?php echo base_url(); ?>/assets/template/images/team-image3.jpg" class="img-responsive"
                         alt="">

                    <div class="team-info">
                        <h3>Aftab Ahmed</h3>
                        <p>Senior Sales Manager</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 010-040-0140</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">manager@company.com</a></p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- NEWS PRODUCTS-->
<section id="products" data-stellar-background-ratio="2.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <!-- SECTION TITLE -->
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Latest Products</h2>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <a href="news-detail.html">
                        <img src="<?php echo base_url(); ?>/assets/template/images/news-image1.jpg"
                             class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>March 08, 2018</span>
                        <h3><a href="news-detail.html">About Amazing Offers</a></h3>
                        <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                        <div class="author">
                            <img src="<?php echo base_url(); ?>/assets/template/images/author-image.jpg"
                                 class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Ishtiaq Ahmed</h5>
                                <p>Owner / Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <a href="news-detail.html">
                        <img src="<?php echo base_url(); ?>/assets/template/images/news-image2.jpg"
                             class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>February 20, 2018</span>
                        <h3><a href="news-detail.html">Introducing Products</a></h3>
                        <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                        <div class="author">
                            <img src="<?php echo base_url(); ?>/assets/template/images/author-image.jpg"
                                 class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Jason Stewart</h5>
                                <p>General Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                    <a href="news-detail.html">
                        <img src="<?php echo base_url(); ?>/assets/template/images/news-image3.jpg"
                             class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>January 27, 2018</span>
                        <h3><a href="news-detail.html">Review Annual Revenue</a></h3>
                        <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                        <div class="author">
                            <img src="<?php echo base_url(); ?>/assets/template/images/author-image.jpg"
                                 class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Andrio Abero</h5>
                                <p>Online Advertising</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- MAKE AN ODER -->
<section id="order" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="<?php echo base_url(); ?>/assets/template/images/appointment-image.png" class="img-responsive"
                     alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form id="order-form" role="form" method="post" action="#">

                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Make an Order</h2>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6 form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                        </div>

                        <div class="col-md-6 col-sm-6 form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        </div>

                        <div class="col-md-6 col-sm-6 form-group">
                            <label for="date">Select Date</label>
                            <input type="date" name="date" value="" class="form-control">
                        </div>

                        <div class="col-md-6 col-sm-6 form-group">
                            <label for="select">Select Department</label>
                            <select class="form-control">
                                <option>General Health</option>
                                <option>Cardiology</option>
                                <option>Dental</option>
                                <option>Medical Research</option>
                            </select>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <label for="telephone">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                            <label for="Message">Additional Message</label>
                            <textarea class="form-control" rows="5" id="message" name="message"
                                      placeholder="Message"></textarea>
                            <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


<!-- CONTACT INFORMATION -->
<section id="contact_us">

    <!-- GOOGLE MAP -->
    <!-- How to change your own map point
           1. Go to Google Maps
           2. Click on your location point
           3. Click "Share" and choose "Embed map" tab
           4. Copy only URL and paste it within the src="" field below
   -->
    <!-- KDAF MAP-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1738.4142364627744!2d47.97383621448457!3d29.375311156826445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf84ec79ba4eb7%3A0x68e04498bd7d2b97!2zS2hheWF0IERhbmEgQWwtRmFyaWVnaCAtINiu24zYp9i3INiv2KfZhtuBINin2YTZgdix24zYrA!5e0!3m2!1sen!2s!4v1523985422443"
<!--            width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>-->
    <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>-->
</section>


<!-- FOOTER -->
<footer data-stellar-background-ratio="5">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                    <p>Ahmad Al Jaber St, Kuwait City, Kuwait.</p>

                    <div class="contact-info">
                        <p><i class="fa fa-phone"></i> 0096 2245 3301</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="#">info@kdaf.com</a></p>
                    </div>
                </div>
            </div>

<!--            <div class="col-md-4 col-sm-4">-->
<!--                <div class="footer-thumb">-->
<!--                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest Products</h4>-->
<!--                    <div class="latest-stories">-->
<!--                        <div class="stories-image">-->
<!--                            <a href="#"><img src="--><?php //echo base_url(); ?><!--/assets/template/images/news-image.jpg"-->
<!--                                             class="img-responsive" alt=""></a>-->
<!--                        </div>-->
<!--                        <div class="stories-info">-->
<!--                            <a href="#"><h5>Amazing Style</h5></a>-->
<!--                            <span>May 08, 2018</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="latest-stories">-->
<!--                        <div class="stories-image">-->
<!--                            <a href="#"><img src="--><?php //echo base_url(); ?><!--/assets/template/images/news-image.jpg"-->
<!--                                             class="img-responsive" alt=""></a>-->
<!--                        </div>-->
<!--                        <div class="stories-info">-->
<!--                            <a href="#"><h5>New Products</h5></a>-->
<!--                            <span>March 20, 2018</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <div class="opening-hours">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                        <p>Friday <span>09:00 AM - 11:00 AM</span>  <span>04:00 PM - 10:00 PM</span> </p>
                        <p><span>Break</span>11:00 AM - 04:00 PM</p>
                        <p>Sunday - Thursday <span>09:00 AM - 10:00 PM</span></p>
                        <p><span>Break</span>01:00 PM - 04:00 PM</p>
                    </div>
                    <p><span>Closed</span> On Eid al-Fitr</p>
                    <p><span>Closed</span> On Eid al-Adha</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">

                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Ramadan Hours</h4>
                    <p>Friday <span>10:00 AM - 01:00 PM</span>  <span>04:00 PM - 12:00 AM</span> </p>
                    <p>Sunday - Thursday <span>10:00 AM - 01:00 PM</span>  <span>04:00 PM - 12:00 AM</span></p>

                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 border-top">
                <div class="col-md-5 col-sm-5">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2018 Khayat Dana Al-Fariej

                            | Design: <a rel="nofollow" href="https://www.ehtezazahmed.com/" target="_parent">Ehtezaz
                                Ahmed</a></p>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="footer-link">
                        <a href="#about_us">About Us</a>
                        <a href="#team">Team</a>
                        <a href="#products">Products</a>
                        <a href="#contact_us">Contact</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 text-align-center">
                    <div class="angle-up-btn">
                        <a href="#home" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                    class="fa fa-angle-up"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- SCRIPTS -->
<script src="<?php echo base_url(); ?>/assets/template/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>/assets/template/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/template/js/jquery.sticky.js"></script>
<script src="<?php echo base_url(); ?>/assets/template/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/template/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/template/js/smoothscroll.js"></script>
<script src="<?php echo base_url(); ?>/assets/template/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/template/js/custom.js"></script>

<!-- Adding Custome JavaScript-->
<script src="<?php echo base_url(); ?>assets/template/js/my_jquery.js"></script>

</body>
</html>