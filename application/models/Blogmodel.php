<?php
class Blogmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
         $this->load->database();
        $this->table_name = 'blog';
    }
    function add($data){
        if(!empty($data)){
            // print_r($data);exit;
             unset($data['sbt']);
             unset($data['blog_color']);
             unset($data['blog_size']);
             unset($data['blog_material']);
             unset($data['blog_images']);
             $this->db->insert($this->table_name,$data);
            $insert_id = $this->db->insert_id();
            return $insert_id;
        //    echo $this->db->last_query(); die;
        }
    }
   function edit($id,$data){
        if(!empty($data) && $id!=''){
             unset($data['sbt']);
             unset($data['blog_color']);
             unset($data['blog_size']);
             unset($data['blog_material']);
             unset($data['blog_images']);
          $this->db->where('id',$id);
          return $this->db->update($this->table_name,$data);
           //echo $this->db->last_query(); die;
        }
    }
    function fetch_details($id){
        if($id!=''){
           $this->db->select('*');
           $this->db->from('blog');
           $this->db->where('blog.id',$id); 
           $query = $this->db->get();
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
  function deleteblog($id){
       $this->db->where('id', $id); 
       $this->db->delete($this->table_name);
    }
    
 function deleteallblog($id){
       $this->db->where('id', $id); 
       $this->db->delete('blog_images');
    }

    function getAllCategories()
    {
        $query = $this->db->get('category');
        return $query->result();
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
 
function get_category(){
       $this->db->select('*');
       $query = $this->db->get('category');
       return $query->result();
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

   function getBlogs()
{
    $this->db->select('*');
    $this->db->select('blog.id as blogID');
    $this->db->select('blog_images.features');
    $this->db->from('blog');
    $this->db->join('blog_images',"blog.id=blog_images.blog_id and blog_images.features='yes'");
    $this->db->where("blog.status='active'");
    $query = $this->db->get(); 
    return $query->result();

}

function get_Recent($id){
    $this->db->select('*');
    $this->db->select('blog.featured_image as image');
    $this->db->from('blog');
    $this->db->where('blog.id !=',$id);
    $this->db->where("blog.status='active'");
    $query = $this->db->get(); 
    return $query->result();
}

function get_details($slug){
    $this->db->select('blog.*');
    $this->db->select('blog.featured_image as image');
    $this->db->from('blog');
    $this->db->where('blog.slug',$slug);
    $query = $this->db->get(); 
    return $query->result();
}


function get_count() {
    return $this->db->count_all('blog');
}




function count_feature_blog($blog_id){
        $this->db->where('blog_id',$blog_id);
        $this->db->where('features','yes');
       return $query = $this->db->count_all_results('blog_images');
    }

    function get_export_data(){
        $this->db->select(['sku','blog_name','blog_tagline','blog_short_description','blog_long_description','heading1','data1','heading2','data2','heading3','data3','heading4','data4','heading5','data5','heading6','data6','heading7','data7','heading8','data8','heading9','data9','heading10','data10','heading11','data11','heading12','data12','heading13','data13','heading14','data14','heading15','data15','heading16','data16','document','tags']);
        $this->db->order_by($this->table_name.".id", "desc");
        $query = $this->db->get($this->table_name);
        return $query->result_array();
     }
     



function make_query()
 {
  $query = "
  SELECT DISTINCT blog.*,blog.slug as blogID,blog.featured_image as image FROM blog 
  WHERE blog.status = 'active' ORDER BY blog.id Desc
  ";
   
  return $query;
 }   
 function count_all()
 {
  $query = $this->make_query();
  $data = $this->db->query($query);
  return $data->num_rows();
 }  

 function fetch_data($limit,$start)
 {
  $query = $this->make_query();

  $query .= ' LIMIT '.$start.', ' . $limit;

  $data = $this->db->query($query);

  $output = '';
  if($data->num_rows() > 0)
  {
   foreach($data->result_array() as $row)
   {
       
     $project_id = $row['blogID'];
     
     $project_name =$row['blog_name'];
     
     $item_name = $row['blog_short_description'];
     
    $date = $row['updated_at'];
    $dateToPrint = date('j F, Y', strtotime($date) ) ;
                                             
     
       
     $output.='  
     <div class="col-md-3">
                <div class="ikio_blogListing__wrap">
                    <div class="ikio_blogLising__image">
                        <a href='.base_url().'blogs/'.$project_id.'><img src='.base_url().'uploads/blog/'. $row['image'] .'></a>
                    </div>
                    <div class="ikio__blogListing--content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog_date">
                                     <a href='.base_url().'blogs/'.$project_id.'><span>'.$dateToPrint.'</span></a>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="blog_share_icon">
                                    <ul>
                                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="social__large">
                                            <a class="a2a_button_linkedin"></a>
                                            <a class="a2a_button_whatsapp"></a>
                                             <a class="a2a_button_email"></a>
                                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                           </div>
                                         <script async src="https://static.addtoany.com/menu/page.js"></script>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_Content">
                                 <a href='.base_url().'blogs/'.$project_id.'>
                                    <h6>'.$project_name.'</h6>

                                    <p>
                                        '.$item_name.'
                                    </p>
                                 </a>
                                <a href='.base_url().'blogs/'.$project_id.' class="button_underline " id="hsize14">Read More</a>
                            </div>
                        </div>
                    </div>
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


 
function delete_blog($id)
{
 $this->db->where('id', $id);
 $this->db->delete('blog');
}


function make_featured($id)
{

 $this->db->set('is_featured','yes');
 $this->db->where('id', $id);
 $this->db->update('blog');
}

function remove_featured($id)
{

 $this->db->set('is_featured','no');
 $this->db->where('id', $id);
 $this->db->update('blog');

}

function make_activated($id)
{

 $this->db->set('status','active');
 $this->db->where('id', $id);
 $this->db->update('blog');

}


function remove_activated($id)
{

 $this->db->set('status','inactive');
 $this->db->where('id', $id);
 $this->db->update('blog');
 
}
 

   
}   