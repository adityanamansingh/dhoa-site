<?php
class Look extends CI_Controller {
   
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
       
      $this->load->model('ads2model','',TRUE);     
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      
      $num_records = $this->ads2model->get_total_records();
     
     
      $data['num_records']  = $num_records;
      $base_url=base_url().'admin/ads2/index';
      $start_index=$this->uri->segment($this->uri->total_segments());
  
      $default_page_size = 5;
      if( $this->input->get('per_page') != '' ){
         $per_page = $this->input->get('per_page');
      }
      else{
         $per_page=$default_page_size;
      }
      
      $data['default_page_size']  = $default_page_size;
      $content_array=$this->ads2model->get_contents($per_page,$start_index);
      $data['content_array']=$content_array;
      $data['start_index']=$start_index;
      
      $data['pagination_links']=paging($base_url,$this->input->server("QUERY_STRING"),$num_records,$per_page,$this->uri->total_segments());
      
      $this->load->view('admin/ads2/index',$data);
   }
   function add(){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
        $this->load->model('ads2model','',TRUE);     
        
       if(!empty($this->input->post())){
          $insert_id=$this->ads2model->add($this->input->post());
          self::upload_file($insert_id,$_FILES,'image','add'); 
          
          $this->session->set_flashdata('message',"ads2 has been added.");
          redirect("admin/ads2");  
       }
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      $this->load->view('admin/ads2/add',$data);
   }
   
   function edit($id){
       
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('ads2model','',TRUE);     
      
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->ads2model->fetch_details($id);
       if(!empty($this->input->post())){
          $result=$this->ads2model->edit($id,$this->input->post());
          if($result){
            self::upload_file($id,$_FILES,'image','edit');    
          }
        //   $sql=$this->db->query('INSERT into ads2_logs (ads2_id) values('.$id.')');
          $this->session->set_flashdata('message',"ads2 has been updated.");
          redirect("admin/ads2");
       }
       $this->load->view('admin/ads2/edit',$data);
   }
     function upload_file($id,$fileArray,$column,$for='add'){
      if($id!='' && !empty($fileArray) && $fileArray[$column]['error']=="0" && $column!=''){
          
            $record=$this->ads2model->fetch_details($id);
            $ext = pathinfo($fileArray[$column]['name'], PATHINFO_EXTENSION);
            $file_name=rand(20,2000).date('YmdHis').".".$ext;
            if($for=="edit"){
                @unlink(FCPATH."uploads/ads2/".$record->$column);
            }
            $ffdsf=$this->ads2model->edit($id,[$column=>$file_name]);
            move_uploaded_file($fileArray[$column]['tmp_name'],FCPATH."uploads/ads2/".$file_name);
            chmod($ffdsf,0777);
            return true;
       }
   }
   
   function delete($id){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('ads2model','',TRUE);     
       if($id!=''){
         $this->ads2model->deleteads2($id);
         $this->session->set_flashdata('message',"ads2 has been deleted.");
         redirect("admin/ads2");  
       }
   }
   function view($id){

       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('ads2model','',TRUE);     
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->ads2model->fetch_details($id);
       if(!empty($this->input->post())){
          $result=$this->ads2model->edit($id,$this->input->post());
          if($result){
            self::upload_file($insert_id,$_FILES,'image','edit');    
          }
          $this->session->set_flashdata('message',"ads2 has been updated.");
          redirect("admin/ads2");
       }
       
      $this->load->view('admin/ads2/view',$data);
   }
   function update_status(){
        
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session','pagination'));
        $this->load->model('productmodel','',TRUE);    
        
        $id= $_REQUEST['sid'];
        $status= $_REQUEST['svalue'];
        if($status == 'active')
        {
        $sql=$this->db->query("UPDATE ads2 set status='inactive' where id='$id'");
        }else{
    
        $sql=$this->db->query("UPDATE ads2 set status='active' where id='$id'");
    }
    redirect("admin/ads2");
  }
  

}