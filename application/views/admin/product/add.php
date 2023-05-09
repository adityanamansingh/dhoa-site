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
            <form role="form" id="Form1" method="post" enctype="multipart/form-data" action=""  novalidate>
              <div class="box-body">
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Title </label>
                  <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Enter Meta Title" required>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Meta Keywords </label>
                  <input type="text" name="meta_keyword" class="form-control" id="meta_keyword" placeholder="Enter Meta Keyword" required>
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
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" class="form-control" name="product_name" id="product_name">
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Tagline</label>
                  <input type="text" class="form-control" name="product_tagline" id="product_tagline">
                </div>
                
                <div class="form-group form_group_small bg_visivle ">
                  <label for="exampleInputEmail1">Model Number </label>
                  <input type="text" name="model_no" class="form-control" id="model_no" placeholder="Enter Model Number" required>
                </div>
                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">SKU</label>
                  <input type="text" name="sku" class="form-control" id="sku" placeholder="Enter Sku" required>
                </div>
                                
                 <div class="form-group form_group_small pro_brand">
                   
                   <label for="exampleInputEmail1">Select Category</label>
                   <select class="form-control" name="product_category" id="product_category" required>
                  <option value="">Select Category Type</option>
                  <?php if(count($category)>0){ 
                      
                      foreach($category as $categories){
                        echo '<option value="'.$categories->id.'">'.$categories->category_name.'</option>';
                      }
                     }
                    ?>
                </select>
                </div>

                <div class="form-group form_group_small pro_brand">
                   
                   <label for="exampleInputEmail1">Select SubCategory</label>
                   <select class="form-control" name="product_subcategory" id="product_subcategory" required>
            <option value="">Select Sub Category</option>
            <?php if(count($subcategorys)>0){ 
                
              foreach($subcategorys as $subcategories){
                echo '<option value="'.$subcategories->id.'">'.$subcategories->name.'</option>';
              }
             }
            ?>
           </select>
                </div>
               
           
                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Color </label>
                  <select class="js-example-basic-multiple" id="multiple_color" name="product_color[]" multiple="multiple">
                  <?php foreach($color as $col){?>
                        <option value="<?php echo $col->id;?>"><?php echo $col->name;;?></option>
                      <?php } ?>
                    </select> 
                </div>
                
                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Collection</label>
                  <select class="js-example-basic-multiple" id="multiple_collection" name="multiple_collection[]" multiple="multiple">
                  <?php foreach($collection as $coll){?>
                        <option value="<?php echo $coll->id;?>"><?php echo $coll->name;;?></option>
                      <?php } ?>
                    </select> 
                </div>
                
                
                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Material </label>
                  <select class="js-example-basic-multiple" id="multiple_material" name="product_material[]" multiple="multiple">
                      <?php foreach($material as $mat){?>
                        <option value="<?php echo $mat->id;?>"><?php echo $mat->name;;?></option>
                      <?php } ?>
                    </select> 
                </div>
                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Fabric </label>
                  <select class="js-example-basic-multiple" id="multiple_fabric" name="product_fabric[]" multiple="multiple">
                      <?php foreach($fabric as $fab){?>
                        <option value="<?php echo $fab->id;?>"><?php echo $fab->name;;?></option>
                      <?php } ?>
                    </select> 
                </div>
                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Look </label>
                  <select class="js-example-basic-multiple" id="multiple_look" name="product_look[]" multiple="multiple">
                      <?php foreach($look as $lok){?>
                        <option value="<?php echo $lok->id;?>"><?php echo $lok->name;;?></option>
                      <?php } ?>
                    </select> 
                </div>
                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Short Description </label>
                  <textarea name="short_description" class="form-control " id="colour" placeholder="Enter Short Description"></textarea>
                </div>

                <div class="form-group form_group_small  bg_visivle">
                  <label for="exampleInputEmail1">Long Description </label>
                  <textarea name="long_description" class="form-control " id="colour" placeholder="Enter Long Description"></textarea>
                </div>

                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">CBM</label>
                    <input type="text" name="cbm" class="form-control" id="sku" placeholder="Enter CBM">
                </div>

                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">ETA</label>
                    <input type="text" name="eta" class="form-control" id="sku" placeholder="Enter ETA">
                </div>
                
                 <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">Size Chart</label>
                    <textarea name="size_chart" class="form-control" id="size_chart" placeholder="Enter Supplier Notes"></textarea>
                </div>

                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">Inclusions</label>
                    <textarea name="inclusions" class="form-control" id="inclusions" placeholder="Enter Supplier Notes"></textarea>
                </div>

                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">USP</label>
                    <textarea name="usp" class="form-control " id="usp" placeholder="Enter Usp"></textarea>
                </div>

                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">Warranty/Returns</label>
                    <textarea name="warranty" class="form-control " id="warranty" placeholder="Enter Supplier Notes"></textarea>
                </div>

                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">Assembly</label>
                    <textarea name="assembly" class="form-control " id="assembly" placeholder="Enter Supplier Notes"></textarea>
                </div>
                <div class="form-group form_group_small  servo_custom">
                    <label for="exampleInputEmail1">Instructions</label>
                    <textarea name="instructions" class="form-control " id="instructions" placeholder="Enter Supplier Notes"></textarea>
                </div>
                            
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Featured Image</label>
                  <input type="file" name="featured_image" class="form-control" id="featured_image" required>
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Image 1</label>
                  <input type="file" name="image1" class="form-control" id="image1">
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                </div>
               
               <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Image 2</label>
                  <input type="file" name="image2" class="form-control" id="image2">
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Image 3</label>
                  <input type="file" name="image3" class="form-control" id="image3">
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Image 4</label>
                  <input type="file" name="image4" class="form-control" id="image4">
                     <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png.</span></div>
                </div>
                
                <div class="form-group form_group_small">
                  <label for="exampleInputEmail1">Product Image 5</label>
                  <input type="file" name="image5" class="form-control" id="image5">
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