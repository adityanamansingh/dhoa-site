<?php
class Subcategorymodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
         $this->load->database();
        $this->table_name = 'subcategory';
    }
    function add($data){
        if(!empty($data)){
            // print_r($data);exit;
             unset($data['sbt']);
            $data['created_at']=date('Y-m-d H:i:s'); 
            $data['updated_at']=date('Y-m-d H:i:s');
            $data['status']="Active";
           $this->db->insert($this->table_name,$data);
            $insert_id = $this->db->insert_id();
            return $insert_id;
        //    echo $this->db->last_query(); die;
        }
    }
   function edit($id,$data){
        if(!empty($data) && $id!=''){
                unset($data['sbt']);
          $this->db->where('id',$id);
          return $this->db->update($this->table_name,$data);
           //echo $this->db->last_query(); die;
        }
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
  function deletesubcategory($id){
       $this->db->where('id', $id);
       $this->db->delete($this->table_name);
    }
   
    function getAllCategories()
    {
        $query = $this->db->get('category');
        return $query->result();
    }
    
 
}   