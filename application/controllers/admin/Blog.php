<?php
class Blog extends CI_Controller {
   
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
       
      $this->load->model('blogmodel','',TRUE);     
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      
      $num_records = $this->blogmodel->get_total_records();
     
     
      $data['num_records']  = $num_records;
      $base_url=base_url().'admin/blog/index';
      $start_index=$this->uri->segment($this->uri->total_segments());
      $default_page_size = 10;
      if( $this->input->get('per_page') != '' ){
         $per_page = $this->input->get('per_page');
      }
      else{
         $per_page=$default_page_size;
      }
      
      $data['default_page_size']  = $default_page_size;
      $content_array=$this->blogmodel->get_contents($per_page,$start_index);
      $data['content_array']=$content_array;
      $data['start_index']=$start_index;
      
      $data['pagination_links']=paging($base_url,$this->input->server("QUERY_STRING"),$num_records,$per_page,$this->uri->total_segments());
       
      $this->load->view('admin/blog/index',$data);
   }
   
   function add(){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
        $this->load->model('blogmodel','',TRUE);     
        
       if(!empty($this->input->post())){

          $insert_id=$this->blogmodel->add($this->input->post());
          if($insert_id!=''){
             $postData=$this->input->post();
            self::upload_file($insert_id,$_FILES,'featured_image','add');
         
              
              
            }
            
            $this->session->set_flashdata('message',"blog has been added.");
          {
              
             redirect('admin/blog');   
            
            }
                
           }
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );

      $data['category']=$this->blogmodel->getAllCategories();
     
      
      $this->load->view('admin/blog/add',$data);
   }
   
   
   function edit($id){
       $this->load->helper(array('form', 'url', 'common'));
       $this->load->library(array('session','pagination'));
       $this->load->model('blogmodel','',TRUE);     
      
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),  
        );
        
       $data['record']=$this->blogmodel->fetch_details($id);
       
       if(!empty($this->input->post())){
        $res=$this->blogmodel->edit($id,$this->input->post());
        self::upload_file($id,$_FILES,'featured_image','edit');                  

    
          $this->session->set_flashdata('message',"blog has been updated.");
          redirect("admin/blog");
      }
       
      $data['category']=$this->blogmodel->getAllCategories();
     
      
      $this->load->view('admin/blog/edit',$data);
      
   }

   function upload_file($id,$fileArray,$column,$for='add'){
    if($id!='' && !empty($fileArray) && $fileArray[$column]['error']=="0" && $column!=''){
        
          $record=$this->blogmodel->fetch_details($id);
     
          $file_name=$fileArray[$column]['name'];
          if($for=="edit"){
              @unlink(FCPATH."uploads/blog/".$record->$column);
          }
          $ffdsf=$this->blogmodel->edit($id,[$column=>$file_name]);
          move_uploaded_file($fileArray[$column]['tmp_name'],FCPATH."uploads/blog/".$file_name);
        
          return true;
     }
 }

   
   function delete($id){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('blogmodel','',TRUE);     
       if($id!=''){
         $this->blogmodel->deleteblog($id);
         $this->session->set_flashdata('message',"blog has been deleted.");
         redirect("admin/blog");  
       }
   }

   
   function getAllCategories()
   {
      $data['groups'] = $this->blogmodel->get_category();
      
       $this->load->view('admin/blog/add',$data);
   }  
    

