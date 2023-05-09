<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
   
    public function index()
    {
      $this->load->helper(array('form', 'url'));
      $this->load->library( array('form_validation' ,'session'));
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      $this->form_validation->set_rules('username', 'Username', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');    
      $this->load->model('loginmodel','loginmodel',TRUE); 
      $form_post_data = $_POST;
      if(count($form_post_data) >0)
      {             
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('admin/login',$data);
            }
            else
            {                     
                $user_data  = $this->loginmodel->checklogin();   
               
                if(count($user_data) > 0)     
                {
                      $this->session->set_userdata('sess_admin_id', $user_data->id);
                      $this->session->set_userdata('sess_admin_type',"Admin");
                      $this->loginmodel->update_last_login_date();
                      redirect('admin/dashboard');
                }
                else 
                {
                  $this->session->set_flashdata('err_msg', 'Username or password is invalid please try again');
                  redirect('admin');
                }
             } 
         }
         else {
             $this->load->view('admin/login',$data);
         }
      
    }
    function logout(){
      $this->load->helper(array('form', 'url'));    
      $this->load->library(array('session')); 
      
       $this->session->unset_userdata('sess_admin_id'); 
       $this->session->unset_userdata('assigned_modules');  
       redirect('admin'); 
    }
    
}
