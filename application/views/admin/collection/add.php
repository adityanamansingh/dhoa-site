<?php echo $header;?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?php echo base_url();?>admin/collection">Collection List</a></li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content collection Controller -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Collection</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="Form1" method="post" enctype="multipart/form-data" action="">
              <div class="box-body">       
                
                <div class="form-group">
                  <label for="image">Collection Name</label>
                  <input type="input" name="name" class="form-control" id="name" required>
                </div>
                
                 <div class="form-group">
                  <label for="image">Collection Slug</label>
                  <input type="input" name="slug" class="form-control" id="slug" required>
                </div>
                
                <div class="form-group">
                  <label for="image">Collection Image</label>
                  <input type="file" name="image" class="form-control" id="image" required >
                   <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
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