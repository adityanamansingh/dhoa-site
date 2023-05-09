
<section class="collection_wrappers">
    
         <div class="products_breadcumb">
        <div class="containers">
            <h5 data-aos="fade-right" data-aos-duration="1500" class="aos-init aos-animate">Our Collection</h5>
            <p data-aos="fade-right" data-aos-duration="1500" class="aos-init aos-animate">Our collection contains work from emerging talent and internationally recognized designers.
						Together, we are intensely curious and on a search towards unique designs, concepts and
						materials. Together, we create A Life Extraordinary.
 </p>
           <div class="inner_bread">
            <div class="row">
                <div class="col-md-12">
                    <ul class="pr_breadcumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url();?>collection">Collection</a></li>
    
                    </ul>
                </div>
              
            </div>
           </div>
        </div>
      </div>
    
   
</section>


<section class="collections_wrasp" id="lightbgblack">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-10">
				<div class="row ">
				
				<?php if(count($collection)>0){
				foreach($collection as $coll) {?>
					<div class="col-md-6">
                      <a href="<?php echo base_url();?>getcollection/<?php echo $coll->slug?>">
						<div class="collection_wrapsInner ">
							<div class="collection_images reveal">
								<img src="<?php echo base_url();?>uploads/collection/<?php echo $coll->image;?>" alt="">
							</div>
							<div class="product__caption">
								<h5><?php echo $coll->name;?></h5>
								 
							</div>
						</div>
					  </a>
					</div>
				
            <?php } } ?>
				</div>
			</div>
		</div>
	</div>
</section>
