<section class="product_breadcumb" id="bgblack">
    <div class="container">
        <div class="inner">
            <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>products">Products</a></li>
                <li><a href="#"><?php echo $record->product_name;?></a></li>
            </ul>
        </div>
    </div>
</section>



<section class="product_descriptions" id="bgblack">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="products__innerimage">
                    <div class="products_img pro_box">
                        <img src="<?php echo base_url();?>uploads/products/<?php echo $record->featured_image;?>">
                    </div>
                    <div class="left__image_slider">
                        <ul class="thumb">
                            <li>
                                <a href="<?php echo base_url();?>uploads/products/<?php echo $record->featured_image;?>" target="pro_box">
                                     <img src="<?php echo base_url();?>uploads/products/<?php echo $record->featured_image;?>">
                                </a>
                                </li>
                            <?php 
                            if($record->image1!=""){ ?>
                               <li>
                                <a href="<?php echo base_url();?>uploads/products/<?php echo $record->image1;?>" target="pro_box">
                                <img src="<?php echo base_url();?>uploads/products/<?php echo $record->image1;?>">
                                </a>
                                </li>
                           <?php } ?>
                           
                            <?php 
                            if($record->image2!=""){ ?>
                            <li>
                                <a href="<?php echo base_url();?>uploads/products/<?php echo $record->image2;?>" target="pro_box">
                                <img src="<?php echo base_url();?>uploads/products/<?php echo $record->image2;?>">
                                </a>
                                </li>
                           <?php } ?>
                           
                            <?php 
                            if($record->image3!=""){ ?>
                            <li>
                                <a href="<?php echo base_url();?>uploads/products/<?php echo $record->image3;?>" target="pro_box">
                                <img src="<?php echo base_url();?>uploads/products/<?php echo $record->image3;?>">
                                </a>
                                </li>
                           <?php } ?>
                           
                            <?php 
                            if($record->image4!=""){ ?>
                            <li>
                                <a href="<?php echo base_url();?>uploads/products/<?php echo $record->image4;?>" target="pro_box">
                                <img src="<?php echo base_url();?>uploads/products/<?php echo $record->image4;?>">
                                </a>
                                </li>
                           <?php } ?>
                           
                            <?php 
                            if($record->image5!=""){ ?>
                                <li>
                                <a href="<?php echo base_url();?>uploads/products/<?php echo $record->image5;?>" target="pro_box">
                                <img src="<?php echo base_url();?>uploads/products/<?php echo $record->image5;?>">
                                </a>
                                </li>
                           <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="desciption_products">
                    <h2><?php echo $record->product_name;?></h2>
                   <div class="typespr"><?php echo $record->product_tagline;?></div>
                    <h3>Model Number: <span><?php echo $record->model_no; ?></span></h3>
                    <div class="shortdescription_title">
                      <h4><?php echo $record->short_description; ?></h4>
                    </div>
                    <br/>
                     <?php 
               $sel_size=get_sub_product('product_color','color','product_id',$record->id); 
               
              if(count($sel_size)>0) { ?>
                   
                      <div class="productdescription_card colorscards product_color">
                         <div class="titlespr">
                        Colors Available :
                    </div>
                    <div class=" productcollapse_list listingcolors">
                        
                        <ul>
                <?php
               foreach($sel_size as $size) { 
                
                $sel_size_part=get_sub_product('color','image','id',$size); 
                   
                 foreach($sel_size_part as $size_part) { 
                     echo ' <span class="blue colorcode"><img src="'.base_url().'uploads/color/'.$size_part.'"></span>';
                    //  echo ' <span class="filter_valueName">'.$size_part1.'"></span>';
                      
                  
                   
               }
               }
            ?> 
                  </ul>
                    </div>
                    </div>
                    
                   <?php } ?>
                   
                  <?php 
               $sel_fabric=get_sub_product('product_fabric','fabric','product_id',$record->id); 
               
              if(count($sel_fabric)>0){
              ?>
                    
                     <div class="productdescription_card insidecards dflex">
                         <div class="tabsinsides dflex">
                             <h5> Fabric:</h5>
                     <h6>
                        <?php 
                        $va = 0;
                        $text1=" ";
               foreach($sel_fabric as $fabric) { 
          
                $sel_fabric_part=get_sub_product('fabric','name','id',$fabric); 
                   
                 foreach($sel_fabric_part as $fabrics) { 
                   
                    $text1.=$fabrics." | ";
                    
                   
               }
                
            
               }
               $string = rtrim($text1,' | ');
               echo $string;
            ?> </h6>
                    </div>
                  
                    </div>
            <?php } ?>
            <?php 
               $sel_look=get_sub_product('product_look','look','product_id',$record->id); 
               if(count($sel_look)>0) { ?>
                    
                    <div class="productdescription_card insidecards dflex">
                         <div class="tabsinsides">
                     <h5> Look:</h5>
                    </div>
                    <div class="tabinsidecontent">
                       <h6>
                             <?php 
               foreach($sel_look as $look) { 
                
                $sel_look_part=get_sub_product('look','name','id',$look); 
                   
                 foreach($sel_look_part as $look_part) { 
                    echo $look_part;
                   
               }
               }
            ?> 
                       </h6>
            
                    </div>
                    </div>
                <?php } ?>
                    <a href="#" class="make_enuirybtn" data-toggle="modal" data-target="#exampleModal">Make An Inquiry</a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="product_detailswraps" id="bgblack">
    <div class="container">
        
    <ul class="tabs">
        <?php if(!empty($record->long_description)) { ?>
		<li class="tab-link current" data-tab="tab-1">General</li>
		<?php } ?>
		<?php if(!empty($record->size_chart)){ ?>
		<li class="tab-link current" data-tab="tab-2">Size Chart</li>
		<?php } ?>
		<?php if(!empty($record->usp)){ ?>
		<li class="tab-link" data-tab="tab-4">Unique Feautres</li>
		<?php } ?>
		<?php if(!empty($record->instruction)) { ?>
		<li class="tab-link" data-tab="tab-3">Care Instructions</li>
		<?php } ?>
		
	</ul>
	 <?php if(!empty($record->long_description)) { ?>
	<div id="tab-1" class="tab-content current">
	     
	     <!--<div class="accordiantitles"> <h5>ETA:</h5>  <h6> <?php echo $record->eta; ?> </h6></div>-->
	     
     <div class="accordiantitles">
          <!--<h5>Long Description :</h5> -->
          <p><?php echo $record->long_description; ?></p>
    </div>
    
    
	</div>
		<?php } ?>

	<div id="tab-2" class="tab-content current">
	     <div class="accordiantitles">
	          <!--<h5>Size Chart:</h5> -->
	          <div> <?php echo $record->size_chart; ?></div></div>

	</div>
	 <div id="tab-4" class="tab-content">
	     <div class="accordiantitles">
	          <!--<h5>Unique Feautres:</h5> -->
	          <div class="uniquesfeatures">  <?php echo $record->usp; ?></div></div>
		
	</div>
	
    <div id="tab-3" class="tab-content">
        
         <div class="accordiantitles"> 
         <!--<h5>Care:</h5>-->
         <p> <?php echo $record->instructions; ?></p></div>
	
	</div>
	
    
</div>
</section>

<section class="related_products" id="lightbgblack">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="horizontal_caption">
                    <h4>Related  Products</h4>
                    <span class="lines"></span>
                    <h5>Products</h5>
                </div>

                <div class="related_productswrapper" id="main_related">
                    <div class="swiper-containers">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                           <?php if(count($related)>0){
                               foreach($related as $rel){?> 
                            <div class="swiper-slide">
                                <div class="images_realtedslider">
                                  <a href="<?php echo base_url();?>products/product-details/<?php echo $rel->product_id?>">
                                    <div class="thumanalis_images ">
                                        <img class="grid__img" src="<?php echo base_url();?>uploads/products/<?php echo $rel->featured_image;?>" alt="Some image" />
                                    </div>
                                            
                                        <div class="product__caption">
                                            <h5><?php echo $rel->product_name;?></h5>
                                             <p>
                                                <?php echo $rel->sku;?>
                                             </p>
                                        </div>
                                  </a>
                                </div>
                            </div>
                           <?php } } ?>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<!--- product enquiry  Modal-->


<div class="modal fade productenquirymodal" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="circle7"></div>
            <div class="circle8"></div>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Inquiry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="innermodalForm">
                    <form action="#" name="prod_form" id="myform" method="POST" onsubmit="return validateProd()">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-wrapper">
                                     <label for="user">Product Name</label>
                                    <input type="text" name="product_name" id="user" value="<?php echo $record->product_name;?>" readonly style="color:#fff">
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-wrapper">
                                     <label for="user">Your Name</label>
                                    <input type="text" name="name" id="user" placeholder="First and Last Name" required >
                                     <div class="error" id="fullname_Err_photo"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-wrapper">
                                     <label for="user">Your Email</label>
                                    <input type="email" name="email" id="email" placeholder="Enter your Email" required>
                                     <div class="error" id="email_Err_photo"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-wrapper">
                                     <label for="user">Phone Number</label>
                                    <input type="text" name="phone_number" id="user" placeholder="Phone Number" required>
                                    <div class="error" id="contact_Err_photo"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-wrapper">
                                     <label for="user">Inquiry</label>
                                    <textarea  id="message" name="message" placeholder="Your Mesaage" required></textarea>
                                     <div class="error" id="message_Err_photo"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-wrapper">
                                    <button type="submit" name="sbt" class="button reverse dark">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>



<script>

function printError(elemId, hintMsg) 
{

document.getElementById(elemId).innerHTML = hintMsg;

}

// Defining a function to validate form 
function validateProd() {
 
    var fullname = document.prod_form.name.value;
    var email = document.prod_form.email.value;
	var contact = document.prod_form.mobile_number.value;
	var message = document.prod_form.message.value;
  

	// Defining error variables with a default value
    var fullname_Err_photo = email_Err_photo = contact_Err_photo = message_Err_photo = true;

   

	// Validate name
	if(fullname == "") {
        printError("fullname_Err_photo", "Please enter your name");
	} 
	else {
        var regex = /^[a-zA-Z\s]{3,50}$/;                
        if(regex.test(fullname) === false) {
            printError("fullname_Err_photo", "Please enter a valid name. Input is too short (min 3) or too big (max 50).");
        } else {
            printError("fullname_Err_photo", "");
            fullname_Err_photo = false;
        }
    }

    
    // Validate email address
    if(email == "") {
        printError("email_Err_photo", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("email_Err_photo", "Please enter a valid email address");
        } else{
            printError("email_Err_photo", "");
            email_Err_photo = false;
        }
    }
    
  // Validate Phone Number
    
	if(contact == "") {
        printError("contact_Err_photo", "Please enter your mobile number");
    } else {
        var regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(regex.test(contact) === false) {
            printError("contact_Err_photo", "Please enter a valid mobile number in the format 0123456789 without spaces,dashes or acess code (+)");
        } else{
            printError("contact_Err_photo", "");
            contact_Err_photo =  false;
        }
    }


		 //Validate message

	
    if(message == "") {
        printError("message_Err_photo", "Please enter message");
    } else {
      
		var regex = /^[\w\W\s]{20,200}$/g;
		
        if(regex.test(message) === false) {
            printError("message_Err_photo", "Please enter your message. Input is too short (min 20) or too big (max 200).");
        } else {
            printError("message_Err_photo", "");
            message_Err_photo = false;
        }
    }

    
    
    // Prevent the form from being submitted if there are any errors
    if((fullname_Err_photo || email_Err_photo || contact_Err_photo || message_Err_photo) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
          
            var url = "frontend/product/product-detail.php"
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>" + url,
                success: function(data) {}

            });
    }
};
   

</script>

