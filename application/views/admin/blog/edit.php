<?php echo $header;?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Product</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?php echo base_url();?>admin/blog">Blog List</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Blog</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="Form1" method="post" enctype="multipart/form-data" action="">
                
                   <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Title </label>
                  <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Enter Meta Title" value="<?php echo $record->meta_title;?>">
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Keywords </label>
                  <input type="text" name="meta_keyword" class="form-control" id="meta_keyword" placeholder="Enter Meta Keyword" value="<?php echo $record->meta_title;?>">
                </div>
                
                  <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Description </label>
                  <textarea name="meta_description" class="form-control " id="meta_description" placeholder="Enter Meta Description"><?php echo $record->meta_title;?></textarea>
                </div>

                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" value="<?php echo $record->slug;?>">
                </div>  
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Blog Name</label>
                 
                  <input type="text" class="form-control" name="blog_name" id="blog_name" value="<?php echo $record->blog_name;?>">
                </div>
                
                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Short Description </label>
                  <textarea name="blog_short_description" class="form-control " id="blog_short_description" placeholder="Enter Short Description"><?php echo $record->blog_short_description;?></textarea>
                </div>

                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Long Description </label>
                  <textarea name="blog_long_description" class="form-control " id="blog_long_description" placeholder="Enter Long Description"><?php echo $record->blog_long_description;?></textarea>
                </div>


               
                <div class="box-body">
                 <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Blog Image</label>
                  <input type="file" name="featured_image" class="form-control" id="featured_image">
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                  <div class="image_preview">
                    <?php 
                    if(isset($record->featured_image) && file_exists(FCPATH."uploads/blog/".$record->featured_image) && $record->featured_image!=''){
                        echo '<img src="'.base_url().'uploads/blog/'.$record->featured_image.'" width="100px">';
                    }
                    ?>
                  </div>
                </div>  
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="sbt" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  

   <script>
 
  CKEDITOR.replace('blog_short_description');
  CKEDITOR.replace('blog_long_description');
   
  </script>
   <style>
  .hide_custom{
    display: none;
  }
  </style>
  
  <?php echo $footer;?>