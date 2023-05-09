<section class="homes_slider">
  <div class="oakslider">

  <?php 
      if(count($sliders)>0)
      { 
          foreach ($sliders as $slide) 
          {?>
    <div class="oakslider__slider">
    
      <div class="oakslider__slide" data-slide="<?php echo $slide->id;?>">
        <div class="slide__image">
            <img src="uploads/slider/<?php echo $slide->image;?>" alt="">
        </div>
        <div class="slide__container">
          <div class="slide__content">
            
            <div class="slide__title"><?php echo $slide->slider_text;?></div>

          </div>
        </div>
      </div>
     
      <?php } } ?>
      </div>
      
    
    <div class="oakslider__ui">
      <div class="oakslider__nav">
        
        <?php 
      if(count($sliders)>0)
      { 
          foreach ($sliders as $slide) 
          {?>
        <div class="oakslider__navpoint"><?php echo $slide->id;?> <div class="oakslider__timer">
            <div class="timer__progress"></div>
          </div>
        </div>
        
        <?php } } ?>
      </div>
      <div class="oakslider__controls">
        <div class="oakslider__arrow oakslider__arrow--left oakslider__prev">
          << /div>
            <div class="oakslider__arrow oakslider__arrow--right oakslider__next">></div>
            <div class="content_collection">
              <span>see our collections</span>
              <img src="assets/img/collection.jpg" alt="">
            </div>
        </div>
      </div>
    </div>
  </div>

</section>





<section class="our_collection" id="bgblack">
  <div class="services__bg"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="horizontal_caption">
          <h4>Our Products</h4>
          <span class="lines"></span>
          <h5>Products</h5>
        </div>
        <h6>A Comprehensive Collection of Products to Suit All Kind of Spaces</h6>
        <div class="featured_collection__grid">
          
          <?php if(count($category)>0){ 
          foreach($category as $cat) {?>
          <a href="<?php echo base_url();?>getcategory/<?php echo $cat->slug;?>" class="project-card project-card--active ">
           <div class='reveal'>
              <div class="project-card__overlay">
                <img src='<?php echo base_url();?>uploads/category/<?php echo $cat->category_image;?>'>
              </div>
            </div>
            
            <div class="project-card__content">
              <h3 class="heading heading--md heading--bold"><?php echo $cat->category_name;?></h3>

              <span class="button_hover">See Our Collection</span>
            </div>
          </a>
          
          <?php } ?>
         
         
          <?php } ?>
          
          
        </div>
      </div>
    </div>
    <div class="container bgsin">
        <div class="row">
        <div class="col-md-9">
            <div class="any_questionwraps">
                <div class="images_any">
                    <img src="<?php echo base_url();?>assets/img/any_questions.png" alt="">
                </div>
                <div class="any_contents">
                    <h5>Looking For Customized Options? Let Us Help!</h5>
                    <p>DHOA also offers customization option to meet specific client needs. Please fill the form and let us know your requirements.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="any_questionLinkscontact">
                <a href="<?php echo base_url();?>contact">Conatct Us</a>
               
            </div>
        </div>
    </div>
</div>

  </div>
</section>



<section class="about_us" id="lightbgblack">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="image-section">
          <div class='reveal' id="revals_images">
            <img src='assets/img/about_us.jpg'>

          </div>
        </div>
        <div>

        </div>
      </div>
      <div class="col-lg-6">
        <div class="about_uscontent">
          <div class="caption">
            <div class="caption-component">
              <div class="caption-top uppercase">About  Us</div>
              <div class="caption-line"></div>
              <div class="caption-bottom uppercase"> Us</div>
            </div>
          </div>
          <div class="text-section">
            <h4>Luxury Furniture Retail Network</h4>
            <p>
            Design House of Alexandra, while being a forward-looking brand is inspired by ancient art & culture. DHOA, through consistent innovation, strives to create furnishings that incorporate the best of both worlds. A subtle blend of unique ancient artistic designs, and modern functionality allows artisans to create eclectic furniture sets that are always on the edge of commercial reality & cultural interest.
            </p>
            <p>
Every room has a story to tell. Following the vision of the clientele helps create authentic and highly characteristic furnishings that rightly adapts the narrative of a space. DHOA holds an aim to curate spaces — through our palette of compositions — that over time, redefine themselves from places of living to places of inspiration.
            </p>
            <a href="<?php echo base_url();?>about" class="btn_hovers">Read More</a>
          </div>
        </div>
      </div>
    </div>
