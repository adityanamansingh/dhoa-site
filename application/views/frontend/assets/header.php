<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>DHOA</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/black-logo.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
     <link rel="stylesheet" href="<?php echo base_url();?>assets/css/media.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/swiper.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Estonia&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Tangerine:wght@700&display=swap" rel="stylesheet">

    <script src="<?php echo base_url();?>assets/js/oak-slider.js"></script>
</head>

<body>

    <div class="headers">
        <div class="row">
            <div class="col-md-2">
                <div class="logo"> <a href="<?php echo base_url();?>"> <img src="<?php echo base_url();?>assets/img/alogo.png" alt="Image" class="uplogo" >  <img src="<?php echo base_url();?>assets/img/bottomlogo.png" alt="Image"  class="downups"> </a> </div>
            </div>
            <div class="col-md-10">
                <div class="upper-side">
                   
                    <!-- end logo -->
                    <div class="phone-email "> <img src="<?php echo base_url();?>assets/img/icon-phone.png" alt="Image">
                        <h4>(888) 638-3462</h4>
                        <small><a href="mailto:hello@dhoa.com">hello@dhoa.com</a></small>
                    </div>
                    
                    <!-- end phone -->

                    <!-- end language -->
                    <div class="hamburger">
                        <div class="humbergs">
                            <span class="bar1"></span>
                            <span class="bar2"></span>
                            <span class="bar3"></span>
                        </div>
                    </div>
                    <!-- end hamburger -->
                </div>
                <div class="down_side hidden-xs">
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
        </div>

        <!--desktop menu -->
        <div class="menus_desktop">
            <div class="menuinner">
                 <div class="mobophone">
                                 <div class="wrapsmobo">
                                      <img src="<?php echo base_url();?>assets/img/icon-phone.png" alt="Image">
                      
                                 </div>
                                 <div class="mailcontent">
                                       <h5>(888) 638-3462</h5>
                                       <small><a href="mailto:hello@dhoa.com">hello@dhoa.com</a></small>
                                 </div>
                    </div>
                    <!-- Its iS only for Moboile menu not desktop-->
                <ul class="hidden-desktop">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url();?>about">About Us</a></li>
                        <li><a href="<?php echo base_url();?>products">Our Products</a></li>
                        
                        <!--<li><a href="<?php echo base_url();?>collection">Collection</a></li>-->
                        <li><a href="<?php echo base_url();?>blog">Blog</a></li>
                        <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
                    </ul>
                
                <h5>Explore By <i class="fas fa-plus"></i></h5>
               <div class="innerexplores content">
                   
                
                <h4>Area</h4>
                
                <ul>
                     <?php if(count($category)>0){
                         foreach($category as $cate){?> 
                    <li><a href="<?php echo base_url();?>getcategory/<?php echo $cate->slug;?>"><?php echo $cate->category_name;?></a></li>
                   <?php } } ?>
                </ul>
                <h4>Products</h4>
                <ul>
                    <?php if(count($subcategory)>0){
                         foreach($subcategory as $subcate){?> 
                    <li><a href="<?php echo base_url();?>getsubcategory/<?php echo $subcate->slug;?>"><?php echo $subcate->name;?></a></li>
                   <?php } } ?>
                </ul>
                
                
                <!-- <h4>Collection</h4>-->
                <!--<ul>-->
                <!--    <li><a href="#">Collection1</a></li>-->
                <!--    <li><a href="#">Collection2</a></li>-->
                  
                <!--</ul>-->
               </div>
            </div>
        </div>
    </div>