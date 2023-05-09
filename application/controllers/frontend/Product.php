<?php
class Product extends CI_Controller {
   
   public function __construct() {
      parent::__construct ();
      $this->load->helper('download');
      require_once(APPPATH."third_party/PHPMailer/PHPMailerAutoload.php");
     }
    
   function index()
   {
     
      $this->load->helper(array('form', 'url','common'));
      $this->load->library(array('session','pagination'));
        
      $this->load->model('productsdisplay','',TRUE);
      $this->load->model('homemodel','',TRUE);
      
      $data=array(   
         'header' => $this->load->view('frontend/assets/header', '', TRUE),  
         'footer' => $this->load->view('frontend/assets/footer', '', TRUE),
      );    
      
      
      $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
      $data['products'] = $this->productsdisplay->getAllProduct();
      $data['categories'] = $this->productsdisplay->getAllCategory();
      $data['subcategories'] = $this->productsdisplay->getAllSubCategory();
      $data['colors'] = $this->productsdisplay->getAllColor();
      $data['fabrics'] = $this->productsdisplay->getAllFabric();
      $data['materials'] = $this->productsdisplay->getAllMaterial();
      $data['looks'] = $this->productsdisplay->getAllLook();
        
      $insert_id=$this->productsdisplay->addEnquiry($this->input->post());
      $this->load->view('frontend/assets/header',$data);  
      $this->load->view('frontend/product/products',$data);
      $this->load->view('frontend/assets/footer',$data);
   }
   
 function fetch_data()
 {
  sleep(1);
  $this->load->model('productsdisplay','',TRUE);
  
  $this->load->helper(array('form', 'url','common'));    
  
  $category=$this->input->post('cat_checkbox');
  
  $subcategory=$this->input->post('subcat_checkbox');
  
  $color=$this->input->post('color_checkbox');
  
  $fabric=$this->input->post('fab_checkbox');
  
  $material=$this->input->post('material_checkbox');
  
  $look=$this->input->post('look_checkbox');
  
  
  $this->load->library('pagination');
  $config = array();
  $config['base_url'] = '#';
  $config['total_rows'] = $this->productsdisplay->count_all($category, $subcategory,$color,$fabric,$material,$look);
  $config['per_page'] = 9;
  $config['uri_segment'] = 3;
  $config['use_page_numbers'] = TRUE;
  $config['full_tag_open'] = '<ul class="pagination">';
  $config['full_tag_close'] = '</ul>';
  $config['first_tag_open'] = '<li>';
  $config['first_tag_close'] = '</li>';
  $config['last_tag_open'] = '<li>';
  $config['last_tag_close'] = '</li>';
  $config['next_link'] = '&gt;';
  $config['next_tag_open'] = '<li>';
  $config['next_tag_close'] = '</li>';
  $config['prev_link'] = '&lt;';
  $config['prev_tag_open'] = '<li>';
  $config['prev_tag_close'] = '</li>';
  $config['cur_tag_open'] = "<li class='active'><a href='#'>";
  $config['cur_tag_close'] = '</a></li>';
  $config['num_tag_open'] = '<li>';
  $config['num_tag_close'] = '</li>';
  $config['num_links'] = 3;
  $this->pagination->initialize($config);
  $page = $this->uri->segment(3);
  $start = ($page - 1) * $config['per_page'];
  $output = array(
   'pagination_link'  => $this->pagination->create_links(),
   'product_list'   => $this->productsdisplay->fetch_data($config["per_page"],$start, $category, $subcategory,$color,$fabric,$material,$look)
  );
  echo json_encode($output);
 }
 
 
  
function fetch_datacat()
 {
  sleep(1);
  $this->load->model('productsdisplay','',TRUE);
  
  $this->load->helper(array('form', 'url','common'));
  $this->load->library(array('session', 'pagination','cart'));

    $cat = $this->input->post('catid'); // 1stsegment
    $sql = $this->db->query("SELECT id from category where slug='$cat'");
        
  $result = $sql->result();
 
  $catid = $result[0]->id;

  $color=$this->input->post('color_checkbox');
  
  $fabric=$this->input->post('fab_checkbox');
  
  $material=$this->input->post('material_checkbox');
  
  $look=$this->input->post('look_checkbox');
  
  $config = array();
  $config["base_url"] = '#';
  $config['total_rows'] = $this->productsdisplay->count_all1($catid,$color,$fabric,$material,$look);
  $config['per_page'] = 9;
  $config['uri_segment'] = 3;
  $config['use_page_numbers'] = TRUE;
  $config['full_tag_open'] = '<ul class="pagination">';
  $config['full_tag_close'] = '</ul>';
  $config['first_tag_open'] = '<li>';
  $config['first_tag_close'] = '</li>';
  $config['last_tag_open'] = '<li>';
  $config['last_tag_close'] = '</li>';
  $config['next_link'] = '&gt;';
  $config['next_tag_open'] = '<li>';
  $config['next_tag_close'] = '</li>';
  $config['prev_link'] = '&lt;';
  $config['prev_tag_open'] = '<li>';
  $config['prev_tag_close'] = '</li>';
  $config['cur_tag_open'] = "<li class='active'><a href='#'>";
  $config['cur_tag_close'] = '</a></li>';
  $config['num_tag_open'] = '<li>';
  $config['num_tag_close'] = '</li>';
  $config['num_links'] = 3;
  $this->pagination->initialize($config); 
  $page = $this->uri->segment(3);
  $start = ($page - 1) * $config['per_page'];
  $output = array(
 
   'pagination_link'  => $this->pagination->create_links(),
   'product_list'   => $this->productsdisplay->fetch_data1($config["per_page"], $start,$catid,$color,$fabric,$material,$look)
 
  );
  echo json_encode($output);
  
  
 }
 
