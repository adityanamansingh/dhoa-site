<?php
class Enquiry extends CI_Controller {
   
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
       
      $this->load->model('enquirymodel','',TRUE);     
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      
      $num_records = $this->enquirymodel->get_total_records();
     
     
      $data['num_records']  = $num_records;
      $base_url=base_url().'admin/enquiry/index';
      $start_index=$this->uri->segment($this->uri->total_segments());
      $default_page_size = 5;
      if( $this->input->get('per_page') != '' ){
         $per_page = $this->input->get('per_page');
      }
      else{
         $per_page=$default_page_size;
      }
      
      $data['default_page_size']  = $default_page_size;
      $content_array=$this->enquirymodel->get_contents($per_page,$start_index);
      $data['content_array']=$content_array;
      $data['start_index']=$start_index;
      
      $data['pagination_links']=paging($base_url,$this->input->server("QUERY_STRING"),$num_records,$per_page,$this->uri->total_segments());
      
      $this->load->view('admin/enquiry/index',$data);
   }
    
     function upload_file($id,$fileArray,$column,$for='add'){
      if($id!='' && !empty($fileArray) && $fileArray[$column]['error']=="0" && $column!=''){
          
            $record=$this->enquirymodel->fetch_details($id);
            $ext = pathinfo($fileArray[$column]['name'], PATHINFO_EXTENSION);
            $file_name=rand(10,1000).date('YmdHis').".".$ext;
            if($for=="edit"){
                @unlink(FCPATH."uploads/".$record->$column);
            }
            $ffdsf=$this->enquirymodel->edit($id,[$column=>$file_name]);
            move_uploaded_file($fileArray[$column]['tmp_name'],FCPATH."uploads/".$file_name);
            chmod($ffdsf,0777);
            return true;
       }
   }
   
   function delete($id){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('enquirymodel','',TRUE);     
       if($id!=''){
         $this->enquirymodel->deleteEnquiry($id);
         $this->session->set_flashdata('message',"Enquiry has been deleted.");
         redirect("admin/enquiry");  
       }
   }
   
   function status($id){
      $this->load->helper(array('form', 'url'));
      $this->load->library(array('session','pagination'));
      $this->load->model('enquirymodel','',TRUE);     
      if($id!=''){
        $this->enquirymodel->changeStatus($id);
        $this->session->set_flashdata('message',"Enquiry Status has been changed.");
        redirect("admin/enquiry/maturemethod");  
      }
  }

  function cancel($id){
   $this->load->helper(array('form', 'url'));
   $this->load->library(array('session','pagination'));
   $this->load->model('enquirymodel','',TRUE);     
   if($id!=''){
     $this->enquirymodel->cancel($id);
     $this->session->set_flashdata('message',"Enquiry Status has been changed.");
     redirect("admin/enquiry/cancelmethod");  
   }
}

function pending($id){
   $this->load->helper(array('form', 'url'));
   $this->load->library(array('session','pagination'));
   $this->load->model('enquirymodel','',TRUE);     
   if($id!=''){
     $this->enquirymodel->pending($id);
     $this->session->set_flashdata('message',"Enquiry Status has been changed.");
     redirect("admin/enquiry/pendingmethod");  
   }
}

function pendingmethod(){
      
      $this->load->helper(array('form', 'url','common'));
      
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('enquirymodel','',TRUE);     
      
        
        $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      $data['pending'] = $this->enquirymodel->get_pending();
    
      
    $this->load->view('admin/enquiry/pending',$data);
   
} 

function cancelmethod(){
      
      $this->load->helper(array('form', 'url','common'));
      
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('enquirymodel','',TRUE);     
      
        
        $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      $data['cancel'] = $this->enquirymodel->get_cancel();
    
      
    $this->load->view('admin/enquiry/cancel',$data);
   
}

function maturemethod(){
      
      $this->load->helper(array('form', 'url','common'));
      
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('enquirymodel','',TRUE);     
      
        
        $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      $data['mature'] = $this->enquirymodel->get_mature();
    
      
    $this->load->view('admin/enquiry/mature',$data);
   
}

 function export_csv(){ 
     
      $this->load->helper(array('form', 'url','common'));
      
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('enquirymodel','',TRUE);    
      
   $filename = 'users_'.date('Ymd').'.csv'; 
   header("Content-Description: File Transfer"); 
   header("Content-Disposition: attachment; filename=$filename"); 
   header("Content-Type: application/csv; "); 
   // get data 
   $vendorData = $this->enquirymodel->get_export_data();
   // file creation 
   $file = fopen('php://output', 'w');
   $header = array("Product Name", "Name", "Email", "Mobile", "Message", "Status"); 
   fputcsv($file, $header);
   foreach ($vendorData as $key=>$line){
     fputcsv($file,$line); 
   }
   fclose($file); 
   exit; 
  } 
  
  function export_csv_cancel(){ 
     
      $this->load->helper(array('form', 'url','common'));
      
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('enquirymodel','',TRUE);    
      
   $filename = 'users_'.date('Ymd').'.csv'; 
   header("Content-Description: File Transfer"); 
   header("Content-Disposition: attachment; filename=$filename"); 
   header("Content-Type: application/csv; "); 
   // get data 
   $vendorData = $this->enquirymodel->get_export_data_cancel();
   // file creation 
   $file = fopen('php://output', 'w');
   $header = array("Product Name", "Name", "Email", "Mobile", "Message", "Status"); 
   fputcsv($file, $header);
   foreach ($vendorData as $key=>$line){
     fputcsv($file,$line); 
   }
   fclose($file); 
   exit; 
  } 
  
  function export_csv_mature(){ 
     
      $this->load->helper(array('form', 'url','common'));
      
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('enquirymodel','',TRUE);    
      
   $filename = 'users_'.date('Ymd').'.csv'; 
   header("Content-Description: File Transfer"); 
   header("Content-Disposition: attachment; filename=$filename"); 
   header("Content-Type: application/csv; "); 
   // get data 
   $vendorData = $this->enquirymodel->get_export_data_mature();
   // file creation 
   $file = fopen('php://output', 'w');
   $header = array("Product Name", "Name", "Email", "Mobile", "Message", "Status"); 
   fputcsv($file, $header);
   foreach ($vendorData as $key=>$line){
     fputcsv($file,$line); 
   }
   fclose($file); 
   exit; 
  } 
  
  function export_csv_pending(){ 
     
      $this->load->helper(array('form', 'url','common'));
      
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('enquirymodel','',TRUE);    
      
   $filename = 'users_'.date('Ymd').'.csv'; 
   header("Content-Description: File Transfer"); 
   header("Content-Disposition: attachment; filename=$filename"); 
   header("Content-Type: application/csv; "); 
   // get data 
   $vendorData = $this->enquirymodel->get_export_data_pending();
   // file creation 
   $file = fopen('php://output', 'w');
   $header = array("Product Name", "Name", "Email", "Mobile", "Message", "Status"); 
   fputcsv($file, $header);
   foreach ($vendorData as $key=>$line){
     fputcsv($file,$line); 
   }
   fclose($file); 
   exit; 
  } 


}