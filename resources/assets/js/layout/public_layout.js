import React, { Component } from 'react';
import ReactDOM from 'react-dom';
'http://localhost:8000/sb_theme/assets/frontend/pages/img/people/img5-small.jpg'

export default class Example extends Component {
    render() {
        return (
            <div>


                <div className="pre-header">
                    <div className="container">
                        <div className="row">
                            {/*BEGIN TOP BAR LEFT PART*/} 
                    <div className="col-md-6 col-sm-6 additional-shop-info">
                                <ul className="list-unstyled list-inline">
                                    <li><i className="fa fa-phone"></i><span>+1 456 6717</span></li>
                                    <li><i className="fa fa-envelope-o"></i><span>info@keenthemes.com</span></li>
                                </ul>
                            </div>
                            {/* END TOP BAR LEFT PART */}
                    {/* BEGIN TOP BAR MENU */}
                    <div className="col-md-6 col-sm-6 additional-nav">
                                <ul className="list-unstyled list-inline pull-right">
                                    <li><a href="page-login.html">Log In</a></li>
                                    <li><a href="page-reg-page.html">Registration</a></li>
                                </ul>
                            </div>
                            {/* END TOP BAR MENU */}
                </div>
                    </div>
                </div>

     {/* BEGIN SLIDER */}
    <div className="page-slider margin-bottom-40">
      <div className="fullwidthbanner-container revolution-slider">
        <div className="fullwidthabnner">
        <ul id="revolutionul">
            {/* THE NEW SLIDE*/}
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="./sb_theme/assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
              {/* THE MAIN IMAGE IN THE FIRST SLIDE*/}
              <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/bg9.jpg" alt=""/>

              <div className="caption lft slide_title_white slide_item_left"
                data-x="30"
                data-y="90"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
                Explore the Power<br/><span className="slide_title_white_bold">of Metronic</span>
              </div>
              <div className="caption lft slide_subtitle_white slide_item_left"
                data-x="87"
                data-y="245"
                data-speed="400"
                data-start="2000"
                data-easing="easeOutExpo">
                This is what you were looking for
              </div>
              <a className="caption lft btn dark slide_btn slide_item_left" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
                data-x="187"
                data-y="315"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Purchase Now!
              </a>
              <div className="caption lfb"
                data-x="640"
                data-y="0"
                data-speed="700"
                data-start="1000"
                data-easing="easeOutExpo">
                <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/lady.png" alt="Image 1"/>
              </div>
            </li>
            
            {/* THE FIRST SLIDE*/}
<li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="./sb_theme/assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
{/* THE MAIN IMAGE IN THE FIRST SLIDE*/}
<img src="./sb_theme/assets/frontend/pages/img/revolutionslider/bg1.jpg" alt=""/>

<div className="caption lft slide_title slide_item_left"
  data-x="30"
  data-y="105"
  data-speed="400"
  data-start="1500"
  data-easing="easeOutExpo">
  Need a website design?
</div>
<div className="caption lft slide_subtitle slide_item_left"
  data-x="30"
  data-y="180"
  data-speed="400"
  data-start="2000"
  data-easing="easeOutExpo">
  This is what you were looking for
</div>
<div className="caption lft slide_desc slide_item_left"
  data-x="30"
  data-y="220"
  data-speed="400"
  data-start="2500"
  data-easing="easeOutExpo">
  Lorem ipsum dolor sit amet, dolore eiusmod<br/> quis tempor incididunt. Sed unde omnis iste.
</div>
<a className="caption lft btn green slide_btn slide_item_left" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
  data-x="30"
  data-y="290"
  data-speed="400"
  data-start="3000"
  data-easing="easeOutExpo">
  Purchase Now!
</a>
<div className="caption lfb"
  data-x="640"
  data-y="55"
  data-speed="700"
  data-start="1000"
  data-easing="easeOutExpo">
  <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/man-winner.png" alt="Image 1"/>
</div>
</li>
            

{/* THE SECOND SLIDE*/}
<li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb="./sb_theme/assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
<img src="./sb_theme/assets/frontend/pages/img/revolutionslider/bg2.jpg" alt=""/>
<div className="caption lfl slide_title slide_item_left"
  data-x="30"
  data-y="125"
  data-speed="400"
  data-start="3500"
  data-easing="easeOutExpo">
  Powerfull &amp; Clean
</div>
<div className="caption lfl slide_subtitle slide_item_left"
  data-x="30"
  data-y="200"
  data-speed="400"
  data-start="4000"
  data-easing="easeOutExpo">
  Responsive Admin &amp; Website Theme
</div>
<div className="caption lfl slide_desc slide_item_left"
  data-x="30"
  data-y="245"
  data-speed="400"
  data-start="4500"
  data-easing="easeOutExpo">
  Lorem ipsum dolor sit amet, consectetuer elit sed diam<br/> nonummy amet euismod dolore.
</div>
<div className="caption lfr slide_item_right"
  data-x="635"
  data-y="105"
  data-speed="1200"
  data-start="1500"
  data-easing="easeOutBack">
  <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/mac.png" alt="Image 1"/>
</div>
<div className="caption lfr slide_item_right"
  data-x="580"
  data-y="245"
  data-speed="1200"
  data-start="2000"
  data-easing="easeOutBack">
  <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/ipad.png" alt="Image 1"/>
</div>
<div className="caption lfr slide_item_right"
  data-x="735"
  data-y="290"
  data-speed="1200"
  data-start="2500"
  data-easing="easeOutBack">
  <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/iphone.png" alt="Image 1"/>
</div>
<div className="caption lfr slide_item_right"
  data-x="835"
  data-y="230"
  data-speed="1200"
  data-start="3000"
  data-easing="easeOutBack">
  <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/macbook.png" alt="Image 1"/>
</div>
<div className="caption lft slide_item_right"
  data-x="865"
  data-y="45"
  data-speed="500"
  data-start="5000"
  data-easing="easeOutBack">
  <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/hint1-red.png" id="rev-hint1" alt="Image 1"/>
</div>
<div className="caption lfb slide_item_right"
  data-x="355"
  data-y="355"
  data-speed="500"
  data-start="5500"
  data-easing="easeOutBack">
  <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/hint2-red.png" id="rev-hint2" alt="Image 1"/>
</div>
</li>

{/* THE THIRD SLIDE*/}
<li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="./sb_theme/assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
              <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/bg3.jpg" alt=""/>
              <div className="caption lfl slide_item_left"
                data-x="30"
                data-y="95"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutBack">
                <iframe src="http://player.vimeo.com/video/56974716?portrait=0" width="420" height="240"  allowFullScreen></iframe>
              </div>
              <div className="caption lfr slide_title"
                data-x="470"
                data-y="100"
                data-speed="400"
                data-start="2000"
                data-easing="easeOutExpo">
                Responsive Video Support
              </div>
              <div className="caption lfr slide_subtitle"
                data-x="470"
                data-y="170"
                data-speed="400"
                data-start="2500"
                data-easing="easeOutExpo">
                Youtube, Vimeo and others.
              </div>
              <div className="caption lfr slide_desc"
                data-x="470"
                data-y="220"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Lorem ipsum dolor sit amet, consectetuer elit sed diam<br/> nonummy amet euismod dolore.
              </div>
              <a className="caption lfr btn yellow slide_btn" href=""
                data-x="470"
                data-y="280"
                                 data-speed="400"
                                 data-start="3500"
                                 data-easing="easeOutExpo">
                                 Watch more Videos!
                            </a>
                        </li>



{/* THE FORTH SLIDE*/}
<li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="./sb_theme/assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
{/* THE MAIN IMAGE IN THE FIRST SLIDE*/}
<img src="./sb_theme/assets/frontend/pages/img/revolutionslider/bg4.jpg" alt=""/>
 <div className="caption lft slide_title"
     data-x="30"
     data-y="105"
     data-speed="400"
     data-start="1500"
     data-easing="easeOutExpo">
     What else included ?
</div>
<div className="caption lft slide_subtitle"
     data-x="30"
     data-y="180"
     data-speed="400"
     data-start="2000"
     data-easing="easeOutExpo">
     The Most Complete Admin Theme
</div>
<div className="caption lft slide_desc"
     data-x="30"
     data-y="225"
     data-speed="400"
     data-start="2500"
     data-easing="easeOutExpo">
     Lorem ipsum dolor sit amet, consectetuer elit sed diam<br/> nonummy amet euismod dolore.
</div>
<a className="caption lft slide_btn btn red slide_item_left" href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin" target="_blank"
     data-x="30"
     data-y="300"
     data-speed="400"
     data-start="3000"
     data-easing="easeOutExpo">
     Learn More!
</a>
<div className="caption lft start"
     data-x="670"
     data-y="55"
     data-speed="400"
     data-start="2000"
     data-easing="easeOutBack"  >
     <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/iphone_left.png" alt="Image 2"/>
</div>

<div className="caption lft start"
     data-x="850"
     data-y="55"
     data-speed="400"
     data-start="2400"
     data-easing="easeOutBack"  >
     <img src="./sb_theme/assets/frontend/pages/img/revolutionslider/iphone_right.png" alt="Image 3"/>
</div>
</li>
            

            
            

                        
                </ul>
                <div className="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div>
    {/* END SLIDER */}


    {/*begin main */}
    <div className="main">
      <div className="container">
        {/* BEGIN SERVICE BOX */}
        <div className="row service-box margin-bottom-40">
          <div className="col-md-4 col-sm-4">
            <div className="service-box-heading">
              <em><i className="fa fa-location-arrow blue"></i></em>
              <span>Multipurpose Template</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div className="col-md-4 col-sm-4">
            <div className="service-box-heading">
              <em><i className="fa fa-check red"></i></em>
              <span>Well Documented</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div className="col-md-4 col-sm-4">
            <div className="service-box-heading">
              <em><i className="fa fa-compress green"></i></em>
              <span>Responsive Design</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
        </div>
        {/* END SERVICE BOX */}

        


{/* BEGIN BLOCKQUOTE BLOCK */}
<div className="row quote-v1 margin-bottom-30">
<div className="col-md-9">
  <span>Metronic - The Most Complete &amp; Popular Admin &amp; Frontend Theme</span>
</div>
<div className="col-md-3 text-right">
  <a className="btn-transparent" href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin" target="_blank"><i className="fa fa-rocket margin-right-10"></i>Preview Admin</a>
</div>
</div>
{/* END BLOCKQUOTE BLOCK */}

{/* BEGIN RECENT WORKS */}
<div className="row recent-work margin-bottom-40">
<div className="col-md-3">
  <h2><a href="portfolio.html">Recent Works</a></h2>
  <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
</div>
<div className="col-md-9">
  <div className="owl-carousel owl-carousel3">
    <div className="recent-work-item">
      <em>
        <img src="./sb_theme/assets/frontend/pages/img/works/img1.jpg" alt="Amazing Project" className="img-responsive"/>
        <a href="portfolio-item.html"><i className="fa fa-link"></i></a>
        <a href="./sb_theme/assets/frontend/pages/img/works/img1.jpg" className="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i className="fa fa-search"></i></a>
      </em>
      <a className="recent-work-description" href="#">
        <strong>Amazing Project</strong>
        <b>Agenda corp.</b>
      </a>
    </div>
    <div className="recent-work-item">
      <em>
        <img src="./sb_theme/assets/frontend/pages/img/works/img2.jpg" alt="Amazing Project" className="img-responsive"/>
        <a href="portfolio-item.html"><i className="fa fa-link"></i></a>
        <a href="./sb_theme/assets/frontend/pages/img/works/img2.jpg" className="fancybox-button" title="Project Name #2" data-rel="fancybox-button"><i className="fa fa-search"></i></a>
      </em>
      <a className="recent-work-description" href="#">
        <strong>Amazing Project</strong>
        <b>Agenda corp.</b>
      </a>
    </div>
    <div className="recent-work-item">
      <em>
        <img src="./sb_theme/assets/frontend/pages/img/works/img3.jpg" alt="Amazing Project" className="img-responsive"/>
        <a href="portfolio-item.html"><i className="fa fa-link"></i></a>
        <a href="./sb_theme/assets/frontend/pages/img/works/img3.jpg" className="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i className="fa fa-search"></i></a>
      </em>
      <a className="recent-work-description" href="#">
        <strong>Amazing Project</strong>
        <b>Agenda corp.</b>
      </a>
    </div>
    <div className="recent-work-item">
      <em>
        <img src="./sb_theme/assets/frontend/pages/img/works/img4.jpg" alt="Amazing Project" className="img-responsive"/>
        <a href="portfolio-item.html"><i className="fa fa-link"></i></a>
        <a href="./sb_theme/assets/frontend/pages/img/works/img4.jpg" className="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i className="fa fa-search"></i></a>
      </em>
      <a className="recent-work-description" href="#">
        <strong>Amazing Project</strong>
        <b>Agenda corp.</b>
      </a>
    </div>
    <div className="recent-work-item">
      <em>
        <img src="./sb_theme/assets/frontend/pages/img/works/img5.jpg" alt="Amazing Project" className="img-responsive"/>
        <a href="portfolio-item.html"><i className="fa fa-link"></i></a>
        <a href="./sb_theme/assets/frontend/pages/img/works/img5.jpg" className="fancybox-button" title="Project Name #5" data-rel="fancybox-button"><i className="fa fa-search"></i></a>
      </em>
      <a className="recent-work-description" href="#">
        <strong>Amazing Project</strong>
        <b>Agenda corp.</b>
      </a>
    </div>
    <div className="recent-work-item">
      <em>
        <img src="./sb_theme/assets/frontend/pages/img/works/img6.jpg" alt="Amazing Project" className="img-responsive"/>
        <a href="portfolio-item.html"><i className="fa fa-link"></i></a>
        <a href="./sb_theme/assets/frontend/pages/img/works/img6.jpg" className="fancybox-button" title="Project Name #6" data-rel="fancybox-button"><i className="fa fa-search"></i></a>
      </em>
      <a className="recent-work-description" href="#">
        <strong>Amazing Project</strong>
        <b>Agenda corp.</b>
      </a>
    </div>
    <div className="recent-work-item">
      <em>
        <img src="./sb_theme/assets/frontend/pages/img/works/img3.jpg" alt="Amazing Project" className="img-responsive"/>
        <a href="portfolio-item.html"><i className="fa fa-link"></i></a>
        <a href="./sb_theme/assets/frontend/pages/img/works/img3.jpg" className="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i className="fa fa-search"></i></a>
      </em>
      <a className="recent-work-description" href="#">
        <strong>Amazing Project</strong>
        <b>Agenda corp.</b>
      </a>
    </div>
    <div className="recent-work-item">
      <em>
        <img src="./sb_theme/assets/frontend/pages/img/works/img4.jpg" alt="Amazing Project" className="img-responsive"/>
        <a href="portfolio-item.html"><i className="fa fa-link"></i></a>
        <a href="./sb_theme/assets/frontend/pages/img/works/img4.jpg" className="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i className="fa fa-search"></i></a>
      </em>
      <a className="recent-work-description" href="#">
        <strong>Amazing Project</strong>
        <b>Agenda corp.</b>
      </a>
    </div>
  </div>
</div>
</div>
{/* END RECENT WORKS */}


{/* BEGIN TABS AND TESTIMONIALS */}
<div className="row mix-block margin-bottom-40">
{/* TABS */}
<div className="col-md-7 tab-style-1">
  <ul className="nav nav-tabs">
    <li className="active"><a href="#tab-1" data-toggle="tab">Multipurpose</a></li>
    <li><a href="#tab-2" data-toggle="tab">Documented</a></li>
    <li><a href="#tab-3" data-toggle="tab">Responsive</a></li>
    <li><a href="#tab-4" data-toggle="tab">Clean & Fresh</a></li>
  </ul>
  <div className="tab-content">
    <div className="tab-pane row fade in active" id="tab-1">
      <div className="col-md-3 col-sm-3">
        <a href="assets/temp/photos/img7.jpg" className="fancybox-button" title="Image Title" data-rel="fancybox-button">
          <img className="img-responsive" src="./sb_theme/assets/frontend/pages/img/photos/img7.jpg" alt=""/>
        </a>
      </div>
      <div className="col-md-9 col-sm-9">
        <p className="margin-bottom-10">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p>
        <p><a className="more" href="#">Read more <i className="icon-angle-right"></i></a></p>
      </div>
    </div>
    <div className="tab-pane row fade" id="tab-2">
      <div className="col-md-9 col-sm-9">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia..</p>
      </div>
      <div className="col-md-3 col-sm-3">
        <a href="assets/temp/photos/img10.jpg" className="fancybox-button" title="Image Title" data-rel="fancybox-button">
          <img className="img-responsive" src="./sb_theme/assets/frontend/pages/img/photos/img10.jpg" alt=""/>
        </a>
      </div>
    </div>
    <div className="tab-pane fade" id="tab-3">
      <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
    </div>
    <div className="tab-pane fade" id="tab-4">
      <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
    </div>
  </div>
</div>
{/* END TABS */}

{/* TESTIMONIALS */}
<div className="col-md-5 testimonials-v1">
  <div id="myCarousel" className="carousel slide">
    {/* Carousel items */}
    <div className="carousel-inner">
      <div className="active item">
        <blockquote><p>Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
        <div className="carousel-info">
          <img className="pull-left" src="./sb_theme/assets/frontend/pages/img/people/img1-small.jpg" alt=""/>
          <div className="pull-left">
            <span className="testimonials-name">Lina Mars</span>
            <span className="testimonials-post">Commercial Director</span>
          </div>
        </div>
      </div>
      <div className="item">
        <blockquote><p>Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></blockquote>
        <div className="carousel-info">
          <img className="pull-left" src="./sb_theme/assets/frontend/pages/img/people/img5-small.jpg" alt=""/>
          <div className="pull-left">
            <span className="testimonials-name">Kate Ford</span>
            <span className="testimonials-post">Commercial Director</span>
          </div>
        </div>
      </div>
      <div className="item">
        <blockquote><p>Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p></blockquote>
        <div className="carousel-info">
          <img className="pull-left" src="./sb_theme/assets/frontend/pages/img/people/img2-small.jpg" alt=""/>
          <div className="pull-left">
            <span className="testimonials-name">Jake Witson</span>
            <span className="testimonials-post">Commercial Director</span>
          </div>
        </div>
      </div>
    </div>

    {/* Carousel nav */}
    <a className="left-btn" href="#myCarousel" data-slide="prev"></a>
    <a className="right-btn" href="#myCarousel" data-slide="next"></a>
  </div>
</div>
{/* END TESTIMONIALS */}
</div>
{/* END TABS AND TESTIMONIALS */}



{/* BEGIN STEPS */}
<div className="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
<div className="col-md-4 col-sm-4 front-step-col">
  <div className="front-step front-step1">
    <h2>Goal definition</h2>
    <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
  </div>
</div>
<div className="col-md-4 col-sm-4 front-step-col">
  <div className="front-step front-step2">
    <h2>Analyse</h2>
    <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
  </div>
</div>
<div className="col-md-4 col-sm-4 front-step-col">
  <div className="front-step front-step3">
    <h2>Implementation</h2>
    <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
  </div>
</div>
</div>
{/* END STEPS */}


        {/* BEGIN CLIENTS */}
        <div className="row margin-bottom-40 our-clients">
          <div className="col-md-3">
            <h2><a href="#">Our Clients</a></h2>
            <p>Lorem dipsum folor margade sitede lametep eiusmod psumquis dolore.</p>
          </div>
          <div className="col-md-9">
            <div className="owl-carousel owl-carousel6-brands">
              <div className="client-item">
                <a href="#">
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_1_gray.png" className="img-responsive" alt=""/>
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_1.png" className="color-img img-responsive" alt=""/>
                </a>
              </div>
              <div className="client-item">
                <a href="#">
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_2_gray.png" className="img-responsive" alt=""/>
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_2.png" className="color-img img-responsive" alt=""/>
                </a>
              </div>
              <div className="client-item">
                <a href="#">
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_3_gray.png" className="img-responsive" alt=""/>
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_3.png" className="color-img img-responsive" alt=""/>
                </a>
              </div>
              <div className="client-item">
                <a href="#">
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_4_gray.png" className="img-responsive" alt=""/>
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_4.png" className="color-img img-responsive" alt=""/>
                </a>
              </div>
              <div className="client-item">
                <a href="#">
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_5_gray.png" className="img-responsive" alt=""/>
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_5.png" className="color-img img-responsive" alt=""/>
                </a>
              </div>
              <div className="client-item">
                <a href="#">
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_6_gray.png" className="img-responsive" alt=""/>
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_6.png" className="color-img img-responsive" alt=""/>
                </a>
              </div>
              <div className="client-item">
                <a href="#">
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_7_gray.png" className="img-responsive" alt=""/>
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_7.png" className="color-img img-responsive" alt=""/>
                </a>
              </div>
              <div className="client-item">
                <a href="#">
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_8_gray.png" className="img-responsive" alt=""/>
                  <img src="./sb_theme/assets/frontend/pages/img/clients/client_8.png" className="color-img img-responsive" alt=""/>
                </a>
              </div>
            </div>
          </div>
        </div>
        {/* END CLIENTS */}
        
      </div>
    </div>
    {/*end main */}





        {/* BEGIN PRE-FOOTER */}
    <div className="pre-footer">
      <div className="container">
        <div className="row">
          {/* BEGIN BOTTOM ABOUT BLOCK */}
          <div className="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>

            <div className="photo-stream">
              <h2>Photos Stream</h2>
              <ul className="list-unstyled">
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/people/img5-small.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/works/img1.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/people/img4-large.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/works/img6.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/works/img3.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/people/img2-large.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/works/img2.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/works/img5.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/people/img5-small.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/works/img1.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/people/img4-large.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/works/img6.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/works/img3.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/people/img2-large.jpg"/></a></li>
                <li><a href="#"><img alt="" src="./sb_theme/assets/frontend/pages/img/works/img2.jpg"/></a></li>
              </ul>
            </div>
          </div>
          {/* END BOTTOM ABOUT BLOCK */}

        </div>
      </div>
    </div>
    {/* END PRE-FOOTER */}




    {/* BEGIN FOOTER*/}
    <div className="footer">
      <div className="container">
        <div className="row">
          {/* BEGIN COPYRIGHT*/}
          <div className="col-md-6 col-sm-6 padding-top-10">
            2014 © Metronic Shop UI. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
          </div>
          {/* END COPYRIGHT*/}
          {/* BEGIN PAYMENTS*/}
          <div className="col-md-6 col-sm-6">
            <ul className="social-footer list-unstyled list-inline pull-right">
              <li><a href="#"><i className="fa fa-facebook"></i></a></li>
              <li><a href="#"><i className="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i className="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i className="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i className="fa fa-twitter"></i></a></li>
              <li><a href="#"><i className="fa fa-skype"></i></a></li>
              <li><a href="#"><i className="fa fa-github"></i></a></li>
              <li><a href="#"><i className="fa fa-youtube"></i></a></li>
              <li><a href="#"><i className="fa fa-dropbox"></i></a></li>
            </ul>
          </div>
          {/* END PAYMENTS*/}
        </div>
      </div>
    </div>
    {/* END FOOTER*/}

            </div>
           );
    }
}



{/* import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    render() {
        return (
            <div className="container">
                <div className="row">
                    <div className="col-md-8 col-md-offset-2">
                        <div className="panel panel-default">
                            <div className="panel-heading">Example Component</div>

                            <div className="panel-body">
                                I'm an example component!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
} */}

if (document.getElementById('root')) {
    ReactDOM.render(<Example />, document.getElementById('root'));
}