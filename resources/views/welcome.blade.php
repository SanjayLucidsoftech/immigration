{{--  
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel React application</title>
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
    <h2 style="text-align: center"> Immigration React application </h2>
        <div id="root"></div>
        <script src="{{mix('js/app.js')}}" ></script>
    </body>
</html>   --}}

<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Metronic Frontend (with Top Bar)</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->
  {{--  <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">  --}}
  <!-- Global styles START -->

   <link href={{asset('sb_theme/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}  rel="stylesheet">
  <link href={{ asset('sb_theme/assets/global/plugins/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">
  <!-- Global styles END --> 

  <!-- Page level plugin styles START -->
  <link href={{ asset('sb_theme/assets/global/plugins/fancybox/source/jquery.fancybox.css')}} rel="stylesheet">
  <link href={{ asset('sb_theme/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css')}} rel="stylesheet">
  <link href={{ asset('sb_theme/assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css')}} rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href={{ asset('sb_theme/assets/global/css/components.css')}} rel="stylesheet">
  <link href={{ asset('sb_theme/assets/frontend/layout/css/style.css')}} rel="stylesheet">
  <link href={{ asset('sb_theme/assets/frontend/pages/css/style-revolution-slider.css')}} rel="stylesheet"><!-- metronic revo slider styles -->
  <link href={{ asset('sb_theme/assets/frontend/layout/css/style-responsive.css')}} rel="stylesheet">
  <link href={{ asset('sb_theme/assets/frontend/layout/css/themes/red.css')}} rel="stylesheet" id="style-color">
  <link href={{ asset('sb_theme/assets/frontend/layout/css/custom.css')}} rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->
<!-- Body BEGIN -->
<body class="corporate">
        <div id="root"></div>
        <script src="{{mix('js/app.js')}}" ></script>









    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src={{ asset('sb_theme/assets/global/plugins/respond.min.js')}}></script>
    <![endif]-->
    <script src={{ asset('sb_theme/assets/global/plugins/jquery.min.js')}} type="text/javascript"></script>
    <script src={{ asset('sb_theme/assets/global/plugins/jquery-migrate.min.js')}} type="text/javascript"></script>
    <script src={{ asset('sb_theme/assets/global/plugins/bootstrap/js/bootstrap.min.js')}} type="text/javascript"></script>
    <script src={{ asset('sb_theme/assets/frontend/layout/scripts/back-to-top.js')}} type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src={{ asset('sb_theme/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')}} type="text/javascript"></script><!-- pop up -->
    <script src={{ asset('sb_theme/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js')}} type="text/javascript"></script><!-- slider for products -->

    <!-- BEGIN RevolutionSlider -->
    <script src={{ asset('sb_theme/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}} type="text/javascript"></script>
    <script src={{ asset('sb_theme/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}} type="text/javascript"></script>
    <script src={{ asset('sb_theme/assets/frontend/pages/scripts/revo-slider-init.js')}} type="text/javascript"></script>
    <!-- END RevolutionSlider -->

    <script src={{ asset('sb_theme/assets/frontend/layout/scripts/layout.js')}} type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            Metronic.init();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>