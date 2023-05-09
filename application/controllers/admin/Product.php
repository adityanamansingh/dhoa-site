<?php
class Product extends CI_Controller {
   
   public function __construct() {
      parent::__construct ();
      $this->load->helper('download');
     }
    
   function index()
   {
      $this->load->helper(array('form', 'url','common'));
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('productmodel','',TRUE);     
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      
      $num_records = $this->productmodel->get_total_records();
     
     
      $data['num_records']  = $num_records;
      $base_url=base_url().'admin/product/index';
      $start_index=$this->uri->segment($this->uri->total_segments());
      $default_page_size = 10;
      if( $this->input->get('per_page') != '' ){
         $per_page = $this->input->get('per_page');
      }
      else{
         $per_page=$default_page_size;
      }
      
      $data['default_page_size']  = $default_page_size;
      $content_array=$this->productmodel->get_contents($per_page,$start_index);
      $data['content_array']=$content_array;
      $data['start_index']=$start_index;
      
      $data['pagination_links']=paging($base_url,$this->input->server("QUERY_STRING"),$num_records,$per_page,$this->uri->total_segments());
       
      $this->load->view('admin/product/index',$data);
   }
   
   function add(){
       $this->load->helper(array('form', 'url','common'));
       $this->load->library(array('session','pagination'));
        $this->load->model('productmodel','',TRUE);     
        
       if(!empty($this->input->post())){
          $insert_id=$this->productmodel->add($this->input->post());
 
          self::upload_file($insert_id,$_FILES,'featured_image','add');
          self::upload_file($insert_id,$_FILES,'image1','add');
          self::upload_file($insert_id,$_FILES,'image2','add');
          self::upload_file($insert_id,$_FILES,'image3','add');
          self::upload_file($insert_id,$_FILES,'image4','add');
          self::upload_file($insert_id,$_FILES,'image5','add');
          
          $postData=$this->input->post();
          $product_color_array=isset($postData['product_color']) && !empty($postData['product_color'])?$postData['product_color']:[];
        
          if(!empty($product_color_array)){
            foreach($product_color_array as $key=>$value){
              $colorInsert=['product_id'=>$insert_id,'color'=>$value];
              $this->db->insert('product_color',$colorInsert);               
            }
          }
          
          $product_collection_array=isset($postData['product_collection']) && !empty($postData['product_collection'])?$postData['product_collection']:[];
          if(!empty($product_collection_array)){
            foreach($product_collection_array as $key=>$value){
              $collectionInsert=['product_id'=>$insert_id,'collection'=>$value];
              $this->db->insert('product_collection',$collectionInsert);               
            }
          }
          
            
          $product_fabric_array=isset($postData['product_fabric']) && !empty($postData['product_fabric'])?$postData['product_fabric']:[];
          if(!empty($product_fabric_array)){
            foreach($product_fabric_array as $key=>$value){
              $fabricInsert=['product_id'=>$insert_id,'fabric'=>$value];
              $this->db->insert('product_fabric',$fabricInsert);               
            }
          }

          $product_look_array=isset($postData['product_look']) && !empty($postData['product_look'])?$postData['product_look']:[];
          if(!empty($product_look_array)){
            foreach($product_look_array as $key=>$value){
              $lookInsert=['product_id'=>$insert_id,'look'=>$value];
              $this->db->insert('product_look',$lookInsert);               
            }
          }
           
          $product_material_array=isset($postData['product_material']) && !empty($postData['product_material'])?$postData['product_material']:[];
          if(!empty($product_material_array)){
            foreach($product_material_array as $key=>$value){
              $materialInsert=['product_id'=>$insert_id,'material'=>$value];
              $this->db->insert('product_material',$materialInsert);               
            }
          }


         
          $this->session->set_flashdata('message',"Product has been added.");
           redirect('admin/product');   
         }
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      $data['category']=$this->productmodel->getAllCategories();
      $data['color']=$this->productmodel->get_color();
      $data['material']=$this->productmodel->get_material();
      $data['fabric']=$this->productmodel->get_fabric();  
      $data['look'] = $this->productmodel->get_look();
      $data['collection'] = $this->productmodel->get_collection();
      
 
      $this->load->view('admin/product/add',$data);
   }
   
