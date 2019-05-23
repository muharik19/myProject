<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/pages/css/login-4.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/layouts/layout/img/Addresbarwebsite(Favicon).png" />
</head>
<!-- END HEAD -->

<body class=" login">
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="index.html">
            <img src="<?php echo get_template_directory(dirname(__FILE__), 'assets'); ?>/pages/img/logo-mnc-bank.png" alt="" style="position:relative; width:250px; height:100px; top:20px;" />
        </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="index.html" method="post">
            <h3 class="form-title">Login to your account</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Email Address</label>
                <div class="input-icon">
                    <i class="fa fa-envelope"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email Address" name="email" /> </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
            </div>
            <div class="form-actions">
                <label class="rememberme mt-checkbox mt-checkbox-outline">
                    <input type="checkbox" name="remember" value="1" /> Remember me
                    <span></span>
                </label>
                <button type="submit" class="btn green pull-right"> Login </button>
            </div>
            <div class="forget-password">
                <h4>Forgot your password ?</h4>
                <p> no worries, click
                    <a href="javascript:;" id="forget-password"> here </a> to reset your password. </p>
            </div>
        </form>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="forget-form" action="index.html" method="post">
            <h3>Forget Password ?</h3>
            <p> Enter your e-mail address below to reset your password. </p>
            <div class="form-group">
                <div class="input-icon">
                    <i class="fa fa-envelope"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
            </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn red btn-outline">Back </button>
                <button type="submit" class="btn green pull-right"> Submit </button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->
    </div>
    <!-- END LOGIN -->
    <!-- BEGIN COPYRIGHT -->
    <div class="copyright"> 2014 - <?= date('Y'); ?> &copy; MNC Bank - Login. </div>
    <!-- END COPYRIGHT -->
    <!--[if lt IE 9]>
<script src="<?php /*echo get_template_directory(dirname(__FILE__), 'assets');*/ ?>/global/plugins/respond.min.js"></script>
<script src="<?php /*echo get_template_directory(dirname(__FILE__), 'assets');*/ ?>/global/plugins/excanvas.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?= get_template_directory(dirname(__FILE__), 'assets'); ?>/pages/scripts/login-4.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>