</section>


<!--<section class="collection_section" id="bgblack" >-->
  
<!--  <div class="container">-->
<!--    <div class="row justify-content-center">-->
<!--      <div class="col-lg-12">-->
<!--        <div class="about_usinner">-->
<!--          <div class="about_uscontent" id="width100">-->
<!--            <div class="caption">-->
<!--              <div class="caption-component">-->
<!--                <div class="caption-top uppercase">Our Collection </div>-->
<!--                <div class="caption-line"></div>-->
               
<!--              </div>-->
<!--            </div>-->
<!--            <div class="text-section">-->
              
<!--              <p>-->
<!--                A Comprehensive Collection of Products to Suit All Kind of Spaces-->
<!--              </p>-->

<!--            </div>-->
<!--          </div>-->

<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
  
<!--  <div class="container">-->
<!--      <div class="row">-->
<!--          <div class="col-md-3">-->
<!--                 <div class="collectioninenrs_grid">-->
<!--                   <div class="collection_images reveal">-->
<!--					     <img src="assets/img/pr1.jpg" alt="">-->
					     
					     
<!--				     </div>-->
<!--				      <div class="strip-top"></div>-->
<!--				     <div class="strip-bottom"></div>-->
<!--				       <div class="newcolection">-->
<!--					        <div class="innercollectin">  <h6>Loveseat</h6>-->
<!--					         <span>Living</span></div>-->
<!--					     </div>-->
				     
<!--               </div>-->
               
<!--                  <div class="collectioninenrs_grid">-->
<!--                   <div class="collection_images reveal">-->
<!--					     <img src="assets/img/pr2.jpg" alt="">-->
					     
					    
<!--				     </div>-->
<!--				      <div class="strip-top"></div>-->
<!--				     <div class="strip-bottom"></div>-->
<!--				       <div class="newcolection">-->
<!--					        <div class="innercollectin">  <h6>Loveseat</h6>-->
<!--					         <span>Living</span></div>-->
<!--					     </div>-->
				     
<!--               </div>-->
<!--          </div>-->
<!--           <div class="col-md-6">-->
<!--                 <div class="collectioninenrs_grid" id="middles">-->
<!--                   <div class="collection_images reveal">-->
<!--					     <img src="assets/img/pr1.jpg" alt="">-->
					     
					    
<!--				     </div>-->
<!--				     <div class="strip-top"></div>-->
<!--				     <div class="strip-bottom"></div>-->
<!--				       <div class="newcolection">-->
<!--					        <div class="innercollectin"> <a href ="<?php echo base_url();?>collection">View More Collection</a></div>-->
<!--					     </div>-->
<!--               </div>-->
<!--          </div>-->
          
          
<!--           <div class="col-md-3">-->
<!--                 <div class="collectioninenrs_grid">-->
<!--                   <div class="collection_images reveal">-->
<!--					     <img src="assets/img/pr3.jpg" alt="">-->
					     
					     
<!--				     </div>-->
<!--				      <div class="strip-top"></div>-->
<!--				     <div class="strip-bottom"></div>-->
<!--				       <div class="newcolection">-->
<!--					        <div class="innercollectin">  <h6>Loveseat</h6>-->
<!--					         <span>Living</span></div>-->
<!--					     </div>-->
				     
<!--               </div>-->
               
<!--                  <div class="collectioninenrs_grid">-->
<!--                   <div class="collection_images reveal">-->
<!--					     <img src="assets/img/pr4.jpg" alt="">-->
					     
					    
<!--				     </div>-->
<!--				      <div class="strip-top"></div>-->
<!--				     <div class="strip-bottom"></div>-->
<!--				       <div class="newcolection">-->
<!--					        <div class="innercollectin">  <h6>Loveseat</h6>-->
<!--					         <span>Living</span></div>-->
<!--					     </div>-->
				     
<!--               </div>-->
<!--          </div>-->
<!--      </div>-->
<!--  </div>-->
  
<!--</section>-->







