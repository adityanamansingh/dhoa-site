<?php
class Subscribermodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
         $this->load->database();
        $this->table_name = 'subscribe';
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
  function deleteSubscriber($id){
       $this->db->where('id', $id);
       $this->db->delete($this->table_name);
    }
    

    function get_export_data(){
       $this->db->select(['email', 'status']);
       $this->db->order_by($this->table_name.".id", "desc");
       $query = $this->db->get($this->table_name);
       return $query->result_array();
}
  
}   