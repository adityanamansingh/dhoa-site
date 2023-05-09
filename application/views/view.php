<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Online Ups</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/vendors/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/custom.css">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/media.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="assets/css/docs.theme.min.css">
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
  <script src="assets/owlcarousel/owl.carousel.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <section class="nav__header">
    <div class="header_left">
      <div class="nav__logo">
        <a href="http://localhost/online_ups/"><img src="assets/img/logo.png" alt="logo"></a>
      </div>
    </div>

    <div class="nav__header_wrap">
      <div class="header__center">
        <div class="header_search_bar">
          <form action="#">
            <input type="search" class="search_field" name="s" value="" placeholder="Search..." autocomplete="off">
            
            <span class="button_wrap">
              <button class="btn btn_special" title="Search" type="submit"><i class="fas fa-search"></i></button>
            </span>
          </form>
        </div>
      </div>

      <div class="header_right">
        <div class="header__right_extra">
          <ul>
            <li><img src="assets/img/user.svg" alt="user-sign"><span>Sign In<i class="fas fa-caret-down"></i></span>
            </li>
            <li><img src="assets/img/shop.svg" alt="user-sign"><span>Shop<i class="fas fa-caret-down"></i></span></li>
            <li class="help__popup"><img src="assets/img/help.svg" alt="user-sign"><span>Help<i class="fas fa-caret-down"></i></span></li>
          </ul>
          
        </div>
      </div>
    </div>
  </section>
    <section class="nav_bottom">
        <div class="nav_bootom_wrap">
          <div class="nav__container">
              <div class="row">
                  <div class="col-md-3">
                      <div class="nav_bootom_link">
                        <div class="nav__bottom_icon">
                            <img src="<?php echo base_url();?>assets/img/accsess.png" alt="">
                        </div>
                        <div class="nav__bootom_link_content">
                          <a href="#">
                            <h6>Accessories</h6>
                         
                          </a>
                        </div>
                      </div> 
                  </div>
                  <div class="col-md-3">
                    <div class="nav_bootom_link bootom_right_link">
                      <div class="nav__bottom_icon">
                          <img src="<?php echo base_url();?>assets/img/battery.png" alt="">
                      </div>
                      <div class="nav__bootom_link_content">
                        <a href="http://onlineups.in/products/?products=Battries">
                            <h6>Battery</h6>
                          
                          </a>
                      </div>
                    </div> 
                </div>
                <div class="col-md-3">
                    <div class="nav_bootom_link bootom_right_link">
                      <div class="nav__bottom_icon">
                          <img src="<?php echo base_url();?>assets/img/request1.png" alt=""  >
                      </div>
                      <div class="nav__bootom_link_content">
                        <a href="#">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="nav__bottom_prd__enquiry">
                               Request a site
                            </button>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      
                                        <div class="modal-body">
                                            <div class="row">
                                               <div class="col-md-5">
                                                   <div class="pop__up_bg">
                                                      <img src="<?php echo base_url(); ?>assets/img/graphic2.svg" alt="">
                                                   </div>
                                               </div>
                                               <div class="col-md-7">
                                                   <div class="pop__up_form_construct">
                                                     <div class="pop__up_form_construct_inner">
                                                            <form action="" method="post">
                                                       <div class="row">                                                                      
                                                                <div class="col-md-12">
                                                                        <div class="pop_up_inner_short_title">
                                                                            <h1>Get more things done with Enquiry platform.</h1>
                                                                            <p>Access to the most powerfull tool in the entire design and web industry.</p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="Products Name" required="" class="pop__up_form_enquiry" value="" name="product_name" id="productname">
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <input type="text" placeholder="Mobile No." required="" class="pop__up_form_enquiry" name="mobile" id="mobile no">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="Full Name" required="" class="pop__up_form_enquiry" name="name" id="fullname">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="email" placeholder="Email" required="" class="pop__up_form_enquiry" name="email" id="emailname">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <textarea name="message" id="" cols="10" rows="5" class="pop__up_form_message" placeholder="Subject"></textarea>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <button id="submit" type="submit" class="ibtn">Sumbit Now</button>
                                                                </div>
                                                           
                                                       </div>
                                                    </form>
                                                     </div>
                                                   </div>
                                               </div>
                                            </div> 
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        
                          </a>
                      </div>
                    </div> 
                </div>
                <div class="col-md-3">
                    <div class="nav_bootom_link">
                      <div class="nav__bottom_icon">
                          <img src="<?php echo base_url();?>assets/img/faq.png" alt="" >
                      </div>
                      <div class="nav__bootom_link_content">
                        <a href="<?php echo base_url();?>faq">
                            <h6>FAQ/UPS Gyan</h6>
                         
                          </a>
                      </div>
                    </div> 
                </div>
              </div>
          </div>
        </div>
    </section>
  <section class="Container-fluid main__entry">
    <div class="main__home_wrap">
      <div class="row">
        <div class="col-md-3">
          <div class="sidebar___wrap">
            <div class="main__sidebar_menu">
                <!-- <a href="http://localhost/online_ups/vendor/add">Add Vendor</a> -->
              <ul>
                <li id="pop__up"><a href="#"><img src="assets/img/product.svg" alt="product">PRODUCTS</a>
                  <div class="left__sidebar__submenu">
                  <?php if(count($items)>0){ 
                    foreach($items as $item){
                    ?>
                    <div class="sidebar__column">
                      <ul class="sidebar__menu_content">
                          <li><a href="http://localhost/online_ups/products"><?php echo $item->item_name;  ?></a></li>
                         
                      </ul>
                    </div>
                    <?php }}?>
                   
                  </div> 
                <span><i class="fas fa-chevron-right"></i></span>  
                </li>
                <li  id="pop__up"><a href="#"><img src="assets/img/brand.png" alt="brand">BRANDS </a>
                <div class="left__sidebar__submenu">
                <?php if(count($category)>0){ 
                    foreach($category as $categorys){
                ?>
                    <div class="sidebar__column">
                      <ul class="sidebar__menu_content">
                          <li><a href="http://localhost/online_ups/products"><?php echo $categorys->category_name;  ?></a></li>
                      </ul>
                  </div>
                  <?php }}?>
                    
                  </div>
                <span><i
                      class="fas fa-chevron-right"></i></span>
                </li>
                <li id="pop__up"><a href="#"><img src="assets/img/kva.svg" alt="kva">KVA</a>
                <div class="left__sidebar__submenu">
                <?php if(count($kvas)>0){ 
                    foreach($kvas as $kva){
                ?>
                    <div class="sidebar__column">
                      <ul class="sidebar__menu_content">
                          <li><a href="http://localhost/online_ups/products"><?php echo $kva->range1 ?></a></li>
                         
                      </ul>
                    </div>
                    <?php }}?>
                   
                  </div> 
                 <span><i class="fas fa-chevron-right"></i></span></li>
                      
                <li id="pop__up"><a href="#"><img src="assets/img/backup.svg" alt="backup">BACKUP</a> 
                    
                <span><i
                      class="fas fa-chevron-right"></i></span></li>
                <li id="pop__up"><a href="#"><img src="assets/img/application.svg" alt="appli">APPLICATION</a>
                <div class="left__sidebar__submenu">
                <?php if(count($applications)>0){ 
                    foreach($applications as $application){
                ?>
                    <div class="sidebar__column">
                      <ul class="sidebar__menu_content">
                          <li><a href="http://localhost/online_ups/products"><?php echo $application->application_name; ?></a></li>
                         
                      </ul>
                    </div>
                    <?php }}?>
                  </div>
                 <span><i class="fas fa-chevron-right"></i></span></li>
                     
                <li><a href="#"><img src="assets/img/state.svg" alt="city">CITY </a> <span><i
                      class="fas fa-chevron-right"></i></span></li>
                <li><a href="#"><img src="assets/img/state.svg" alt="state">STATE </a> <span><i
                      class="fas fa-chevron-right"></i></span></li>
              </ul>
            </div>
          </div>

          <div class="ups__block1">
            <img src="assets/img/ad1.jpg" alt="ups-add">
          </div>

          <div class="ups__left_side_block2">
            <div class="sale__sticker_bg">
              <img src="assets/img/ad2.png" alt="sale-add">
            </div>
            <div class="ups__left__side_block2_content">
              <h4>45<sup>%</sup><sub>off</sub></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nects.</p>
            </div>
            <div class="left__side_get_button">
              <a href="#"><img src="assets/img/shoping-bag-2.svg" alt="shop-bag"><span>Get Now</span></a>
            </div>
          </div>

          <div class="left__sidebar_newsletter">
            <div class="news__letter__title">
              <h4>NEWSLETTER</h4>
              <p>Get all the latest information on Events, Sales and Offers.</p>
            </div>
            <div class="newsletter__form">
              <form action="" method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <input type="email" name="email" value="" size="40" class="nesletter_form_wrap"
                      placeholder="Email Address">
                  </div>
                </div>
                <div class="subsbribe_button">
                  <button type="submit"> SUBSCRIBE NOW </button> 
                </div>
              </form>
            </div>
          </div>

          <div class="left_side_block3">
            <a href="#"><img src="assets/img/ad3.png" alt="ups-sale-img"></a>
          </div>

        </div>

        <div class="col-md-9">
          <div class="main_slider">
            <div class="owl-carousel owl-theme slider_carousel">
            <?php if(count($sliders)>0){ 
                    foreach($sliders as $slider){
                    ?>
                    <div class="item">
                <a href="http://localhost/online_ups/products">
                  <div class="slider_img" style="background-image:url(uploads/slider/<?php echo $slider->image;?>)">
                  </div>
                </a>
              </div>
              <?php
                  }
                 }
              ?>
             
              <div class="item">
                <a href="http://localhost/online_ups/products">
                  <div class="slider_img" style="background-image:url(assets/img/slider.jpg)">
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="http://localhost/online_ups/products">
                  <div class="slider_img" style="background-image:url(assets/img/slider.jpg)">
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="page__content">
            <div class="home__adds">
              <div class="row">
                <div class="col-md-4">
                  <div class="home__ads__img">
                  
                      <div class="home__adds_custom_wrap">
                        <div class="home__ads__mobile_zone">
                         <div class="home__ads__mobile__icon">
                           <img src="assets/img/call.svg" alt="call">
                         </div>
                         <div class="mobile__zone__content">
                           <h6>Enter your phone number to <b>GET UPTO 5% OFF</b></h6>
                         </div>
                         <div class="mobile__zone__input">
                            <input type="email" name="your-email" value="" size="40" class="home__ads____form__styl" placeholder="Enter your phone no.">
                            <a href="#" class="mobile__zone__go_button">GO</a>
                         </div>
                        </div>
                      </div>
                 
                  </div>
                </div>
                <?php if(count($ads)>0){ 
                    foreach($ads as $ad){
                    ?>
                <div class="col-md-4">
                  <div class="home__ads__img">
                     <img src="uploads/ads/<?php echo $ad->image;?>" alt="adds">
                  </div>
                </div>
                    <?php }}?>
              </div>
            </div>

            <!-- brands section-------- -->
            <div class="brands__sec">
              <div class="brand__sec_wrap">
                <h1>Our Brands</h1>
              </div>
              <div class="brands__cards">
                <div class="owl-carousel owl-theme produact__brands">
                  <div class="item">
                    <div class="ups__brands__img">
                      <img src="assets/img/luminous.png" alt="">
                    </div>
                  </div>
                  <div class="item">
                    <div class="ups__brands__img">
                      <img src="assets/img/vgurard.png" alt="">
                    </div>
                  </div>
                  <div class="item">
                    <div class="ups__brands__img">
                      <img src="assets/img/microtek.png" alt="">
                    </div>
                  </div>
                  <div class="item">
                    <div class="ups__brands__img">
                      <img src="assets/img/intext.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- single phase section -->
            <div class="single__pahes_ups">
              <div class="Single__phase_title">
                <h3>Single Phase UPS</h3>
              </div>
              <div class="single__phase__wrap">
                <div class="owl-carousel owl-theme single__phase_products">
                <?php if(count($inputs)>0){ 
                 
                    foreach($inputs as $input){
                    ?>
                  <div class="item">
                    <div class="brands__card__wraP_inner">
                      <div class="phase__card_bg">
                        <a href="#"><img src="<?php echo base_url();?>uploads/products/<?php echo $input->product_image;?>"></a>
                      </div>
                    </div>
                    <div class="caption">
                      <div class="producat_name">
                        <?php echo $input->category_name;?>
                      </div>
                      <!-- <div class="rating">
                        <ul class="pr__rating">
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                        </ul>
                      </div>
                      <div class="price">
                        <span class="ups_price_new"> </span>&nbsp;&nbsp;
                      </div> -->
                      <div class="produact__get_button">
                        <a href="product-details.php"><img src="assets/img/shoping bag.svg" alt="shop-bag"><span>Get Now</span></a>
                      </div>
                    </div>
                  </div>
                    <?php }}?>
                </div>
              </div>
            </div>

            <div class="single__pahes_ups">
              <div class="Single__phase_title">
                <h3>Three Phase UPS</h3>
              </div>
              <div class="single__phase__wrap">
                <div class="owl-carousel owl-theme three__phase_products">
                <?php if(count($outputs)>0){ 
                    foreach($outputs as $output){
                    ?>
                  <div class="item">
                    <div class="brands__card__wraP_inner">
                      <div class="phase__card_bg">
                      <a href="#"><img src="<?php echo base_url();?>uploads/products/<?php echo $output->product_image;?>"></a>
                      </div>
                    </div>
                 
                    <div class="caption">
                      <div class="producat_name">
                      <?php echo $output->category_name;?>
                      </div>
                      <!-- <div class="rating">
                        <ul class="pr__rating">
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                        </ul>
                      </div> -->
                      <!-- <div class="price">
                        <span class="ups_price_new"></span>&nbsp;&nbsp;
                      </div> -->
                      <div class="produact__get_button">
                        <a href="product-details.php"><img src="assets/img/shoping bag.svg" alt="shop-bag"><span>Get Now</span></a>
                      </div>
                    </div>
                    </div>
                    <?php }}?>
                  </div>
              </div>
            </div>

            <div class="single__pahes_ups">
              <div class="Single__phase_title">
                <h3>Our Service</h3>
              </div>
              <div class="single__phase__wrap">
                <div class="owl-carousel owl-theme service__phase_products">
                <?php if(count($outputs)>0){ 
                    foreach($outputs as $output){
                    ?>
                  <div class="item">
                    <div class="brands__card__wraP_inner">
                      <div class="phase__card_bg">
                      <a href="#"><img src="<?php echo base_url();?>uploads/products/<?php echo $output->product_image;?>"></a>
                      </div>
                    </div>
                    <div class="caption">
                      <div class="producat_name">
                      <?php echo $output->category_name;?>  
                      </div>
                      <!-- <div class="rating">
                        <ul class="pr__rating">
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                          <li><i class="fas fa-star" id="ec_str_styl"></i></li>
                        </ul>
                      </div>
                      <div class="price">
                        <span class="ups_price_new"> </span>&nbsp;&nbsp;
                      </div> -->
                      <div class="produact__get_button">
                        <a href="product-details.php"><img src="assets/img/shoping bag.svg" alt="shop-bag"><span>Get Now</span></a>
                      </div>
                    </div>
                  </div>
                    <?php }}?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ups__testimonial">
    <div class="ups__testimoinial__wrap">
      <div class="row">
        <div class="col-md-12">
          <div class="testimonial___content">
            <h5>Testimonials</h5>
            <h4> Happy with</h4>
            <h6>Customers & Clients</h6>
          </div>

          <div class="testimonial_user_wrap">
            <div class="row">
              <?php  
               if(count($testimonials)>0){ 
                foreach($testimonials as $testimonial){
                  ?>
                ?>
              <div class="col-md-4">
                <div class="user__review__wrap">
                  <div class="user__review__info">
                    <p><?php echo $testimonial->description; ?>
                    </p>
                  </div>
                  <div class="user__review__img">
                    <img src="uploads/testimonial/<?php echo $testimonial->image; ?>" alt="user-img">
                  </div>
                  <div class="user_info">
                    <h6><?php echo $testimonial->name; ?></h6>
                    <p><?php echo $testimonial->designation; ?></p>
                  </div>
                <?php }}?>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="user__review__wrap">
                    <div class="user__review__info">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi quam earum quo iure id expedita
                        doloribus optio cum tempora nulla facere et voluptates, iusto sapiente dolorem
                      </p>
                    </div>
                    <div class="user__review__img">
                      <img src="assets/img/man.png" alt="user-img">
                    </div>
                    <div class="user_info">
                      <h6>Lorem Ipsum</h6>
                      <p>ui/ux designer</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="user__review__wrap">
                      <div class="user__review__info">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi quam earum quo iure id expedita
                          doloribus optio cum tempora nulla facere et voluptates, iusto sapiente dolorem
                        </p>
                      </div>
                      <div class="user__review__img">
                        <img src="assets/img/man.png" alt="user-img">
                      </div>
                      <div class="user_info">
                        <h6>Lorem Ipsum</h6>
                        <p>ui/ux designer</p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ups__features">
    <div class="features_container">
      <div class="row">
        <div class="col-md-12">
          <div class="feautrs__heading">
            <h2>Our Feautres</h2>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feautres__wrap">
            <div class="fearures__bg">
              <img src="assets/img/vendor.png" alt="">
            </div>
             <div class="fearures__bootom_content">
                <h6>1000+</h6>
                <h5>Vendor</h5>
             </div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="feautres__wrap">
              <div class="fearures__bg">
                <img src="assets/img/products.png" alt="">
              </div>
               <div class="fearures__bootom_content">
                  <h6>2000+</h6>
                  <h5>Product</h5>
               </div>
            </div>
          </div>
          <div class="col-md-4">
              <div class="feautres__wrap">
                <div class="fearures__bg">
                  <img src="assets/img/company1.png" alt="">
                </div>
                 <div class="fearures__bootom_content">
                    <h6>100+</h6>
                    <h5>Company</h5>
                 </div>
              </div>
            </div>
      </div>
    </div>
  </section>


  <section id="footer">
      <section class="foot__top">
              <div class="foot__top_left">
                <div class="foot__feedback">
                  <img src="assets/img/massage.png" alt="message">
                  <span><a href="#">CLICK HERE FOR FEEDBACK</a></span>
                </div>
              </div>
              <div class="foot__top_right_main">
                <div class="row no-gutters" id="foot__top_custom">
                  <div class="col-md-6">
                    <div class="foot__top_right_conetnt">
                      <h6>100% MONEY BACK GUARANTEE</h6>
                      <p>Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="foot__top_right_conetnt">
                        <h6>24/7 CUSTOMER SUPPORT</h6>
                        <p>Lorem ipsum dolor sit amet</p>
                      </div>
                    </div>
                </div>
              </div>
          
            </section>
          
            <section class="main_footer">
              <div class="main_fotter_wrap">
                <div class="main__foot_col">
                  <div class="foot__wrap1">
                    <div class="foot__logo">
                      <img src="assets/img/logo.png" alt="logo">
                    </div>
                     <ul>
                       <li><a href="https://www.facebook.com/Online-UPS-106155624120364/"><img src="assets/img/facebook.png" alt=""><span>Facebook</span></a></li>
                       <li><a href="#"><img src="assets/img/instagram.png" alt=""><span>Instagram</span></a></li>
                       <li><a href="#"><img src="assets/img/twitter.png" alt=""><span>Twitter</span></a></li>
                     </ul>
                  </div>
                </div>
          
                <div class="main__foot_col">
                    <div class="foot__wrap2">
                      <div class="foot__quick__links">
                         <h6>Information</h6>
                      </div>
                       <ul>
                          <li><a href="#">About us</a></li>
                          <li><a href="#">Services</a></li>
                          <li><a href="#">Help</a></li>
                           <li><a href="#">Dummy1</a></li>
                           <li><a href="#">Dummy1</a></li>
                       </ul>
                    </div>
                  </div>
          
                  <div class="main__foot_col">
                      <div class="foot__wrap2">
                          <div class="foot__quick__links">
                              <h6>Helpful Links</h6>
                           </div>
                         <ul>
                            <li><a href="#">Supports</a></li>
                            <li><a href="#">Term & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                             <li><a href="#">Dummy1</a></li>
                             <li><a href="#">Dummy1</a></li>
                         </ul>
                      </div>
                    </div>
          
                    <div class="main__foot_col">
                        <div class="foot__wrap2">
                            <div class="foot__quick__links">
                                <h6>Our Services</h6>
                             </div>
                           <ul>
                              <li><a href="#">Brand List</a></li>
                              <li><a href="#">Order</a></li>
                              <li><a href="#">Return & Exchange</a></li>
                               <li><a href="#">List</a></li>
                               <li><a href="#">Blog</a></li>
                           </ul>
                        </div>
                      </div>
          
                      <div class="main__foot_col">
                          <div class="foot__wrap2">
                              <div class="foot__quick__links">
                                  <h6>contact Us</h6>
                               </div>
                             <ul>
                               <li><a href="#"><img src="assets/img/phone.png" alt="call"><span>+91- 9999999999</span></a></li>
                               <li><a href="#"><img src="assets/img/mail.png" alt="call"><span>yourmailid.com</span></a></li>
                               <li><img src="assets/img/mail.png" alt="call" id="foot__input__mail">
                               <input type="email" name="your-email" value="" size="40" class="foot____form__styl" placeholder="Email Address">
                              </li>
                             </ul>
                             <div class="foot_wrap2__subscribe__btn">
                               <a href="#">Subscribe</a>
                             </div>
                          </div>
                        </div>
              </div>
            </section>
</section>


  <script src="assets/js/main.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>