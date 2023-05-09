<?php
class Productmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
         $this->load->database();
        $this->table_name = 'product';
    }
    function add($data){
        if(!empty($data)){
            // print_r($data);exit;
             unset($data['sbt']);
             unset($data['product_color']);
             unset($data['product_material']);
             unset($data['product_fabric']);
             unset($data['product_look']);
             unset($data['product_images']);
             unset($data['product_collection']);

           $this->db->insert($this->table_name,$data);
            $insert_id = $this->db->insert_id();
            return $insert_id;
        //    echo $this->db->last_query(); die;
        }
    }
   function edit($id,$data){
        if(!empty($data) && $id!=''){
                unset($data['sbt']);
                unset($data['product_color']);
             unset($data['product_material']);
             unset($data['product_fabric']);
             unset($data['product_look']);
             unset($data['product_images']);
             unset($data['product_collection']);
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
       
       $this->db->select(['*','product.id','product.status',$this->table_name.'.id as product_id']);
       $this->db->order_by($this->table_name.".id", "desc");
           $query=$this->db->get($this->table_name);
       
       return $query->result();
    }
  function deleteProduct($id){
       $this->db->where('id', $id); 
       $this->db->delete($this->table_name);
    }

    function getAllCategories()
    {
        $query = $this->db->get('category');
        return $query->result();
    }

    function getAllSubCategories()
    {
        $query = $this->db->get('subcategory');
        return $query->result();
    }
 
function fetch_category($item_id)
 {
  $this->db->where('product_type', $item_id);
  $this->db->order_by('category_name', 'ASC');
  $query = $this->db->get('category');
  $output = '<option value="">Select Category</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->category_id.'">'.$row->category_name.'</option>';
  }
  return $output;
 }

 
 function fetch_subcategory($item_id)
 {
  $this->db->where('category_type', $item_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('subcategory');
  $output = '<option value="">Select Sub Category</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->subcategory_id.'">'.$row->subcategory_name.'</option>';
  }
  return $output;
 }
 


function get_subcategory($item_id){
    if($item_id!=''){
       $this->db->select('*');
       $this->db->order_by("name", "ASC");
       $query = $this->db->where('category_type',$item_id);
       $query = $this->db->get('subcategory');
       return $query->result(); 
     }
   }

 
function get_color(){
       $this->db->select('*');
       $query = $this->db->get('color');
       return $query->result();
}

function get_fabric(){
    $this->db->select('*');
    $query = $this->db->get('fabric');
    return $query->result();
}

function get_material(){
    $this->db->select('*');
    $query = $this->db->get('material');
    return $query->result();
}

function get_look(){
    $this->db->select('*');
    $query = $this->db->get('look');
    return $query->result();
}

function get_collection(){
    $this->db->select('*');
    $query = $this->db->get('collection');
    return $query->result();
}


function get_category($item_id){
    if($item_id!=''){
       $this->db->select('*');
       $this->db->order_by("category_name", "ASC");
       $query = $this->db->where('product_type',$item_id);
       $query = $this->db->get('category');
       return $query->result(); 
     }
   }
   
}   