function update_status(){
      $this->load->helper(array('form', 'url'));
      $this->load->library(array('session','pagination'));
      $this->load->model('blogmodel','',TRUE);    
      
      $id= $_GET['sid'];
      $status= $_GET['svalue'];
      if($status == 'active')
      {

      $sql=$this->db->query("UPDATE blog set status='inactive' where id='$id'");

      }else{
  
      $sql=$this->db->query("UPDATE blog set status='active' where id='$id'");

      }
      redirect("admin/blog");
     }


     function export_csv(){ 
     
      $this->load->helper(array('form', 'url','common'));
      
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('blogmodel','',TRUE);    
      
   $filename = 'users_'.date('Ymd').'.csv'; 
   header("Content-Description: File Transfer"); 
   header("Content-Disposition: attachment; filename=$filename"); 
   header("Content-Type: application/csv; "); 
   // get data 
   $blogData = $this->blogmodel->get_export_data();
   // file creation 
   $file = fopen('php://output', 'w');
   $header = array("sku","blog_name","blog_tagline","blog_short_description","blog_long_description","heading1","data1","heading2","data2","heading3","data3","heading4","data4","heading5","data5","heading6","data6","heading7","data7","heading8","data8","heading9","data9","heading10","data10","heading11","data11","heading12","data12","heading13","data13","heading14","data14","heading15","data15","heading16","data16","document","tags"); 
   fputcsv($file, $header);
   foreach ($blogData as $key=>$line){
     fputcsv($file,$line); 
   }
   fclose($file); 
   exit; 
  } 
 
 
  function delete_all_blog()
   {
    $this->load->helper(array('form', 'url','common'));
    $this->load->library(array('session','pagination'));
    $this->load->model('blogmodel','',TRUE);
      if($this->input->post('checkbox_value'))
      {
       $id = $this->input->post('checkbox_value');
       
       for($count = 0; $count < count($id); $count++)
       {
        $this->blogmodel->deleteallblog($id[$count]);
       }
     redirect("admin/blog");
    }
   }


   
   function delete_blog()

   {
    $this->load->helper(array('form', 'url','common'));
        
    $this->load->library(array('session','pagination'));
    
    $this->load->model('loginmodel','',TRUE);     
    
    $this->loginmodel->check_is_valid_user();    
     
    $this->load->model('blogmodel','',TRUE);    
  
    if($this->input->post('checkbox_value'))
    {
     $id = $this->input->post('checkbox_value');
    
     for($count = 0; $count < count($id); $count++)
     {
      $this->blogmodel->delete_blog($id[$count]);
     }
    }
   }
  
   function make_featured()
  
   {
    $this->load->helper(array('form', 'url','common'));
        
    $this->load->library(array('session','pagination'));
    
    $this->load->model('loginmodel','',TRUE);     
    
    $this->loginmodel->check_is_valid_user();    
     
    $this->load->model('blogmodel','',TRUE);    
  
    if($this->input->post('checkbox_value'))
    {
     $id = $this->input->post('checkbox_value');
    
     for($count = 0; $count < count($id); $count++)
     {
      $this->blogmodel->make_featured($id[$count]);
     }
    }
   }
  
   function remove_featured()
  
   {
    $this->load->helper(array('form', 'url','common'));
        
    $this->load->library(array('session','pagination'));
    
    $this->load->model('loginmodel','',TRUE);     
    
    $this->loginmodel->check_is_valid_user();    
     
    $this->load->model('blogmodel','',TRUE);    
  
    if($this->input->post('checkbox_value'))
    {
     $id = $this->input->post('checkbox_value');
    
     for($count = 0; $count < count($id); $count++)
     {
      $this->blogmodel->remove_featured($id[$count]);
     }
    }
   }
  
  
   function make_activated()
  
   {
    $this->load->helper(array('form', 'url','common'));
        
    $this->load->library(array('session','pagination'));
    
    $this->load->model('loginmodel','',TRUE);     
    
    $this->loginmodel->check_is_valid_user();    
     
    $this->load->model('blogmodel','',TRUE);    
  
    if($this->input->post('checkbox_value'))
    {
     $id = $this->input->post('checkbox_value');
    
     for($count = 0; $count < count($id); $count++)
     {
      $this->blogmodel->make_activated($id[$count]);
     }
    }
   }
  
  
  
   function remove_activated()
  
   {
    $this->load->helper(array('form', 'url','common'));
        
    $this->load->library(array('session','pagination'));
    
    $this->load->model('loginmodel','',TRUE);     
    
    $this->loginmodel->check_is_valid_user();    
     
    $this->load->model('blogmodel','',TRUE);    
  
    if($this->input->post('checkbox_value'))
    {
     $id = $this->input->post('checkbox_value');
    
     for($count = 0; $count < count($id); $count++)
     {
      $this->blogmodel->remove_activated($id[$count]);
     }
    }
   }



}