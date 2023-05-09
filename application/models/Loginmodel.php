<?php 
class Loginmodel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function check_is_valid_user($module_name = '')
    {
        //echo $this->session->userdata('sess_admin_id');
        if($this->session->userdata('sess_admin_id') == '')
        {
            redirect('admin');
        }
    } 
    function check_is_valid_user_front($module_name = '')
    {
        //echo $this->session->userdata('sess_admin_id');
        if($this->session->userdata('user_id') == '')
        {
            //redirect('register');
            redirect('register?act=login'); 
        }
    }
    function checklogin()
    {
       $conditions = array(
                        'username' => trim($this->input->post('username')),
                        'password' => trim(md5($this->input->post('password'))),
                      );   
       $query = $this->db->get_where('admins', $conditions);
       return $query->row();
    }
    
    function checkuserlogin()
    {
       $conditions = array(
                        'username' => trim($this->input->post('username')),
                        'password' => trim(md5($this->input->post('password'))),
                        
                      );
       $query = $this->db->get_where('k_users', $conditions); 
       return $query->row();
    }
    
   
    
    function update_last_login_date(){
        $data = array(
               'last_login' => date('Y-m-d H:i:s'),
           );

        $this->db->where('id', $this->session->userdata('sess_admin_id'));
        $this->db->update('admins', $data); 
    }
    
     
 

}
?>