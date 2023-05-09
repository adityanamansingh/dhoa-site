<?php echo $header;?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Product</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?php echo base_url();?>admin/product">Product List</a></li>
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
              <h3 class="box-title">Add Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="Form1" method="post" enctype="multipart/form-data" action="">
                
                
                
                  <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Title </label>
                  <input type="text" name="meta_title" class="form-control" id="meta_title" value="<?php echo isset($record->meta_title)?$record->meta_title:"";?>" readonly placeholder="Enter Meta Title" required>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Keyword </label>
                  <input type="text" name="meta_keyword" class="form-control" id="meta_keyword" value="<?php echo isset($record->meta_keyword)?$record->meta_keyword:"";?>" readonly  placeholder="Enter Meta Keyword" required>
                </div>
                
                  <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Description </label>
                  <textarea name="meta_description" class="form-control sumernote" id="meta_description" readonly  placeholder="Enter Meta Description"> <?php echo $record->meta_description;?> </textarea>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Name</label>
                  <select class="form-control" name="product_name" disabled>
                  <option value="">Select Product Name</option>
                  <?php if(count($items)>0){ 
                    foreach($items as $item){
                      $selectedItem=$item->id==$record->product_name?"selected='selected'":"";
                      echo '<option '.$selectedItem.' value="'.$item->id.'">'.$item->item_name.'</option>';
                    }
                   }
                  ?>
                </select>
                </div>
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Brand </label>
                  <select class="form-control" name="brand" disabled>
                  <option value="">Select Category</option>
                  <?php if(count($category)>0){ 
                    foreach($category as $categorys){
                      $selectedCategory=$category->id==$record->category?"selected='selected'":"";
                      echo '<option '.$selectedCategory.' value="'.$categorys->id.'">'.$categorys->category_name.'</option>';
                    }
                   }
                  ?>
                </select>
                </div>
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Model Number </label>
                  <input type="text" name="model_no" class="form-control" value="<?php echo isset($record->model_no)?$record->model_no:"";?>" id="model_no" readonly placeholder="Enter Model Number">
                </div>
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Kva </label>
                  <select class="form-control" name="kva" disabled>
                  <option value="">Select Kva</option>
                  <?php if(count($kvas)>0){ 
                    foreach($kvas as $kva){
                      $selectedKva=$kva->id==$record->kva?"selected='selected'":"";
                      echo '<option '.$selectedKva.' value="'.$kva->id.'">'.$kva->range1.'</option>';
                    }
                   }
                  ?>
                </select>
                </div>
                <div class="form-group form_group_small">
                <?php $dataValue = $record->input?>
                  <label for="exampleInputEmail1">Input</label>
                  <select name="input" disabled class="form-control">
                  <option <?php echo $dataValue=="single phase"?"selected='selected'":""; ?> value="single phase">single phase</option>
                  <option <?php echo $dataValue=="three phase"?"selected='selected'":""; ?> value="three phase">three phase</option>
                  </select>
                </div>
                <div class="form-group form_group_small">
                <?php $dataValue = $record->output?>
                  <label for="exampleInputEmail1">Output</label>
                  <select name="output" disabled class="form-control">
                  <option <?php echo $dataValue=="single phase"?"selected='selected'":""; ?> value="single phase">single phase</option>
                  <option <?php echo $dataValue=="three phase"?"selected='selected'":""; ?> value="three phase">three phase</option>
                  </select>
                </div>
                <div class="form-group form_group_small">
                <?php $dataValue = $record->type?>
                  <label for="exampleInputEmail1">Type</label>
                  <select name="type" disabled class="form-control">
                  <option <?php echo $dataValue=="transformer less"?"selected='selected'":""; ?> value="transformer less">transformer less</option>
                  <option <?php echo $dataValue=="with isolation"?"selected='selected'":""; ?> value="with isolation">with isolation</option>
                  </select>
                </div>
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">DC Voltage </label>
                  <input type="text" name="dc_voltage" class="form-control" value="<?php echo isset($record->dc_voltage)?$record->dc_voltage:"";?>" id="dc_voltage" readonly placeholder="Enter DC Voltage">
                </div>
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Battery Quantity </label>
                  <input type="text" name="battery_quantity" class="form-control" value="<?php echo isset($record->battery_quantity)?$record->battery_quantity:"";?>" id="battery_quantity" readonly placeholder="Enter Quantity Required">
                </div>
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Application Type </label>
                  <select class="form-control" name="application" disabled>
                  <option value="">Select Application Type</option>
                  <?php if(count($applications)>0){ 
                    foreach($applications as $application){
                      $selectedApplication=$application->id==$record->application?"selected='selected'":"";
                      echo '<option '.$selectedApplication.' value="'.$application->id.'">'.$application->application_name.'</option>';
                    }
                   }
                  ?>
                </select>
                  
                </div>
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Description </label>
                  <textarea name="short_description" class="form-control" id="colour" placeholder="Enter Short Description" readonly><?php echo $record->short_description;?></textarea>
                </div>
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Description </label>
                  <textarea name="long_description" class="form-control" id="colour" placeholder="Enter Long Description" readonly><?php echo $record->long_description;?></textarea>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Colour </label>
                  <input type="text" name="colour" class="form-control" id="colour" value="<?php echo isset($record->colour)?$record->colour:"";?>" readonly placeholder="Enter Colour">
                </div>
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Size </label>
                  <input type="text" name="size" class="form-control" id="size" value="<?php echo isset($record->size)?$record->size:"";?>" readonly placeholder="Enter Size">
                </div>
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Weight </label>
                  <input type="text" name="weight" class="form-control" id="weight" value="<?php echo isset($record->weight)?$record->weight:"";?>" readonly placeholder="Enter Weight">
                </div>

                <div class="box-body">
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Image</label>
                 
                  <div class="image_preview">
                    <?php 
                    if(isset($record->product_image) && file_exists(FCPATH."uploads/products/".$record->product_image) && $record->product_image!=''){
                        echo '<img src="'.base_url().'uploads/products/'.$record->product_image.'" width="100px">';
                    }
                    ?>
                  </div>
                </div>

                <div class="box-body">
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Gallery 1</label>
              
                  <div class="image_preview">
                    <?php 
                    if(isset($record->gallery1) && file_exists(FCPATH."uploads/products/".$record->gallery1) && $record->gallery1!=''){
                        echo '<img src="'.base_url().'uploads/products/'.$record->gallery1.'" width="100px">';
                    }
                    ?>
                  </div>
                </div>

                <div class="box-body">
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Gallery 2</label>
               
                  <div class="image_preview">
                    <?php 
                    if(isset($record->gallery2) && file_exists(FCPATH."uploads/products/".$record->gallery2) && $record->gallery2!=''){
                        echo '<img src="'.base_url().'uploads/products/'.$record->gallery2.'" width="100px">';
                    }
                    ?>
                  </div>
                </div>

                <div class="box-body">
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Gallery 3</label>
             
                  <div class="image_preview">
                    <?php 
                    if(isset($record->gallery3) && file_exists(FCPATH."uploads/products/".$record->gallery3) && $record->gallery3!=''){
                        echo '<img src="'.base_url().'uploads/products/'.$record->gallery3.'" width="100px">';
                    }
                    ?>
                  </div>
                </div>
                    
              <!-- /.box-body -->

              
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