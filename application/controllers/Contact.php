<?php
class Contact extends CI_Controller {
   
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
       
      $this->load->model('contactmodel','',TRUE);     
      $insert_id=$this->contactmodel->add($this->input->post());
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      
      $num_records = $this->contactmodel->get_total_records();
     
     
      $data['num_records']  = $num_records;
      $base_url=base_url().'admin/contact/index';
      $start_index=$this->uri->segment($this->uri->total_segments());
      $default_page_size = 5;
      if( $this->input->get('per_page') != '' ){
         $per_page = $this->input->get('per_page');
      }
      else{
         $per_page=$default_page_size;
      }
      
      $data['default_page_size']  = $default_page_size;
      $content_array=$this->contactmodel->get_contents($per_page,$start_index);
      $data['content_array']=$content_array;
      $data['start_index']=$start_index;
      
      $data['pagination_links']=paging($base_url,$this->input->server("QUERY_STRING"),$num_records,$per_page,$this->uri->total_segments());
      
      $this->load->view('admin/contact/index',$data);
   }
   function add(){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
        $this->load->model('contactmodel','',TRUE);     
        
        if(!empty($this->input->post())){
         $insert_id=$this->contactmodel->add($this->input->post());
           
         $this->session->set_flashdata('message',"Thanks for filling our form.");
         redirect("contact");  
      }
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      $this->load->view('contact',$data);
   }
   
   function edit($id){
       
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('contactmodel','',TRUE);     
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->contactmodel->fetch_details($id);
       if(!empty($this->input->post())){
          $result=$this->contactmodel->edit($id,$this->input->post());
          if($result){
            self::upload_file($id,$_FILES,'bank_account_proof','edit');    
          }
          $this->session->set_flashdata('message',"contact has been updated.");
          redirect("admin/contact");
       }
       
      $this->load->view('admin/contact/edit',$data);
   }
     function upload_file($id,$fileArray,$column,$for='add'){
      if($id!='' && !empty($fileArray) && $fileArray[$column]['error']=="0" && $column!=''){
          
            $record=$this->contactmodel->fetch_details($id);
            $ext = pathinfo($fileArray[$column]['name'], PATHINFO_EXTENSION);
            $file_name=rand(10,1000).date('YmdHis').".".$ext;
            if($for=="edit"){
                @unlink(FCPATH."uploads/".$record->$column);
            }
            $ffdsf=$this->contactmodel->edit($id,[$column=>$file_name]);
            move_uploaded_file($fileArray[$column]['tmp_name'],FCPATH."uploads/".$file_name);
            chmod($ffdsf,0777);
            return true;
       }
   }
   
   function delete($id){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('contactmodel','',TRUE);     
       if($id!=''){
         $this->contactmodel->deletecontact($id);
         $this->session->set_flashdata('message',"contact has been deleted.");
         redirect("admin/contact");  
       }
   }
   function view($id){

  $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('contactmodel','',TRUE);     
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->contactmodel->fetch_details($id);
       if(!empty($this->input->post())){
          $result=$this->contactmodel->edit($id,$this->input->post());
          if($result){
            self::upload_file($insert_id,$_FILES,'bank_account_proof','edit');    
          }
          $this->session->set_flashdata('message',"contact has been updated.");
          redirect("admin/contact");
       }
       
      $this->load->view('admin/contact/view',$data);
   }
//    public function export_csv(){ 
//    $this->load->model('contactmodel','',TRUE);     
//    $filename = 'users_'.date('Ymd').'.csv'; 
//    header("Content-Description: File Transfer"); 
//    header("Content-Disposition: attachment; filename=$filename"); 
//    header("Content-Type: application/csv; "); 
//    // get data 
//    $contactData = $this->contactmodel->get_export_data();
//    // file creation 
//    $file = fopen('php://output', 'w');
//    $header = array("contact Name","Company Name","Contact Person","Company Email","Company Contact","Alternate Mobile Number","Location","Company Pan Card","Company Website","GST Number","contact Sold","contact Type","contact Name","contact Description","Supplier contact","Manufacturer Name","Delivery Area","Average Delivery Time","Payment Terms","Account Holder Name","Account Number","IFSC Code"); 
//    fputcsv($file, $header);
//    foreach ($contactData as $key=>$line){
//      fputcsv($file,$line); 
//    }
//    fclose($file); 
//    exit; 
//   } 


}