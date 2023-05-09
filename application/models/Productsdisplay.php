<?php
class Productsdisplay extends CI_Model
{
    function __construct()
    {
        parent::__construct();
         $this->load->database();
        $this->table_name = 'product';
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
       $this->db->order_by($this->table_name.".id");
       $this->db->limit( $start, $limit);  
       $query = $this->db->get($this->table_name);
       return $query->result();
  }
  
  function deletebrand($id){
       $this->db->where('id', $id);
       $this->db->delete($this->table_name);
  }
  
    
     function getAllCategories($item_id='')
    {
         
        if($item_id!=''){
      
       $query = $this->db->where('product_type',$item_id);
     }
      $query = $this->db->get('category');
       return $query->result(); 
    }
    
    
    function getAllCategory()
    {
        $this->db->select('*');
         $this->db->where('status','active');
       $query = $this->db->get('category');
       return $query->result();
    }
    
    function getAllSubCategory()
    {
        $this->db->select('*');
         $this->db->where('status','active');
       $query = $this->db->get('subcategory');
       return $query->result();
    }
    
    function getAllColor()
    {
       $this->db->select('*');
        $this->db->where('status','active');
       $query = $this->db->get('color');
       return $query->result();
    }
    
    function getAllFabric()
    {
       $this->db->select('*');
        $this->db->where('status','active');
       $query = $this->db->get('fabric');
       return $query->result();
    }
    
    function getAllMaterial()
    {
       $this->db->select('*');
        $this->db->where('status','active');
       $query = $this->db->get('material');
       return $query->result();
    }
    
