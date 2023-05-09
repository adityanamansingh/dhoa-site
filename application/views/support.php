<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Ups</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/custom.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/sticky-sidebar.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/media.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/docs.theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="<?php echo base_url();?>assets/owlcarousel/owl.carousel.js"></script>
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
</head>
<body>
    <section class="nav__header">
        <div class="header_left">
            <div class="nav__logo">
                <a href="home"><img src="<?php echo base_url();?>assets/img/logo.png" alt="logo"></a>
            </div>
        </div>

        <div class="nav__header_wrap">
            <div class="nav_clip_path"></div>
            <div class="header__center">
                <div class="header_search_bar">
                <input type="search" class="search_field" name="search" value="<?php echo $this->input->get('search');?>" id="search" placeholder="Search..." autocomplete="on">                 
                        
                        <span class="button_wrap">
                        <button class="btn btn_special search_button" id="search_button" onclick="javascript:" title="Search" type="button"><i
                                    class="fas fa-search"></i></button>
                        </span>
                    
                </div>
            </div>

            <div class="header_right">
                <div class="header__right_extra">
                    <ul>
                        <li>
                          
                            <img src="<?php echo base_url();?>assets/img/user.svg" alt="user-sign">
                            <span>Sign In<i class="fas fa-caret-down"></i></span>                                   
                        </li>
                        <li><img src="<?php echo base_url();?>assets/img/shop.svg" alt="user-sign"><span>Shop<i
                                    class="fas fa-caret-down"></i></span></li>
                        <li  id="sign__in_pop_up">
                        <div class="sign_up_box">
                             <ul>
                             <!--<li><i class="fas fa-phone"></i><a href="#">Call Us on <Span id="header_extra_popup">9609674567</Span></a></li>-->
                                 <li><img src="http://onlineups.in/assets/img/mail.png" alt="call" style="width: 19px;margin-right: 10px;"></i><a href="mailto: info@onlineups.in"> info@onlineups.in</a></li>
                                 <!--<li><i class="fas fa-info-circle"></i><a href="contact-us.php">Helpdesk & Information</a></li>-->
                             </ul>    
                        </div>
                        <img src="<?php echo base_url();?>assets/img/help.svg" alt="user-sign"><span>Help<i class="fas fa-caret-down"></i></span></li>
                                    
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
                          <a href="http://onlineups.in/products/?products=Online-UPS-Accessories">
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
                        <a href="http://onlineups.in/products/?products=SMF-Battery">
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
                               Request a site visit
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
                                                             <form action="<?php echo base_url();?>home/addEnquiry" method="post">
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
    <section class="breadcumb_2">
        <div class="breadcumb__2_inner">
            <ol>
                <li><a href="home">Home</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li><a href="support">Support</a></li>
            </ol>
        </div>
    </section>

    <section class="terms__sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="terms__Sec_wrap">
                        <h2>Support</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos amet aliquam beatae. Rerum
                            ducimus aut nesciunt architecto optio iusto ad quaerat a sapiente minima laudantium, facilis
                            omnis ullam earum voluptate!
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam distinctio quae possimus
                            totam unde consequuntur. Deleniti commodi tempora, consequuntur necessitatibus iusto, eaque
                            debitis, quos pariatur assumenda illo beatae? Beatae, dolorem!
                        </p>
                        <ul>
                            <li class="list__heading1">Introduction</li>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora libero accusamus
                                aliquam vel quia. Odit fuga molestiae nemo, nulla pariatur quisquam ipsam architecto
                                fugit laborum neque aspernatur dicta labore corporis!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel sapiente explicabo quidem
                                incidunt libero totam molestiae consequuntur praesentium consequatur debitis id natus,
                                omnis facere laboriosam temporibus neque sed quibusdam tempore?
                            </p>
                        </ul>
                        <ul>
                            <li class="list__heading1">Services</li>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora libero accusamus
                                aliquam vel quia. Odit fuga molestiae nemo, nulla pariatur quisquam ipsam architecto
                                fugit laborum neque aspernatur dicta labore corporis!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel sapiente explicabo quidem
                                incidunt libero totam molestiae consequuntur praesentium consequatur debitis id natus,
                                omnis facere laboriosam temporibus neque sed quibusdam tempore?
                            </p>
                        </ul>
                        <ul>
                            <li class="list__heading1">Law and Jurisdiction</li>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora libero accusamus
                                aliquam vel quia. Odit fuga molestiae nemo, nulla pariatur quisquam ipsam architecto
                                fugit laborum neque aspernatur dicta labore corporis!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel sapiente explicabo quidem
                                incidunt libero totam molestiae consequuntur praesentium consequatur debitis id natus,
                                omnis facere laboriosam temporibus neque sed quibusdam tempore?
                            </p>
                        </ul>
                        <ul>
                            <li class="list__heading1">Privacy</li>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora libero accusamus
                                aliquam vel quia. Odit fuga molestiae nemo, nulla pariatur quisquam ipsam architecto
                                fugit laborum neque aspernatur dicta labore corporis!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel sapiente explicabo quidem
                                incidunt libero totam molestiae consequuntur praesentium consequatur debitis id natus,
                                omnis facere laboriosam temporibus neque sed quibusdam tempore?
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
      <section id="footer">
        <section class="foot__top">
            <div class="foot__top_left">
                <div class="foot__feedback">
                    <img src="<?php echo base_url();?>assets/img/massage.png" alt="message">
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
                            <img src="<?php echo base_url();?>assets/img/logo.png" alt="logo">
                        </div>
                        <ul>
                            <li><a href="#"><img src="<?php echo base_url();?>assets/img/facebook.png" alt=""><span>Facebook</span></a></li>
                            <li><a href="#"><img src="<?php echo base_url();?>assets/img/instagram.png" alt=""><span>Instagram</span></a></li>
                            <li><a href="#"><img src="<?php echo base_url();?>assets/img/twitter.png" alt=""><span>Twitter</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="main__foot_col">
                    <div class="foot__wrap2">
                        <div class="foot__quick__links">
                            <h6>Information</h6>
                        </div>
                        <ul>
                       
                             <li><a href="about">About Us</a></li>
                             <li><a href="products/">Services</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>

                <div class="main__foot_col">
                    <div class="foot__wrap2">
                        <div class="foot__quick__links">
                            <h6>Helpful Links</h6>
                        </div>
                        <ul>
                            <li><a href="support">Support</a></li>
                            <li><a href="termscondition">Term & Condition</a></li>
                            <li><a href="privacypolicy">Privacy Policy</a></li> 
                        </ul>
                    </div>
                </div>

                <div class="main__foot_col">
                    <div class="foot__wrap2">
                        <div class="foot__quick__links">
                            <h6>Our Services</h6>
                        </div>
                        <ul>
                            <li><a href="contact">Contact</a></li>
                            <li><a href="#">Order</a></li>
                            <li><a href="#">Return & Exchange</a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="main__foot_col">
                    <div class="foot__wrap2">
                        <div class="foot__quick__links">
                            <h6>Contact Us</h6>
                        </div>
                        <ul>
                            <!--<li><a href="https://www.facebook.com/Online-UPS-106155624120364/"><img src="<?php echo base_url();?>assets/img/phone.png" alt="call"><span>+91- 9999999999</span></a>-->
                            <!--</li>-->
                            <li><a href="#"><img src="<?php echo base_url();?>assets/img/mail.png" alt="call"><span>info@onlineups.in</span></a>
                            </li>
                            <li id="disclaimer__link_foot"><a href="disclaimer">Disclaimer</a></li>                        
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
<script src="<?php echo base_url();?>assets/js/main.js"></script>
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->

    <script>
        $(function () { // document ready
            if ($('#sticky').length) { // make sure "#sticky" element exists
                var el = $('#sticky');
                var stickyTop = $('#sticky').offset().top; // returns number
                var stickyHeight = $('#sticky').height();

                $(window).scroll(function () { // scroll event
                    var limit = $('#footer').offset().top - stickyHeight - 40;

                    var windowTop = $(window).scrollTop(); // returns number

                    if (stickyTop < windowTop) {
                        el.css({
                            position: 'fixed',
                            top: 0
                        });
                    } else {
                        el.css('position', 'static');
                    }

                    if (limit < windowTop) {
                        var diff = limit - windowTop;
                        el.css({
                            top: diff
                        });
                    }
                });
            }
          $('.search_button').on('click',function(){
             var search=$('input[name="search"]').val();
             window.location.href="<?php echo base_url();?>products/?search="+search;
          });  
            
        });
    </script>
    <script>
var input = document.getElementById("search");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("search_button").click();
  }
});
</script>
<script src="http://zorbatool.soulilution.com/js/typeahead/typeahead.js"></script>
 <script>
 var base_url='<?php echo base_url();?>';
 $('#search').typeahead({
            items: 100,
            source: function (query, result) {
                groupName: {
                $.ajax({
                    url:base_url+"frontend/product/search_main",
                    data: 'query=' + query,
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        result($.map(data, function (item) {
                            return item;
                        }));
                    }
                });
              }
            },
            afterSelect: function (item) {
             
          }
        });
 </script>
    <script>
        // AOS.init();
    </script>
</body>

</html>    