<?php
class Enquirymodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
         $this->load->database();
        $this->table_name = 'enquiry';
    }

    function fetch_details($id){
        if($id!=''){
           $this->db->select('*');
           $this->db->where('id',$id);
           $query = $this->db->get($this->table_name);
           return $query->row();  
        }
    }
   function get_total_records(){
       return $query = $this->db->count_all_results($this->table_name);
    }
   function get_contents($start, $limit){
       
       $this->db->select('*');
       $this->db->order_by($this->table_name.".id", "desc");
     
       $query = $this->db->get($this->table_name);
       return $query->result();
    }
    function deleteEnquiry($id){
       $this->db->where('id', $id);
       $this->db->delete($this->table_name);
    }
    function changeStatus($id){

        $status='mature';
        $this->db->set('status', $status);  
        $this->db->where('id', $id);
        $result=$this->db->update('enquiry');
        return $result;
     }

     function cancel($id){
        $status='cancel';
        $this->db->set('status', $status);  
        $this->db->where('id', $id);
        $result=$this->db->update('enquiry');
        return $result;
     }
    
     function pending($id){
      $status='pending';
      $this->db->set('status', $status);  
      $this->db->where('id', $id);
      $result=$this->db->update('enquiry');
      return $result;
   }
   
   
function get_pending()
{
    $this->db->select('*');
    $query = $this->db->from('enquiry');
    $query = $this->db->where('status','pending');
    $query=$this->db->get(); 
    return $query->result();
}

function get_mature()
{
    $this->db->select('*');
    $query = $this->db->from('enquiry');
    $query = $this->db->where('status','mature');
    $query=$this->db->get(); 
    return $query->result();
}

function get_cancel()
{
    $this->db->select('*');
    $query = $this->db->from('enquiry');
    $query = $this->db->where('status','cancel');
    $query=$this->db->get(); 
    return $query->result();
}
function get_export_data(){
       $this->db->select(['product_name', 'name', 'email', 'mobile', 'message', 'status']);
       $this->db->order_by($this->table_name.".id", "desc");
       $query = $this->db->get($this->table_name);
       return $query->result_array();
}

function get_export_data_cancel(){
       $this->db->select(['product_name', 'name', 'email', 'mobile', 'message', 'status']);
       $this->db->where('status','cancel');
       $this->db->order_by($this->table_name.".id", "desc");
       $query = $this->db->get($this->table_name);
       return $query->result_array();
}

function get_export_data_mature(){
       $this->db->select(['product_name', 'name', 'email', 'mobile', 'message', 'status']);
       $this->db->where('status','mature');
       $this->db->order_by($this->table_name.".id", "desc");
       $query = $this->db->get($this->table_name);
       return $query->result_array();
}

function get_export_data_pending(){
       $this->db->select(['product_name', 'name', 'email', 'mobile', 'message', 'status']);
       $this->db->where('status','pending');
       $this->db->order_by($this->table_name.".id", "desc");
       $query = $this->db->get($this->table_name);
       return $query->result_array();
}


  
}   