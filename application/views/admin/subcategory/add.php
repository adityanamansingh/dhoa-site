<?php echo $header;?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Sub Category</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?php echo base_url();?>admin/subcategory">SubCategory List</a></li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="custom_Width">
      <div class="row">
        <!-- left column -->
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Sub Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="Form1" method="post" enctype="multipart/form-data" action="">
              <div class="box-body">                  
              <div class="form-group">
                  <label for="exampleInputEmail1">Product Type</label>
                  <select class="form-control" name="category_type" id="category_type" required>
                  <option value="">Select Category Type</option>
                  <?php if(count($categorys)>0){ 
                    foreach($categorys as $category){
                      echo '<option value="'.$category->id.'">'.$category->category_name.'</option>';
                    }
                   }
                  ?>
                </select>
                 </div>
               
               <div class="form-group">
                  <label for="exampleInputEmail1">Sub Category Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Sub Category Name" required>
               </div>
               
               <div class="form-group">
                  <label for="exampleInputEmail1">Sub Category Slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Sub Category Slug" required>
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