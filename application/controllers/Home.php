<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."third_party/PHPMailer/PHPMailerAutoload.php");

class Home extends CI_Controller{

	public function index()
	{
      $this->load->helper(array('form', 'url','common'));
      $this->load->library( array('form_validation','session'));
      $this->load->model('homemodel','',TRUE);     
      $data['title'] ='home';
      $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
      $data['sliders'] = $this->homemodel->getAllSliders();
      $this->load->view('frontend/assets/header',$data);
      $this->load->view('index',$data);
      $this->load->view('frontend/assets/footer',$data);

      }
      
      
    function getAllCategories()
   {
      $data['groups'] = $this->homemodel->getAllCategories();
      
       $this->load->view('admin/product/add',$data);
   }  

   
   function addSubscriber()
   {
      $this->load->helper(array('form', 'url'));
      $this->load->library(array('session','pagination'));
       $this->load->library('email');
       $this->load->model('homemodel','',TRUE);     
       
       if(isset($_POST['email'])){
            $email=$_POST['email'];
        }
      if(!empty($this->input->post())){
         $insert_id=$this->homemodel->addSubscriber($this->input->post());
          $this->email->from('noreply@onlineups.in')
        ->to($email)
        ->message("Thank you for subscribing with Online UPS.")
        ->set_mailtype('html')
        ->send();
        if($insert_id!=''){
         echo '<script>alert("You data has been recorded successfully!");</script>';}
      }
        
      
      $data = array(
       
     );
    redirect('home');
   }
    
