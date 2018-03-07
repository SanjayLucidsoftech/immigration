<!-- BEGIN TOP BAR -->
<div class="pre-header">
    <div class="container">
        <div class="row">
            <!-- BEGIN TOP BAR LEFT PART -->
            <div class="col-md-6 col-sm-6 additional-shop-info">
                <ul class="list-unstyled list-inline">
                    <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                    <li><i class="fa fa-envelope-o"></i><span>info@sourcebow.com</span></li>
                </ul>
            </div>
            <!-- END TOP BAR LEFT PART -->
            <!-- BEGIN TOP BAR MENU -->
            <div class="col-md-6 col-sm-6 additional-nav">
                <ul class="list-unstyled list-inline pull-right">

                  <?php if(Route::has('login')): ?>

                          <?php if(auth()->guard()->check()): ?>
                            <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                          <?php else: ?>
                            <li><a href="<?php echo e(route('login')); ?>">Log In</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Registration</a></li>
                          <?php endif; ?>

                  <?php endif; ?>
                </ul>
            </div>
            <!-- END TOP BAR MENU -->
        </div>
    </div>
</div>
<!-- END TOP BAR -->
<!-- BEGIN HEADER -->
<div class="header">
  <div class="container">
    <a class="site-logo" href="<?php echo e(url('/')); ?>"><img src=<?php echo e(asset('sb_theme/assets/frontend/layout/img/logos/logo-corp-red.png')); ?> alt="Metronic FrontEnd"></a>

    <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

    <!-- BEGIN NAVIGATION -->
    <div class="header-navigation pull-left font-transform-inherit">
      <ul>
        <li><a class="dropdown-toggle" href="<?php echo e(url('/')); ?>">Home</a></li>
        <li><a class="dropdown-toggle" href="<?php echo e(url('/introduction')); ?>">Introduction</a></li>
        <li><a class="dropdown-toggle" href="<?php echo e(url('/features')); ?>">Features</a></li>
        <li><a class="dropdown-toggle" href="<?php echo e(url('/prices')); ?>">Prices</a></li>



        <?php
        /*
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
            Pages

          </a>

          <ul class="dropdown-menu">
            <li><a href="page-about.html">About Us</a></li>
            <li><a href="page-services.html">Services</a></li>
            <li><a href="page-prices.html">Prices</a></li>
            <li><a href="page-faq.html">FAQ</a></li>
            <li><a href="page-gallery.html">Gallery</a></li>
            <li><a href="page-search-result.html">Search Result</a></li>
            <li><a href="page-404.html">404</a></li>
            <li><a href="page-500.html">500</a></li>
            <li><a href="page-login.html">Login Page</a></li>
            <li><a href="page-forgotton-password.html">Forget Password</a></li>
            <li><a href="page-reg-page.html">Signup Page</a></li>
            <li><a href="page-careers.html">Careers</a></li>
            <li><a href="page-site-map.html">Site Map</a></li>
            <li><a href="page-contacts.html">Contact</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
            Features

          </a>

          <ul class="dropdown-menu">
            <li><a href="feature-typography.html">Typography</a></li>
            <li><a href="feature-buttons.html">Buttons</a></li>
            <li><a href="feature-forms.html">Forms</a></li>

            <li class="dropdown-submenu">
              <a href="index.html">Multi level <i class="fa fa-angle-right"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="index.html">Second Level Link</a></li>
                <li><a href="index.html">Second Level Link</a></li>
                <li class="dropdown-submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                    Second Level Link
                    <i class="fa fa-angle-right"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="index.html">Third Level Link</a></li>
                    <li><a href="index.html">Third Level Link</a></li>
                    <li><a href="index.html">Third Level Link</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
            Portfolio

          </a>

          <ul class="dropdown-menu">
            <li><a href="portfolio-4.html">Portfolio 4</a></li>
            <li><a href="portfolio-3.html">Portfolio 3</a></li>
            <li><a href="portfolio-2.html">Portfolio 2</a></li>
            <li><a href="portfolio-item.html">Portfolio Item</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
            Blog

          </a>

          <ul class="dropdown-menu">
            <li><a href="blog.html">Blog Page</a></li>
            <li><a href="blog-item.html">Blog Item</a></li>
          </ul>
        </li>

         <li class="dropdown dropdown-megamenu">
          <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
            Mega Menu

          </a>
          <ul class="dropdown-menu">
            <li>
              <div class="header-navigation-content">
                <div class="row">
                  <div class="col-md-4 header-navigation-col">
                    <h4>Footwear</h4>
                    <ul>
                      <li><a href="index.html">Astro Trainers</a></li>
                      <li><a href="index.html">Basketball Shoes</a></li>
                      <li><a href="index.html">Boots</a></li>
                      <li><a href="index.html">Canvas Shoes</a></li>
                      <li><a href="index.html">Football Boots</a></li>
                      <li><a href="index.html">Golf Shoes</a></li>
                      <li><a href="index.html">Hi Tops</a></li>
                      <li><a href="index.html">Indoor Trainers</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4 header-navigation-col">
                    <h4>Clothing</h4>
                    <ul>
                      <li><a href="index.html">Base Layer</a></li>
                      <li><a href="index.html">Character</a></li>
                      <li><a href="index.html">Chinos</a></li>
                      <li><a href="index.html">Combats</a></li>
                      <li><a href="index.html">Cricket Clothing</a></li>
                      <li><a href="index.html">Fleeces</a></li>
                      <li><a href="index.html">Gilets</a></li>
                      <li><a href="index.html">Golf Tops</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4 header-navigation-col">
                    <h4>Accessories</h4>
                    <ul>
                      <li><a href="index.html">Belts</a></li>
                      <li><a href="index.html">Caps</a></li>
                      <li><a href="index.html">Gloves</a></li>
                    </ul>

                    <h4>Clearance</h4>
                    <ul>
                      <li><a href="index.html">Jackets</a></li>
                      <li><a href="index.html">Bottoms</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </li>

        <li><a href="shop-index.html" target="_blank">E-Commerce</a></li>
        <li><a href="onepage-index.html" target="_blank">One Page</a></li>
        <li><a href="http://demo.sourcebow.com" target="_blank">Demo</a></li>

        <!-- BEGIN TOP SEARCH -->
        <li class="menu-search">
          <span class="sep"></span>
          <i class="fa fa-search search-btn"></i>
          <div class="search-box">
            <form action="#">
              <div class="input-group">
                <input type="text" placeholder="Search" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">Search</button>
                </span>
              </div>
            </form>
          </div>
        </li>
        */
        ?>


        <!-- END TOP SEARCH -->
      </ul>
    </div>
    <!-- END NAVIGATION -->
  </div>
</div>
<!-- Header END -->
