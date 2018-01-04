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
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>{{ config('app.name', 'Sourcebow: HR Manager') }}</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->
    <link href={{ asset('sb_theme/assets/global/plugins/font-awesome/css/font-awesome.min.css') }} rel="stylesheet">
  <link href={{ asset('sb_theme/assets/global/plugins/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
  <!-- Global styles END -->

  <!-- Page level plugin styles START -->
  <link href={{ asset('sb_theme/assets/global/plugins/fancybox/source/jquery.fancybox.css') }} rel="stylesheet">
  <link href={{ asset('sb_theme/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css') }} rel="stylesheet">
  <link href={{ asset('sb_theme/assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css') }} rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href={{ asset('sb_theme/assets/global/css/components.css') }} rel="stylesheet">
  <link href={{ asset('sb_theme/assets/frontend/layout/css/style.css') }} rel="stylesheet">
  <link href={{ asset('sb_theme/assets/frontend/pages/css/style-revolution-slider.css') }} rel="stylesheet"><!-- metronic revo slider styles -->
  <link href={{ asset('sb_theme/assets/frontend/layout/css/style-responsive.css') }} rel="stylesheet">
  <link href={{ asset('sb_theme/assets/frontend/layout/css/themes/red.css') }} rel="stylesheet" id="style-color">
  <link href={{ asset('sb_theme/assets/frontend/layout/css/custom.css') }} rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->
    @php
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
    @endphp
    <!-- END BEGIN STYLE CUSTOMIZER -->


    @include('elements.guest.header')
    {{-- @include('elements.guest.slider') --}}

    @yield('content')


    {{-- @include('elements.guest.footer_content')  --}}
    @include('elements.guest.footer_copyright')
</body>
<!-- END BODY -->
</html>
