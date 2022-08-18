<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Stock Manager</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
</head>

<body>
<div id="header-holder" class="main-header" style="height:100vh;">
    <div class="bg-animation">
        <div class="graphic-show">
            <img class="fix-size" src="<?php echo base_url();?>assets/images/graphic1.png" alt="">
            <img class="img img1" src="<?php echo base_url();?>assets/images/graphic1.png" alt="">
            <img class="img img2" src="<?php echo base_url();?>assets/images/graphic2.png" alt="">
            <img class="img img3" src="<?php echo base_url();?>assets/images/graphic3.png" alt="">
        </div>
    </div>
    <nav id="nav" class="navbar navbar-default navbar-full">
        <div class="container-fluid">
            <div class="container container-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                                <div class="logo" style="width:62px;height:18px"></div> </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="login-button" href="<?php echo base_url('/login');?>">Login</a></li>
                                <li class="support-button-holder support-dropdown">
                                    <a class="support-button" href="#">Support</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="fas fa-phone"></i>+91 8089104304</a></li>
                                      <li><a href="#"><i class="far fa-envelope-open"></i>Demo@gmail.com</a></li>
                                    </ul> </li> </ul> </div> </div> </div>  </div> </div></nav>
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="main-slider">
                        <div class="slide">
                            <div class="noti-holder">
                                <a href="https://www.codecraftmedia.com">

                                </a>
                            </div>
                            <div class="spacer"></div>
                            <div class="big-title">The more you<span> save,</span><br> the more you are <span>safe</span>.</div>
                            <p> Developed for the modern Petrol-Pumb managing in India.</p>
                            <div class="btn-holder">
                                <a href="<?php echo base_url('/register');?>" class="ybtn ybtn-header-color">Register</a><a href="contact.html" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="header-graphic" src="images/graphic1.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="info-text">Demo for <span>Resorts front office managing software</span></div> -->

                <a href="<?php echo site_url('/register');?>" class="ybtn ybtn-accent-color ybtn-shadow">Create Your Account</a></div></div> </div></div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>