    function getAllLook()
    {
       $this->db->select('*');
       $this->db->where('status','active');
       $query = $this->db->get('look');
       return $query->result();
    }
    
    
    function getAllProduct()
    {
        $this->db->select('*');
        $this->db->where('id');
        $query = $this->db->get($this->table_name);
        return $query->row();
    }
    function get_item(){
       $this->db->select('*');
       $query = $this->db->get('item');
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
   
   
    
 function make_query($category, $subcategory,$color,$fabric,$material,$look)
 {
  $query = "
  SELECT DISTINCT product.*,product.id as product_id,product.featured_image,product.meta_title,product.slug FROM product
  left JOIN product_color ON product_color.product_id=product.id
  left JOIN product_material ON product_material.product_id=product.id
  left JOIN product_fabric ON product_fabric.product_id=product.id
  left JOIN product_look ON product_look.product_id=product.id
   WHERE product.status = 'active' 
  ";
  
  if(isset($category))
  {
   $category_filter = implode("','", $category);
   $query .= "
    AND product.product_category IN ('".$category_filter."')
   ";
  }
 if(isset($subcategory))
  {
   $subcat_filter = implode("','", $subcategory);
   $query .= "
    AND product.product_subcategory IN ('".$subcat_filter."')
   ";
  }
if(isset($color))
  {
   $color_filter = implode("','", $color);
   $query .= "
    AND product_color.color IN('".$color_filter."')
   ";
  }
 
 if(isset($material))
  {
   $material_filter = implode("','", $material);
   $query .= "
    AND product_material.material IN('".$material_filter."')
   ";
  }
 
 
 if(isset($fabric))
  {
   $fabric_filter = implode("','", $fabric);
   $query .= "
    AND product_fabric.fabric IN('".$fabric_filter."')
   ";
  }
 
 if(isset($look))
  {
   $look_filter = implode("','", $look);
   $query .= "
    AND product_look.look IN('".$look_filter."')
   ";
  }
  return $query;
 }  
 
 function make_query1($catid,$color,$fabric,$material,$look)
 {
  $query = "
  SELECT DISTINCT product.*,product.id as product_id,product.featured_image,product.meta_title,product.slug FROM product
  left JOIN product_color ON product_color.product_id=product.id
  left JOIN product_material ON product_material.product_id=product.id
  left JOIN product_fabric ON product_fabric.product_id=product.id
  left JOIN product_look ON product_look.product_id=product.id
   WHERE product.status = 'active' AND product.product_category='$catid'
 ";
  
  if(isset($color))
  {
   $color_filter = implode("','", $color);
   $query .= "
    AND product_color.color IN('".$color_filter."')
   ";
  }
 
 if(isset($material))
  {
   $material_filter = implode("','", $material);
   $query .= "
    AND product_material.material IN('".$material_filter."')
   ";
  }
 
 
 if(isset($fabric))
  {
   $fabric_filter = implode("','", $fabric);
   $query .= "
    AND product_fabric.fabric IN('".$fabric_filter."')
   ";
  }
 
 if(isset($look))
  {
   $look_filter = implode("','", $look);
   $query .= "
    AND product_look.look IN('".$look_filter."')
   ";
  }

  
  return $query;
 }
 
 function make_query2($subcatid,$color,$fabric,$material,$look)
 {
  $query = "
  SELECT DISTINCT product.*,product.id as product_id,product.featured_image,product.meta_title,product.slug FROM product
  left JOIN product_color ON product_color.product_id=product.id
  left JOIN product_material ON product_material.product_id=product.id
  left JOIN product_fabric ON product_fabric.product_id=product.id
  left JOIN product_look ON product_look.product_id=product.id
   WHERE product.status = 'active' AND product.product_subcategory='$subcatid'
 ";
  
  if(isset($color))
  {
   $color_filter = implode("','", $color);
   $query .= "
    AND product_color.color IN('".$color_filter."')
   ";
  }
 
 if(isset($material))
  {
   $material_filter = implode("','", $material);
   $query .= "
    AND product_material.material IN('".$material_filter."')
   ";
  }
 
 
 if(isset($fabric))
  {
   $fabric_filter = implode("','", $fabric);
   $query .= "
    AND product_fabric.fabric IN('".$fabric_filter."')
   ";
  }
 
 if(isset($look))
  {
   $look_filter = implode("','", $look);
   $query .= "
    AND product_look.look IN('".$look_filter."')
   ";
  }

  
  return $query;
 }
 
 
 function make_query3($colid,$color,$fabric,$material,$look)
 {
  $query = "
  SELECT DISTINCT product.*,product.id as product_id,product.featured_image,product.meta_title,product.slug FROM product
  left JOIN product_collection ON product_collection.product_id=product.id
   WHERE product.status = 'active' AND product_collection.collection='$colid'
 ";
  
  if(isset($color))
  {
   $color_filter = implode("','", $color);
   $query .= "
    AND product_color.color IN('".$color_filter."')
   ";
  }
 
 if(isset($material))
  {
   $material_filter = implode("','", $material);
   $query .= "
    AND product_material.material IN('".$material_filter."')
   ";
  }
 
 
 if(isset($fabric))
  {
   $fabric_filter = implode("','", $fabric);
   $query .= "
    AND product_fabric.fabric IN('".$fabric_filter."')
   ";
  }
 
 if(isset($look))
  {
   $look_filter = implode("','", $look);
   $query .= "
    AND product_look.look IN('".$look_filter."')
   ";
  }

  
  return $query;
 }
 
 
 
 function count_all($category, $subcategory,$color,$fabric,$material,$look)
 {
  $query = $this->make_query($category, $subcategory,$color,$fabric,$material,$look);
  $data = $this->db->query($query);
  return $data->num_rows();
 } 
 
 function count_all1($catid,$color,$fabric,$material,$look)
 {
  $query = $this->make_query1($catid,$color,$fabric,$material,$look);
  $data = $this->db->query($query);
  return $data->num_rows();
 }
 
 function count_all2($subcatid,$color,$fabric,$material,$look)
 {
  $query = $this->make_query1($subcatid,$color,$fabric,$material,$look);
  $data = $this->db->query($query);
  return $data->num_rows();
 }
 function count_all3($colid,$color,$fabric,$material,$look)
 {
  $query = $this->make_query1($colid,$color,$fabric,$material,$look);
  $data = $this->db->query($query);
  return $data->num_rows();
 }


 function fetch_data($limit, $start, $category, $subcategory,$color,$fabric,$material,$look)
 {
  $query = $this->make_query($category, $subcategory,$color,$fabric,$material,$look);

  $query .= ' LIMIT '.$start.', ' . $limit;

  $data = $this->db->query($query);

  $output = '';
  if($data->num_rows() > 0)
  {
   foreach($data->result_array() as $row)
   {
     $id= $row['product_name'];
     $productid = $row['product_id'];
    
     $product_id = $row['slug'];
     $product_name = $row['meta_title'];
      $product_tagline = $row['product_tagline'];
    
   
               
     $product_image =base_url()."uploads/products/".$row['featured_image']."";
     
       $output.='<div class="col-md-4 br_rights">
       <div class="products_gridWraps">
       <a href="'.base_url().'products/product-details/'.$product_id.'" target="_blank">
           <div class="product_ImageWrapper">
           <img src="'.$product_image.'" alt="'.$row['featured_image'].'">
           </div>
           <div class="product_titelLinks">
               
               
               <div class="product_color">
               <span>'.$id.'</span>
                
                  <ul>';
               $sel_size=get_sub_product('product_color','color','product_id',$productid); 
               foreach($sel_size as $size) { 
                $sel_size_part=get_sub_product('color','image','id',$size); 
                 foreach($sel_size_part as $size_part) { 
                 $output.=' <span class="blue colorcode" style="#"><img src="'.base_url().'uploads/color/'.$size_part.'"></span>';
                  }
               }
                   $output.='</ul>
               </div>
                 <h4>'.$product_tagline.'</h4>
           </div>
       </a>
   </div>
   </div>
   ';    
   }
  }
  else
  {
   $output = '<img src="'.base_url().'assets/img/404.jpg" class="no_data">';
  }
  return $output;
 }   
 
  function fetch_data1($limit, $start,$catid,$color,$fabric,$material,$look)
 {
  $query = $this->make_query1($catid,$color,$fabric,$material,$look);

  $query .= ' LIMIT '.$start.', ' . $limit;

  $data = $this->db->query($query);

  $output = '';
  if($data->num_rows() > 0)
  {
   foreach($data->result_array() as $row)
   {
     $id= $row['product_name'];
     $productid = $row['product_id'];
    
     $product_id = $row['slug'];
     $product_name = $row['meta_title'];
      $product_tagline = $row['product_tagline'];
    
   
               
     $product_image =base_url()."uploads/products/".$row['featured_image']."";
     
       $output.='<div class="col-md-4 br_rights">
       <div class="products_gridWraps">
       <a href="'.base_url().'products/product-details/'.$product_id.'" target="_blank">
           <div class="product_ImageWrapper">
           <img src="'.$product_image.'" alt="'.$row['featured_image'].'">
           </div>
           <div class="product_titelLinks">
               
               <div class="product_color">
               <span>'.$id.'</span>
                  
                  <ul>';
               $sel_size=get_sub_product('product_color','color','product_id',$productid); 
               foreach($sel_size as $size) { 
                $sel_size_part=get_sub_product('color','image','id',$size); 
                 foreach($sel_size_part as $size_part) { 
                 $output.='<li class="pr'.$size_part.'"></li>';
                  }
               }
                   $output.='</ul>
               </div>
                 <h4>'.$product_tagline.'</h4>
           </div>
       </a>
   </div>
   </div>
   ';    
   }
  }
  else
  {
   $output = '<img src="'.base_url().'assets/img/404.jpg" class="no_data">';
  }
  return $output;
 }   
 
 
 function fetch_data2($limit, $start,$subcatid,$color,$fabric,$material,$look)
 {
  $query = $this->make_query2($subcatid,$color,$fabric,$material,$look);

  $query .= ' LIMIT '.$start.', ' . $limit;

  $data = $this->db->query($query);

  $output = '';
  if($data->num_rows() > 0)
  {
   foreach($data->result_array() as $row)
   {
     $id= $row['product_name'];
     $productid = $row['product_id'];
    
     $product_id = $row['slug'];
     $product_name = $row['meta_title'];
      $product_tagline = $row['product_tagline'];
    
   
               
     $product_image =base_url()."uploads/products/".$row['featured_image']."";
     
       $output.='<div class="col-md-4 br_rights">
       <div class="products_gridWraps">
       <a href="'.base_url().'products/product-details/'.$product_id.'" target="_blank">
           <div class="product_ImageWrapper">
           <img src="'.$product_image.'" alt="'.$row['featured_image'].'">
           </div>
           <div class="product_titelLinks">
              
             
               <div class="product_color">
               <span>'.$id.'</span>
                 
                  <ul>';
               $sel_size=get_sub_product('product_color','color','product_id',$productid); 
               foreach($sel_size as $size) { 
                $sel_size_part=get_sub_product('color','name','id',$size); 
                 foreach($sel_size_part as $size_part) { 
                 $output.='<li class="pr'.$size_part.'"></li>';
                  }
               }
                   $output.='</ul>
               </div>
                 <h4>'.$product_tagline.'</h4>
           </div>
       </a>
   </div>
   </div>
   ';    
   }
  }
  else
  {
   $output = '<img src="'.base_url().'assets/img/404.jpg" class="no_data">';
  }
  return $output;
 }
 
 function fetch_data3($limit, $start,$colid,$color,$fabric,$material,$look)
 {
  $query = $this->make_query3($colid,$color,$fabric,$material,$look);

  $query .= ' LIMIT '.$start.', ' . $limit;

  $data = $this->db->query($query);

  $output = '';
  if($data->num_rows() > 0)
  {
   foreach($data->result_array() as $row)
   {
     $id= $row['product_name'];
     $productid = $row['product_id'];
    
     $product_id = $row['slug'];
     $product_name = $row['meta_title'];
    
    $product_tagline = $row['product_tagline'];
               
     $product_image =base_url()."uploads/products/".$row['featured_image']."";
     
       $output.='<div class="col-md-4 br_rights">
       <div class="products_gridWraps">
       <a href="'.base_url().'products/product-details/'.$product_id.'" target="_blank">
           <div class="product_ImageWrapper">
           <img src="'.$product_image.'" alt="'.$row['featured_image'].'">
           </div>
           <div class="product_titelLinks">
               <span>'.$id.'</span>
               <h4>'.$product_tagline.'</h4>
               <div class="product_color">
                  <h6>Colors</h6>
                  <ul>';
               $sel_size=get_sub_product('product_color','color','product_id',$productid); 
               foreach($sel_size as $size) { 
                $sel_size_part=get_sub_product('color','name','id',$size); 
                 foreach($sel_size_part as $size_part) { 
                 $output.='<li class="pr'.$size_part.'"></li>';
                  }
               }
                   $output.='</ul>
               </div>
           </div>
       </a>
   </div>
   </div>
   ';    
   }
  }
  else
  {
   $output = '<img src="'.base_url().'assets/img/404.jpg" class="no_data">';
  }
  return $output;
 }
 
 
 
 
  function get_name($table,$column_name,$cond=array()){
        $this->db->select($column_name);
        $this->db->where($cond);
        $query = $this->db->get($table);
        $result=$query->row();
        return isset($result->$column_name)?$result->$column_name:"";
}
    
function get_details($id){
       $this->db->select(['*',$this->table_name.'.slug as product_id']);
     
       $this->db->where($this->table_name.'.slug',$id);
       $query=$this->db->get($this->table_name);
       return $query->row();
    } 

function get_related($id){
        $this->db->select(['*',$this->table_name.'.slug as product_id']);
        $this->db->where($this->table_name.'.slug !=',$id);
        $query=$this->db->get($this->table_name);
        return $query->result();
} 
    
function addEnquiry($data){
        if(!empty($data)){
          unset($data['sbt']);
         
           $this->table_name = 'enquiry';
           $this->db->insert($this->table_name,$data);
            $insert_id = $this->db->insert_id();
            return $insert_id;
           //echo $this->db->last_query(); die;
        }
    }
    function search_main(){
     $search=$this->input->post();
     $name=isset($search['query'])?trim($search['query']):"";  
     
      return $data=$this->db->query('
      SELECT item_name as list_name FROM item  where item_name LIKE "%'.$name.'%"
      UNION 
      SELECT range1 as list_name FROM kva where range1 LIKE "%'.$name.'%" UNION SELECT category_name as list_name FROM category where category_name LIKE "%'.$name.'%" UNION SELECT application_name as list_name FROM application where application_name LIKE "%' .$name.'%" UNION SELECT product.output as list_name FROM product where product.output LIKE "%' .$name.'%" UNION SELECT product.model_no as list_name FROM product where model_no LIKE "%' .$name.'%"')->result();
        
    }
    
    
}   