<?php
class Color extends CI_Controller {
   
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
       
      $this->load->model('colormodel','',TRUE);     
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      
      $num_records = $this->colormodel->get_total_records();
     
     
      $data['num_records']  = $num_records;
      $base_url=base_url().'admin/color/index';
      $start_index=$this->uri->segment($this->uri->total_segments());
  
      $default_page_size = 5;
      if( $this->input->get('per_page') != '' ){
         $per_page = $this->input->get('per_page');
      }
      else{
         $per_page=$default_page_size;
      }
      
      $data['default_page_size']  = $default_page_size;
      $content_array=$this->colormodel->get_contents($per_page,$start_index);
      $data['content_array']=$content_array;
      $data['start_index']=$start_index;
      
      $data['pagination_links']=paging($base_url,$this->input->server("QUERY_STRING"),$num_records,$per_page,$this->uri->total_segments());
      
      $this->load->view('admin/color/index',$data);
   }
   function add(){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
        $this->load->model('colormodel','',TRUE);     
        
       if(!empty($this->input->post())){
          $insert_id=$this->colormodel->add($this->input->post());
          self::upload_file($insert_id,$_FILES,'image','add'); 
          
          $this->session->set_flashdata('message',"color has been added.");
          redirect("admin/color");  
       }
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      $this->load->view('admin/color/add',$data);
   }
   
   function edit($id){
       
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('colormodel','',TRUE);     
      
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->colormodel->fetch_details($id);
       if(!empty($this->input->post())){
          $result=$this->colormodel->edit($id,$this->input->post());
          if($result){
            self::upload_file($id,$_FILES,'image','edit');    
          }
        //   $sql=$this->db->query('INSERT into color_logs (color_id) values('.$id.')');
          $this->session->set_flashdata('message',"color has been updated.");
          redirect("admin/color");
       }
       $this->load->view('admin/color/edit',$data);
   }
     function upload_file($id,$fileArray,$column,$for='add'){
      if($id!='' && !empty($fileArray) && $fileArray[$column]['error']=="0" && $column!=''){
          
            $record=$this->colormodel->fetch_details($id);
            $ext = pathinfo($fileArray[$column]['name'], PATHINFO_EXTENSION);
            $file_name=rand(10,1000).date('YmdHis').".".$ext;
            if($for=="edit"){
                @unlink(FCPATH."uploads/color/".$record->$column);
            }
            $ffdsf=$this->colormodel->edit($id,[$column=>$file_name]);
            move_uploaded_file($fileArray[$column]['tmp_name'],FCPATH."uploads/color/".$file_name);
            chmod($ffdsf,0777);
            return true;
       }
   }
   
   function delete($id){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('colormodel','',TRUE);     
       if($id!=''){
         $this->colormodel->deletecolor($id);
         $this->session->set_flashdata('message',"color has been deleted.");
         redirect("admin/color");  
       }
   }
   function view($id){

       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('colormodel','',TRUE);     
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->colormodel->fetch_details($id);
       if(!empty($this->input->post())){
          $result=$this->colormodel->edit($id,$this->input->post());
          if($result){
            self::upload_file($insert_id,$_FILES,'image','edit');    
          }
          $this->session->set_flashdata('message',"color has been updated.");
          redirect("admin/color");
       }
       
      $this->load->view('admin/color/view',$data);
   }    
   
    function update_status(){
        
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session','pagination'));
        $this->load->model('productmodel','',TRUE);    
        
        $id= $_REQUEST['sid'];
        $status= $_REQUEST['svalue'];
        if($status == 'active')
        {
        $sql=$this->db->query("UPDATE color set status='inactive' where id='$id'");
        }else{
    
        $sql=$this->db->query("UPDATE color set status='active' where id='$id'");

    }
    redirect("admin/color");
  }
  

}