<!--<section class="extra_adjust">-->
<!--  <div class="container">-->
<!--    <div class="row">-->
<!--      <div class="col-md-6">-->
<!--        <div class="images_extra reveal">-->
<!--          <img src="assets/img/proprtylasb.jpg" alt="">-->
<!--        </div>-->

<!--      </div>-->
<!--      <div class="col-md-6">-->
<!--        <div class="extra_sdjustContent">-->
<!--          <h4>Furniture that  are Extravagant in their look and feel.   </h4>-->
                
<!--          <p>-->
<!--          Attention to details helps to create impactful designs. The highly skilful artisans at DHOA offer high-degree of attention to details in order to develop furniture that stand out for their spectacular style. The design for each furniture at DHOA is curated with a focus on both presentation and comfort. Interestingly, our creations not just add to the overall look of your space but also render equal amounts of comfort with the use of high-quality materials that are sourced from the best in the respective industries. Basically, DHOA strives to offer classic furniture designs with an unparalleled luxury experience to our customers.-->
<!--          </p>-->
<!--          <p>-->
<!--           What’s more, our compositions consist of diverse furniture designs that cater to varied aesthetic needs of different people. You can explore our range of furnishing solutions that — through their exquisite designs — will enable you to create spaces that speak of you and your personality.-->


<!--          </p>-->
<!--          <a href="prodcuts.php" class="btn_hovers">Discover the design</a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->



<section class="testimonial_section " id="lightbgblack">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="horizontal_caption">
          <h4>Customer Speaks </h4>
          <span class="lines"></span>
         
        </div>
        <div class="testimonial_ttile">
          What Our Customer are Saying
        </div>

        <div class="testimonial_slider">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial_sldierInner">
                    
                    <img src="assets/img/auotes.png"  class="leftquotes">
                  <!--<span>Hi,</span>-->
                  <p>
                  It has been a great experience buying the furniture for my new home from DHOA. I totally loved their furniture designs; they are unique and sumptuous. The best part is that they even customize the fabrics and colors of it on special request. They have a good set of people who are quick with responses. I faced only one minor issue with the shipping, which was fixed in no time by their customer support team. I highly recommend DHOA if you are looking for luxury furniture.
                  </p>
                  
                  <img src="assets/img/auotes.png"  class="rightquotes">
                  <div class="author_testimonialInner">
                    <div class="author_images">
                      <img src="assets/img/svilen_dich_mini_1.jpg" alt="">
                    </div>
                    <div class="Auhor_names">
                      <h6>Patricia</h6>
                      <!--<div class="tags_option">-->
                      <!--  Manager-->
                      <!--</div>-->
                    </div>
                  </div>
                </div>

              </div>
              <div class="swiper-slide">
                <div class="testimonial_sldierInner">
                    <img src="assets/img/auotes.png"  class="leftquotes">
                  <!--<span>Hi,</span>-->
                  <p>
               A while ago I planned to renovate my space and wanted to give it a retro look. The task was to find furniture that goes with the theme but as soon as I came across DHOA’s collection of furniture, I was relieved. The first time I spoke to their team, they were extremely nice and answered all my queries with utmost patience. I told them my requirements and within a few weeks I was able to complete the look of my room with the furniture that I wanted. I highly recommend the DHOA guys!

                  </p>
                  <img src="assets/img/auotes.png"  class="rightquotes">
                  <div class="author_testimonialInner">
                    <div class="author_images">
                      <img src="assets/img/svilen_dich_mini_1.jpg" alt="">
                    </div>
                    <div class="Auhor_names">
                      <h6>Clara</h6>
                      <!--<div class="tags_option">-->
                      <!--  Manager-->
                      <!--</div>-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial_sldierInner">
                    <img src="assets/img/auotes.png"  class="leftquotes">
                  <!--<span>Hello,</span>-->
                  <p>
                  Amazing products and even better service. I loved what I bought. Totally recommend DHOA, if you are looking for luxury furniture.

                  </p>
                  <img src="assets/img/auotes.png"  class="rightquotes">
                  <div class="author_testimonialInner">
                    <div class="author_images">
                      <img src="assets/img/svilen_dich_mini_1.jpg" alt="">
                    </div>
                    <div class="Auhor_names">
                      <h6>Franklin</h6>
                      <!--<div class="tags_option">-->
                      <!--  Manager-->
                      <!--</div>-->
                    </div>
                  </div>
                </div>
              </div>
              
               <div class="swiper-slide">
                <div class="testimonial_sldierInner">
                    <img src="assets/img/auotes.png"  class="leftquotes">
                  <!--<span>Hey,</span>-->
                  <p>
