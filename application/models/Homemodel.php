<?php
class Homemodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
           
    }

    function getAllSliders()
    {
    
        $this->db->select('*');
    
        $this->db->from('slider');

        $this->db->where("status='active'");
        
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getTestimonial()
    {
        $this->db->select('*');
    
        $this->db->from('testimonial');

        $this->db->where("status='active'");
        
        $query = $this->db->get();
        
        return $query->result(); 
    }

    function getAllCategories()
    {
        $this->db->where("status='active'");
        $query = $this->db->get('category');
        return $query->result();
    }
    
    function getAllSubCategories()
    {
        $this->db->where("status='active'");
        $query = $this->db->get('subcategory');
        return $query->result();
    }
    
    function getCollections(){
        
        $this->db->where("status='active'");
        $query = $this->db->get('collection');
        return $query->result();
    }
    
    function getBlogs()
{
    $this->db->select('*');
    $this->db->from('blog');
    $this->db->where("blog.status='active'");   
    $query = $this->db->get(); 
    return $query->result();

}

    function get_related_blog($id)
{
    $this->db->select('*');
    $this->db->from('blog');
    $this->db->where('blog.slug!=',$id);
    $this->db->where("blog.status='active'");   
    $query = $this->db->get(); 
    return $query->result();

}



function get_blog_details($id){
    $this->db->select('blog.*');
    $this->db->from('blog');
    $this->db->where('blog.slug',$id);
    $query = $this->db->get(); 
    return $query->result();
}
    
  
      function addSubscriber($data){
        if(!empty($data)){
          unset($data['sbt']);
           $this->table_name='subscribe';
           $this->db->insert($this->table_name,$data);
            $insert_id = $this->db->insert_id();
            return $insert_id;
           //echo $this->db->last_query(); die;
        }
    }
    
    function addContact($data){
        if(!empty($data)){
          unset($data['sbt']);
         $this->table_name='contact';
           $this->db->insert($this->table_name,$data);
            $insert_id = $this->db->insert_id();
            return $insert_id;
           //echo $this->db->last_query(); die;
        }
    }
    
     function addEnquiry($data){
        if(!empty($data)){
          unset($data['sbt']);
           $this->table_name='enquiry';
           $this->db->insert($this->table_name,$data);
            $insert_id = $this->db->insert_id();
            return $insert_id;
           //echo $this->db->last_query(); die;
        }
    }

   
}   