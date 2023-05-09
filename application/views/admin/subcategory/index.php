<?php echo $header;?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Category List</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Sub Category List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
             <!-- <a class="btn btn-primary" href="<?php echo base_url();?>admin/Category/export_csv">Export</a> <br> -->
            
              <table id="example2"   class="table display table-bordered table-hover">
                <thead>
                <?php if( $this->session->flashdata('message') !='' ){ ?>
                     <tr><td colspan="4" class="err_msg"><?php echo $this->session->flashdata('message'); ?></td></tr>
                <?php }?> 
                <tr>
                  <th>SNO</th>
                  <th>Category Type</th>
                  <th>Sub Category Name</th>
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
                  <?php $sel_category=get_sub_product('category','category_name','id',$data->category_type); ?>
                  <td><?php echo $sel_category[0];?></td>
                  <td><?php echo $data->name;?></td> 
                  <td> 
                  <?php $status = $data->status; 
                  if ($status == 'active') {?> 
                      <a title="Click to Deactivate" href="<?php echo base_url();?>admin/subcategory/update_status?sid=<?php echo $data->id;?>&svalue=<?php echo $status?>" class="btn btn success"><span class="fa fa-toggle-on"></a> 
                  <?php } else {?> 
                      <a title="Click to Activate" href="<?php echo base_url();?>admin/subcategory/update_status?sid=<?php echo $data->id;?>&svalue=<?php echo $status?>" class="btn btn-danger"><span class="fa fa-toggle-off"></a> 
                  <?php } ?>
                </td>
                  <td>                  
                    <a class="edit" href="<?php echo base_url();?>admin/subcategory/edit/<?php echo $data->id;?>"><i class="fa fa-external-link" aria-hidden="true"></i></a>
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
        var location = "<?php echo urldecode(base_url()."admin/subcategory/delete"); ?>/"+record_id;     
        window.location.href=location;
     });
     
  });

  </script>
        <script>
  $(document).ready(function() {
    $('#example2').DataTable( {
          dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    });
  </script>
  
<div class="example-modal">
        <div class="modal modal-danger" id="deleteModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Category</h4>
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
  <div class="add_more_button">
    <a href="<?php echo base_url();?>admin/subcategory/add"><span id="add_more_icon"><i class="fa  fa-plus"></i></span><span id="add_more_content">Add More</span></a>
  </div>
  <?php echo $footer;?>
  <script>
    $(document).ready( function () {
    $('#example2').DataTable();
    });
  </script>