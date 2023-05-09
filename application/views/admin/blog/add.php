<?php echo $header;?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Blog</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?php echo base_url();?>admin/blog">Blog List</a></li>
        <li class="active">Add</li>
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
              <h3 class="box-title">Add blog</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="Form1" method="post" enctype="multipart/form-data" action=""  novalidate>
              <div class="box-body">
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Title </label>
                  <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Enter Meta Title" >
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Keywords </label>
                  <input type="text" name="meta_keyword" class="form-control" id="meta_keyword" placeholder="Enter Meta Keyword" >
                </div>
                
                  <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Description </label>
                  <textarea name="meta_description" class="form-control " id="meta_description" placeholder="Enter Meta Description"></textarea>
                </div>

                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug">
                </div>  
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Blog Name</label>
                 
                  <input type="text" class="form-control" name="blog_name" id="blog_name">
                </div>
                
                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Short Description </label>
                  <textarea name="blog_short_description" class="form-control " id="colour" placeholder="Enter Short Description"></textarea>
                </div>

                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Long Description </label>
                  <textarea name="blog_long_description" class="form-control " id="colour" placeholder="Enter Long Description"></textarea>
                </div>

               
             
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Featured Image</label>
                  <input type="file" name="featured_image" class="form-control" id="featured_image" required>
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
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


  <?php echo $footer;?>