<?php echo $header;?>
 <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Product</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?php echo base_url();?>admin/product">Product List</a></li>
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
              <h3 class="box-title">Edit Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="Form1" method="post" enctype="multipart/form-data" action="">
                
                  <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Title </label>
                  <input type="text" name="meta_title" class="form-control" id="meta_title" value="<?php echo isset($record->meta_title)?$record->meta_title:"";?>" placeholder="Enter Meta Title" required>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Keyword </label>
                  <input type="text" name="meta_keyword" class="form-control" id="meta_keyword" value="<?php echo isset($record->meta_keyword)?$record->meta_keyword:"";?>"  placeholder="Enter Meta Keyword" required>
                </div>
                
                  <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Description </label>
                  <textarea name="meta_description" class="form-control " id="meta_description"  placeholder="Enter Meta Description"> <?php echo $record->meta_description;?> </textarea>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" value="<?php echo isset($record->slug)?$record->slug:"";?>">
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" class="form-control" name="product_name" id="product_name" value="<?php echo isset($record->product_name)?$record->product_name:"";?>">
                </div>
                
                 <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Tagline</label>
                  <input type="text" class="form-control" name="product_tagline" id="product_tagline" value="<?php echo isset($record->product_tagline)?$record->product_tagline:"";?>">
                </div>

                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Model Number </label>
                  <input type="text" name="model_no" class="form-control" value="<?php echo isset($record->model_no)?$record->model_no:"";?>" id="model_no" placeholder="Enter Model Number">
                </div>
              
                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">SKU</label>
                  <input type="text" name="sku" class="form-control" id="sku" placeholder="Enter Sku" value="<?php echo isset($record->sku)?$record->sku:"";?>" required>
                </div>
                
                 <div class="form-group form_group_small pro_brand">
                   
                   <label for="exampleInputEmail1">Category </label>
                   <select class="form-control" name="product_category" id="product_category" required>
                  <option value="">Select Category Type</option>
                  <?php if(count($category)>0){ 
                    foreach($category as $categories){
                      $selectedCategories=$categories->id==$record->product_category?"selected='selected'":"";
                      echo '<option '.$selectedCategories.' value="'.$categories->id.'">'.$categories->category_name.'</option>';
                    }
                   }
                  ?>
                </select>
                </div>

                <div class="form-group form_group_small pro_brand">
                
                
                   <label for="exampleInputEmail1">SubCategory </label>
                   <select class="form-control" name="product_subcategory" id="product_subcategory" required>
                     
                  <option value="">Select SubCategory Type</option>
                  <?php if(count($subcategorys)>0){ 
                
                foreach($subcategorys as $subcategories){
                  $selectedsubCategories=$subcategories->id==$record->product_subcategory?"selected='selected'":"";
                
                  echo '<option '.$selectedsubCategories.' value="'.$subcategories->id.'">'.$subcategories->name.'</option>';
                }
               }
              ?>
                </select>
                </div>

               
                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Color </label>
                  <?php 
                      $sel_color=get_sub_product('product_color','color','product_id',$record->id);
                    ?>
                  <select class="js-example-basic-multiple" id="multiple_color" name="product_color[]" multiple="multiple">
                  <?php 
                    foreach($color as $col){?>
                        <option <?php echo in_array($col->id,$sel_color)?'selected="selected"':"";?> value="<?php echo $col->id;?>"><?php echo $col->name;?></option>
                      <?php } ?>
                    </select> 
                </div>
                
                 <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Collection </label>
                  <?php 
                      $sel_collection=get_sub_product('product_collection','collection','product_id',$record->id);
                    ?>
                  <select class="js-example-basic-multiple" id="multiple_collection" name="product_collection[]" multiple="multiple">
                  <?php 
                    foreach($collection as $coll){?>
                        <option <?php echo in_array($coll->id,$sel_collection)?'selected="selected"':"";?> value="<?php echo $coll->id;?>"><?php echo $coll->name;?></option>
                      <?php } ?>
                    </select> 
                </div>

                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Material </label>
                  <?php 
                      $sel_material=get_sub_product('product_material','material','product_id',$record->id);
                    ?>
                  <select class="js-example-basic-multiple" id="multiple_material" name="product_material[]" multiple="multiple">
                      <?php foreach($material as $mat){?>
                        <option <?php echo in_array($mat->id,$sel_material)?'selected="selected"':"";?> value="<?php echo $mat->id;?>"><?php echo $mat->name;?></option>
                      <?php } ?>
                    </select> 
                </div>

                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Fabric </label>
                  <?php 
                      $sel_fabric=get_sub_product('product_fabric','fabric','product_id',$record->id);
                    ?>
                  <select class="js-example-basic-multiple" id="multiple_fabric" name="product_fabric[]" multiple="multiple">
                      <?php foreach($fabric as $fab){?>
                        <option <?php echo in_array($fab->id,$sel_fabric)?'selected="selected"':"";?> value="<?php echo $fab->id;?>"><?php echo $fab->name;?></option>

                      <?php } ?>
                    </select> 
                </div>

                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Look </label>
                  <?php 
                      $sel_look=get_sub_product('product_look','look','product_id',$record->id);
                    ?>
                  <select class="js-example-basic-multiple" id="multiple_look" name="product_look[]" multiple="multiple">
                      <?php foreach($look as $lok){?>
                        <option <?php echo in_array($lok->id,$sel_look)?'selected="selected"':"";?> value="<?php echo $lok->id;?>"><?php echo $lok->name;?></option>
                      <?php } ?>
                    </select> 
                </div>
             
                 <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Short Description </label>
                  <textarea name="short_description" class="form-control " id="colour" placeholder="Enter Short Description"><?php echo $record->short_description;?></textarea>
                </div>
                 <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Long Description </label>
                  <textarea name="long_description" class="form-control " id="colour" placeholder="Enter Long Description"><?php echo $record->long_description;?></textarea>
                </div>
                
                 <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">CBM</label>
                    <input type="text" name="cbm" class="form-control" id="sku" value="<?php echo isset($record->cbm)?$record->cbm:"";?>" placeholder="Enter CBM">
                </div>

                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">ETA</label>
                    <input type="text" name="eta" class="form-control" id="sku" value="<?php echo isset($record->eta)?$record->eta:"";?>" placeholder="Enter ETA">
                </div> 
                
                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">Size Chart</label>
                    <textarea name="size_chart" class="form-control" id="size_chart" placeholder="Enter Supplier Notes"><?php echo $record->size_chart;?></textarea>
                </div>

                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">Inclusions</label>
                    <textarea name="inclusions" class="form-control" id="inclusions" placeholder="Enter Supplier Notes"><?php echo $record->inclusions;?></textarea>
                </div>

                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">USP</label>
                    <textarea name="usp" class="form-control " id="usp" placeholder="Enter Usp"><?php echo $record->usp;?> </textarea>
                </div>

                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">Warranty/Returns</label>
                    <textarea name="warranty" class="form-control " id="warranty" placeholder="Enter Supplier Notes"><?php echo $record->warranty;?></textarea>
                </div>

                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">Assembly</label>
                    <textarea name="assembly" class="form-control " id="assembly" placeholder="Enter Supplier Notes"><?php echo $record->assembly;?></textarea>
                </div>
                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">Instructions</label>
                    <textarea name="instructions" class="form-control " id="instructions" placeholder="Enter Supplier Notes"><?php echo $record->instructions;?></textarea>
                </div>

                 
                <div class="box-body">
                 
                 <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Featured Image</label>
                  <input type="file" name="featured_image" class="form-control" id="featured_image">
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                  <div class="image_preview">
                    <?php 
                    if(isset($record->featured_image) && file_exists(FCPATH."uploads/products/".$record->featured_image) && $record->featured_image!=''){
                        echo '<img src="'.base_url().'uploads/products/'.$record->featured_image.'" width="100px">';
                    }
                    ?>
                  </div>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Image 1</label>
                  <input type="file" name="image1" class="form-control" id="image1">
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                  <div class="image_preview">
                    <?php 
                    if(isset($record->image1) && file_exists(FCPATH."uploads/products/".$record->image1) && $record->image1!=''){
                        echo '<img src="'.base_url().'uploads/products/'.$record->image1.'" width="100px">';
                    }
                    ?>
                    <a href="<?php echo base_url();?>admin/product/delete_image1?image1=<?php echo $record->image1;?>">Delete</a>
                  </div>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Image 2</label>
                  <input type="file" name="image2" class="form-control" id="image2">
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                  <div class="image_preview">
                    <?php 
                    if(isset($record->image2) && file_exists(FCPATH."uploads/products/".$record->image2) && $record->image2!=''){
                        echo '<img src="'.base_url().'uploads/products/'.$record->image2.'" width="100px">';
                    }
                    ?>
                      <a href="<?php echo base_url();?>admin/product/delete_image2/<?php echo $record->image2?>">Delete</a>
                  </div>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Image 3</label>
                  <input type="file" name="image3" class="form-control" id="image3">
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                  <div class="image_preview">
                    <?php 
                    if(isset($record->image3) && file_exists(FCPATH."uploads/products/".$record->image3) && $record->image3!=''){
                        echo '<img src="'.base_url().'uploads/products/'.$record->image3.'" width="100px">';
                    }
                    ?>
                     <a href="<?php echo base_url();?>admin/product/delete_image3/<?php echo $record->image3?>">Delete</a>
                  </div>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Image 4</label>
                  <input type="file" name="image4" class="form-control" id="image4">
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                  <div class="image_preview">
                    <?php 
                    if(isset($record->image4) && file_exists(FCPATH."uploads/products/".$record->image4) && $record->image4!=''){
                        echo '<img src="'.base_url().'uploads/products/'.$record->image4.'" width="100px">';
                    }
                    ?>
                     <a href="<?php echo base_url();?>admin/product/delete_image4<?php echo $record->image4?>">Delete</a>
                  </div>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Image 5</label>
                  <input type="file" name="image5" class="form-control" id="image5">
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                  <div class="image_preview">
                    <?php 
                    if(isset($record->image5) && file_exists(FCPATH."uploads/products/".$record->image5) && $record->image5!=''){
                        echo '<img src="'.base_url().'uploads/products/'.$record->image5.'" width="100px">';
                    }
                    ?>
                     <a href="<?php echo base_url();?>admin/product/delete_image5/<?php echo $record->image5?>">Delete</a>
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
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>        
  <script src="http://dev.soulilution.com/peertopia/Backend/additional-methods.min.js"></script>
