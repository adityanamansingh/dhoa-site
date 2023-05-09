<?php echo $header;?>
<div id="toggle">
  <div class="one"></div>
  <div class="two"></div>
  <div class="three"></div>
</div>




  <section class="main__home_wrap ">
    <div class="Container-fluid main__entry">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="sidebar___wrap">
            <div class="main__sidebar_menu">
                <!-- <a href="http://localhost/online_ups/vendor/add">Add Vendor</a> -->
              <ul>
                <li id="pop__up"><a href="#"><img src="<?php echo base_url();?>assets/img/product.svg" alt="product">PRODUCTS</a>
                  <div class="left__sidebar__submenu">
                 
                    <div class="sidebar__column">
                      <ul class="sidebar__menu_content">
                      <?php if(count($items)>0){ 
                    foreach($items as $item){
                    ?>
                          <li><a href="<?php echo base_url();?>products/?products=<?php echo $item->slug;?>"><?php echo $item->item_name;  ?></a></li>
                          <?php }}?>
                        </ul>
                    </div>
                   
                   
                  </div> 
                <span><i class="fas fa-chevron-right"></i></span>  
                </li>
                <li  id="pop__up"><a href="#"><img src="assets/img/brand.png" alt="brand">BRANDS </a>
                <div class="left__sidebar__submenu">
                
                    <div class="sidebar__column">
                      <ul class="sidebar__menu_content">
                      <?php if(count($category)>0){ 
                    foreach($category as $categorys){
                ?>
                          <li><a href="<?php echo base_url();?>products/?brands=<?php echo $categorys->slug;?>"><?php echo $categorys->category_name;  ?></a></li>
                          <?php }}?>
                        </ul>
                  </div>
             
                    
                  </div>
                <span><i
                      class="fas fa-chevron-right"></i></span>
                </li>
                <li id="pop__up"><a href="#"><img src="assets/img/kva.svg" alt="kva">KVA</a>
                <div class="left__sidebar__submenu">
              
                    <div class="sidebar__column">
                      <ul class="sidebar__menu_content">
                      <?php if(count($kvas)>0){ 
                    foreach($kvas as $kva){
                ?>
                          <li><a href="<?php echo base_url();?>products/?kva=<?php echo $kva->slug;?>"><?php echo $kva->range1 ?></a></li>
                         
                          <?php }}?>
                         </ul>
                    </div>
                   
                   
                  </div> 
                 <span><i class="fas fa-chevron-right"></i></span></li>
                      
                <li id="pop__up"><a href="#"><img src="assets/img/backup.svg" alt="backup">BACKUP</a> 
                    
                <span><i
                      class="fas fa-chevron-right"></i></span></li>
                <li id="pop__up"><a href="#"><img src="assets/img/application.svg" alt="appli">APPLICATION</a>
                <div class="left__sidebar__submenu">
               
                    <div class="sidebar__column">
                      <ul class="sidebar__menu_content">
                      <?php if(count($applications)>0){ 
                    foreach($applications as $application){
                ?>
                          <li><a href="<?php echo base_url();?>products/?application=<?php echo $application->slug;?>"><?php echo $application->application_name; ?></a></li>
                         
                          <?php }}?>    
                      </ul>
                    </div>
                   
                  </div>
                 <span><i class="fas fa-chevron-right"></i></span></li>
                     
              
              </ul>
            </div>
          </div>
         <?php if(count($ads1)>0){ 
            foreach($ads1 as $ad1){
         ?>
          <div class="ups__block1">
            <img src="uploads/ads1/<?php echo $ad1->image;?>" alt="adds">
          </div>
        <?php }}?>
         <?php if(count($ads2)>0){ 
            foreach($ads2 as $ad2){
         ?>
          <div class="ups__left_side_block2">
            <div class="sale__sticker_bg">
             <img src="uploads/ads2/<?php echo $ad2->image;?>" alt="adds">
            </div>
        <?php }} ?>
            <div class="ups__left__side_block2_content">
              <h4>45<sup>%</sup><sub>off</sub></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nects.</p>
            </div>
              <?php if(count($ads3)>0){ 
                foreach($ads3 as $ad3){
              ?>
            <div class="left__side_get_button">
              <a href="#"> <span>Get Now</span></a>
            </div>
            <?php }}?> 
          </div>

          <div class="left__sidebar_newsletter">
            <div class="news__letter__title">
              <h4>NEWSLETTER</h4>
              <p>Get all the latest information on Events, Sales and Offers.</p>
            </div>
            <div class="newsletter__form">
              <form action="<?php echo base_url();?>home/addSubscriber" method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <input type="email" name="email" required value="" size="40" class="nesletter_form_wrap"
                      placeholder="Email Address">
                  </div>
                </div>
                <div class="subsbribe_button">
                  <button type="submit" class="left_sidebar__subscribe_btn_styl"> SUBSCRIBE NOW </button> 
                </div>
              </form>
            </div>
          </div>

          <div class="left_side_block3">
            <a href="#"><img src="uploads/ads3/<?php echo $ad3->image;?>" alt="adds"></a>
          </div>

        </div>

        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="main_slider">
            <div class="owl-carousel owl-theme slider_carousel">
            <?php if(count($sliders)>0){ 
                    foreach($sliders as $slider){
                    ?>
                    <div class="item">
                
                  <div class="slider_img" style="background-image:url(uploads/slider/<?php echo $slider->image;?>)">
                  </div>
            
              </div>
              <?php
                  }
                 }
              ?>
             
            </div>
          </div>

          <div class="page__content">
            <div class="home__adds">
              <div class="row">
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
                  <?php 
                  if(count($brand)>0){ 
                    foreach($brand as $brands){
                   ?>
                  <div class="item">
                    <div class="ups__brands__img">
                      <img src="uploads/brand/<?php echo $brands->brand_image;?>" alt="">
                    </div>
                  </div>
                 <?php }} ?>
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
                 
                    foreach($inputs as $input) {
                    ?>
                  <div class="item">
                    <div class="brands__card__wraP_inner">
                          <?php  $product_id = $input->slug; ?> 
                      <div class="phase__card_bg">
                         <a href="<?php echo  base_url();?>products/product-details/<?php echo $product_id?>" target="_blank"><img src="<?php echo base_url();?>uploads/products/<?php echo $input->product_image;?>"></a>
                      </div>
                    </div>
                    <div class="caption">
                      <div class="producat_name">
                        <?php
                        $meta_title = $input->meta_title;
                    
                        $item_name = get_sub_product('item','item_name','id',$input->product_name);
                        
                        $brand_name = get_sub_product('category','category_name','id',$input->brand);
                    
                        $kva = get_sub_product('kva','range1','id',$input->kva);
                        
                        if($meta_title!=''){?>
                         <p class="p_title"><?php echo $meta_title ?></p>
                        <?php } ?>
                         <ul id="custom_listing_C">
                                <li><?php echo $item_name[0]; ?></li>
                                <li><?php echo $brand_name[0]; ?></li>
                                <li><?php echo $kva[0]; ?></li>
                               
                        </ul>
                      </div>
                     
                      <div class="produact__get_button">
                        <a href="<?php echo  base_url();?>products/product-details/<?php echo $product_id?>" target="_blank"><img src="assets/img/shoping bag.svg" alt="shop-bag"><span>Get Now</span></a>
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
                         <?php  $product_id = $output->slug; ?>
                      <a href="<?php echo  base_url();?>products/product-details/<?php echo $product_id?>" target="_blank"><img src="<?php echo base_url();?>uploads/products/<?php echo $output->product_image;?>"></a>
                      </div>
                    </div>
                 
                    <div class="caption">
                      <div class="producat_name">
                     
                      </div>
                     
                     <?php 
                     
                        $meta_title =  $output->meta_title;
                        
                        $item_name = get_sub_product('item','item_name','id',$output->product_name);
                        
                        $brand_name = get_sub_product('category','category_name','id',$output->brand);
                    
                        $kva = get_sub_product('kva','range1','id',$output->kva);
                        
                     
                         if($meta_title!=''){?>
                         <p class="p_title"><?php echo $meta_title ?></p>
                         <?php } ?>
                         <ul id="custom_listing_C">
                                
                               
                                <li><?php echo $item_name[0]; ?></li>
                                <li><?php echo $brand_name[0];?></li>
                                <li><?php echo $kva[0]; ?></li>
                               
                        </ul>
                    
                      <div class="produact__get_button">
                        <a href="<?php echo  base_url();?>products/product-details/<?php echo $product_id?>" target="_blank"><img src="assets/img/shoping bag.svg" alt="shop-bag"><span>Get Now</span></a>
                      </div>
                    </div>
                    </div>
                    <?php }}?>
                  </div>
              </div>
            </div>

            <div class="single__pahes_ups">
              <div class="Single__phase_title">
                <h3>Our Services</h3>
              </div>
              <div class="single__phase__wrap">
                <div class="owl-carousel owl-theme three__phase_products">
                <?php if(count($posts)>0){ 
                    foreach($posts as $post){
                    ?>
                  <div class="item">
                    <div class="brands__card__wraP_inner">
                      <div class="phase__card_bg">
                           <?php  $product_id = $post->slug; ?>
                      <a href="<?php echo base_url();?>products/product-details/<?php echo $product_id?>"  target="_blank"><img src="<?php echo base_url();?>uploads/products/<?php echo $post->product_image;?>"></a>
                      </div>
                    </div>
                 
                    <div class="caption">
                      <div class="producat_name">
                     
                      </div>
                       <?php
                        
                        $meta_title = $post->meta_title;
                    
                        $item_name = get_sub_product('item','item_name','id',$post->product_name);
                        
                        $brand_name = get_sub_product('category','category_name','id',$post->brand);
                    
                        $kva = get_sub_product('kva','range1','id',$post->kva);
                        
                      
                     
                        ?>
                        <?php 
                        if($meta_title!=''){?>
                        <p class="p_title"><?php echo $meta_title ?></p>
                        <?php } ?>
                         <ul id="custom_listing_C">
                                
                                <li><?php echo $item_name[0]; ?></li>
                                <li><?php echo $brand_name[0];?></li>
                                <li><?php echo $kva[0]; ?></li>
                               
                        </ul>
                      
                      <div class="produact__get_button">
                        <a href="<?php echo  base_url();?>products/product-details/<?php echo $product_id?>" target="_blank"><img src="assets/img/shoping bag.svg" alt="shop-bag"><span>Get Now</span></a>
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
        </div>
      </div>
    </div>
  </section>

  <section class="ups__features">
    <div class="features_container">
      <div class="row">
        <div class="col-md-12">
          <div class="feautrs__heading">
            <h2>Our Features</h2>
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


  


  <?php echo $footer;?>
     <script>
    $(document).ready(function(){
        $('#toggle').click(function(){
             $('.sidebar___wrap').toggleClass('active_menu_mobile'); 
        });
        
        
      
    });
    </script>
    