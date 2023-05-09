<?php
class Countrymodel extends CI_Model  
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table_name = 'country';
    }
    
  function get_total_records($country_id,$country_title='')
    {        
       $this->db->select('count(*) as count');
       
       if($country_id != ''){
           $this->db->where('country_id',$country_id);
       }                     
       if($country_title != '')
       {
           $this->db->like('name', $country_title); 
       }                           
       $query = $this->db->get($this->table_name);      
       return $query->row()->count;    
    }                                             
}   