<!DOCTYPE html>
<!--
Template Name: Sourcebow Theame
Author: Sourcebow Technologies
Website: http://www.sourcebow.com/
Contact: support@sourcebow.com
Like: www.facebook.com/sourcebow
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?php echo e(app()->getLocale()); ?>">
<!--<![endif]-->
<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title><?php echo e(config('app.name', 'Sourcebow: HR Manager')); ?></title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->
  <link href=<?php echo e(asset('sb_theme/assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?> rel="stylesheet">
  <!-- Global styles END -->

  <!-- Page level plugin styles START -->
  <link href=<?php echo e(asset('sb_theme/assets/global/plugins/fancybox/source/jquery.fancybox.css')); ?> rel="stylesheet">
  <link href=<?php echo e(asset('sb_theme/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css')); ?> rel="stylesheet">
  <link href=<?php echo e(asset('sb_theme/assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css')); ?> rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href=<?php echo e(asset('sb_theme/assets/global/css/components.css')); ?> rel="stylesheet">
  <link href=<?php echo e(asset('sb_theme/assets/frontend/layout/css/style.css')); ?> rel="stylesheet">
  <link href=<?php echo e(asset('sb_theme/assets/frontend/pages/css/style-revolution-slider.css')); ?> rel="stylesheet"><!-- metronic revo slider styles -->
  <link href=<?php echo e(asset('sb_theme/assets/frontend/layout/css/style-responsive.css')); ?> rel="stylesheet">
  <link href=<?php echo e(asset('sb_theme/assets/frontend/layout/css/themes/red.css')); ?> rel="stylesheet" id="style-color">
  <link href=<?php echo e(asset('sb_theme/assets/frontend/layout/css/custom.css')); ?> rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <?php
      /*
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>
    */
    ?>
    <!-- END BEGIN STYLE CUSTOMIZER -->


    <?php echo $__env->make('elements.guest.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('elements.guest.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>
          <?php
            /* <div class="photo-stream">
              <h2>Photos Stream</h2>
              <ul class="list-unstyled">
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/people/img5-small.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/works/img1.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/people/img4-large.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/works/img6.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/works/img3.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/people/img2-large.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/works/img2.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/works/img5.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/people/img5-small.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/works/img1.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/people/img4-large.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/works/img6.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/works/img3.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/people/img2-large.jpg') }}></a></li>
                <li><a href="#"><img alt="" src={{ asset('sb_theme/assets/frontend/pages/img/works/img2.jpg') }}></a></li>
              </ul>
            </div> */
          ?>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              N1-503, Eros Sampoornam, Grater Noida West<br>
              Uttar Pradesh, India<br>
              Phone: 7838289073<br>
              Email: <a href="mailto:info@sourcebow.com">info@sourcebow.com</a><br>
              Skype: <a href="skype:sourcebow">sourcebow</a>
            </address>

            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Follow Us on Facebook!</h2>
            <?php
            /*
            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
            */?>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->
    <?php echo $__env->make('elements.guest.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
<!-- END BODY -->
</html>