   function edit($id){
       $this->load->helper(array('form', 'url','common'));
       $this->load->library(array('session','pagination'));
       $this->load->model('productmodel','',TRUE);     
      
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
       $data['record']=$this->productmodel->fetch_details($id);
       
       if(!empty($this->input->post())){
          $result=$this->productmodel->edit($id,$this->input->post());
          if($result){
                 
          self::upload_file($id,$_FILES,'featured_image','edit');  
          self::upload_file($id,$_FILES,'image1','edit');
          self::upload_file($id,$_FILES,'image2','edit');
          self::upload_file($id,$_FILES,'image3','edit');
          self::upload_file($id,$_FILES,'image4','edit');
          self::upload_file($id,$_FILES,'image5','edit');
          
          $postData=$this->input->post();
          
          $product_color_array=isset($postData['product_color']) && !empty($postData['product_color'])?$postData['product_color']:[];
          
            if(!empty($product_color_array)){
              $this->db->where('product_id',$id);  
              $this->db->delete('product_color');
              
              foreach($product_color_array as $key=>$value){
                $colorInsert=['product_id'=>$id,'color'=>$value];
                $this->db->insert('product_color',$colorInsert);
                
              }
            }
            
              $product_collection_array=isset($postData['product_collection']) && !empty($postData['product_collection'])?$postData['product_collection']:[];
              
             if(!empty($product_collection_array)){
              $this->db->where('product_id',$id);  
              $this->db->delete('product_collection');
              
              foreach($product_collection_array as $key=>$value){
                $collectionInsert=['product_id'=>$id,'collection'=>$value];
                $this->db->insert('product_collection',$collectionInsert);
                
              }
            }
            
            $product_material_array=isset($postData['product_material']) && !empty($postData['product_material'])?$postData['product_material']:[];
            if(!empty($product_material_array)){
              
              $this->db->where('product_id',$id);  
              $this->db->delete('product_material');
              
              foreach($product_material_array as $key=>$value){
                
                $sizeInsert=['product_id'=>$id,'material'=>$value];
                $this->db->insert('product_material',$sizeInsert);               
              }
            }
           
            $product_fabric_array=isset($postData['product_fabric']) && !empty($postData['product_fabric'])?$postData['product_fabric']:[];
            if(!empty($product_fabric_array)){
              
              $this->db->where('product_id',$id);  
              $this->db->delete('product_fabric');
              
              foreach($product_fabric_array as $key=>$value){
                
                $sizeInsert=['product_id'=>$id,'fabric'=>$value];
                $this->db->insert('product_fabric',$sizeInsert);               
              }
            } 
          
            $product_look_array=isset($postData['product_look']) && !empty($postData['product_look'])?$postData['product_look']:[];
            if(!empty($product_look_array)){
              
              $this->db->where('product_id',$id);  
              $this->db->delete('product_look');
              
              foreach($product_look_array as $key=>$value){
                
                $sizeInsert=['product_id'=>$id,'look'=>$value];
                $this->db->insert('product_look',$sizeInsert);               
              }
            } 
        
          
           
         }
          $this->session->set_flashdata('message',"Product has been updated.");
          redirect("admin/product");
      }
       
      $data['category']=$this->productmodel->getAllCategories();
      $data['subcategorys']=$this->productmodel->getAllSubCategories();
      $data['color']=$this->productmodel->get_color();
      $data['material']=$this->productmodel->get_material();
      $data['fabric']=$this->productmodel->get_fabric();  
      $data['look'] = $this->productmodel->get_look(); 
       $data['collection'] = $this->productmodel->get_collection();
           
      $this->load->view('admin/product/edit',$data);
   }
   
   
      function featured()
   {
      $this->load->helper(array('form', 'url','common'));
      $this->load->library(array('session','pagination'));
      
      $this->load->model('loginmodel','',TRUE);     
      $this->loginmodel->check_is_valid_user();    
       
      $this->load->model('productmodel','',TRUE);     
       
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
      );
      
      
      $num_records = $this->productmodel->get_total_records();
     
     
      $data['num_records']  = $num_records;
      $base_url=base_url().'admin/product/featured';
      $start_index=$this->uri->segment($this->uri->total_segments());
      $default_page_size = 10;
      if( $this->input->get('per_page') != '' ){
         $per_page = $this->input->get('per_page');
      }
      else{
         $per_page=$default_page_size;
      }
      
      $data['default_page_size']  = $default_page_size;
      $content_array=$this->productmodel->get_contents($per_page,$start_index);
      $data['content_array']=$content_array;
      $data['start_index']=$start_index;
      
      $data['pagination_links']=paging($base_url,$this->input->server("QUERY_STRING"),$num_records,$per_page,$this->uri->total_segments());
       