 function fetch_datasubcat()
 {
  sleep(1);
  $this->load->model('productsdisplay','',TRUE);
  
  $this->load->helper(array('form', 'url','common'));
  $this->load->library(array('session', 'pagination','cart'));

    $subcat = $this->input->post('subcatid'); // 1stsegment
    $sql = $this->db->query("SELECT id from subcategory where slug='$subcat'");
        
  $result = $sql->result();
 
  $subcatid = $result[0]->id;

  $color=$this->input->post('color_checkbox');
  
  $fabric=$this->input->post('fab_checkbox');
  
  $material=$this->input->post('material_checkbox');
  
  $look=$this->input->post('look_checkbox');
  
  $config = array();
  $config["base_url"] = '#';
  $config['total_rows'] = $this->productsdisplay->count_all2($subcatid,$color,$fabric,$material,$look);
  $config['per_page'] = 9;
  $config['uri_segment'] = 3;
  $config['use_page_numbers'] = TRUE;
  $config['full_tag_open'] = '<ul class="pagination">';
  $config['full_tag_close'] = '</ul>';
  $config['first_tag_open'] = '<li>';
  $config['first_tag_close'] = '</li>';
  $config['last_tag_open'] = '<li>';
  $config['last_tag_close'] = '</li>';
  $config['next_link'] = '&gt;';
  $config['next_tag_open'] = '<li>';
  $config['next_tag_close'] = '</li>';
  $config['prev_link'] = '&lt;';
  $config['prev_tag_open'] = '<li>';
  $config['prev_tag_close'] = '</li>';
  $config['cur_tag_open'] = "<li class='active'><a href='#'>";
  $config['cur_tag_close'] = '</a></li>';
  $config['num_tag_open'] = '<li>';
  $config['num_tag_close'] = '</li>';
  $config['num_links'] = 3;
  $this->pagination->initialize($config); 
  $page = $this->uri->segment(3);
  $start = ($page - 1) * $config['per_page'];
  $output = array(
 
   'pagination_link'  => $this->pagination->create_links(),
   'product_list'   => $this->productsdisplay->fetch_data2($config["per_page"], $start,$subcatid,$color,$fabric,$material,$look)
 
  );
  echo json_encode($output);
  
  
 }
 
