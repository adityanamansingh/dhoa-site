<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo $record->meta_keyword;?>">
    <title><?php echo $record->meta_title;?></title>
    <meta name="description" content="<?php echo $record->meta_description;?>">
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
     <!--<script src="http://dev.soulilution.com/zorbatool/js/typeahead/typeahead.js"></script>-->
   
    <script src="https://cdn.rawgit.com/filamentgroup/fixed-sticky/master/fixedsticky.js"></script>
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
</head>
<body>
    <section class="nav__header">
        <div class="header_left">
            <div class="nav__logo">
               <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" alt="logo"></a>
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
                        <li class="header__right_none">
                          
                            <img src="<?php echo base_url();?>assets/img/user.svg" alt="user-sign">
                            <span>Sign In<i class="fas fa-caret-down"></i></span>                                   
                        </li>
                        <li  class="header__right_none"><img src="<?php echo base_url();?>assets/img/shop.svg" alt="user-sign"><span>Shop<i
                                    class="fas fa-caret-down"></i></span></li>
                        <li  id="sign__in_pop_up">
                        <div class="sign_up_box">
                             <ul>
                                 <li><i class="fas fa-phone"></i><a href="#">Call Us on <Span id="header_extra_popup">9609674567</Span></a></li>
                                 <li><i class="fas fa-info-circle"></i><a href="contact-us.php">Helpdesk & Information</a></li>
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
                  
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="nav__bottom_prd__enquiry">
                               Request a site visit
                            </button>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" id="bg_t">×</button>
                                            <div class="row">
                                               <div class="col-md-5">
                                                   <div class="pop__up_bg">
                                                      <img src="<?php echo base_url(); ?>assets/img/graphic2.svg" alt="">
                                                   </div>
                                               </div>
                                               <div class="col-md-7">
                                                   <div class="pop__up_form_construct">
                                                     <div class="pop__up_form_construct_inner">
                                                               <form action="<?php echo base_url();?>home/addEnquiry" name="myFormTop"  method="post" onsubmit="return validateFormTop()">
                                                       <div class="row">                                                                      
                                                                <div class="col-md-12">
                                                                        <div class="pop_up_inner_short_title">
                                                                            <h1>Get more things done with Enquiry platform.</h1>
                                                                            <p>Access to the most powerfull tool in the entire design and web industry.</p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="Products Name"  class="pop__up_form_enquiry" value="" name="product_name" id="productname">
                                                                      <span class="error" id="pn"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Product Name</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <input type="number" placeholder="Mobile No." class="pop__up_form_enquiry" name="mobile" id="mobile no">
                                                                         <span class="error" id="mnoa"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Valid Mobile No.</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="Full Name"  class="pop__up_form_enquiry" name="name" id="fullname">
                                                                       <span class="error" id="fnamea"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Full Name</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="email" placeholder="Email"  class="pop__up_form_enquiry" name="email" id="emailname">
                                                                     <span class="error" id="emaila"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Valid Email</span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <textarea name="message" id="" cols="10" rows="5" class="pop__up_form_message" placeholder="message"></textarea>
                                                                     <span class="error"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Valid Message</span>
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
<div class="breadcumb">
            <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="javascript:"><i class="fas fa-chevron-right"></i></a></li>
                <li><a href="<?php echo base_url();?>products">Products</a></li> 
                <li><a href="javascript:"><i class="fas fa-chevron-right"></i></a></li>
                <li><?php echo $record->item_name;?></li>
            </ul>
        </div>
    <section class="product__details">
        <div class="Container-fluid c__wrap">
            <div class="product__details__box">
                <div class="row">
                    <div class="col-md-5">
                        <div class="product__detail_bg">
                            
                            <?php
                             $pname= $record->item_name;
                             if($pname!='SMF Battery'){?>
                            <div class="imgBox"><img src="<?php echo base_url();?>uploads/products/<?php echo $record->product_image;?>"></div>   
                             <ul class="thumb">
                                <li><a href="<?php echo base_url();?>uploads/products/<?php echo $record->product_image;?>" target="imgBox"><img src="<?php echo base_url();?>uploads/products/<?php echo $record->product_image;?>"></a>
                                </li>
                            <?php 
                            $gallery1 = $record->gallery1;
                            $gallery2 = $record->gallery2;
                            $gallery3 = $record->gallery3;
                            
                            if($gallery1!=''){ ?>
                                <li><a href="<?php echo base_url();?>uploads/products/<?php echo $gallery1;?>" target="imgBox"><img src="<?php echo base_url();?>uploads/products/<?php echo $gallery1;?>"></a>
                                </li>
                            <?php }

                            if($gallery2!=''){ ?>

                                <li><a href="<?php echo base_url();?>uploads/products/<?php echo $gallery2;?>" target="imgBox"><img src="<?php echo base_url();?>uploads/products/<?php echo $gallery2;?>"></a>
                                </li>
                                <?php }

                            if($gallery3!=''){ ?>

                                <li><a href="<?php echo base_url();?>uploads/products/<?php echo $gallery3;?>" target="imgBox"><img src="<?php echo base_url();?>uploads/products/<?php echo $gallery3;?>"></a>
                                </li>
                                <?php }  
                                } else{?>
                                    
                                     <div class="imgBox"><img src="<?php echo base_url();?>uploads/products/<?php echo $record->product_image;?>"></div>   
                                <ul class="thumb">
                                <li><a href="<?php echo base_url();?>uploads/products/<?php echo $record->product_image;?>" target="imgBox"><img src="<?php echo base_url();?>uploads/products/<?php echo $record->product_image;?>"></a>
                                </li>
                                
                                    
                               <?php }?>
                           
                
                           
                            </ul>
                            
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="product__inner__layout">
                            <div class="row">
                               <!--<b> <?php echo $record->meta_title; ?> </b> <br/><br/><br/><br/>-->
                               
                               <!--<b><?php echo $record->item_name; ?> > <?php echo $record->category_name;?> > <?php echo $record->model_no; ?> </b> <br/><br/><br/><br/>-->
                               
                                <?php $pname= $record->item_name;
                               
                                 if($pname=='Online UPS')
                                 { ?> 
                                <div class="col-md-12">
                                    <h1 class="pdp__name"><?php echo $record->meta_title;;?></h1>
                                    
                                    <p class="pdp__name__below"><?php echo $record->short_description;?>
                                    </p>
                                    <p class="pdp__name__below">Model Number :<?php echo $record->model_no;?>
                                    </p>
                                </div>
                                <?php }
                                if($pname=='SMF Battery'){?>
                                <div class="col-md-12">
                                    <h1 class="pdp__name"><?php echo $record->item_name;?></h1>
                                    <p class="pdp__name__below">Brand: <?php echo $record->category_name;?>
                                    </p>
                                    <p class="pdp__name__below">AH Capacity: <?php echo $record->capacity;?>
                                    </p>
                                    <p class="pdp__name__below">Battery Colour: <?php echo $record->battery_colour;?>
                                    </p>
                                    <p class="pdp__name__below">Battery Application: <?php echo $record->battery_application;?>
                                    </p>
                                    <p class="pdp__name__below">Battery Size: <?php echo $record->battery_size;?>
                                    </p>
                                    <p class="pdp__name__below">Battery Weight: <?php echo $record->battery_weight;?>
                                    </p>
                                </div>
                                
                                <?php }
                                if($pname=='Servo Voltage Stabilizer'){?>
                                <div class="col-md-12">
                                    <h1 class="pdp__name"><?php echo $record->item_name;?></h1>
                                    <p class="pdp__name__below">KVA: <?php echo $record->range1;?>
                                    </p>
                                    <p class="pdp__name__below">Type: <?php echo $record->servo_type;?>
                                    </p>
                                    <p class="pdp__name__below">Phase: <?php echo $record->servo_phase;?>
                                    </p>
                                </div>
                                
                                <?php }
                                 if($pname=='UPS Accessories'){?>
                                <div class="col-md-12">
                                    <h1 class="pdp__name"><?php echo $record->item_name;?></h1>
                                    <p class="pdp__name__below">KVA: <?php echo $record->accessories_name;?>
                                    </p>
                                    <p class="pdp__name__below">Type: <?php echo $record->accessories_quantity;?>
                                    </p>
                                    <p class="pdp__name__below">Phase: <?php echo $record->accessories_description;?>
                                    </p>
                                </div>
                                
                                <?php }?>
                               
                            <div class="row">
                                <div class="col-md-12">
                                <?php 
                                $input = $record->input;
                                $output = $record->output;
                                $type = $record->type;
                                $dc_voltage = $record->dc_voltage;
                            ?>
                                    
                                    <div class="short__desc">
                                        <ol>
                                            <?php  if($input!='' && $pname!='SMF Battery'){ ?>
                                            <li><i class="fas fa-angle-right"></i><span><?php echo $input?></span></li>
                                            <?php }
                                             if($output!='' && $pname!='SMF Battery')     { ?>
                                            <li><i class="fas fa-angle-right"></i><span> <?php echo $output?></span></li>
                                             <?php  }
                                             if($type!='' && $pname!='SMF Battery') { ?>
                                            <li><i class="fas fa-angle-right"></i><span><?php echo $type;?></span></li>
                                             <?php } if($dc_voltage!='' && $pname!='SMF Battery') { ?>
                                            <li><i class="fas fa-angle-right"></i><span><?php echo $dc_voltage;?></span></li>
                                             <?php } ?>
                                        </ol>
                                    </div>
                                    <div class="product__price__enuiry">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalCenteraa" id="prd__enquiry">
                                            Enquire Now
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenteraa" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  
                                                    <div class="modal-body">
                                                          <button type="button" class="close" data-dismiss="modal" id="bg_t">&times;</button>
                                                        <div class="row">
                                                           <div class="col-md-5">
                                                               <div class="pop__up_bg">
                                                                  <img src="<?php echo base_url();?>assets/img/graphic2.svg" alt="">
                                                               </div>
                                                           </div>
                                                           <div class="col-md-7">
                                                               <div class="pop__up_form_construct">
                                                                 <div class="pop__up_form_construct_inner">
                                                                        <form action="<?php echo base_url();?>home/addEnquiry" name="myForm"  method="post" onsubmit="return validateForm()">
                                                                   <div class="row">                                                                      
                                                                            <div class="col-md-12">
                                                                                    <div class="pop_up_inner_short_title">
                                                                                        <h1>Get more things done with Enquiry platform.</h1>
                                                                                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                                                                                    </div>
                                                                            </div>
                                                                            <?php
                                                                            $pname= $record->item_name;
                                                                           
                                                                            if($pname=='Online UPS'){?>
                                                                                 <div class="col-md-6">
                                                                                <input type="text" placeholder="Products Model Number" required class="pop__up_form_enquiry" readonly value="<?php echo $record->model_no;?>" name="product_name" id="productname"></div>
                                                                            <?php }?>
                                                                            <?php if($pname=='SMF Battery'){
                                                                            $brand=$record->category_name;
                                                                            $capacity=$record->capacity;
                                                                            $brands=$brand.$capacity?>
                                                                            <div class="col-md-6">
                                                                                <input type="text" placeholder="Products Model Number" required class="pop__up_form_enquiry" readonly value="<?php echo $brands  ?>" name="product_name" id="productname"></div>
                                                                            <?php  } 
                                                                            if($pname=='Servo Voltage Stabilizer'){?>
                                                                                 <div class="col-md-6">
                                                                                <input type="text" placeholder="Products Model Number" required class="pop__up_form_enquiry" readonly value="<?php echo $record->sku;?>" name="product_name" id="productname"></div>
                                                                            <?php }
                                                                            if($pname=='UPS Accessories'){?>
                                                                            <div class="col-md-6">
                                                                                <input type="text" placeholder="Products Model Number" required class="pop__up_form_enquiry" readonly value="<?php echo $record->accessories_name;?>" name="product_name" id="productname"></div>
                                                                            <?php }?>
                                                                            
                                                                            <div class="col-md-6">
                                                                                    <input type="number" placeholder="Mobile No."  class="pop__up_form_enquiry" name="mobile" id="mobile no">
                                                                                     <span class="error " id="mno"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Valid Mobile No.</span>
                                                                                </div>
                                                                            <div class="col-md-6">
                                                                                <input type="text" placeholder="Full Name" class="pop__up_form_enquiry" name="name" id="fullname">
                                                                                 <span class="error" id="fname"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Full Name</span>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <input type="email" placeholder="Email"  class="pop__up_form_enquiry" name="email" id="emailname">
                                                                                 <span class="error" id="email"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Valid Email</span>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <textarea name="message" id="" cols="10" rows="5" required="" class="pop__up_form_message" placeholder="Subject"></textarea>
                                                                            </div>
                                                                            
                                                                            <div class="col-md-12">
                                                                                <button id="submit"  type="submit" class="ibtn">Sumbit Now</button>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <?php if($pname!='SMF Battery' && $pname!='Servo Voltage Stabilizer' && $pname!='UPS Accessories'){?>
        <div class="product___details__tabs">
            <ul class="nav nav-pills custom__pills">
                <li class="active"><a data-toggle="pill" href="#home" class="active">Product Details</a></li>
                <li><a data-toggle="pill" href="#menu2">Product Description</a></li>
                <li><a data-toggle="pill" href="#menu3">Product Brochure</a></li>
              
            </ul>
            
            <?php 
            
              $input = $record->input;
              $output = $record->output;
              $type = $record->type;
              
              $colour= $record->colour;
              $battery=$record->battery_quantity;
              $size=$record->size;
              $weight=$record->weight;
              
            
            ?>
            
            <div class="tab-content">
                <div id="home" class="tab-pane  active">
                    <div class="tab__content">
                        <div class="tab__content__wrap">
                            <h4 class="tab__content__title">Highlights</h4>
                            <div class="tab__special__descr">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="dtls_list">
                                            <?php 
                                            if($input!=''){?>
                                            <li><i class="fas fa-circle"></i><span><b>Input Type: </b><?php echo $input;?></span></li>
                                            <?php }else{?><li><i class="fas fa-circle"></i><span><b>Input Type: </b>  NA </span></li>
                                            <?php } ?>
                                            <?php 
                                            if($output!=''){?>
                                            <li><i class="fas fa-circle"></i><span><b>Output Type: </b><?php echo $output;?></span></li>
                                            <?php } else {?><li><i class="fas fa-circle"></i><span><b>Output Type: </b>  NA </span></li>
                                            <?php } ?>
                                          
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="dtls_list">
                                            <?php
                                            if($colour!=''){
                                            ?>
                                            <li><i class="fas fa-circle"></i><span><b>Colour:</b> <?php echo $colour;?> </span></li>
                                            <?php } else{?><li><i class="fas fa-circle"></i><span><b> Colour: </b>  NA </span></li>
                                            <?php } ?>
                                            
                                            <?php
                                            if($battery!=''){
                                            ?>
                                            <li><i class="fas fa-circle"></i><span><b>Battery:</b> <?php echo $battery;?></span></li>
                                            <?php }else{?><li><i class="fas fa-circle"></i><span><b> Battery: </b>  NA </span></li>
                                            <?php } ?>
                                            
                                            <?php
                                            if($size!=''){
                                            ?>
                                            <li><i class="fas fa-circle"></i><span><b>Size:</b> <?php echo $size;?></span></li>
                                            <?php } else{?><li><i class="fas fa-circle"></i><span><b> Size: </b>  NA </span></li>
                                            <?php } ?>

                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="dtls_list">
                                            <?php
                                            if($weight!=''){
                                            ?>
                                            <li><i class="fas fa-circle"></i><span><b>Weight:</b> <?php echo $weight;?></span></li>
                                            <?php } else{?><li><i class="fas fa-circle"></i><span><b> Weight: </b>  NA </span></li>
                                            <?php }?>
                                              <?php
                                            if($type!=''){
                                            ?>
                                            <li><i class="fas fa-circle"></i><span><b>Transformer Type: </b><?php echo $type;?></span></li>
                                            <?php }else{?> <li><i class="fas fa-circle"></i><span><b> Type: </b>  NA </span></li>
                                            <?php }?>
                                            <!--<li><i class="fas fa-circle"></i><span> Type : Inverters</span></li>-->
                                            <!--<li><i class="fas fa-circle"></i><span> SUPC: SDL606117822</span></li>-->

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="menu2" class="tab-pane fade">
                    <div class="tab__content">
                        <div class="tab__content__wrap">
                            <h4 class="tab__content__title">More Info</h4>
                            <div class="tab__special__descr">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="desc__pr_more">
                                            <p><?php echo $record->long_description;?>
                                            </p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <div class="tab__content">  
                        <div class="tab__content__wrap">
                          
                            <div class="tab__special__descr">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="desc__pr_more">
                                            <?php $brochure = $record->brochure; 
                                            if($brochure!=''){?>
                                              <a href="<?php echo base_url();?>uploads/products/<?php echo $brochure;?>" target="_blank">Download Product Brochure</a>&nbsp;
                                              <?php }else{ ?>
                                                 <p> Brochure Not Available </p> 
                                            <?php  }
                                            ?>
                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php }?>
        </div>
    </section>

     