I have purchased furniture from DHOA twice and it was a good experience both times. They really have a remarkable collection of luxury furniture. Not just the designs are good but even the construction is sturdy. Their service is also quite nice. Will surely buy more from them in the future.


                  </p>
                  <img src="assets/img/auotes.png"  class="rightquotes">
                  <div class="author_testimonialInner">
                    <div class="author_images">
                      <img src="assets/img/svilen_dich_mini_1.jpg" alt="">
                    </div>
                    <div class="Auhor_names">
                      <h6>Elijah</h6>
                      <!--<div class="tags_option">-->
                      <!--  Manager-->
                      <!--</div>-->
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

      </div>
    </div>
</section>


<!--<section class="extra_adjust">-->
<!--  <div class="container">-->
<!--    <div class="row">-->
<!--      <div class="col-md-6">-->
<!--        <div class="images_extra reveal">-->
<!--          <img src="assets/img/extrabg2.jpg" alt="">-->
<!--        </div>-->

<!--      </div>-->
<!--      <div class="col-md-6">-->
<!--        <div class="extra_sdjustContent">-->
<!--          <h4>Here luxury meets sustainability </h4>-->
<!--          <p>-->
<!--            We capture your ideas and sense of style and transform them into reality. Contact us to book an initial-->
<!--            design meeting.-->
<!--          </p>-->
<!--          <p>-->
<!--            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque beatae dolore iusto voluptatibus! Beatae,-->
<!--            tempore officia tenetur dicta necessitatibus, praesentium dolores nesciunt accusamus numquam dolorum-->
<!--            voluptatem officiis voluptates suscipit provident!-->

<!--          </p>-->
<!--          <a href="about-us.php" class="btn_hovers">Get in Touch</a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->


<section class="why_us" id="bgblack" >
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="about_uscontent" id="width100">
          <div class="caption">
            <div class="caption-component">
              <div class="caption-top uppercase">Why Choose Us</div>
              <div class="caption-line"></div>
              <div class="caption-bottom uppercase"> Choose Us</div>
            </div>
          </div>
          <div class="text-section">
            <h4>Why DHOA Over Other Furnishing Brands?</h4>

          </div>
        </div>
      </div>
      <div class="col-lg-4">
          
          <div class="box-item">
    <div class="flip-box">
        
      <div class="flip-box-front text-center">
          
        <div class="inner color-white">
          <div class="why_boxes">
                    <div class="hr_boxes_icos">
                           <img src="assets/img/Curated-design.svg" alt="">
                    </div>
                    <div class="contents_why">
                        <h6>Curated Collection</h6>
                    </div>
                </div>
        </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          
          <p>Collection of exquisite products curated with love and a taste for aesthetic excellence.</p>
         
        </div>
      </div>
    </div>
	</div>
          
       
      </div>
      <div class="col-lg-4">
          
             <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <div class="why_boxes">
                    <div class="hr_boxes_icos">
                            <img src="assets/img/Diverse-stocklist.svg" alt="">
                    </div>
                    <div class="contents_why">
                        <h6>Diverse Range</h6>
                    </div>
                </div>
        </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          
          <p>
              From living room to bedroom, modern to classic, luxurious to sustainable, we have something for everyone.
           </p>
         
        </div>
      </div>
    </div>
	</div>
      
      </div>


      <div class="col-lg-4">
          
           <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <div class="why_boxes">
                    <div class="hr_boxes_icos">
                            <img src="assets/img/Bespoke-Productions.svg" alt="">
                    </div>
                    <div class="contents_why">
                        <h6>Bespoke</h6>
                    </div>
                </div>
        </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          
          <p>
 No one size fits all. With this mantra, we strive to deliver what you want through personalization.
 </p>
         
        </div>
      </div>
    </div>
	</div>
          
       
      </div>
      <div class="col-lg-4">
          
            <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <div class="why_boxes">
                    <div class="hr_boxes_icos">
                           <img src="assets/img/Superior-Quality.svg" alt="">
                    </div>
                    <div class="contents_why">
                        <h6>Superior   Quality</h6>
                    </div>
                </div>
        </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          
          <p>
 Quality is one of our guiding principles which enables us to deliver complete satisfaction.
 </p>
         
        </div>
      </div>
    </div>
	</div>
          
       
      </div>
      <div class="col-lg-4">
          
           <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <div class="why_boxes">
                    <div class="hr_boxes_icos">
                          <img src="assets/img/Proactive-Client.svg" alt="">
                    </div>
                    <div class="contents_why">
                        <h6>Impeccable Service</h6>
                    </div>
                </div>
        </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          
          <p>
 If you are not happy, we are not happy. Our impeccable customer service ensures complete satisfaction & happiness.
       </p>
         
        </div>
      </div>
    </div>
	</div>
      
      </div>
      <div class="col-lg-4">
          
           <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <div class="why_boxes">
                    <div class="hr_boxes_icos">
                           <img src="assets/img/Quality-Products.svg" alt="">
                    </div>
                    <div class="contents_why">
                        <h6>Sustainable   Solutions</h6>
                    </div>
                </div>
        </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          
          <p>
 Efficient furnishing solutions that can last for years without requiring high maintenance.
 </p>
         
        </div>
      </div>
    </div>
	</div>
          
        
      </div>

    </div>
  </div>