 function addEnquiry()
   {
      $this->load->helper(array('form', 'url'));
      $this->load->library('email');
      $this->load->library(array('session','pagination'));
      $this->load->model('homemodel','',TRUE);  
        
        if(isset($_POST['product_name'])){
            $product_name=$_POST['product_name'];
         }
        if(isset($_POST['name'])){
            $name=$_POST['name'];
        } 
    
        if(isset($_POST['mobile'])){
            $mobile=$_POST['mobile'];      
          }
        if(isset($_POST['email'])){
            $email=$_POST['email'];
        }
        if(isset($_POST['message'])){
            $message=$_POST['message'];
             
         }
    
      if(!empty($this->input->post())){
         $insert_id=$this->homemodel->addEnquiry($this->input->post());
         $this->email->from('noreply@onlineups.in')
        ->to('info@onlineups.in')
        ->message("Product Name: $product_name <br>
        Name: $name <br>
        Email: $email <br>
        Mobile:$mobile <br> 
        Message: $message")
        ->set_mailtype('html')
        ->send();
        if($insert_id!=''){
        echo "<script>
        alert('Thank you for generating enquiry. We will get back to you soon.');
        window.location.href = '" . base_url() . "home';
        </script>";}
      }
      $data = array(
       
     );
   
   }
  

   function deleteMail($id){
      $this->load->helper(array('form', 'url'));
      $this->load->library(array('session','pagination'));
      $this->load->model('homemodel','',TRUE);     
      if($id!=''){
        $this->homemodel->deleteMail($id);
        $this->session->set_flashdata('message',"Mail has been deleted.");
          
        }
        $this->load->view('admin/mail',$data);
    }
    function viewMail()
    {
      $this->load->helper(array('form', 'url','common'));
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('homemodel','',TRUE);     
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      
      $num_records = $this->homemodel->get_total_records();
     
     
      $data['num_records']  = $num_records;
      $base_url=base_url().'admin/mail/index';
      $start_index=$this->uri->segment($this->uri->total_segments());
      $default_page_size = 5;
      if( $this->input->get('per_page') != '' ){
         $per_page = $this->input->get('per_page');
      }
      else{
         $per_page=$default_page_size;
      }
      
      $data['default_page_size']  = $default_page_size;
      $content_array=$this->homemodel->get_contents($per_page,$start_index);
      $data['content_array']=$content_array;
      $data['start_index']=$start_index;
      
      $data['pagination_links']=paging($base_url,$this->input->server("QUERY_STRING"),$num_records,$per_page,$this->uri->total_segments());
      
      $this->load->view('admin/mail',$data);
   }

   function about()
   {
      $this->load->helper(array('form', 'url','common'));
      $this->load->library(array('session','pagination'));
    
      $this->load->model('homemodel','',TRUE);    
 $data['title'] = "hi";
 $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
      $this->load->view('frontend/assets/header',$data);
      $this->load->view('about-us',$data);
      $this->load->view('frontend/assets/footer',$data);

   }
   
    function blog()
   {
      $this->load->helper(array('form', 'url','common'));
      $this->load->library(array('session','pagination'));
    
      $this->load->model('homemodel','',TRUE);    
      
      $data['blogs'] = $this->homemodel->getBlogs();
       $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
      
      $this->load->view('frontend/assets/header',$data);
      $this->load->view('blog',$data);
      $this->load->view('frontend/assets/footer',$data);

   }
   
  function blog_details($id)
{
    $this->load->helper(array('form', 'url', 'common'));
    $this->load->library(array('session','pagination')); 
    $this->load->model('homemodel', '', true);

    $data['title'] = "Blog Detail|| DHOA";
    $data['meta_title'] = "Blog Detail || DHOA";
    $data['meta_description'] ="Blog Detail || DHOA";

    $data['record']=$this->homemodel->get_blog_details($id);
    $data['related']=$this->homemodel->get_related_blog($id);
     $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
    

   $this->load->view('frontend/assets/header',$data);  
    $this->load->view('blog-details',$data);
    $this->load->view('frontend/assets/footer',$data);

}

   
    function collection()
   {
      $this->load->helper(array('form', 'url','common'));
      $this->load->library(array('session','pagination'));
    
      $this->load->model('homemodel','',TRUE);    
      
      $data['title'] = "Collections";
      $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
      $data['collection'] =$this->homemodel->getCollections();
      
      $this->load->view('frontend/assets/header',$data);
      $this->load->view('collection',$data);
      $this->load->view('frontend/assets/footer',$data);

   }
   
     function getcollection()
   {
      $this->load->helper(array('form', 'url','common'));
      $this->load->library(array('session','pagination'));
    
      $this->load->model('homemodel','',TRUE);    
      
      $data['title'] = "Collection";
      $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
      $data['collection'] =$this->homemodel->getAllCollections();
      
      $this->load->view('frontend/assets/header',$data);
      $this->load->view('collection',$data);
      $this->load->view('frontend/assets/footer',$data);

   }
   
   
   
   
   
    function contact()
   {
     $this->load->helper(array('form', 'url', 'common'));
     $this->load->library(array('session','pagination','cart','email')); 
     $this->load->model('homemodel', '', true);
 
      $data['title'] = "Contact";
     
      if(!empty($this->input->post())){	
          
        $email = $this->input->post('email');
		
		if($email!=''){
		    
            $insert_id = $this->homemodel->addContact($this->input->post()); 
                       
            $sender_mail ='noreply@dhoa.com'; //change email
      
            $config = array(
                      'mailtype' => 'html',
                      'charset'  => 'utf-8',
                      'priority' => '1'
                       );                   
                       
            $this->email->initialize($config);
            $this->email->from($sender_mail,'User Enquiry');
            $this->email->to($email);
            $this->email->subject('DHOA Contact Form');
            $data['fullname'] =$this->input->post('full_name');	
            $emailsdescription=$this->load->view('frontend/assets/contactusertemplate',$data,TRUE);
            $this->email->message($emailsdescription);
            $this->email->send();
         
    }
            $data['email'] = $this->input->post('email');
            $data['fullname'] =$this->input->post('full_name');	
            $data['message'] = $this->input->post('content');
            $data['phone_number'] = $this->input->post('phone_number');
            $data['country'] = $this->input->post('country');
            $data['state'] = $this->input->post('state');
            $data['question'] =$this->input->post('question');
            $data['sub'] = $this->input->post('subject');
            
            $sender_mail ='noreply@dhoa.com'; //change email
      
            $config = array(
                      'mailtype' => 'html',
                      'charset'  => 'utf-8',
                      'priority' => '1'
                       );
            $this->email->initialize($config);
            $this->email->from($sender_mail,'Contact US Enquiry');
            $this->email->to("info@DHOA.com"); //change email
            $this->email->subject('DHOA Contact Form');
            $emaildescription=$this->load->view('frontend/assets/contacttemplate',$data,TRUE);
            $this->email->message($emaildescription);
            $this->email->send();
           
            $this->session->set_flashdata('message',"<h1 class='career_message'>Thank You for submitting your request. We will contact you within 24 working hours.</h1><span class='crossbars_wrong'></span>");
    

  }
     
    
     $data['category'] = $this->homemodel->getAllCategories();
     $data['subcategory'] =$this->homemodel->getAllSubCategories(); 
     $this->load->view('frontend/assets/header',$data);
     $this->load->view('contact',$data);
     $this->load->view('frontend/assets/footer',$data);
   }
   
   function privacypolicy()
   {
       $this->load->helper(array('form', 'url'));
      $this->load->library('email');
      $this->load->library(array('session','pagination'));
      
       $this->load->model('homemodel','',TRUE);    
      $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
       $this->load->view('frontend/assets/header',$data);   
      $this->load->view('privacypolicy',$data);
      $this->load->view('frontend/assets/footer',$data);

   }
   function termscondition()
   {
     $this->load->helper(array('form', 'url'));
      $this->load->library('email');
      $this->load->library(array('session','pagination'));
      $this->load->model('homemodel','',TRUE);    
       $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
      $this->load->view('frontend/assets/header',$data);
      $this->load->view('termscondition',$data);
      $this->load->view('frontend/assets/footer',$data);
   }
   
   function support()
   {
      $this->load->helper('url');
        
      $this->load->view('support');

   }
   function disclaimer()
   {
       $this->load->helper(array('form', 'url'));
      $this->load->library('email');
      $this->load->library(array('session','pagination'));
      
       $this->load->model('homemodel','',TRUE);    
       
      $data=array(   
         'header' => $this->load->view('frontend/assets/header', '', TRUE),  
         'footer' => $this->load->view('frontend/assets/footer', '', TRUE),
      ); 
       $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
      $this->load->view('disclaimer',$data);

   }

   function faq()
   {
      $this->load->helper('url');
   
      $this->load->view('faq');

   }

   function accessories()
   {
      $this->load->helper('url');
   
      $this->load->view('accessories');

   }
   

}