<?php echo $footer;?>
<script>
    
    function validateForm() {
    

  var full_name = document.forms["myForm"]["name"].value;
  var email = document.forms["myForm"]["email"].value;
 
  
  var mobile_number = document.forms["myForm"]["mobile"].value;

  var maxLength = 10;
  var charLength =document.forms["myForm"]["mobile"].value.length;  
 

  if (  !isNaN(full_name)  || full_name == ""   ) {
     $('#fname').addClass('show_error');
   $('#fname').addClass('invalid');
    return false;
  }else{
      $('#fname').removeClass('show_error');
   $('#fname').removeClass('invalid');
  }

  if (  !isNaN(email)  || email == ""   ) {
   $('#email').addClass('show_error');
   $('#email').addClass('invalid');
    return false;
  }else{
  $('#email').removeClass('show_error');
   $('#email').removeClass('invalid');
  }
  
  if ( isNaN(mobile_number)  || mobile_number == "" || charLength !== maxLength  ) {
      debugger;
   $('#mno').addClass('show_error');
   $('#mno').addClass('invalid');
//   alert('not working');
    return false;
  }else{
    $('#mno').next().removeClass('show_error');
    $('#mno').removeClass('invalid');
     return true;
  }

}
</script>


<!--top form-->
<script>
    
    function validateFormTop() {
    

  var full_name = document.forms["myFormTop"]["name"].value;
  var email = document.forms["myFormTop"]["email"].value;
 
  var productName = document.forms["myFormTop"]["product_name"].value;
 
  var mobile_number = document.forms["myFormTop"]["mobile"].value;

  var maxLength = 10;
  var charLength =document.forms["myFormTop"]["mobile"].value.length; 
  
  if (  !isNaN(productName)  || productName == ""   ) {
     $('#pn').addClass('show_error');
   $('#pn').addClass('invalid');
    return false;
  }else{
      $('#pn').removeClass('show_error');
   $('#pn').removeClass('invalid');
  }


  if (  !isNaN(full_name)  || full_name == ""   ) {
     $('#fnamea').addClass('show_error');
   $('#fnamea').addClass('invalid');
    return false;
  }else{
      $('#fnamea').removeClass('show_error');
   $('#fnamea').removeClass('invalid');
  }

  if (  !isNaN(email)  || email == ""   ) {
   $('#emaila').addClass('show_error');
   $('#emaila').addClass('invalid');
    return false;
  }else{
  $('#emaila').removeClass('show_error');
   $('#emaila').removeClass('invalid');
  }
  
  if ( isNaN(mobile_number)  || mobile_number == "" || charLength !== maxLength  ) {
      debugger;
   $('#mnoa').addClass('show_error');
   $('#mnoa').addClass('invalid');
//   alert('not working');
    return false;
  }else{
    $('#mnoa').next().removeClass('show_error');
    $('#mnoa').removeClass('invalid');
     return true;
  }

}
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
<style>
    .error {
        text-align: center;
    font-weight: 400;
    letter-spacing: 1px;
    display: none;
    color: #fff;
    padding: 10px;
    border-radius: 10px;
    font-size: 15px;
    border: 1px solid #fff;
    margin-bottom: 20px;
    background: #FF7604;
}
.show_error {
    display: block;
}
  input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
#bg_t{
        background: #fff;
    opacity: 1;
    width: 35px;
    height: 35px;
    position: absolute;
    z-index: 1;
    top: 9px;
    right: 8px;
    border-radius: 50%;
    text-align: center;
}
</style>