  function fetch_datacollection()
 {
  sleep(1);
  $this->load->model('productsdisplay','',TRUE);
  
  $this->load->helper(array('form', 'url','common'));
  $this->load->library(array('session', 'pagination','cart'));

    $subcat = $this->input->post('colid'); // 1stsegment
    $sql = $this->db->query("SELECT id from collection where slug='$subcat'");
        
  $result = $sql->result();
 
  $colid = $result[0]->id;

  $color=$this->input->post('color_checkbox');
  
  $fabric=$this->input->post('fab_checkbox');
  
  $material=$this->input->post('material_checkbox');
  
  $look=$this->input->post('look_checkbox');
  
  $config = array();
  $config["base_url"] = '#';
  $config['total_rows'] = $this->productsdisplay->count_all3($colid,$color,$fabric,$material,$look);
  $config['per_page'] = 9;
  $config['uri_segment'] = 3;
  $config['use_page_numbers'] = TRUE;
  $config['full_tag_open'] = '<ul class="pagination">';
  $config['full_tag_close'] = '</ul>';
  $config['first_tag_open'] = '<li>';
  $config['first_tag_close'] = '</li>';
  $config['last_tag_open'] = '<li>';
  $config['last_tag_close'] = '</li>';
  $config['next_link'] = '&gt;';
  $config['next_tag_open'] = '<li>';
  $config['next_tag_close'] = '</li>';
  $config['prev_link'] = '&lt;';
  $config['prev_tag_open'] = '<li>';
  $config['prev_tag_close'] = '</li>';
  $config['cur_tag_open'] = "<li class='active'><a href='#'>";
  $config['cur_tag_close'] = '</a></li>';
  $config['num_tag_open'] = '<li>';
  $config['num_tag_close'] = '</li>';
  $config['num_links'] = 3;
  $this->pagination->initialize($config); 
  $page = $this->uri->segment(3);
  $start = ($page - 1) * $config['per_page'];
  $output = array(
 
   'pagination_link'  => $this->pagination->create_links(),
   'product_list'   => $this->productsdisplay->fetch_data3($config["per_page"], $start,$colid,$color,$fabric,$material,$look)
 
  );
  echo json_encode($output);
  
  
 }


 
 
 function product_details($id)
   {
      $this->load->helper(array('form', 'url','common'));
      $this->load->library(array('session','pagination','email'));
      $this->load->model('productsdisplay','',TRUE);
      $this->load->model('homemodel','',TRUE);
      
        if (!empty($this->input->post())) {
            
                          $email = $this->input->post('email');
                     
                      if($email!=''){
                                    $insert_id = $this->homemodel->addEnquiry($this->input->post()); 
                                    $sender_mail ='noreply@dhoa.com';
            
                                    $data['full_name'] =$this->input->post('full_name');	
                                   		
                                    $config = array(
                        						  'mailtype' => 'html',
                        						  'charset'  => 'utf-8',
                        						  'priority' => '1'
                        						   );
                                    
                                       $this->email->initialize($config);
                                
                        			
                                        $this->email->from($sender_mail,'DHOA ADMIN');
                        				$this->email->to("$email");
                        				$this->email->subject('DHOA Product Enquiry Form');
                        				$emaildescription=$this->load->view('frontend/assets/enqusertemplate',$data,TRUE);
                        				$this->email->message($emaildescription);
                        				$this->email->send();
                              }
                                $sender_mail ='noreply@dhoa.com';
                                $data['product_name'] = $this->input->post('product_name');
                                $data['full_name'] =$this->input->post('name');	
                                $data['message'] = $this->input->post('content');
                                $data['mobile_number'] = $this->input->post('phone_number');
                                $data['email'] =$this->input->post('email');
                    		
                    			
                                $config = array(
                    						  'mailtype' => 'html',
                    						  'charset'  => 'utf-8',
                    						  'priority' => '1'
                    						   );
                                   $this->email->initialize($config);
                            
                    			
                                    $this->email->from($sender_mail,'DHOA ADMIN');
                    				$this->email->to("info@dhoa.com");
                    				$this->email->subject('New DHOA Product Enquiry');
                    				$emaildescription=$this->load->view('frontend/assets/template',$data,TRUE);
                    				$this->email->message($emaildescription);
                    				$this->email->send();
                    				echo '<script>alert("Your response received Successfully!");</script>'; 

            }
          
      $id = $this->uri->segment(3);
      $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
     
      $data['products'] = $this->productsdisplay->getAllProduct();
      $data['record'] = $this->productsdisplay->get_details($id);
      $data['related'] = $this->productsdisplay->get_related($id);

      $insert_id=$this->productsdisplay->addEnquiry($this->input->post());
      $this->load->view('frontend/assets/header',$data);  
      $this->load->view('frontend/product/product-details',$data);
      $this->load->view('frontend/assets/footer',$data);
   }
   
