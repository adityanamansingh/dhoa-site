<?php echo $header;?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">testimonial LIst</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                       <h3  style="float: right;">
                    <a class="m-b-none" href="<?php echo base_url(); ?>admin/testimonial/add">Add New </a> 
              </h3> 
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <?php if( $this->session->flashdata('message') !='' ){ ?>
                     <tr><td colspan="4" class="err_msg"><?php echo $this->session->flashdata('message'); ?></td></tr>
                <?php }?> 
                <tr>
                  <th>SNO</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Created At</th>
                  <th style="width: 230px;">Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php if(!empty($content_array)){
                    $i=1;
                    foreach($content_array as $data){
                    ?>
                 

                <tr>
                  <td><?php echo $i;?></td>
                  <td>
                  <?php if($data->image!=''){?>
                    <img src="<?php echo base_url();?>uploads/testimonial/<?php echo $data->image;?>" class="small_img">
                  <?php }else{
                    echo "NA";
                  } ?>
                  <td><?php echo $data->name;?></td>
                  <td><?php echo $data->designation;?></td>
                  <td><?php echo $data->description;?></td>
                   <td> 
                  <?php $status = $data->status; 
                  if ($status == 'active') {?> 
                      <a title="Click to Deactivate" href="<?php echo base_url();?>admin/testimonial/update_status?sid=<?php echo $data->id;?>&svalue=<?php echo $status?>" class="btn btn success">Active</a> 
                  <?php } else {?> 
                      <a title="Click to Activate" href="<?php echo base_url();?>admin/testimonial/update_status?sid=<?php echo $data->id;?>&svalue=<?php echo $status?>" class="btn btn-danger">Inactive</a> 
                  <?php } ?>
                 </td> 
                  <td><?php echo $data->created_at;?></td>
                  <td>
                  
                    <a class="edit" href="<?php echo base_url();?>admin/testimonial/edit/<?php echo $data->id;?>"><i class="fa fa-external-link" aria-hidden="true"></i></a>
                    <a class="delete delete_record" href="javascript:" data-record-id="<?php echo $data->id;?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                  </td>
                  
                </tr>
                <?php $i++;} } ?>
              
                  <tr><td colspan="5"><div class="pagination"><?php echo $pagination_links;?></div></td></tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <script type="">
  $(function(){
     $('.delete_record').on('click',function(){
        var record_id=$(this).data('record-id');
        $('.delete_button').attr('data-delete-id',record_id);
        $('#deleteModal').modal('show');
        
     });
     $('.delete_button').on('click',function(){
        var record_id=$(this).data('delete-id');
        var location = "<?php echo urldecode(base_url()."admin/testimonial/delete"); ?>/"+record_id;     
        window.location.href=location;
     });
     
  });
  </script>
  
  
<div class="example-modal">
        <div class="modal modal-danger" id="deleteModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete testimonial</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure want to delete.?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <button type="button" data-delete-id='' class="btn btn-outline delete_button">Delete</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
</div>  
  <?php echo $footer;?>
  