<script>
    
   $(document).ready(function(){
     $('select#product_category').on('change',function(){
    var item_id=$(this).val(); 
    $.ajax({
            url:'<?php echo base_url();?>admin/product/get_subcategory',
            type:'POST',
            data:{item_id:item_id},
            success:function(html)
            { 
                $('select#product_subcategory').html(html);
            } 
        });
     });
   });
      
    $('#multiple_color').select2({
      placeholder: 'Select Multiple Color',
      width: '100%',
      allowClear: true,
    });
    $('#multiple_fabric').select2({
      placeholder: 'Select Multiple Fabric',
      width: '100%',
      allowClear: true,
    });
    $('#multiple_material').select2({
      placeholder: 'Select Multiple Material',
      width: '100%',
      allowClear: true,
    });
    $('#multiple_look').select2({
      placeholder: 'Select Multiple Look',
      width: '100%',
      allowClear: true,
    });
     $('#multiple_collection').select2({
      placeholder: 'Select Multiple Collection',
      width: '100%',
      allowClear: true,
    });
   </script>
   
   <script>
  CKEDITOR.replace('instructions');
  CKEDITOR.replace('inclusions');
  CKEDITOR.replace('warranty');
  CKEDITOR.replace('assembly');
  CKEDITOR.replace('usp');
  CKEDITOR.replace('size_chart');
  CKEDITOR.replace('short_description');
  CKEDITOR.replace('long_description');
   
  </script>
   <style>
  .hide_custom{
    display: none;
  }
  </style>
  
  <?php echo $footer;?>