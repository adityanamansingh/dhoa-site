<?php
class Slider extends CI_Controller {
   
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
       
      $this->load->model('slidermodel','',TRUE);     
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      
      $num_records = $this->slidermodel->get_total_records();
     
     
      $data['num_records']  = $num_records;
      $base_url=base_url().'admin/slider/index';
      $start_index=$this->uri->segment($this->uri->total_segments());
      $default_page_size = 5;
      if( $this->input->get('per_page') != '' ){
         $per_page = $this->input->get('per_page');
      }
      else{
         $per_page=$default_page_size;
      }
      
      $data['default_page_size']  = $default_page_size;
      $content_array=$this->slidermodel->get_contents($per_page,$start_index);
      $data['content_array']=$content_array;
      $data['start_index']=$start_index;
      
      $data['pagination_links']=paging($base_url,$this->input->server("QUERY_STRING"),$num_records,$per_page,$this->uri->total_segments());
      
      $this->load->view('admin/slider/index',$data);
   }
   function add(){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
        $this->load->model('slidermodel','',TRUE);     
        
       if(!empty($this->input->post())){
          $insert_id=$this->slidermodel->add($this->input->post());
          self::upload_file($insert_id,$_FILES,'image','add'); 
          
          $this->session->set_flashdata('message',"Slider has been added.");
          redirect("admin/slider");  
       }
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      $this->load->view('admin/slider/add',$data);
   }
   
   function edit($id){
       
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('slidermodel','',TRUE);     
      
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->slidermodel->fetch_details($id);
       if(!empty($this->input->post())){
          $result=$this->slidermodel->edit($id,$this->input->post());
          if($result){
            self::upload_file($id,$_FILES,'image','edit');    
          }
        //   $sql=$this->db->query('INSERT into slider_logs (slider_id) values('.$id.')');
          $this->session->set_flashdata('message',"slider has been updated.");
          redirect("admin/slider");
       }
       $this->load->view('admin/slider/edit',$data);
   }
     function upload_file($id,$fileArray,$column,$for='add'){
      if($id!='' && !empty($fileArray) && $fileArray[$column]['error']=="0" && $column!=''){
          
            $record=$this->slidermodel->fetch_details($id);
            $ext = pathinfo($fileArray[$column]['name'], PATHINFO_EXTENSION);
            $file_name=rand(10,1000).date('YmdHis').".".$ext;
            if($for=="edit"){
                @unlink(FCPATH."uploads/slider/".$record->$column);
            }
            $ffdsf=$this->slidermodel->edit($id,[$column=>$file_name]);
            move_uploaded_file($fileArray[$column]['tmp_name'],FCPATH."uploads/slider/".$file_name);
            chmod($ffdsf,0777);
            return true;
       }
   }
   
   function delete($id){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('slidermodel','',TRUE);     
       if($id!=''){
         $this->slidermodel->deleteslider($id);
         $this->session->set_flashdata('message',"slider has been deleted.");
         redirect("admin/slider");  
       }
   }
   function view($id){

       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('slidermodel','',TRUE);     
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->slidermodel->fetch_details($id);
       if(!empty($this->input->post())){
          $result=$this->slidermodel->edit($id,$this->input->post());
          if($result){
            self::upload_file($insert_id,$_FILES,'image','edit');    
          }
          $this->session->set_flashdata('message',"slider has been updated.");
          redirect("admin/slider");
       }
       
      $this->load->view('admin/slider/view',$data);
   }
   
    function update_status(){
        
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session','pagination'));
        $this->load->model('productmodel','',TRUE);    
        
        $id= $_REQUEST['sid'];
        $status= $_REQUEST['svalue'];
        if($status == 'active')
        {
        $sql=$this->db->query("UPDATE slider set status='inactive' where id='$id'");
        }else{
    
        $sql=$this->db->query("UPDATE slider set status='active' where id='$id'");

    }
    redirect("admin/slider");
  }
  

}