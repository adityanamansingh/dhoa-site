<section class="blog__head">
    
     <div class="products_breadcumb">
        <div class="containers">
            <h5 data-aos="fade-right" data-aos-duration="1500" class="aos-init aos-animate">Our Blogs</h5>
            <p data-aos="fade-right" data-aos-duration="1500" class="aos-init aos-animate">Informative Pieces To Enhance Your Knowledge On Furniture Industry
 </p>
           <div class="inner_bread">
            <div class="row">
                <div class="col-md-12">
                    <ul class="pr_breadcumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url();?>blog">Blogs</a></li>
    
                    </ul>
                </div>
              
            </div>
           </div>
        </div>
    </div>
    
</section>



<section class="lebaha__trends_layout" id="lightbgblack">
    <div class="container">
        <div class="list__wrap__container">
            <div class="row">
               <?php if(count($blogs)>0) { 
                   foreach($blogs as $blog){ ?>
                <div class="col-md-6">
                    <div class="leabha_trens_wrap"  data-aos="fade-up" data-aos-duration="1500">
                        <div class="leabha__trends_bg" >
                            <img src="<?php echo base_url();?>uploads/blog/<?php echo $blog->featured_image;?>" alt="">
                        </div>
                        <div class="leabha_trends_post__desc">
                            <span class="post_date" ><?php   $day = date('j F, Y', strtotime($blog->created_at) ) ;
                 echo $day;?></span>
                            <span class="post__title"  ><?php echo $blog->blog_name;?></span>
                              <p ><?php echo $blog->blog_short_description;?></p>
                            
                            
                        </div>
                        <div class="post__redirect_link hover_effects">
                            <a href="<?php echo base_url();?>blog-detail/<?php echo $blog->slug;?>">Read More</a>
                        </div>
                    </div>
                </div>
                <?php } } ?>
            </div>
            
        </div>
    </div>
</section>

