
<?php 
 function paging($url,$query_string ='',$total_records,$per_page,$start_index)
   {
      
      $ci=& get_instance();
      $ci->load->library('pagination');
      $config['base_url'] = $url;
      
      $config['total_rows'] = $total_records;
     /* if($first_url == ''){
          $first_url  = $url;
      } */
      
      if($query_string != '')
      {
         $config['first_url']   =  $url.'?'.$query_string;
         $config['suffix']      = '?'.$query_string;
      }  
      /*else {
          $config['first_url']  = $first_url;
      } */
      
      $config['per_page']      = $per_page;
      $config['uri_segment']   = $start_index;
      $config['full_tag_open'] = '<p>';
      $config['full_tag_close'] = '</p>';
      $ci->pagination->initialize($config);
      return  $ci->pagination->create_links();    
   }
   
   function get_sub_product($table,$fields,$foreign_column,$foreign_id)
   {
      $ci=& get_instance();
      $ci->db->select($fields);
      $ci->db->where($foreign_column,$foreign_id);
      $result=$ci->db->get($table)->result();
      $data=[];
      if(count($result)>0){
          foreach($result as $results){
              $data[]=$results->$fields;
          }
      }
      return $data;
      
   }
   
   function get_product_images($product_id)
   {
       $data=[];
       $ci = & get_instance();
       if($product_id != ''){
            
         $ci->db->select('*');
         $ci->db->where('product_id',$product_id);
         $data=$ci->db->get('product_images')->result();
      }
      return $data;
   }

   function get_blog_images($blog_id)
   {
       $data=[];
       $ci = & get_instance();
       if($blog_id != ''){
            
         $ci->db->select('*');
         $ci->db->where('blog_id',$blog_id);
         $data=$ci->db->get('blog_images')->result();
      }
      return $data;
   }

   

   function get_subcategory($category_id){
      $data =[];
      $ci=& get_instance();
      if($category_id !=''){
         $ci->db->select(['name','slug']);
         $ci->db->where('category_type',$category_id);
         $data=$ci->db->get('subcategory')->result();
      }
      return $data;
   }
   function get_cat_sub($sub_cat_slug){
      $data =[];
      $ci=& get_instance();
      if($sub_cat_slug !=''){

         $ci->db->select(['category.id as cat
         _id','category.category_name as cat_name','subcategory.id as sub_cat_id','subcategory.name  as sub_cat_name']);
         $ci->db->join('category','category.id=subcategory.category_type');
         $ci->db->where('subcategory.slug',$sub_cat_slug);
         $data=$ci->db->get('subcategory')->row();
      }
      return $data;
   }
   function get_color($product_id)
   {
      $data =[];
       $CI =& get_instance();
       $ci->db->select(['product_color.id as color_id','product_color.color as color_name']);
         $ci->db->join('product','product.id=product_color.category_id');
         $ci->db->where('product_color.id',$product_id);
         $data=$ci->db->get('product')->row();
   }
   
?>