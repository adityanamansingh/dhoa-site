<?php
class Category extends CI_Controller {
   
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
       
      $this->load->model('categorymodel','',TRUE);     
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      
      $num_records = $this->categorymodel->get_total_records();
     
     
      $data['num_records']  = $num_records;
      $base_url=base_url().'admin/category/index';
      $start_index=$this->uri->segment($this->uri->total_segments());
      $default_page_size = 5;
      if( $this->input->get('per_page') != '' ){
         $per_page = $this->input->get('per_page');
      }
      else{
         $per_page=$default_page_size;
      }
      
      $data['default_page_size']  = $default_page_size;
      $content_array=$this->categorymodel->get_contents($per_page,$start_index);
      $data['content_array']=$content_array;
      $data['start_index']=$start_index;
      
      $data['pagination_links']=paging($base_url,$this->input->server("QUERY_STRING"),$num_records,$per_page,$this->uri->total_segments());
      
     
      $this->load->view('admin/category/index',$data);
   }
   function add(){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
        $this->load->model('categorymodel','',TRUE);     
        
       if(!empty($this->input->post())){
          $insert_id=$this->categorymodel->add($this->input->post());
          $slug = $_POST['category_name'];
          $slug1 = str_replace(' ', '-', $slug);        
          $sql=$this->db->query("UPDATE category set slug='$slug1' where id='$insert_id'");
          self::upload_file($insert_id,$_FILES,'category_image','add'); 
          
          $this->session->set_flashdata('message',"category has been added.");
          redirect("admin/category");  
       }
        
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
     
      $this->load->view('admin/category/add',$data);
   }
   
   function edit($id){
       
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('categorymodel','',TRUE);     
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->categorymodel->fetch_details($id);
       if(!empty($this->input->post())){
          $result=$this->categorymodel->edit($id,$this->input->post());
          if($result){
            self::upload_file($id,$_FILES,'category_image','edit');    
          }
          $this->session->set_flashdata('message',"category has been updated.");
          redirect("admin/category");
       }
      
      $this->load->view('admin/category/edit',$data);
   }
     function upload_file($id,$fileArray,$column,$for='add'){
      if($id!='' && !empty($fileArray) && $fileArray[$column]['error']=="0" && $column!=''){
          
            $record=$this->categorymodel->fetch_details($id);
            $ext = pathinfo($fileArray[$column]['name'], PATHINFO_EXTENSION);
            $file_name=rand(10,1000).date('YmdHis').".".$ext;
            if($for=="edit"){
                @unlink(FCPATH."uploads/category/".$record->$column);
            }
            $ffdsf=$this->categorymodel->edit($id,[$column=>$file_name]);
            move_uploaded_file($fileArray[$column]['tmp_name'],FCPATH."uploads/category/".$file_name);
           
       }
   }
   
   function delete($id){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('categorymodel','',TRUE);     
       if($id!=''){
         $this->categorymodel->deletecategory($id);
         $this->session->set_flashdata('message',"category has been deleted.");
         redirect("admin/category");  
       }
   }
  
 
}