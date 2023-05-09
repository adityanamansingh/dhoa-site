<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Ups</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/custom.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/sticky-sidebar.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/media.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/docs.theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="<?php echo base_url();?>assets/owlcarousel/owl.carousel.js"></script>
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
</head>

<body>
    <section class="nav__header">
        <div class="header_left">
            <div class="nav__logo">
                <a href="home"><img src="<?php echo base_url();?>assets/img/logo.png"
                        alt="logo"></a>
            </div>
        </div>

        <div class="nav__header_wrap">
            <div class="nav_clip_path"></div>
            <div class="header__center">
                <div class="header_search_bar">
                <input type="search" class="search_field" name="search" value="<?php echo $this->input->get('search');?>" id="search" placeholder="Search..." autocomplete="on">                 
                        
                        <span class="button_wrap">
                        <button class="btn btn_special search_button" id="search_button" onclick="javascript:" title="Search" type="button"><i
                                    class="fas fa-search"></i></button>
                        </span>
                </div>
            </div>

            <div class="header_right">
                <div class="header__right_extra">
                    <ul>
                        <li>

                            <img src="<?php echo base_url();?>assets/img/user.svg" alt="user-sign">
                            <span>Sign In<i class="fas fa-caret-down"></i></span>
                        </li>
                        <li><img src="<?php echo base_url();?>assets/img/shop.svg" alt="user-sign"><span>Shop<i
                                    class="fas fa-caret-down"></i></span></li>
                        <li id="sign__in_pop_up">
                            <div class="sign_up_box">
                                <ul>
                                    <!--<li><i class="fas fa-phone"></i><a href="#">Call Us on <Span id="header_extra_popup">9609674567</Span></a></li>-->
                                 <li><img src="http://onlineups.in/assets/img/mail.png" alt="call" style="width: 19px;margin-right: 10px;"></i><a href="mailto: info@onlineups.in"> info@onlineups.in</a></li>
                                 <!--<li><i class="fas fa-info-circle"></i><a href="contact-us.php">Helpdesk & Information</a></li>-->
                                </ul>
                            </div>
                            <img src="<?php echo base_url();?>assets/img/help.svg" alt="user-sign"><span>Help<i
                                    class="fas fa-caret-down"></i></span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="nav_bottom">
        <div class="nav_bootom_wrap">
          <div class="nav__container">
              <div class="row">
                  <div class="col-md-3">
                      <div class="nav_bootom_link">
                        <div class="nav__bottom_icon">
                            <img src="<?php echo base_url();?>assets/img/accsess.png" alt="">
                        </div>
                        <div class="nav__bootom_link_content">
                          <a href="http://onlineups.in/products/?products=Online-UPS-Accessories">
                            <h6>Accessories</h6>
                         
                          </a>
                        </div>
                      </div> 
                  </div>
                  <div class="col-md-3">
                    <div class="nav_bootom_link bootom_right_link">
                      <div class="nav__bottom_icon">
                          <img src="<?php echo base_url();?>assets/img/battery.png" alt="">
                      </div>
                      <div class="nav__bootom_link_content">
                        <a href="http://onlineups.in/products/?products=SMF-Battery">
                            <h6>Battery</h6>
                          
                          </a>
                      </div>
                    </div> 
                </div>
                <div class="col-md-3">
                    <div class="nav_bootom_link bootom_right_link">
                      <div class="nav__bottom_icon">
                          <img src="<?php echo base_url();?>assets/img/request1.png" alt=""  >
                      </div>
                      <div class="nav__bootom_link_content">
                      
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="nav__bottom_prd__enquiry">
                               Request a site visit
                            </button>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      
                                       <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" id="bg_t">×</button>
                                            <div class="row">
                                               <div class="col-md-5">
                                                   <div class="pop__up_bg">
                                                      <img src="<?php echo base_url(); ?>assets/img/graphic2.svg" alt="">
                                                   </div>
                                               </div>
                                               <div class="col-md-7">
                                                   <div class="pop__up_form_construct">
                                                     <div class="pop__up_form_construct_inner">
                                                               <form action="<?php echo base_url();?>home/addEnquiry" name="myFormTop"  method="post" onsubmit="return validateFormTop()">
                                                       <div class="row">                                                                      
                                                                <div class="col-md-12">
                                                                        <div class="pop_up_inner_short_title">
                                                                            <h1>Get more things done with Enquiry platform.</h1>
                                                                            <p>Access to the most powerfull tool in the entire design and web industry.</p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="Products Name"  class="pop__up_form_enquiry" value="" name="product_name" id="productname">
                                                                      <span class="error" id="pn"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Product Name</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <input type="number" placeholder="Mobile No." class="pop__up_form_enquiry" name="mobile" id="mobile no">
                                                                         <span class="error" id="mnoa"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Valid Mobile No.</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="Full Name"  class="pop__up_form_enquiry" name="name" id="fullname">
                                                                       <span class="error" id="fnamea"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Full Name</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="email" placeholder="Email"  class="pop__up_form_enquiry" name="email" id="emailname">
                                                                     <span class="error" id="emaila"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Valid Email</span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <textarea name="message" id="" cols="10" rows="5" class="pop__up_form_message" placeholder="message"></textarea>
                                                                     <span class="error"> <i class="fas fa-exclamation-circle"></i> &nbsp;Please Enter Valid Message</span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <button id="submit" type="submit" class="ibtn">Sumbit Now</button>
                                                                </div>
                                                           
                                                       </div>
                                                    </form>
                                                     </div>
                                                   </div>
                                               </div>
                                            </div> 
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                   
                      </div>
                    </div> 
                </div>
                <div class="col-md-3">
                    <div class="nav_bootom_link">
                      <div class="nav__bottom_icon">
                          <img src="<?php echo base_url();?>assets/img/faq.png" alt="" >
                      </div>
                      <div class="nav__bootom_link_content">
                        <a href="<?php echo base_url();?>faq">
                            <h6>FAQ/UPS Gyan</h6>
                         
                          </a>
                      </div>
                    </div> 
                </div>
              </div>
          </div>
        </div>
    </section>
    <section class="breadcumb_2">
        <div class="breadcumb__2_inner">
            <ol>
                <li><a href="home">Home</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li><a href="privacypolicy">FAQ/UPS Gyan</a></li>
            </ol>
        </div>
    </section>

   
     <section class="online_ups_faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="faq_container">
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">1</span> What is an Uninterrupted power supply and its
                                functions?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>

                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">
                                    <p>An Uninterrupted power supply (UPS) is a system intended to solve the mains
                                        disturbances and
                                        mains failure. The batteries attached to the UPS enables the user to work during
                                        mains failure.
                                        This is done by putting the UPS between the mains and your computer.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">2</span>What is the difference between the UPS catagories:
                                Off line, Line interactive and Online
                                ups?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">
                                    <h3>Offline UPS</h3>
                                    <p>The Offline UPS supplies (or routes) the incoming mains supply directly through
                                        to the output
                                        usually through a relay contact. Some high frequency noise filtering and surge
                                        suppression may
                                        be included in this path.The UPS swiches on its inverter as soon as mains supply
                                        failure is
                                        detected or below the normal load and simultaneously switches the output relay
                                        to the inverter
                                        side to supply battery sourced power to the load. This transition involves a
                                        delay on account of
                                        the time to reliably detect mains failure and switch over a relay, and the
                                        output is broken for
                                        this period (usually for 2 to 12msec). Offline UPS are usually the least
                                        exensive as compared to
                                        the other two.
                                    </p>
                                    <p>The Block diagram of inverter section of Online ups is shown:</p>
                                    <img src="http://www.jetups.com/images/line1.gif" alt="image" class="card__images">
                                    <h4 class="line___2"> Line interactive UPS</h4>
                                    <p>The true Lineinteractive ups regulate the input power and provide the output
                                        between an specifice
                                        output voltage range, means in this system the inverter plays a dual role of
                                        charging the
                                        battery when mains supply is present as well as regulating the output voltage
                                        and working as a
                                        normal inverter in absence of mains supply. Lineinteractive UPS offers enhanced
                                        power protection
                                        over the basic Offline designs by providing additional line conditioning. But
                                        these ups has the
                                        change over time between 4ms to 6ms.
                                    </p>
                                    <img src="http://www.jetups.com/images/line2.gif" alt="image" class="card__images">
                                    <h4 class="line___2"> Online UPS</h4>
                                    <p>
                                        An Online ups is the one in which the inverter (and electronic section called
                                        inverter) always
                                        supplies power to the protected load and hence the same quality of power is
                                        ensured all the
                                        time.
                                    </p>
                                    <p>
                                        When mains supply is present, the inverter derives its power from thee mians
                                        supplied rectifier
                                        and the backup batteries are also kept in charged state. When the mains fail,
                                        the source of DC
                                        power for the inverter section shifts to the battery without any break (zero
                                        changeover time)
                                        whatsoever in the output to the Inverter. It also bears all the vagaries and
                                        noise borne out of
                                        the mains supply and insulates the secure bus supply from it. An Online ups is
                                        especially
                                        usefulll for sensitive and critical equipments/devices. It comes from single
                                        phase application
                                        to 3phase application. Custom made output can easily achieve in Online ups
                                        system design.
                                    </p>
                                    <h4 class="line___2">Working</h4>
                                    <img src="http://www.jetups.com/images/line3.gif" alt="image" class="card__images">
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">3</span> Is UPS system really necessary for my computer?
                                ups?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">

                                    <p> As an experienced & conscientious computer user, you have faith in the dictum
                                        GIGO and you take
                                        precautions to see that 'garbage' doesn't enter your system through software.
                                        But there is one
                                        more source of garbage, of a more serious nature, which is not normally taken
                                        care of. That is
                                        in the form of garbage power input to the computer. It is more serious because
                                        besides
                                        malfunctioning and operation problems it can also cause permanent damage to your
                                        computer.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">4</span> What exactly is meant by 'garbage' power?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">

                                    <p> It is common knowledge that there are fluctuations in utility supply .For
                                        example, some times
                                        the utility voltage is as low as 170 to 160 volts and high as 280 to 300 volts.
                                        Besides this,
                                        there are many more hidden culprits associated with utility lines like sags and
                                        surges,
                                        oscillatory transients, EMI and RFI, brown outs, or total loss of power.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">5</span> How does all this apply to my computer?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">

                                    <p> The equipment to which you are feeding this power is extremely sensitive to the
                                        quality of power
                                        and is termed as critical equipment. Imagine a sudden failure of computers
                                        during busy hours
                                        when a critical operation is in progress. All this can occur due to garbage
                                        power fed to such
                                        equipments. The loss is invaluable and you just cannot take any chances.
                                    </p>
                                    <p> The above problem is of malfunctioning or operational nature. These can be
                                        extremely
                                        frustrating, time consuming and expensive. Besides, like all electronic circuits
                                        ,the computer
                                        circuits can also undergo irreparable damage due to high voltage surges and
                                        spikes, which can
                                        reach several kilovolts
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">6</span> How does an UPS eliminate these aberrations and
                                give clean power?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">

                                    <p> The important blocks in a UPS and their functions are listed below: These shall
                                        be helpful in
                                        explaining the functioning of the UPS.
                                    </p>
                                    <h4 class="line___4"> 1) Line filter:</h4>
                                    <p>Eliminates line born noise and spikes.</p>
                                    <h4 class="line___4"> 1) Inverter: </h4>
                                    <p>
                                        The smooth DC is inverted by two transistors connected in push-pull
                                        configuration. The switching
                                        device (Transistor OR IGBT or MOSFETS) is used and controlled by a sophisticated
                                        control
                                        circuit.
                                    </p>
                                    <p>
                                        A closed loop voltage feedback control is used to keep the output voltage
                                        constant even under
                                        widely varying DC voltage conditions. A proportional increase in the widths of
                                        the pulses causes
                                        an increase in voltage and a proportional reduction in width decreases the
                                        voltage. This means
                                        that the voltage control action is a great advantage for taking care of dynamic
                                        loading
                                        conditions in a computer like switching on and off of disk and tape drives as
                                        well as movement
                                        of the accessing head. A current feedback protects the inverter even from short
                                        circuit by
                                        turning off the control pulses going to the transistor / IGBT/ MOSFET base.

                                    </p>
                                    <h4 class="line___4"> 1) Output Filter: </h4>
                                    <p>
                                        The output filter converts the inverter output to a smooth AC with very low
                                        distortion. The
                                        nature of the filter is such that it can deliver inrush and surge currents
                                        demanded during
                                        switching on of computer loads.
                                    </p>
                                </div>
                            </div> 
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">7</span> Is computers type of load some special category
                                of load?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">

                                    <p> Most certainly. A number of devices in various computer installations are
                                        studied, information
                                        is collected from device manufacturers and after taking all this into account
                                        the system is
                                        designed. onlineUPS has been doing this work in close co-operation with
                                        experienced people
                                        from computer application and computer maintenance fields. Therefore onlineUPS
                                        is in a
                                        position to offer its users a unique advantage over others.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">8</span> How do I size my requirement ?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">
                                    <p>You can ask to your supplier or call out technical team for this details. </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">9</span> How does one select the battery?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">
                                    <p>
                                        Battery selection depends upon the back up time required which in turn depends
                                        upon the
                                        frequency of power failure, average programme length and the presence of other
                                        back up source
                                        like a diesel generator set. One thing to remember is that the ampere hour
                                        ratings quoted by
                                        battery manufacturers are on a ten hour discharge basis and normally the back up
                                        time required
                                        will be much shorter; sufficient either to finish an almost complete job or to
                                        take a systematic
                                        shut down or to start the generator set. However, when the battery is discharged
                                        in a shorter
                                        time a derating factor has to be used which incidentally does not vary below 20
                                        to 30 minutes.
                                        So approx half an one hour is a sensible back up time to select.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">10</span> How long batteries last in a UPS?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">
                                    <p> Battery life depends upon number of factors , viz. </p>
                                    <ul class="online__gyan_faq_list">
                                        <li>Temperature</li>
                                        <li>Number of discharges experienced</li>
                                        <li>Number of deep discharges experienced</li>
                                        <li>Specification of the batteries</li>
                                    </ul>
                                    <p>
                                        Battery life is halved for every 10 degrees Centigrade temperature increase
                                        above it's specified
                                        operating temperature (usually 25 degree Centigrade).
                                    </p>
                                    <p>
                                        UPS batteries are designed for maximum life in 'typical' use i.e. long periods
                                        of continous low
                                        charge and occasional minor discharges.
                                    </p>
                                    <p>
                                        At installation time, the battery is at 100 percent of rated capacity. Each
                                        discharge and
                                        subsequent recharge reduces the relative capacity of the battery by a small
                                        percentage.The
                                        length of the discharge cycle will determine the reduction in battery capacity.
                                    </p>
                                    <p>
                                        So-called deep discharges on a repeated basis will reduce the life of the
                                        battery.
                                    </p>
                                    <p>
                                        The loaf of "bread" analogy is most often used to illustrate the relationship
                                        between cycling
                                        and battery life. A loaf of bread can either be cut into many thin slices or a
                                        few thicker
                                        slices. Similarly, a UPS battery can provide power over a large number of short
                                        cycles, or fewer
                                        cycles of long duration.
                                    </p>
                                    <p>
                                        The IEEE defines "end of useful life" for a UPS battery as being the point when
                                        it can no longer
                                        supply 80 percent of its rated capacity in ampere-hours. The realationship
                                        between amp-hours and
                                        load protection time is not linear, a 20% reduction in capacity results in a
                                        much greater
                                        reduction in protection time. For example, a UPS battery that supports a full
                                        load for 15
                                        minutes when new, will support the same load for only about 8 minutes when it
                                        reaches its
                                        defined "end of life". When your battery reaches 80% of its rated capacity, the
                                        aging process
                                        accelarates and this is the time when the battery should be replaced. No UPS
                                        battery will last
                                        forever - even one that experiences minimal use.This is because UPS batteries
                                        are
                                        electro-chemical devices whose ability to store and deliver power slowly
                                        decreases over time.So,
                                        even if you follow all the guidelines for proper storage temperature and
                                        maintenance, you still
                                        must replace them after a certain period of time.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">11</span> One of the batteries has failed in the UPS
                                battery bank, is it alright to replace just one
                                battery?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">
                                    <p>
                                        If the batteries are less than twelve months old then the failure could be due
                                        to a
                                        manufacturing or material fault. In this instance the failed battery can be
                                        replaced after
                                        confirmation by testing the whole battery bank.
                                    </p>
                                    <p>
                                        In general once the batteries are over twelve months old, the failure is more
                                        likely to be due
                                        to age, environment or usage and the whole bank should be replaced. Failure to
                                        replace the whole
                                        bank could result in the new battery not being charged properly and your load
                                        being at risk if
                                        any or all of the older batteries fail.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">12</span> How do I maintain and service the batteries and
                                the UPS?
                                battery?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">
                                    <p>
                                        Gradual decrease in battery life can be periodically monitored and evaluated by
                                        :
                                    </p>
                                    <ul class="online__gyan_faq_list">
                                        <li>Voltage checks</li>
                                        <li> Load testing</li>
                                        <li> Checking for proper battery connections.</li>
                                        <li>Checking for battery water (in case of Automative batteries)in Online UPS
                                            batteries connection in ser</li>

                                    </ul>
                                    <p><b>CAUTION: Do not touch the batteries terminals without any technical knowledge,
                                            always call to
                                            the related service person.</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">13</span> How long can I leave the UPS switched off
                                without damaging the batteries ?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">
                                    <p>
                                        As long as the batteries are fully charged when the unit is switched off they
                                        will not require
                                        charging for three months.
                                    </p>
                                    <p>
                                        Cold start feature of Power Pack Line Interactive UPS isolates the batteries
                                        from the UPS
                                        circuit and thus the UPS can be switched off for longer period (six months
                                        approx.) without
                                        damaging the batteries.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">14</span> How do I know what to buy ?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">
                                    <p>
                                        Following parameters should be considered before buying
                                    </p>
                                    <ul class="online__gyan_faq_list">
                                        <li>Company reliability, experience, stability, customer service.</li>
                                        <li>Technology and features.</li>
                                        <li>Price and performance. ( An Indian company Like onlineUPS is providing you
                                            the product of
                                            international quality in very reasonable prices, you can trust the products
                                            for more than 15
                                            years of life. (regular maintenance is necessary).</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">15</span> Does onlineUPS form its own specifications?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">
                                    <p>
                                        No! The specifications are formulated based on International market requirement.
                                        (Custom made
                                        ups is also available)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq_card">
                            <div class="faq_card_header">
                                <span class="question_circle">16</span> How cost effective is the investment in an UPS
                                system?
                                <span class="fas fa-chevron-down" id="cherveon_icon1"></span>
                            </div>
                            <div class="faq_card_collapse" id="collapse_active">
                                <div class="faq_card_body">
                                    <p>
                                        It is really quite simple. If you consider the average time lost & multiply it
                                        by the cost of
                                        computer time which you already know you will arrive at the direct loss. This,
                                        however, does not
                                        take into account indirect losses like job scheduling, trouble shooting, as well
                                        as corruption
                                        of files and damage to electronic circuits. If you take all these into account ,
                                        definitely a
                                        onlineUPS system will pay for itself in less than one year.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<section id="footer">
    <section class="foot__top">
        <div class="foot__top_left">
            <div class="foot__feedback">
                <img src="<?php echo base_url();?>assets/img/massage.png" alt="message">
                <span><a href="mailto:info@onlineups.in">CLICK HERE FOR FEEDBACK</a></span>
            </div>
        </div>
        <div class="foot__top_right_main">
            <div class="row no-gutters" id="foot__top_custom">
                <div class="col-md-6">
                    <div class="foot__top_right_conetnt">
                        <h6>100% MONEY BACK GUARANTEE</h6>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="foot__top_right_conetnt">
                        <h6>24/7 CUSTOMER SUPPORT</h6>
                     
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="main_footer">
        <div class="main_fotter_wrap">
            <div class="main__foot_col">
                <div class="foot__wrap1">
                    <div class="foot__logo">
                        <img src="<?php echo base_url();?>assets/img/logo.png" alt="logo">
                    </div>
                    <p>Onlineups.in is one of the India’s complete power backup solutions online store with multi brand and multi products.</p>
                </div>
            </div>

            <div class="main__foot_col">
                <div class="foot__wrap2">
                    <div class="foot__quick__links">
                        <h6>Information</h6>
                    </div>
                    <ul>                       
                         <li><a href="about">About Us</a></li>
                         <li><a href="products/">Services</a></li>     
                         <li><a href="contact">Contact Us</a></li>                    
                    </ul>
                </div>
            </div>

            <div class="main__foot_col">
                <div class="foot__wrap2">
                    <div class="foot__quick__links">
                        <h6>Helpful Links</h6>
                    </div>
                    <ul>
                        <li><a href="termscondition">Term & Condition</a></li>
                        <li><a href="privacypolicy">Privacy Policy</a></li> 
                        <li id="disclaimer__link_foot"><a href="http://localhost/online_ups/disclaimer">Disclaimer</a></li>  
                    </ul>
                </div>
            </div>


            <div class="main__foot_col">
                <div class="foot__wrap2">
                    <div class="foot__quick__links">
                        <h6>Our Social</h6>
                    </div>
                    <ul>
                        <li><a href="https://www.facebook.com/Online-UPS-106155624120364/"><img src="<?php echo base_url();?>assets/img/facebook.png" alt=""><span>Facebook</span></a></li>
                        <li><a href="#"><img src="<?php echo base_url();?>assets/img/instagram.png" alt=""><span>Instagram</span></a></li>
                        <li><a href="#"><img src="<?php echo base_url();?>assets/img/twitter.png" alt=""><span>Twitter</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="main__foot_col">
                <div class="foot__wrap2">
                    <div class="foot__quick__links">
                        <h6>Contact Us</h6>
                    </div>
                    <ul>
                        <!--<li><a href="#"><img src="<?php echo base_url();?>assets/img/phone.png" alt="call"><span>+91- 9999999999</span></a>-->
                        <!--</li>-->
                        <li><a href="#"><img src="<?php echo base_url();?>assets/img/mail.png" alt="call"><span><a href="mailto:info@onlineups.in">info@onlineups.in</a></span></a>
                        </li>  
                                                              
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>

        <script src="<?php echo base_url();?>assets/js/main.js"></script>
        <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->

        <script>
            $(function () { // document ready
                if ($('#sticky').length) { // make sure "#sticky" element exists
                    var el = $('#sticky');
                    var stickyTop = $('#sticky').offset().top; // returns number
                    var stickyHeight = $('#sticky').height();

                    $(window).scroll(function () { // scroll event
                        var limit = $('#footer').offset().top - stickyHeight - 40;

                        var windowTop = $(window).scrollTop(); // returns number

                        if (stickyTop < windowTop) {
                            el.css({
                                position: 'fixed',
                                top: 0
                            });
                        } else {
                            el.css('position', 'static');
                        }

                        if (limit < windowTop) {
                            var diff = limit - windowTop;
                            el.css({
                                top: diff
                            });
                        }
                    });
                }
                $('.search_button').on('click', function () {
                    var search = $('input[name="search"]').val();
                    window.location.href = "<?php echo base_url();?>products/?search=" + search;
                });

            });
        </script>
        <script>
        // AOS.init();
        </script>
        <script>
var input = document.getElementById("search");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("search_button").click();
  }
});
</script>
<script src="http://zorbatool.soulilution.com/js/typeahead/typeahead.js"></script>
 <script>
 var base_url='<?php echo base_url();?>';
 $('#search').typeahead({
            items: 100,
            source: function (query, result) {
                groupName: {
                $.ajax({
                    url:base_url+"frontend/product/search_main",
                    data: 'query=' + query,
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        result($.map(data, function (item) {
                            return item;
                        }));
                    }
                });
              }
            },
            afterSelect: function (item) {
              document.getElementById("search_button").click();
          }
        });
 </script>
