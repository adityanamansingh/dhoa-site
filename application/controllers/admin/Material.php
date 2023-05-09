<?php
class Material extends CI_Controller {
   
   public function __construct() {
      parent::__construct ();
      $this->load->helper('download');
     }
    
   function index()
   {
      $this->load->helper(array('form', 'url','common'));
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('materialmodel','',TRUE);     
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      
      $num_records = $this->materialmodel->get_total_records();
     
     
      $data['num_records']  = $num_records;
      $base_url=base_url().'admin/material/index';
      $start_index=$this->uri->segment($this->uri->total_segments());
  
      $default_page_size = 5;
      if( $this->input->get('per_page') != '' ){
         $per_page = $this->input->get('per_page');
      }
      else{
         $per_page=$default_page_size;
      }
      
      $data['default_page_size']  = $default_page_size;
      $content_array=$this->materialmodel->get_contents($per_page,$start_index);
      $data['content_array']=$content_array;
      $data['start_index']=$start_index;
      
      $data['pagination_links']=paging($base_url,$this->input->server("QUERY_STRING"),$num_records,$per_page,$this->uri->total_segments());
      
      $this->load->view('admin/material/index',$data);
   }
   function add(){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
        $this->load->model('materialmodel','',TRUE);     
        
       if(!empty($this->input->post())){
          $insert_id=$this->materialmodel->add($this->input->post());
          self::upload_file($insert_id,$_FILES,'image','add'); 
          
          $this->session->set_flashdata('message',"material has been added.");
          redirect("admin/material");  
       }
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      $this->load->view('admin/material/add',$data);
   }
   
   function edit($id){
       
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('materialmodel','',TRUE);     
      
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->materialmodel->fetch_details($id);
       if(!empty($this->input->post())){
          $result=$this->materialmodel->edit($id,$this->input->post());
          if($result){
            self::upload_file($id,$_FILES,'image','edit');    
          }
        //   $sql=$this->db->query('INSERT into material_logs (material_id) values('.$id.')');
          $this->session->set_flashdata('message',"material has been updated.");
          redirect("admin/material");
       }
       $this->load->view('admin/material/edit',$data);
   }
     function upload_file($id,$fileArray,$column,$for='add'){
      if($id!='' && !empty($fileArray) && $fileArray[$column]['error']=="0" && $column!=''){
          
            $record=$this->materialmodel->fetch_details($id);
            $ext = pathinfo($fileArray[$column]['name'], PATHINFO_EXTENSION);
            $file_name=rand(30,3000).date('YmdHis').".".$ext;
            if($for=="edit"){
                @unlink(FCPATH."uploads/material/".$record->$column);
            }
            $ffdsf=$this->materialmodel->edit($id,[$column=>$file_name]);
            move_uploaded_file($fileArray[$column]['tmp_name'],FCPATH."uploads/material/".$file_name);
            chmod($ffdsf,0777);
            return true;
       }
   }
   
   function delete($id){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('materialmodel','',TRUE);     
       if($id!=''){
         $this->materialmodel->deletematerial($id);
         $this->session->set_flashdata('message',"material has been deleted.");
         redirect("admin/material");  
       }
   }
   function view($id){

       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('materialmodel','',TRUE);     
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->materialmodel->fetch_details($id);
       if(!empty($this->input->post())){
          $result=$this->materialmodel->edit($id,$this->input->post());
          if($result){
            self::upload_file($insert_id,$_FILES,'image','edit');    
          }
          $this->session->set_flashdata('message',"material has been updated.");
          redirect("admin/material");
       }
       
      $this->load->view('admin/material/view',$data);
   }
  
   function update_status(){
        
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session','pagination'));
        $this->load->model('productmodel','',TRUE);    
        
        $id= $_REQUEST['sid'];
        $status= $_REQUEST['svalue'];
        if($status == 'active')
        {
        $sql=$this->db->query("UPDATE material set status='inactive' where id='$id'");
        }else{
    
        $sql=$this->db->query("UPDATE material set status='active' where id='$id'");
    }
    redirect("admin/material");
  }

}