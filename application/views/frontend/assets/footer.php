 

<section class="footer" id="bgblack">
    <div class="container">
        <div class="row footer_top">
            <div class="col-md-4">
                <h5 class="follow_text">Follow Us</h5>
                <ul class="follw_us">
                    <li><a href="https://www.pinterest.com/dhoa_official
" class="hoverlinks"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="https://www.instagram.com/dhoa_official/" class="hoverlinks"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/design-house-of-alexandra-dhoa" class="hoverlinks"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <ul class="contact_phone">
                   <li class="contact_number"><a href="tel:(888) 638-3462" class="hoverlinks">(888) 638-3462</a></li>
                   <li class="mailtext"><a href="mailto:hello@dhoa.com" class="hoverlinks">hello@dhoa.com</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <p class="Adress">
                   8470 Allison Pointe Blvd #128 Indianapolis, IN 46250
                </p>
                <a href="<?php echo base_url();?>contact" class="go_text">Go to Contact</a>
            </div>
        </div>
        <div class="row footer_bottom">
            <div class="col-md-4">
                <div class="foot_about">
                    <h6>About DHOA</h6>
                    <p>
                       DHOA is a leading luxury furniture brand that strives to create furnishing solutions that stand out for their rich and opulent designs and unparalleled luxury experience. Drawing room to dining room to outdoors, we have a range of offerings for all these spaces.
                    </p>
                </div>
            </div>
           <div class="col-md-4">
               <div class="usefull_links">
                   <h5>Useful Links</h5>
                    <ul>
                       <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url();?>about">About Us</a></li>
                        <li><a href="<?php echo base_url();?>products">Our Products</a></li>
                        
                        <!--<li><a href="<?php echo base_url();?>collection">Collection</a></li>-->
                        <li><a href="<?php echo base_url();?>blog">Blog</a></li>
                        <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
                    </ul>
               </div>
           </div> 
           <div class="col-md-4">
               <div class="legal_area">
                   <h5>Legal Area</h5>
                   <ul>
                       <li><a href="#">Privacy Policy</a></li>
                       <li><a href="#">Cookie Policy</a></li>
                       <li><a href="#">Terms and conditions</a></li>
                   </ul>
               </div>
           </div>
        </div>
        <div class="row">
            <div class="copy_right_text">
                <p>© 2021 DHOA. All rights reserved.<br> Desgin By <a href="https://cryptina.in/">Team Cryptina</a></p>
            </div>
        </div>
    </div>
</section>


  <div id="sy-whatshelp">
  <div class="sywh-services">
    
    <a href="" class="whatsapp" data-tooltip="WhatsApp" data-placement="left" target="_blank">
    <i class="fab fa-whatsapp"></i>
    </a>
    <a href="" class="call" data-tooltip="Call" data-placement="left">
      <i class="fa fa-phone"></i>
    </a>
  </div>
  <a class="sywh-open-services" data-tooltip="Contact Us" data-placement="left">
				<i class="fa fa-comments"></i>
    <i class="fa fa-times"></i>
  </a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="<?php echo base_url();?>assets/js/anime.js"></script>
<script src="<?php echo base_url();?>assets/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo base_url();?>assets/js/oak-slider.js"></script>

<script>
  "use strict";
jQuery(function ($) {
    $('a.sywh-open-services').click(function () {
        if ($('.sywh-services').hasClass('active')) {
            $('.sywh-services').removeClass('active');
            $('a.sywh-open-services i.fa-times').hide();
            $('a.sywh-open-services i.fa-comments').show();
            $('a.sywh-open-services').removeClass('data-tooltip-hide');
            $('.sywh-services a:nth-child(1)').delay(0).fadeOut();
            $('.sywh-services a:nth-child(2)').delay(100).fadeOut();
            $('.sywh-services a:nth-child(3)').delay(200).fadeOut();
            $('.sywh-services a:nth-child(4)').delay(300).fadeOut();
            $('.sywh-services a:nth-child(5)').delay(400).fadeOut();
        }
        else {
            $('.sywh-services').addClass('active');
            $('a.sywh-open-services i.fa-comments').hide();
            $('a.sywh-open-services i.fa-times').show();
            $('a.sywh-open-services').addClass('data-tooltip-hide');
            $('.sywh-services a:nth-child(5)').delay(0).fadeIn();
            $('.sywh-services a:nth-child(4)').delay(100).fadeIn();
            $('.sywh-services a:nth-child(3)').delay(200).fadeIn();
            $('.sywh-services a:nth-child(2)').delay(300).fadeIn();
            $('.sywh-services a:nth-child(1)').delay(400).fadeIn();
        }
    });
});



$(document).ready(function() {
  
  // variables 
  var toTop = $(' #pagination_link');
  // logic
  toTop.on('click', function() {
    $('html, body').animate({
      scrollTop: $('html, body').offset().top,
    });
  });

});
</script>
</body>

</html>