</section>


<section class="get_quation" id="lightbgblack">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h6>
                   Redefining Interiors of Your Space with Our Timeless Furniture Designs! 
                </h6>


            </div>
            <div class="col-md-6">
                <div class="newslettr_form">
                    <form action="#" method="POST" name="contact" id="contact" onsubmit="return validateContactForms()">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form_bg">
                                    <input type="text" name="full_name" placeholder="Full Name">
                                     <div class="error" id="nameErr_contact"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_bg">
                                    <input type="eamil" name="email" placeholder="Email Address">
                                    <div class="error" id="emailErr_contact"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form_bg">
                                    <input type="text" name="phone_number" placeholder="Mobile Number">
                                    <div class="error" id="mobileErr"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form_bg">
                                    <textarea name="content" id="message" placeholder="Your Message"></textarea>
                                    <div class="error" id="messageErr_contact"></div>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form_sumbit_btn">
                                    <button type="submit" name="sbt"  class="btn_hovers">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> 


<script>
function printError(elemId, hintMsg) {
 document.getElementById(elemId).innerHTML = hintMsg;
 }

 function validateContactForms() {

debugger;
 var name = document.contact.full_name.value;
 
 var email = document.contact.email.value;

 var mobile = document.contact.phone_number.value;

 var message = document.contact.content.value;

 var nameErr_contact = emailErr_contact = messageErr_contact = mobileErr = true;
    
    
if(name == "") {
  printError("nameErr_contact", "Please enter your name");
  } else {
    var regex = /^[a-zA-Z\s]{3,50}$/;                     
         if(regex.test(name) === false) {
             printError("nameErr_contact", "Please enter a valid name. Input is too short (min 3) or too big (max 50).");
     } else {
         printError("nameErr_contact", "");
         nameErr_contact = false;
         }
     }
    
    
if(email == "") {
     printError("emailErr_contact", "Please enter your email address");
 } else {
       
     var regex = /^\S+@\S+\.\S+$/;
     if(regex.test(email) === false) {
         printError("emailErr_contact", "Please enter a valid email address");
     } else{
             printError("emailErr_contact", "");
             emailErr_contact = false;
         }
     }


     if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid mobile number in the format 3123456789 without spaces,dashes or acess code (+)");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }

 
    if(message == "") {
        printError("messageErr_contact", "Please enter message");
    } else {
      
		var regex = /^[\w\W\s]{20,200}$/g;
		
        if(regex.test(message) === false) {
            printError("messageErr_contact", "Please enter your message. Input is too short (min 20) or too big (max 200).");
        } else {
            printError("messageErr_contact", "");
            messageErr_contact = false;
        }
    }
     
    
    
  if((nameErr_contact || emailErr_contact || mobileErr || messageErr_contact ) == true) {
       return false;
     } else {
    
         var url = "home/contact"
         $.ajax({
                 type: "POST",
                 url: "<?php echo base_url();?>" + url,
                 success: function() {
                    
                 }

             })
         
 }
 };
</script>