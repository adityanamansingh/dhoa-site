<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DHOA| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url()."assets/admin/"?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/admin/"?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/admin/"?>dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/admin/"?>plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/admin/"?>plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/admin/"?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/admin/"?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/admin/"?>plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/admin/"?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
   <!-- CKEDITOR -->
  <script src="https://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <!--<script src="<?php echo base_url()."assets/admin/"?>plugins/datatables/dataTables.bootstrap.min.js"></script>-->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b>DHOA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DHOA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
      
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">DHOA Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 Admin
             
                </p>
              </li>
              <li class="user-footer">
                  <a href="<?php echo base_url();?>admin/logout" class="btn btn-default btn-flat">Sign out</a>
                
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
       -->
      <br>
       <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <?php 
            $get_controller=$this->router->fetch_class();
            $get_method=$this->router->fetch_method();
        ?>
        <li class="<?php echo $get_controller=="login" && $get_method=="dashboard"?"active":"";?>">
          <a href="<?php echo base_url();?>admin/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php echo $get_controller=="slider" && $get_method=="index"?"active":"";?>">
          <a href="<?php echo base_url();?>admin/slider">
          <i class="fa fa-laptop"></i> <span>Manage Slider</span><i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo $get_controller=="slider" && $get_method=="add"?"active":"";?>"><a href="<?php echo base_url();?>admin/slider/add"><i class="fa fa-circle-o"></i>Add</a></li>
            <li class="<?php echo $get_controller=="slider" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/slider"><i class="fa fa-circle-o"></i>List</a></li>
          </ul>
        </li>
        
        <li class="<?php echo $get_controller=="category" && $get_method=="index"?"active":"";?>">
          <a href="<?php echo base_url();?>admin/category">
          <i class="fa fa-edit"></i> <span>Manage Category</span><i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          <li class="<?php echo $get_controller=="category" && $get_method=="add"?"active":"";?>"><a href="<?php echo base_url();?>admin/category/add"><i class="fa fa-circle-o"></i>Add Category</a></li>
            <li class="<?php echo $get_controller=="category" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/category"><i class="fa fa-circle-o"></i>Category List</a></li>          
          </ul>
        </li>

        <li class="<?php echo $get_controller=="subcategory" && $get_method=="index"?"active":"";?>">
          <a href="<?php echo base_url();?>admin/subcategory">
          <i class="fa fa-edit"></i> <span>Manage SubCategory</span><i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          <li class="<?php echo $get_controller=="subcategory" && $get_method=="add"?"active":"";?>"><a href="<?php echo base_url();?>admin/subcategory/add"><i class="fa fa-circle-o"></i>Add Subcategory</a></li>
            <li class="<?php echo $get_controller=="subcategory" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/subcategory"><i class="fa fa-circle-o"></i>Subcategory List</a></li>         
           </ul>
        </li>
        
        <li class="<?php echo $get_controller=="blog" && $get_method=="index"?"active":"";?>">
          <a href="<?php echo base_url();?>admin/blog">
          <i class="fa fa-edit"></i> <span>Manage Blog</span><i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          <li class="<?php echo $get_controller=="blog" && $get_method=="add"?"active":"";?>"><a href="<?php echo base_url();?>admin/blog/add"><i class="fa fa-circle-o"></i>Add Blog</a></li>
            <li class="<?php echo $get_controller=="blog" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/blog"><i class="fa fa-circle-o"></i>Blog List</a></li>          
          </ul>
        </li>

        <li class="<?php echo $get_controller=="product"?"active":"";?> treeview">
          <a href="#">
            <i class="fa  fa-archive"></i> <span>Manage Product</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo $get_controller=="product" && $get_method=="add"?"active":"";?>"><a href="<?php echo base_url();?>admin/product/add"><i class="fa fa-circle-o"></i>Add Product</a></li>
            <li class="<?php echo $get_controller=="product" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/product"><i class="fa fa-circle-o"></i>Product List</a></li>
            <li class="<?php echo $get_controller=="product" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/product/featured"><i class="fa fa-circle-o"></i>Featured List</a></li>
            <li class="<?php echo $get_controller=="color" && $get_method=="add"?"active":"";?>"><a href="<?php echo base_url();?>admin/color/add"><i class="fa fa-circle-o"></i>Add Color</a></li>
            <li class="<?php echo $get_controller=="color" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/color"><i class="fa fa-circle-o"></i>Color List</a></li>
            <li class="<?php echo $get_controller=="collection" && $get_method=="add"?"active":"";?>"><a href="<?php echo base_url();?>admin/collection/add"><i class="fa fa-circle-o"></i>Add Collection</a></li>
            <li class="<?php echo $get_controller=="collection" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/collection"><i class="fa fa-circle-o"></i>Collection List</a></li>
            <li class="<?php echo $get_controller=="fabric" && $get_method=="add"?"active":"";?>"><a href="<?php echo base_url();?>admin/fabric/add"><i class="fa fa-circle-o"></i>Add Fabric</a></li>
            <li class="<?php echo $get_controller=="fabric" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/fabric"><i class="fa fa-circle-o"></i>Fabric List</a></li>
            <li class="<?php echo $get_controller=="material" && $get_method=="add"?"active":"";?>"><a href="<?php echo base_url();?>admin/material/add"><i class="fa fa-circle-o"></i>Add Material</a></li>
            <li class="<?php echo $get_controller=="material" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/material"><i class="fa fa-circle-o"></i>Material List</a></li>
            <li class="<?php echo $get_controller=="look" && $get_method=="add"?"active":"";?>"><a href="<?php echo base_url();?>admin/look/add"><i class="fa fa-circle-o"></i>Add Look</a></li>
            <li class="<?php echo $get_controller=="look" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/look"><i class="fa fa-circle-o"></i>Look List</a></li>
          
          </ul>
        </li>
      
        <li class="<?php echo $get_controller=="testimonial" && $get_method=="index"?"active":"";?>treeview">
          <a href="<?php echo base_url();?>admin/testimonial">
            <i class="fa fa-image"></i> <span>Manage Testimonial</span><i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo $get_controller=="testimonial" && $get_method=="add"?"active":"";?>"><a href="<?php echo base_url();?>admin/testimonial/add"><i class="fa fa-circle-o"></i>Add</a></li>
            <li class="<?php echo $get_controller=="testimonial" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/testimonial"><i class="fa fa-circle-o"></i>List</a></li>
          </ul>
        </li>
        
        <li class="<?php echo $get_controller=="contact" && $get_method=="index"?"active":"";?>treeview">
          <a href="<?php echo base_url();?>admin/contact">
            <i class="fa fa-image"></i> <span>Manage Contact</span><i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo $get_controller=="contact" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/contact"><i class="fa fa-circle-o"></i>List</a></li>
          </ul>
        </li>

        <li class="<?php echo $get_controller=="subs"?"active":"";?> treeview">
          <a href="#">
            <i class="fa fa-battery-full"></i> <span>Manage Subscribers</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo $get_controller=="subs" && $get_method=="index"?"active":"";?>"><a href="<?php echo base_url();?>admin/subscriber"><i class="fa fa-circle-o"></i>List</a></li>
          </ul>
        </li>      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>