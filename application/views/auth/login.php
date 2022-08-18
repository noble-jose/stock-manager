<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Diyafuels</title>
<link rel="icon" href="<?= base_url('assets/images/icons/risk.png')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
    #btn-theme{
        display: none !important;
    }
    .info-img{
        width: 100%;
    }
</style>
</head>

<body class="fullpage">
<div id="form-section" class="container-fluid signin">
<!--placeLogo-->
    <div class="row">
        <div class="info-slider-holder">
            <img src="<?= base_url('assets/images/graphic2.svg')?>" class="info-img">
        </div>
        <div class="form-holder">
            <div class="menu-holder">
                <ul class="main-links">
                    <li><a class="normal-link" href="<?php echo site_url('/register');?>">Don’t have an account?</a></li>
                    <li><a class="sign-button" href="<?php echo site_url('/register');?>">Sign up</a></li>
                </ul>
            </div>
            <div class="signin-signup-form">
                <div class="form-items">
                    <div class="form-title">Sign in to your account</div>
                    <div class="col-12 text-danger" style="height: 40px;">               
                        <?php echo $this->session->flashdata('msg');?>
                    </div>
                    <form name="form1" method="post" action="<?php echo base_url('auth/usignin');?>">
                        <div class="row">
                            <div class="form-text">
                              <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                              <span class="help-block"><?php echo form_error('email')?></span> 
                            </div>
                            <div class="form-text">
                              <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                              <span class="help-block"><?php echo form_error('password')?></span>
                            </div>
                        </div>

                        <div class="form-button">
                            <button type="submit" name="save" value="Login" class="ybtn ybtn-accent-color">Sign in</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="<?php echo base_url();?>assets/js/form-validation.js"></script>
</body>
</html>
