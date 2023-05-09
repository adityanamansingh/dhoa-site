<?php echo $header;?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="<?php echo base_url();?>admin/Testimonial">Testimonial List</a></li>
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
              <h3 class="box-title">Edit Testimonial</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="Form1" method="post" enctype="multipart/form-data" action="">
              <div class="box-body">
                  <div class="content">
                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        
                       <div class="col-md-6">
                       <label for="exampleInputEmail1">Testimonial Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                         <div class="bg_gray"><span>Allowed file type is jpg | jpeg | png. Maximum Allowed file size is 100kb. File Dimensions (90×90)</span></div>
                       </div>
                       <div class="col-md-6">
                        <div class="image_preview">
                    <?php 
                    if(isset($record->image) && file_exists(FCPATH."uploads/testimonial/".$record->image) && $record->image!=''){
                        echo '<img src="'.base_url().'uploads/testimonial/'.$record->image.'" width="100px">';
                    }
                    ?>
                  </div></div>
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" value="<?php echo isset($record->name)?$record->name:"";?>" class="form-control" id="name" >
                </div>
                <div class="form-group">
                  <label for="designation">Designation</label>
                  <input type="text" name="designation" value="<?php echo isset($record->designation)?$record->designation:"";?>" class="form-control" id="designation" >
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" name="description" value="<?php echo isset($record->description)?$record->description:"";?>" class="form-control" id="description" >
                </div>
                </div>
                      </div>
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
  
  <script type="text/javascript" src="https://www.imtech.res.in/js/jquery.tokeninput.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.imtech.res.in/adminWebroot/styles/token-input.css" />


  <script>
        $(document).ready(function(){
            $("#Form1").validate
            ({ 
                 
                rules:
                {
                  'name':            {required: true},  
                  'address':            {required: true},  
                  'email':            {required: true,email:true},  
                  'image':            {extension: 'doc|pdf|jpg|jpeg|docx|png'},  
                }
               });
        });
        
        $(document).ready(function() {
         $("#brand_name").tokenInput('<?php echo base_url();?>admin/vendor/search_brand'<?php if(!empty($brand_selected)){ ?>,{prePopulate :<?php echo json_encode($brand_selected); ?>} <?php } ?>);
         });
          $(document).ready(function() {
         $("#item_name").tokenInput('<?php echo base_url();?>admin/vendor/search_item'<?php if(!empty($item_selected)){ ?>,{prePopulate :<?php echo json_encode($item_selected); ?>} <?php } ?>);
         });
          $(document).ready(function() {
         $("#supplier_name").tokenInput('<?php echo base_url();?>admin/vendor/search_vendor'<?php if(!empty($vendor_selected)){ ?>,{prePopulate :<?php echo json_encode($vendor_selected); ?>} <?php } ?>);
         });
         
        </script> 
         <style>
            .form-group {
                margin-bottom: 15px;
                width: 97%;
            }
            textarea{
                height:33px;
            }
            li.token-input-token {
                padding: 5px 8px !important;
                background-color: #1d77b5 !important;
                color: #fff !important;
                display: inline-block !important;
                float: left;
            }
            li.token-input-token span {
             color: #fff !important;
                font-size: 14px;
                margin-left: 11px;
            }
            ul.token-input-list{
                width:100% !important
            }
            ul.token-input-list li input {
                border: 0;
                width: auto !important;
            }
            li.token-input-selected-token {
                background-color: #f59436 !important ;
                color: #fff !important ;
            }
            li.token-input-selected-token {
                background-color: #f59436!important;
                color: #fff !important;
            }
            li.token-input-selected-token span {
                font-size: 15px;
                margin-left: 13px;
                color: #fff !important;
            }
        </style>
<?php echo $footer;?>