<style>
    .btn-link{
    display: block;
    width: 100%;
    text-align: left;
    color: #000;
   padding: 0;
    }
    .btn-link h5{
        font-size: 21px !important;
    padding: 0 !important;
    display: inline-block;
    text-decoration: underline;
    }
    .card-body p{
    font-size: 15px;
    letter-spacing: 1px;
    line-height: 25px;
    }
</style>
  <style>
       @media (max-width: 768px){
            .nav__header_wrap {
              display:none;
            }
            .header_left {
            width: 100%;
            float: inherit;
            display: block;
            height: auto;
            background: #fff;
            position: relative;
            text-align: center;
        }
        .mission__content p {
            font-size: 15px;
            width: 100%;
        }
        .about__inner_bg h2 {
            padding-top: 116px;
            font-size: 35px;
            font-weight: bold;
            text-align: center;
            display: block;
            width: 100%;
        }
        .nav_bottom {
            display: block;
            height: auto;
            padding-top: 94px;
        }
        .about__inner_bg {
            display: none;
        }
        .breadcumb {
    margin-top: 0;
}
       }
   </style>
   <script>
    
    function validateFormTop() {
    

  var full_name = document.forms["myFormTop"]["name"].value;
  var email = document.forms["myFormTop"]["email"].value;
 
  var productName = document.forms["myFormTop"]["product_name"].value;
 
  var mobile_number = document.forms["myFormTop"]["mobile"].value;

  var maxLength = 10;
  var charLength =document.forms["myFormTop"]["mobile"].value.length; 
  
  if (  !isNaN(productName)  || productName == ""   ) {
     $('#pn').addClass('show_error');
   $('#pn').addClass('invalid');
    return false;
  }else{
      $('#pn').removeClass('show_error');
   $('#pn').removeClass('invalid');
  }


  if (  !isNaN(full_name)  || full_name == ""   ) {
     $('#fnamea').addClass('show_error');
   $('#fnamea').addClass('invalid');
    return false;
  }else{
      $('#fnamea').removeClass('show_error');
   $('#fnamea').removeClass('invalid');
  }

  if (  !isNaN(email)  || email == ""   ) {
   $('#emaila').addClass('show_error');
   $('#emaila').addClass('invalid');
    return false;
  }else{
  $('#emaila').removeClass('show_error');
   $('#emaila').removeClass('invalid');
  }
  
  if ( isNaN(mobile_number)  || mobile_number == "" || charLength !== maxLength  ) {
      debugger;
   $('#mnoa').addClass('show_error');
   $('#mnoa').addClass('invalid');
//   alert('not working');
    return false;
  }else{
    $('#mnoa').next().removeClass('show_error');
    $('#mnoa').removeClass('invalid');
     return true;
  }

}
</script>
<style>
    .error {
        text-align: center;
    font-weight: 400;
    letter-spacing: 1px;
    display: none;
    color: #fff;
    padding: 10px;
    border-radius: 10px;
    font-size: 15px;
    border: 1px solid #fff;
    margin-bottom: 20px;
    background: #FF7604;
}
.show_error {
    display: block;
}
  input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
#bg_t{
        background: #fff;
    opacity: 1;
    width: 35px;
    height: 35px;
    position: absolute;
    z-index: 1;
    top: 9px;
    right: 8px;
    border-radius: 50%;
    text-align: center;
}
</style>
</body>

</html>