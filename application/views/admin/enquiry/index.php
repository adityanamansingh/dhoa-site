<?php echo $header;?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Enquiry  List</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Enquiry List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            <a class="btn btn-primary" href="<?php echo base_url();?>admin/enquiry/export_csv">Export</a> <br>

            
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <?php if( $this->session->flashdata('message') !='' ){ ?>
                     <tr><td colspan="4" class="err_msg"><?php echo $this->session->flashdata('message'); ?></td></tr>
                <?php }?> 
                <tr>
                  <th>SNO</th>
                  <th>Product Name</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Mobile Number</th>
                  <th>Status</th>
                  <th style="width: 230px;">Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php if(!empty($content_array)){
                    $i=1;
                    foreach($content_array as $data){
                    ?>
                <tr colspan="3">
                  <td><?php echo $i;?></td>
                  <td><?php echo $data->product_name;?></td>
                  <td><?php echo $data->name;?></td> 
                  <td><?php echo $data->email;?></td>
                  <td><?php echo $data->message;?></td>
                  <td><?php echo $data->phone_number;?></td>
                  <td><?php echo $data->status; ?></td>
                  <td>                  
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
        var location = "<?php echo urldecode(base_url()."admin/enquiry/delete"); ?>/"+record_id;     
        window.location.href=location;
     });
     
  });
  
  $(function(){
     $('.mature_record').on('click',function(){
        var record_id=$(this).data('record-id');
        $('.mature_button').attr('data-delete-id',record_id);
        $('#matureModal').modal('show');
        
     });
     $('.mature_button').on('click',function(){
        var record_id=$(this).data('delete-id');
        var location = "<?php echo urldecode(base_url()."admin/enquiry/status"); ?>/"+record_id;     
        window.location.href=location;
     });
     
  });

  $(function(){
     $('.cancel_record').on('click',function(){
        var record_id=$(this).data('record-id');
        $('.cancel_button').attr('data-delete-id',record_id);
        $('#cancelModal').modal('show');
        
     });
     $('.cancel_button').on('click',function(){
        var record_id=$(this).data('delete-id');
        var location = "<?php echo urldecode(base_url()."admin/enquiry/cancel"); ?>/"+record_id;     
        window.location.href=location;
     });
     
  });

  $(function(){
     $('.pending_record').on('click',function(){
        var record_id=$(this).data('record-id');
        $('.pending_button').attr('data-delete-id',record_id);
        $('#pendingModal').modal('show');
        
     });
     $('.pending_button').on('click',function(){
        var record_id=$(this).data('delete-id');
        var location = "<?php echo urldecode(base_url()."admin/enquiry/pending"); ?>/"+record_id;     
        window.location.href=location;
     });
     
  });


  $(document).ready( function () {
    $('#example2').DataTable();
} );
  </script>
  
  
<div class="example-modal">
        <div class="modal modal-danger" id="deleteModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Enquiry</h4>
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
<div class="example-modal">
        <div class="modal modal-danger" id="matureModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Change status to mature</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure want to Mature.?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <button type="button" data-delete-id='' class="btn btn-outline mature_button">Mature</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
</div>  
<div class="example-modal">
        <div class="modal modal-danger" id="cancelModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Change status to cancel</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure want to cancel.?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <button type="button" data-delete-id='' class="btn btn-outline cancel_button">Update</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
</div> 
<div class="example-modal">
        <div class="modal modal-danger" id="pendingModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Change status to pending</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure want to pending.?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <button type="button" data-delete-id='' class="btn btn-outline pending_button">Pending</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
</div>  
  <?php echo $footer;?>
  