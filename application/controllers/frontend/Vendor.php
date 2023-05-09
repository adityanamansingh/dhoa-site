<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller{

    public function add()
    {
      
      $this->load->helper(array('form', 'url'));
      $this->load->library(array('session','pagination'));
      $this->load->library( array('form_validation','session'));
      $this->load->model('vendormodel'); 
      $data=array();
    
      if(!empty($this->input->post())){
          $insert_id=$this->vendormodel->add($this->input->post());
          self::upload_file($insert_id,$_FILES,'bank_account_proof','add'); 
          if($insert_id!=''){
              $encodeId=base64_encode($insert_id);
              $otp=self::generatePIN();  
              $datainsert=['otp'=>$otp];
              $vendorData=$this->vendormodel->fetch_details($insert_id);
              $this->vendormodel->edit($insert_id,$datainsert);
              $message="$otp is your vendor registration.";
              $mobile=isset($vendorData->contact_no)?$vendorData->contact_no:"";
              if($mobile!=''){
                self::sendSMS($mobile,$message);    
                redirect("vendor/vendor_verify/$encodeId");
              }else{
                  $this->session->set_flashdata('message',"Contact Number is not empty.");
                  redirect("vendor/add");
              }
          }else{
           $this->session->set_flashdata('message',"Something went wrong please try after sometime.");
           redirect("vendor/add");
          }
          
       }
        $data['state']=$this->vendormodel->get_state();    
       $this->load->view('frontend/vendor_add',$data);
    }
    function get_city(){
      if($this->input->post()){
      $state_id=$this->input->post('state_id');
      $this->load->helper(array('form', 'url'));
      $this->load->library(array('session','pagination'));
      $this->load->model('vendormodel','',TRUE);     
      $city=$this->vendormodel->get_city($state_id); 
      $html='<option value="">Select</option>';
      if(count($city)>0){
        foreach($city as $cities){
            $html.='<option value="'.$cities->id.'">'.$cities->name.'</option>';
        }    
      }
      echo $html;
    }
  }
 
    function upload_file($id,$fileArray,$column,$for='add'){
        if($id!='' && !empty($fileArray) && $fileArray[$column]['error']=="0" && $column!=''){
            
              $record=$this->vendormodel->fetch_details($id);
              $ext = pathinfo($fileArray[$column]['name'], PATHINFO_EXTENSION);
              $file_name=rand(10,1000).date('YmdHis').".".$ext;
              if($for=="edit"){
                  @unlink(FCPATH."uploads/".$record->$column);
              }
              $ffdsf=$this->vendormodel->edit($id,[$column=>$file_name]);
              move_uploaded_file($fileArray[$column]['tmp_name'],FCPATH."uploads/".$file_name);
              chmod($ffdsf,0777);
              return true;
         }
     }
     function search_brand(){
      
        $serch_text=$this->input->get('q');
        $this->load->model('vendormodel','',TRUE);     
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session','pagination'));
 
        $newarray[]=array();
        $sql=$this->db->query('SELECT id,category_name FROM category where category_name LIKE "%'.$serch_text.'%" ORDER BY category_name ASC');
        $result=$sql->result();
        foreach($result as $key=>$value)
        {
          $newarray[$key]['id']=$value->id; 
          $newarray[$key]['name']=$value->category_name; 
        }
       echo json_encode($newarray);
             
   }

    
    function search_item(){
      
      $serch_text=$this->input->get('q');
      $this->load->model('vendormodel','',TRUE);     
      $this->load->helper(array('form', 'url'));
      $this->load->library(array('session','pagination'));  
        
      $newarray[]=array();
      $sql=$this->db->query('SELECT id,item_name FROM item where item_name LIKE "%'.$serch_text.'%" ORDER BY item_name ASC');
      $result=$sql->result();
      foreach($result as $key=>$value)
      {
        $newarray[$key]['id']=$value->id; 
        $newarray[$key]['name']=$value->item_name; 
      }
     echo json_encode($newarray);
           
 }    
    
public function vendor_verify($encode_id)
{
      $this->load->helper(array('form', 'url'));
      $this->load->library( array('form_validation','session'));
      $this->load->model('vendormodel');
      if(!empty($this->input->post())){
          $otp=$this->input->post('otp');
          $id=base64_decode($encode_id);
          $check_otp=$this->vendormodel->check_otp($id,trim($otp));
          if($check_otp=="1"){
            $this->vendormodel->edit($id,['otp_verify'=>'1']);
            $this->session->set_flashdata('message',"Vendor has been added.");  
            redirect("vendor/add");
          }else{
            $this->session->set_flashdata('message',"Invalid otp.");  
            redirect("vendor/vendor_verified/$encode_id");
          }
      }
      
      if($encode_id!=''){
          $id=base64_decode($encode_id);
          $vendorData=$this->vendormodel->fetch_details($id);
          $data['id']=$id;
      }
      $data['encode_id']=$encode_id;
      
      
       if($id==''){
         redirect("vendor/add");  
        }
        $this->load->view('frontend/vendor_verify',$data);
    }
function resend_otp($encode_id){
        $this->load->model('vendormodel');    
        if($encode_id!=''){
             $id=base64_decode($encode_id);
              
              $otp=self::generatePIN();  
              $datainsert=['otp'=>$otp];
              $vendorData=$this->vendormodel->fetch_details($id);
              $this->vendormodel->edit($id,$datainsert);
              
              $message="$otp is your vendor registration.";
              $mobile=isset($vendorData->company_contact)?$vendorData->company_contact:"";
              self::sendSMS($mobile,$message);
              redirect("vendor/vendor_verify/$encode_id"); 
        }else{
           $this->session->set_flashdata('message',"Something went wrong please try after sometime.");
           redirect("vendor/add");
        }
}
 
function sendSMS($mobile,$message){
        $this->load->helper(array('form', 'url'));
        $this->load->library( array('form_validation','session'));
          
        $username = urlencode('JET ELECTRO');
        $sendername = urlencode('JETUPS');
        $message=urlencode($message);
        $mobile=urlencode($mobile);
        
        $url = 'http://sms.hspsms.com/sendSMS?username='.$username
           .'&message='.$message
           .'&sendername='.$sendername
           .'&smstype=TRANS&numbers='.$mobile.'&apikey=cec0f59c-9d1f-479e-bde6-44a8ae94f436';
           
        /* init the resource*/
        $ch = curl_init();
         curl_setopt_array($ch, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_SSL_VERIFYHOST => 0,
           CURLOPT_SSL_VERIFYPEER => 0
          ));
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        /*get response*/
        $output = curl_exec($ch);
        /*Print error if any*/
        if(curl_errno($ch))
        {
          $this->session->set_flashdata('message',curl_error($ch));
        }else{
          $this->session->set_flashdata('message',"OTP sent successfully.");
        }
        curl_close($ch);
}
function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
} 

}
