<section class="product_breadcumb" id="bgblack">
    <div class="container">
        <div class="inner">
            <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
               
            </ul>
        </div>
    </div>
</section>

<div class="contact_usupper" id="bgblack">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contatc_usinner">
                    <h1>Contact Us</h1>

                    <div class="contact_blocks">
                        <h4>Address.</h4>
                        <p>
                            8470 <br> Allison Pointe <br> Blvd #128 <br> Indianapolis, <br> IN 46250
                        </p>
                    </div>
                    <div class="contact_blocks">
                        <h4>Contact Us.</h4>
                        <ul>
                            <li><a href="tel:(888) 638-3462">(888) 638-3462</a></li>
                            <li><a href="mailto: hello@dhoa.com"> hello@dhoa.com</a></li>
                        </ul>
                    </div>
                    <div class="contact_blocks" id="social">
                        <h4>Social.</h4>
                        <ul>
                          <li><a href="https://www.pinterest.com/dhoa_official">Pinterest</a></li>
                            <li><a href="https://www.linkedin.com/company/design-house-of-alexandra-dhoa">Linkedin</a></li>
                            <li><a href="https://www.instagram.com/dhoa_official/">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
           <div class="map_section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d324.0375209305981!2d-86.08403343238419!3d39.90947138123897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b4d51e531571f%3A0x62084af362e5bcb1!2s8470%20Allison%20Pointe%20Blvd%2C%20Indianapolis%2C%20IN%2046250%2C%20USA!5e0!3m2!1sen!2sin!4v1644933626581!5m2!1sen!2sin" width="" height="" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </div>
            </div>
        </div>
    </div>
</div>
<section class="contact_form" id="bgblack">
</section>
<section class="contact_forms" id="lightbgblack">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="contact_formTitle">
                    <h3>If you need information, have a question or would like to enquire, please feel free to leave us a message, and we'll get back to you as soon as possible.</h3>
                </div>
            </div>
            
            <div class="col-md-7">
                <div id="confirm-div">
                    <?php if( $this->session->flashdata('message') !='' ){ ?>
                     <tr><td colspan="4" class="err_msg"><?php echo $this->session->flashdata('message'); ?></td></tr>
                    <?php } ?>
            </div>
              <div class="contact_formwrapper">
                <form action="#" method="POST" name="contact" id="contact" onsubmit="return validateContactForms()">
                    <div class="contact__form">
                        <div class="form_group">
                            <label >Your Name</label>
                            <input type="text" name="full_name" id="full name">
                            <div class="error" id="nameErr_contact"></div>
                        </div>
                        <div class="form_group">
                            <label >Email Address</label>
                            <input type="email" name="email" id="email">
                            <div class="error" id="emailErr_contact"></div>
                        </div>
                        <div class="form_group">
                            <label >Telephone Number</label>
                            <input type="text" name="phone_number" id="phone number">
                            <div class="error" id="mobileErr"></div>
                        </div>
                        <div class="form_group">
                            <label >Message</label>
                            <textarea name="content" id="message" class="input__tags" ></textarea>
                            <div class="error" id="messageErr_contact"></div>
                          
                        </div>
                        <div class="form__btn hover_effects">
                            <button type="submit" name="sbt" class="e_btnsubmit">
                                Send
                                <i class="fas fa-chevron-right"></i>
                              </button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</section>


<script>
function printError(elemId, hintMsg) {
 document.getElementById(elemId).innerHTML = hintMsg;
 }

 function validateContactForms() {


 var name = document.contact.full_name.value;
 
 var email = document.contact.email.value;

 var mobile = document.contact.phone_number.value;

 var message = document.contact.content.value;

 var nameErr_contact = emailErr_contact = messageErr_contact = mobileErr = true;
    
    
if(name == "") {
  printError("nameErr_contact", "Please enter your name");
  } else {
    var regex = /^[a-zA-Z\s]{3,50}$/;                     
         if(regex.test(name) === false) {
             printError("nameErr_contact", "Please enter a valid name. Input is too short (min 3) or too big (max 50).");
     } else {
         printError("nameErr_contact", "");
         nameErr_contact = false;
         }
     }
    
    
if(email == "") {
     printError("emailErr_contact", "Please enter your email address");
 } else {
       
     var regex = /^\S+@\S+\.\S+$/;
     if(regex.test(email) === false) {
         printError("emailErr_contact", "Please enter a valid email address");
     } else{
             printError("emailErr_contact", "");
             emailErr_contact = false;
         }
     }


     if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid mobile number in the format 3123456789 without spaces,dashes or acess code (+)");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }

 
    if(message == "") {
        printError("messageErr_contact", "Please enter message");
    } else {
      
		var regex = /^[\w\W\s]{20,200}$/g;
		
        if(regex.test(message) === false) {
            printError("messageErr_contact", "Please enter your message. Input is too short (min 20) or too big (max 200).");
        } else {
            printError("messageErr_contact", "");
            messageErr_contact = false;
        }
    }
     
    
    
  if((nameErr_contact || emailErr_contact || mobileErr || messageErr_contact ) == true) {
       return false;
     } else {
    
         var url = "home/contact"
         $.ajax({
                 type: "POST",
                 url: "<?php echo base_url();?>" + url,
                 success: function() {
                    
                 }

             })
         
 }
 };
</script>
<script>
// assumes you're using jQuery
$(document).ready(function() {

$('#confirm-div').hide();

<?php if($this->session->flashdata('message')){ ?>

$('#confirm-div').html('<?php echo $this->session->flashdata('message'); ?>').show();

<?php } ?>

});

</script>

