<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
        <title>Diyafuels</title>
        <link rel="icon" href="<?= base_url('assets/images/icons/risk.png')?>">        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-slider.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fontawesome-all.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <style type="text/css">
            #btn-theme{
                display: none !important;
            }
            .error-msg {
                color: red;
                padding: 5px;
                font-size: 12px;
            }
        </style>
    </head>

    <body class="fullpage">
        <div id="form-section" class="container-fluid signup">
            <div class="row">
                <div class="info-slider-holder">
                     <img src="<?= base_url('assets/images/graphic2.svg')?>" class="info-img">
                </div>
                <div class="form-holder">
                    <div class="menu-holder">
                        <ul class="main-links">
                            <li><a class="normal-link" href="<?php echo site_url('/login');?>">You have an account?</a></li>
                            <li><a class="sign-button" href="<?php echo site_url('/login');?>">Sign in</a></li>
                        </ul>
                    </div>
                    <div class="signin-signup-form">
                        <div class="form-items">
                            <div class="form-title">Sign up for new account</div>

                            <form id="register_form" name="register_form" method="post" action="<?= base_url('auth/uregister')?>">
                                <div class="row">
                                    <div class="col-md-6 form-text form-group">
                                        <input type="text" id="firstname" name="firstname" placeholder="First name" required />
                                        <span class="help-block"><?php echo form_error('firstname')?></span>
                                    </div>
                                    <div class="col-md-6 form-text form-group">
                                        <input type="text" id="lastname" name="lastname" placeholder="Last name" required />
                                        <span class="help-block"><?php echo form_error('lastname')?></span>
                                    </div>
                                </div>
                                <div class="form-text form-group">
                                    <input type="text" id="email" name="email" placeholder="E-mail Address" required />
                                    <span class="help-block"><?php echo form_error('email')?></span>
                                </div>
                                <div class="form-text form-group">
                                    <input type="password" id="password" name="password" placeholder="Password" required />
                                    <span class="help-block"><?php echo form_error('password')?></span>
                                </div>
                                <div class="form-text form-group">
                                    <input type="password" id="confirm_password" name="confirm_password" placeholder="confirm Password" required />
                                    <span class="help-block"><?php echo form_error('confirm_password')?></span>
                                </div>
                                <div class="form-button form-group">
                                    <button id="butsave" type="submit" name="save" class="ybtn ybtn-accent-color">Create new account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="<?php echo base_url();?>assets/js/form-validation.js"></script>
</body>
</html>
