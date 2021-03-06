<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trago</title>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-lineariconago.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/travel-setting.css">


</head>

<body class="archive travel_tour travel_tour-page">
<div class="wrapper-container section-white">
    <header id="masthead" class="site-header sticky_header affix-top">
        <div class="header_top_bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <aside id="text-15" class="widget_text">
                            <div class="textwidget">
                                <ul class="top_bar_info clearfix">
                                    <li><i class="fa fa-clock-o"></i> Sun - Fri 8.00 - 18.00. Saturday CLOSED</li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-sm-8 topbar-right">
                        <aside id="text-7" class="widget widget_text">
                            <div class="textwidget">
                                <ul class="top_bar_info clearfix">
                                    <li><i class="fa fa-phone"></i> 0123456789</li>
                                    <li class="hidden-info">
                                        <i class="fa fa-map-marker"></i> Kathmandu,Nepal &nbsp;&nbsp;&nbsp;&nbsp;
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <?php if ($this->session->userdata("UserId") == '') {
                            ?>
                            <a href="<?php echo base_url('User/login_view'); ?>">
                                <span class="register_btn">
                                    <i class="fa fa-user"></i>
                                    Login &nbsp;|&nbsp;
                                </span>
                            </a>

                            <a href="<?php echo base_url('User/add'); ?>">
                                <span class="register_btn">
                                    <i class="fa fa-user"></i>
                                    Register
                                </span>
                            </a>

                            <!--                        <aside id="travel_login_register_from-2" class="widget widget_login_form">-->
                            <!--                            <span class="show_from login"><i class="fa fa-user"></i>Login</span>-->
                            <!---->
                            <!--                            <div class="form_popup from_login" tabindex="-1">-->
                            <!--                                <div class="inner-form">-->
                            <!--                                    <div class="closeicon"></div>-->
                            <!--                                    <h3>Login</h3>-->
                            <!--                                    <form name="loginform" id="loginform" action="#" method="post">-->
                            <!--                                        <p class="login-username">-->
                            <!--                                            <label for="user_login">Username or Email Address</label>-->
                            <!--                                            <input type="text" name="log" id="user_login" class="input" value=""-->
                            <!--                                                   size="20">-->
                            <!--                                        </p>-->
                            <!--                                        <p class="login-password">-->
                            <!--                                            <label for="user_pass">Password</label>-->
                            <!--                                            <input type="password" name="pwd" id="user_pass" class="input" value=""-->
                            <!--                                                   size="20">-->
                            <!--                                        </p>-->
                            <!--                                        <p class="login-remember">-->
                            <!--                                            <label><input name="rememberme" type="checkbox" id="rememberme"-->
                            <!--                                                          value="forever"> Remember Me</label>-->
                            <!--                                        </p>-->
                            <!--                                        <p class="login-submit">-->
                            <!--                                            <input type="submit" name="wp-submit" id="wp-submit"-->
                            <!--                                                   class="button button-primary" value="Log In">-->
                            <!--                                            <input type="hidden" name="redirect_to" value="">-->
                            <!--                                        </p>-->
                            <!--                                    </form>-->
                            <!--                                    <a href="#" title="Lost your password?" class="lost-pass">Lost your password?</a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <span class="register_btn">Register</span>-->
                            <!--                            <div class="form_popup from_register" tabindex="-1">-->
                            <!--                                <div class="inner-form">-->
                            <!--                                    <div class="closeicon"></div>-->
                            <!--                                    <h3>Register</h3>-->
                            <!--                                    <form method="post" class="register">-->
                            <!--                                        <p class="form-row">-->
                            <!--                                            <label for="reg_username">Username <span class="required">*</span></label>-->
                            <!--                                            <input type="text" class="input" name="username" id="reg_username" value=""-->
                            <!--                                                   autocomplete="off">-->
                            <!--                                        </p>-->
                            <!--                                        <p class="form-row">-->
                            <!--                                            <label for="reg_email">Email address <span class="required">*</span></label>-->
                            <!--                                            <input type="email" class="input" name="email" id="reg_email" value="">-->
                            <!--                                        </p>-->
                            <!--                                        <p class="form-row">-->
                            <!--                                            <label for="reg_password">Password <span class="required">*</span></label>-->
                            <!--                                            <input type="password" class="input" name="password" id="reg_password">-->
                            <!--                                        </p>-->
                            <!--                                        <div style="left: -999em; position: absolute;">-->
                            <!--                                            <label for="trap">Anti-spam</label><input type="text" name="email_2"-->
                            <!--                                                                                      id="trap" tabindex="-1"-->
                            <!--                                                                                      autocomplete="off">-->
                            <!--                                        </div>-->
                            <!--                                        <p class="form-row">-->
                            <!--                                            <input type="submit" class="button" name="register" value="Register">-->
                            <!--                                        </p>-->
                            <!--                                    </form>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                        <?php } else {
                            ?>
                            <a href="<?php echo base_url('User/user_logout'); ?>"> <span
                                        class="register_btn">Logout</span></a>
                        <?php }
                        ?>
                        <div class="background-overlay"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation-menu">
            <div class="container">
                <div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
                <div class="width-logo sm-logo">
                    <a href="" title="Travel" rel="home">
                        <img src="/assets/images/logo/logo.png" alt="Logo" width="474" height="130"
                             class="logo_transparent_static">
                        <img src="/assets/images/logo/logo_sticky.png" alt="Sticky logo" width="474" height="130"
                             class="logo_sticky">
                    </a>
                </div>
                <nav class="width-navigation">
                    <ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
                        <li>
                            <a href="<?php echo base_url() ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>website/destination">Destinations</a>
                        </li>
                        <?php
                       // echo $this->session->userdata('UserType');
                        if($this->session->userdata('UserType') == 1) {
                            ?>
                            <li>
                                <a href="tour.html">Add Destination</a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="tour.html">Add a Plan</a>
                            </li>
                        <?php } ?>

                        <li><a href="contact.html">Contact</a></li>
                        <li class="menu-right">
                            <ul>
                                <li id="travel_social_widget-2" class="widget travel_search">
                                    <div class="search-toggler-unit">
                                        <div class="search-toggler">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                    <div class="search-menu search-overlay search-hidden">
                                        <div class="closeicon"></div>
                                        <form method="get" class="search-form" action="tours.html">
                                            <input type="search" class="search-field" placeholder="Search ..." value=""
                                                   name="s" title="Search for:">
                                            <input type="submit" class="search-submit font-awesome" value="&#xf002;">
                                        </form>
                                        <div class="background-overlay"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="container two-column-respon  mg-bt-6x">
        <div style="margin-top: 120px">
            <?php
            if (isset($_view) && $_view)
                $this->load->view($_view);
            ?>
        </div>
    </div>

    <div class="wrapper-footer wrapper-footer-newsletter">
        <div class="main-top-footer">
            <div class="container">
                <div class="row">
                    <aside class="col-sm-3 widget_text"><h3 class="widget-title">CONTACT</h3>
                        <div class="textwidget">
                            <div class="footer-info">
                                <p>Lorem ipsum dolor sit amet, cons ectetueradipiscing elit, sed diam nonu my nibh euis
                                    motincidunt ut laoreetd
                                </p>
                                <ul class="contact-info">
                                    <li><i class="fa fa-map-marker fa-fw"></i> 1945 Washington, San Francisco</li>
                                    <li><i class="fa fa-phone fa-fw"></i> +1 234 456 7890</li>
                                    <li>
                                        <i class="fa fa-envelope fa-fw"></i><a href="mailto:hello@siteinfo.com">
                                            hello@siteinfo.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <aside class="col-sm-3 widget_text"><h3 class="widget-title">INFORMATION</h3>
                        <div class="textwidget">
                            <ul class="menu list-arrow">
                                <li><a href="#">Press Centre</a></li>
                                <li><a href="#">Travel News</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="col-sm-3 widget_text"><h3 class="widget-title">Our Menu</h3>
                        <div class="textwidget">
                            <ul class="menu list-arrow">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="col-sm-3 custom-instagram widget_text">
                        <h3 class="widget-title">Instagram</h3>
                        <div class="textwidget">
                            <ul>
                                <li><img src="images/instagram/1.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/2.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/3.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/4.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/5.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/6.jpg" alt="instagram"></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="container wrapper-copyright">
            <div class="row">
                <div class="col-sm-6">
                    <div><p>Copyright © 2017 Travel. All Rights Reserved.</p></div>
                </div>
                <div class="col-sm-6">
                    <aside id="text-5" class="widget_text">
                        <div class="textwidget">
                            <ul class="footer_menu">
                                <li><a href="#">Terms of Use</a></li>
                                <li>|</li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li>|</li>
                                <li><a href="https://twitter.com/physcode"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/physcode/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/physcode/"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-subscribe" style="background-image: url(images/1507736679_0Ebd6BFOVclq82L.jpeg.webp)">
        <div class="subscribe_shadow"></div>
        <div class="form-subscribe parallax-section stick-to-bottom form-subscribe-full-width">
            <div class="shortcode_title text-white title-center title-decoration-bottom-center margin-bottom-3x">
                <div class="title_subtitle">To receive our best monthly deals</div>
                <h3 class="title_primary">JOIN THE NEWSLETTER</h3>
                <span class="line_after_title"></span>
            </div>
            <div class="form-subscribe-form-wrap">
                <aside class="mailchimp-container">
                    <form class="epm-sign-up-form" name="epm-sign-up-form" action="#" method="post">
                        <div class="epm-form-field">
                            <label for="epm-email">Email Address</label>
                            <input type="email" placeholder="Email Address" name="epm-email" tabindex="8" class="email"
                                   id="epm-email" value="">
                        </div>


                        <input type="submit" name="epm-submit-chimp" value="Sign Up Now" data-wait-text="Please wait..."
                               tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp">
                    </form>
                </aside>
            </div>
        </div>
    </div>
</div>
<!--end coppyright-->
<!-- ./wrapper -->

<script src="<?php echo base_url() ?>assets/js/jquery.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/vendors.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.mb-comingsoon.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/waypoints.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/theme.js.download"></script>

</body>
</html>
