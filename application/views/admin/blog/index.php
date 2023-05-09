<?php echo $header;?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2></h2>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Blog LIst</li>
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
                <a class="m-b-none" href="<?php echo base_url(); ?>admin/blog/add">Add New blog
                 
                </a>  
           </h3>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <?php if( $this->session->flashdata('message') !='' ){ ?>
                     <tr><td colspan="4" class="err_msg"><?php echo $this->session->flashdata('message'); ?></td></tr>
                <?php }?> 
                <tr>
                  <th>SNO</th>
                  <th>Image</th>
                  <th>blog Name</th>
                  
                  <th>Status</th>
                  
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
                
                   <img src="<?php echo base_url();?>uploads/blog/<?php echo $data->featured_image;?>" class="small_img">
                 
                  </td>
                  
                   <td><?php echo $data->blog_name;?></td>
                  <td> 
                  <?php $status = $data->status; 
                  if ($status == 'active') {?> 
                      <a title="Click to Deactivate" href="<?php echo base_url();?>admin/blog/update_status?sid=<?php echo $data->id;?>&svalue=<?php echo $status?>" class="btn btn success">Active</a> 
                  <?php } else {?> 
                      <a title="Click to Activate" href="<?php echo base_url();?>admin/blog/update_status?sid=<?php echo $data->id;?>&svalue=<?php echo $status?>" class="btn btn-danger">Inactive</a> 
                  <?php } ?>
                 </td> 
                  <td>
                  <a class="view" href="<?php echo base_url();?>admin/blog/view/<?php echo $data->id;?>"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a class="edit" href="<?php echo base_url();?>admin/blog/edit/<?php echo $data->id;?>"><i class="fa fa-external-link" aria-hidden="true"></i></a>
                    <a class="delete delete_record" href="javascript:" data-record-id="<?php echo $data->id;?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                  </td>
                  
                </tr>
                <?php $i++;} } ?>
               
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
        var location = "<?php echo urldecode(base_url()."admin/blog/delete"); ?>/"+record_id;     
        window.location.href=location;
     });
     
  });
  $(document).ready( function () {
    $('#example2').DataTable();
});
  </script>
  
  
<div class="example-modal">
        <div class="modal modal-danger" id="deleteModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete blog</h4>
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
  