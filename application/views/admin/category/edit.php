<?php echo $header;?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Category</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?php echo base_url();?>admin/Category">Category List</a></li>
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
              <h3 class="box-title">Edit Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="Form1" method="post" enctype="multipart/form-data" action="">
              <div class="box-body">
                 
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" name="category_name" class="form-control" id="category_name" value="<?php echo isset($record->category_name)?$record->category_name:"";?>"  placeholder="Enter Category Name">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" value="<?php echo isset($record->slug)?$record->slug:"";?>"  placeholder="Enter Category Slug">
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Category Image</label>
                  <input type="file" name="category_image" class="form-control" id="featured_image">
                    
                  <div class="image_preview">
                    <?php 
                    if(isset($record->category_image) && file_exists(FCPATH."uploads/category/".$record->category_image) && $record->category_image!=''){
                        echo '<img src="'.base_url().'uploads/category/'.$record->category_image.'" width="100px">';
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

  <?php echo $footer;?>