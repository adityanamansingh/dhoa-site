<?php echo $header;?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>Slider</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?php echo base_url();?>admin/slider">Slider List</a></li>
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
              <h3 class="box-title">Add Slider</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="Form1" method="post" enctype="multipart/form-data" action="">
              <div class="box-body">       
                <div class="form-group">
                  <label for="image">Slider Image</label>
                  <input type="file" name="image" class="form-control" id="image" required >
                   <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png. Maximum Allowed file size is 100kb. File Dimensions (1017×380)</span></div>
                </div>
                <div class="form-group">
                  <label for="name">Slider Name</label>
                  <input type="input" name="name" class="form-control" id="name" required>
                </div>
                
                <div class="form-group">
                  <label for="name">Slider Text</label>
                  <input type="input" name="slider_text" class="form-control" id="text">
                </div>
                
                <div class="form-group">
                  <label for="name">Slider Link</label>
                  <input type="input" name="slider_link" class="form-control" id="text">
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
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>        
  <script src="http://dev.soulilution.com/peertopia/Backend/additional-methods.min.js"></script>
  
  
  <?php echo $footer;?>