   public function getcategory()
    {
        $this->load->helper(array('form', 'url', 'common'));
        $this->load->library(array('session', 'pagination'));
        $this->load->model('productsdisplay', '', true);
        $this->load->model('homemodel', '', true);
        $cat = $this->uri->segment(2); // 1stsegment
        $sql = $this->db->query("SELECT id,category_name from category where slug='$cat'");
        $result = $sql->result();
        $catid = $result[0]->id;
        $catname = $result[0]->category_name;

        $data['catname'] = $result[0]->category_name;
        $data['cat_slug'] =$cat;
       
        $data['title'] = $catname . " || DHOA";
        $data['meta_title'] = $catname ." || DHOA";
        $data['meta_description'] = $catname . "|| DHOA";
        
        $data['colors'] = $this->productsdisplay->getAllColor();
      $data['fabrics'] = $this->productsdisplay->getAllFabric();
      $data['materials'] = $this->productsdisplay->getAllMaterial();
      $data['looks'] = $this->productsdisplay->getAllLook();
   $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
      
        $this->load->view('frontend/assets/header',$data);  
      $this->load->view('frontend/product/category',$data);
      $this->load->view('frontend/assets/footer',$data);
    }
   

    public function getsubcategory()
    {
        $this->load->helper(array('form', 'url', 'common'));
       
        $this->load->library(array('session', 'pagination'));

        $this->load->model('productsdisplay', '', true);
        
         $this->load->model('homemodel', '', true);

    
        $cat = $this->uri->segment(2); // 1stsegment
    
        $sql = $this->db->query("SELECT id,slug,name,category_type from subcategory where slug='$cat'");
        
        $result = $sql->result();
       
        $subcatid = $result[0]->id;

        $subcatname = $result[0]->name;

        $catname = $result[0]->category_type;

        $sql = $this->db->query("SELECT category_name,slug from category where id='$catname'");
        
        $results = $sql->result();

        $data['catname'] = $results[0]->category_name;
        $data['cat_slug'] = $results[0]->slug;

        $data['subcatname'] = $result[0]->name;

        $data['subslug'] = $result[0]->slug;

        $data['title'] = $subcatname." || DHOA";
        $data['meta_title'] = $subcatname ." || DHOA";
        $data['meta_description'] =$subcatname." || DHOA";
     
        $data['colors'] = $this->productsdisplay->getAllColor();
      $data['fabrics'] = $this->productsdisplay->getAllFabric();
      $data['materials'] = $this->productsdisplay->getAllMaterial();
      $data['looks'] = $this->productsdisplay->getAllLook();
       $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
      
      $this->load->view('frontend/assets/header',$data);  
      $this->load->view('frontend/product/subcategory',$data);
      $this->load->view('frontend/assets/footer',$data);
      
    }
    
    public function getcollection()
    {
        $this->load->helper(array('form', 'url', 'common'));
       
        $this->load->library(array('session', 'pagination'));

        $this->load->model('productsdisplay', '', true);
        
         $this->load->model('homemodel', '', true);

    
        $cat = $this->uri->segment(2); // 1stsegment
    
        $sql = $this->db->query("SELECT id,slug,name from collection where slug='$cat'");
        
        $result = $sql->result();
       
        $colid = $result[0]->id;

        $colname = $result[0]->name;

       
       
     
      $data['colors'] = $this->productsdisplay->getAllColor();
      $data['fabrics'] = $this->productsdisplay->getAllFabric();
      $data['materials'] = $this->productsdisplay->getAllMaterial();
      $data['looks'] = $this->productsdisplay->getAllLook();
      $data['category'] = $this->homemodel->getAllCategories();
      $data['subcategory'] =$this->homemodel->getAllSubCategories();
      
      $this->load->view('frontend/assets/header',$data);  
      $this->load->view('frontend/product/collection',$data);
      $this->load->view('frontend/assets/footer',$data);
      
    }
   
   
   
   function addEnquiry()
   {
      $this->load->helper(array('form', 'url'));
      $this->load->library(array('session','pagination'));
       $this->load->model('productsdisplay','',TRUE);     
       
      if(!empty($this->input->post())){
         $insert_id=$this->productsdisplay->addEnquiry($this->input->post());
         $this->session->set_flashdata('message',"Thank You for enquiring with Online UPS.");
          
      }
   }

   function search_main()
   {
      $this->load->helper(array('form', 'url'));
      $this->load->library( array('form_validation','session'));
      $this->load->model('productsdisplay','',TRUE);     
      
      $data=$this->productsdisplay->search_main();
      
      foreach($data as $key=>$value){
       $name=preg_replace('/\t+/','',$value->list_name);
       $newarray[$key]['id'] = $name; 
       $newarray[$key]['name'] = $name;
     }
     echo json_encode($newarray);
   }
}