<section class="blog_details_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog_details_title">
                    <h1><?php echo $record[0]->blog_name;?></h1>
                      <h2><?php echo $record[0]->blog_short_description;?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog__details_wrap" id="bgblack">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single_post_meta">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog_single_post_author">
                                <p><i class="far fa-clock"></i>3 min read</p>
                                <p class="post__meta_date"><?php   $day = date('j F, Y', strtotime($record[0]->created_at) ) ;
                 echo $day;?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post__scoail__share">
                                    <ul>
                             <!-- AddToAny BEGIN -->
                           <div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="social__large">
                             <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                             <a class="a2a_button_facebook"></a>
                             <a class="a2a_button_twitter"></a>
                             <a class="a2a_button_email"></a>
                             <a class="a2a_button_linkedin"></a>
                             <a class="a2a_button_whatsapp"></a>
                             <a class="a2a_button_sms"></a>
                            </div>
                          <script async src="https://static.addtoany.com/menu/page.js"></script>

                       
                         </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="single__post_title">
                  
                   <?php echo $record[0]->blog_long_description;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="upcoming_events" id="lightbgblack">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="upcoming_title">
                            <h5>Our Blogs</h5>
                            <h6>Latest Blogs...</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="all__trends">
                            <a href="<?php echo base_url();?>blog">See All Blogs<i class="fas fa-plus"></i>
                                
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php if(count($related)>0){ 
            foreach($related as $rel) {
            ?> 
            <div class="col-md-6">
                <div class="leabha_trens_wrap">
                    <div class="leabha__trends_bg" data-aos="fade-up" data-aos-duration="1500">
                        <img src="<?php echo base_url();?>uploads/blog/<?php echo $rel->featured_image;?>" alt="">
                    </div>
                    <div class="leabha_trends_post__desc">
                        <span class="post_date" data-aos="fade-up" data-aos-duration="1500"><?php   $day = date('j F, Y', strtotime($rel->created_at) ) ;
                 echo $day;?></span>
                        <span class="post__title" data-aos="fade-up" data-aos-duration="1500"><?php echo $rel->blog_name;?></span>
                    </div>
                    <div class="post__redirect_link hover_effects" data-aos="fade-up" data-aos-duration="1500">
                        <a href="<?php echo base_url();?>blog-detail/<?php echo $rel->slug;?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php  } } ?>
        </div>
    </div>
</section>