      $this->load->view('admin/product/featured',$data);
   }
   
   
   
     function upload_file($id,$fileArray,$column,$for='add'){
      if($id!='' && !empty($fileArray) && $fileArray[$column]['error']=="0" && $column!=''){
          
            $record=$this->productmodel->fetch_details($id);
            $ext = pathinfo($fileArray[$column]['name'], PATHINFO_EXTENSION);
            $file_name=rand(10,1000).date('YmdHis').".".$ext;
            if($for=="edit"){
                @unlink(FCPATH."uploads/products/".$record->$column);
            }
            $ffdsf=$this->productmodel->edit($id,[$column=>$file_name]);
            move_uploaded_file($fileArray[$column]['tmp_name'],FCPATH."uploads/products/".$file_name);
            //chmod($ffdsf,0777);
            return true;
       }
   }
   
   function delete($id){
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('productmodel','',TRUE);     
       if($id!=''){
         $this->productmodel->deleteproduct($id);
         $this->session->set_flashdata('message',"Product has been deleted.");
         redirect("admin/product");  
       }
   }
   
   function delete_image1()
   {
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('productmodel','',TRUE); 
       $image1 = $_GET['image1'];
      
       $sql=$this->db->query("UPDATE product set image1='' where image1='$image1'");
   
       $this->session->set_flashdata('message',"Image has been deleted.");
       redirect("admin/product");  
   }
   
    function delete_image2()
   {
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('productmodel','',TRUE); 
       $image2 = $_GET['image2'];
          
       $sql=$this->db->query("UPDATE product set image1='' where image2='$image2'");
   
       $this->session->set_flashdata('message',"Image has been deleted.");
       redirect("admin/product");  
   }
   
     function delete_image3()
   {
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('productmodel','',TRUE); 
       $image3 = $_GET['image3'];
          
       $sql=$this->db->query("UPDATE product set image3='' where image3='$image3'");
   
       $this->session->set_flashdata('message',"Image has been deleted.");
       redirect("admin/product");  
   }
   
     function delete_image4()
   {
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('productmodel','',TRUE); 
       $image4 = $_GET['image4'];
          
       $sql=$this->db->query("UPDATE product set image4='' where image4='$image4'");
   
       $this->session->set_flashdata('message',"Image has been deleted.");
       redirect("admin/product");  
   }
   
     function delete_image5()
   {
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('productmodel','',TRUE); 
       $image5 = $_GET['image5'];
          
       $sql=$this->db->query("UPDATE product set image5='' where image5='$image5'");
   
       $this->session->set_flashdata('message',"Image has been deleted.");
       redirect("admin/product");  
   }
   
   function view($id){

       $this->load->helper(array('form', 'url'));
       $this->load->library(array('session','pagination'));
       $this->load->model('productmodel','',TRUE);     
       $data = array(
         'header' => $this->load->view('admin/assets/header', '', TRUE),  
         'footer' => $this->load->view('admin/assets/footer', '', TRUE),
        );
         $data['category']=$this->productmodel->getAllCategories();
         $data['kvas']=$this->productmodel->getAllKva();
         $data['items']=$this->productmodel->getAllItems();
         $data['applications']=$this->productmodel->getAllApplication();
         $data['record']=$this->productmodel->fetch_details($id);
         
       if(!empty($this->input->post())){
          $result=$this->productmodel->edit($id,$this->input->post());
          if($result){
            self::upload_file($insert_id,$_FILES,'product_image','edit');    
          }
          $this->session->set_flashdata('message',"product has been updated.");
          redirect("admin/product");
       }
       
      $this->load->view('admin/product/view',$data);
   }
   
   function getAllCategories()
   {
      $data['groups'] = $this->productmodel->get_category();
      
       $this->load->view('admin/product/add',$data);
   }  

     function get_category(){
      if($this->input->post()){
      $item_id=$this->input->post('item_id');
      $this->load->helper(array('form', 'url'));
      $this->load->library(array('session','pagination'));
      $this->load->model('productmodel','',TRUE);     
      $category=$this->productmodel->get_category($item_id); 
      $html='<option value="">Select Your Brand</option>';
      if(count($category)>0)
      {
        foreach($category as $categories){
            $html.='<option value="'.$categories->id.'">'.$categories->category_name.'</option>';
        }    
      }
      echo $html;
    }
  }

  function get_subcategory(){
     
    if($this->input->post()){
    $item_id=$this->input->post('item_id');
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session','pagination'));
    $this->load->model('productmodel','',TRUE);     
    $subcategorys=$this->productmodel->get_subcategory($item_id); 

    $html='<option value="">Select Your Sub Category</option>';
    if(count($subcategorys)>0)
    {
      foreach($subcategorys as $subcategories){
          $html.='<option value="'.$subcategories->id.'">'.$subcategories->name.'</option>';
      }    
    }
    echo $html;
  }
}
   
    function update_status(){
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session','pagination'));
    $this->load->model('productmodel','',TRUE);    
    
    $id= $_REQUEST['sid'];
    $status= $_REQUEST['svalue'];
    if($status == 'active')
    {
    $sql=$this->db->query("UPDATE product set status='inactive' where id='$id'");
    }else{

    $sql=$this->db->query("UPDATE product set status='active' where id='$id'");

    }
    redirect("admin/product");
  }
  
   function update_featured_status(){
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session','pagination'));
    $this->load->model('productmodel','',TRUE);    
    
    $id= $_REQUEST['sid'];
    $status= $_REQUEST['svalue'];
    if($status == 'active')
    {
    $sql=$this->db->query("UPDATE product set status='inactive' where id='$id'");
    }else{

    $sql=$this->db->query("UPDATE product set status='active' where id='$id'");

    }
    redirect("admin/product/featured");
  }
  
  function make_featured()
  {
      
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session','pagination'));
    $this->load->model('productmodel','',TRUE);    
    
    $id= $_REQUEST['sid'];
    $featured= $_REQUEST['svalue'];
    if($featured == 'yes')
    {
    $sql=$this->db->query("UPDATE product set is_featured='no' where id='$id'");
    }else{

    $sql=$this->db->query("UPDATE product set is_featured='yes' where id='$id'");

    }
    redirect("admin/product/featured");
      
  }
  
  
 
}