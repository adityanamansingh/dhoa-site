<?php echo $header;?>
    <section class="listing__wrap_container">
        <div class="breadcumb">
            <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="javascript:"><i class="fas fa-chevron-right"></i></a></li>
                <li>Products</li>
            </ul>
        </div>
        <div id="wrap">
        <div id="flip">Show Filters</div>
       <!--Mobile view-->
    
       
     
             <div id="moblie__sidebar" class="responsive__sticky">
                <div id="mobile_sticky">
                    <div class="em__block__title">
                        <span>Shop By</span>
                    </div>
                    <div class="ups__filters">
                    <?php if(count($items)>0){ ?>
                      <div class="ups__cateogry fileline__bootom">
                            <h4>Product</h4>
                            <div class="left__sidebar__fillter_wrap">
                            <?php 
                                foreach($items as $item){
                                ?>
                                <label class="filter_label">
                                    <div class="custom_checkbox" id=""><span></span>
                                        <input class="product_checkbox common_selector fdsfs" type="checkbox" value="<?php echo $item->id;?>" >
                                    </div>
                                    <span class="filter_link"><?php echo $item->item_name;?></span>
                                </label>
                            <?php }?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(!empty($category)){ ?>
                        <div class="ups__cateogry fileline__bootom">
                            <h4>Brands</h4>
                            <div class="left__sidebar__fillter_wrap">
                            <?php foreach($category as $categorys){ ?>
                            <label class="filter_label">
                                
                                    <div class="custom_checkbox" ><span></span>
                                        <input class="category_checkbox common_selector" type="checkbox" value="<?php echo $categorys->id;?>">
                                    </div>
                                    <span class="filter_link"><?php echo $categorys->category_name;?></span>
                                </label>
                                <?php }?>
                               
                            </div>
                        </div>
                        <?php } ?>
                        
                        <?php 
                        
                        if(!empty($kvas)){ ?>
                        <div class="ups__cateogry fileline__bootom">
                            <h4>KVA</h4>
                            <div class="left__sidebar__fillter_wrap">
                            <?php foreach($kvas as $kva){?>
                            <label class="filter_label">
                                    <div class="custom_checkbox" ><span></span>
                                        <input class="kva_checkbox common_selector" type="checkbox" value="<?php echo $kva->id;?>">
                                    </div>
                                    <span class="filter_link"><?php echo $kva->range1;?></span>
                                </label>
                                <?php }?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(count($applications)>0){ ?>
                        <div class="ups__cateogry fileline__bootom">
                            <h4>Application</h4>
                            <div class="left__sidebar__fillter_wrap">
                            <?php foreach($applications as $application){ ?>
                            <label class="filter_label">
                                    <div class="custom_checkbox" id="Apc"><span></span>
                                        <input class="application_checkbox common_selector" type="checkbox" value="<?php echo $application->id;?>">
                                    </div>
                                    <span class="filter_link"><?php echo $application->application_name;?></span>
                                </label>
                              <?php }?>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
            
             <div id="sidebar">
                <div id="sticky">
                    <div class="em__block__title">
                        <span>Shop By</span>
                        <div class="mobo_visible"><i class="fas fa-times"></i></div>
                    </div>
                    <div class="ups__filters">
                    
                        <?php if(!empty($category)){ ?>
                        <div class="ups__cateogry fileline__bootom" id="brands_h" >
                            <h4>Brands</h4>
                            <div class="left__sidebar__fillter_wrap">
                            <?php foreach($category as $categorys){ ?>
                            <label class="filter_label">
                                
                                    <div class="custom_checkbox" ><span></span>
                                        <input class="category_checkbox common_selector" type="checkbox" value="<?php echo $categorys->id;?>">
                                    </div>
                                    
                                    <span class="filter_link"><?php echo $categorys->category_name;?></span>
                                </label>
                                <?php }?>
                               
                            </div>
                        </div>
                        <?php } ?>
                         <?php 
                        if($item_id!="26" && $item_id!="27" && $item_id!="29" && $item_id!="30"){
                          if(!empty($kvas)){ ?>
                        <div class="ups__cateogry fileline__bootom" id="kva_h">
                            <h4>KVA</h4>
                            <div class="left__sidebar__fillter_wrap">
                            <?php foreach($kvas as $kva){?>
                            <label class="filter_label">
                                    <div class="custom_checkbox" ><span></span>
                                        <input class="kva_checkbox common_selector" type="checkbox" value="<?php echo $kva->id;?>">
                                    </div>
                                    <span class="filter_link"><?php echo $kva->range1;?></span>
                                </label>
                                <?php }?>
                            </div>
                        </div>
                        <?php } } 
                        ?>
                         <?php
                           if($item_id!="26" && $item_id!="27" && $item_id!="29" && $item_id!="30"){
                           if(count($applications)>0){ ?>
                            <div class="ups__cateogry fileline__bootom" id="app_h">
                                <h4>Application</h4>
                                <div class="left__sidebar__fillter_wrap">
                                <?php foreach($applications as $application){ ?>
                                <label class="filter_label">
                                        <div class="custom_checkbox" id="Apc"><span></span>
                                            <input class="application_checkbox common_selector" type="checkbox" value="<?php echo $application->id;?>">
                                        </div>
                                        <span class="filter_link"><?php echo $application->application_name;?></span>
                                    </label>
                                  <?php }?>
                                </div>
                            </div>
                            <?php } ?>
                        
                        <?php }?>
                        
                        <?php 
                        if($item_id=="26"){
                          if(!empty($kvas)){ ?>
                        <div class="ups__cateogry fileline__bootom">
                            <h4>KVA</h4>
                            <div class="left__sidebar__fillter_wrap">
                            <?php foreach($kvas as $kva){?>
                            <label class="filter_label">
                                    <div class="custom_checkbox" ><span></span>
                                        <input class="kva_checkbox common_selector" type="checkbox" value="<?php echo $kva->id;?>">
                                    </div>
                                    <span class="filter_link"><?php echo $kva->range1;?></span>
                                </label>
                                <?php }?>
                            </div>
                        </div>
                        <?php } } 
                        ?>
                         <?php
                           if($item_id=="26"){
                           if(count($applications)>0){ ?>
                            <div class="ups__cateogry fileline__bootom">
                                <h4>Application</h4>
                                <div class="left__sidebar__fillter_wrap">
                                <?php foreach($applications as $application){ ?>
                                <label class="filter_label">
                                        <div class="custom_checkbox" id="Apc"><span></span>
                                            <input class="application_checkbox common_selector" type="checkbox" value="<?php echo $application->id;?>">
                                        </div>
                                        <span class="filter_link"><?php echo $application->application_name;?></span>
                                    </label>
                                  <?php }?>
                                </div>
                            </div>
                            <?php } ?>
                        
                        <?php }?>
                        
                        <?php 
                         if($item_id=="27"){
                             $get_capacity=get_capacity($item_id,'capacity');
                             if(!empty($get_capacity)){
                            ?>
                          <div class="ups__cateogry fileline__bootom">
                            <h4>Capacity</h4>
                            <div class="left__sidebar__fillter_wrap">
                            <?php foreach($get_capacity as $key=>$value){?>
                            <label class="filter_label">
                                    <div class="custom_checkbox" ><span></span>
                                        <input class="capacity common_selector" type="checkbox" value="<?php echo $value;?>">
                                    </div>
                                    <span class="filter_link"><?php echo $value;?></span>
                                </label>
                                <?php }?>
                            </div>
                        </div>
                        <?php }}else{?>
                        
                      <?php }?>
                        <?php if($item_id=="27"){
                            $get_applicaion=get_capacity($item_id,'battery_application');
                            ?>
                            <?php if(count($get_applicaion)>0){ ?>
                            <div class="ups__cateogry fileline__bootom">
                                <h4>Application</h4>
                                <div class="left__sidebar__fillter_wrap">
                                <?php foreach($get_applicaion as $key=>$value){ ?>
                                <label class="filter_label">
                                        <div class="custom_checkbox" id="Apc"><span></span>
                                            <input class="battery_application_checkbox common_selector" type="checkbox" value="<?php echo $value;?>">
                                        </div>
                                        <span class="filter_link"><?php echo $value;?></span>
                                    </label>
                                  <?php }?>
                                </div>
                            </div>
                            <?php } ?>
                            
                        <?php }else{}?>
                            
                    </div>
                     <?php 
                        if($item_id=="29"){
                          if(!empty($kvas)){ ?>
                        <div class="ups__cateogry fileline__bootom">
                            <h4>KVA</h4>
                            <div class="left__sidebar__fillter_wrap">
                            <?php foreach($kvas as $kva){?>
                            <label class="filter_label">
                                    <div class="custom_checkbox" ><span></span>
                                        <input class="kva_checkbox common_selector" type="checkbox" value="<?php echo $kva->id;?>">
                                    </div>
                                    <span class="filter_link"><?php echo $kva->range1;?></span>
                                </label>
                                <?php }?>
                            </div>
                        </div>
                        <?php } } 
                        ?>
                     <?php 
                     
                     
                           if($item_id=="29"){
                             $get_capacity=get_capacity($item_id,'servo_type');
                             if(!empty($get_capacity)){
                            ?>
                          <div class="ups__cateogry fileline__bootom">
                            <h4>Type</h4>
                            <div class="left__sidebar__fillter_wrap">
                            <?php foreach($get_capacity as $key=>$value){?>
                            <label class="filter_label">
                                    <div class="custom_checkbox" ><span></span>
                                        <input class="servo_type_checkbox common_selector" type="checkbox" value="<?php echo $value;?>">
                                    </div>
                                    <span class="filter_link"><?php echo $value;?></span>
                                </label>
                                <?php }?>
                            </div>
                        </div>
                        <?php }}else{?>
                        
                      <?php }?>
                        <?php if($item_id=="29"){
                            $get_applicaion=get_capacity($item_id,'servo_phase');
                            ?>
                            <?php if(count($get_applicaion)>0){ ?>
                            <div class="ups__cateogry fileline__bootom">
                                <h4>Phase</h4>
                                <div class="left__sidebar__fillter_wrap">
                                <?php foreach($get_applicaion as $key=>$value){ ?>
                                <label class="filter_label">
                                        <div class="custom_checkbox" id="Apc"><span></span>
                                            <input class="servo_phase_checkbox common_selector" type="checkbox" value="<?php echo $value;?>">
                                        </div>
                                        <span class="filter_link"><?php echo $value;?></span>
                                    </label>
                                  <?php }?>
                                </div>
                            </div>
                            <?php } ?>
                            
                        <?php }?>
                     <?php 
                         if($item_id=="30"){
                             $get_capacity=get_capacity($item_id,'accessories_name');
                             if(!empty($get_capacity)){
                            ?>
                          <div class="ups__cateogry fileline__bootom">
                            <h4>Type</h4>
                            <div class="left__sidebar__fillter_wrap">
                            <?php foreach($get_capacity as $key=>$value){?>
                            <label class="filter_label">
                                    <div class="custom_checkbox"><span></span>
                                        <input class="accessories_name_checkbox common_selector" type="checkbox" value="<?php echo $value;?>">
                                    </div>
                                    <span class="filter_link"><?php echo $value;?></span>
                                </label>
                                <?php }?>
                            </div>
                        </div>
                        <?php }}else{?>
                        
                      <?php }?>
                        <?php if($item_id=="30"){
                            $get_applicaion=get_capacity($item_id,'accessories_quantity');
                            ?>
                            <?php if(count($get_applicaion)>0){ ?>
                            <div class="ups__cateogry fileline__bootom">
                                <h4>Phase</h4>
                                <div class="left__sidebar__fillter_wrap">
                                <?php foreach($get_applicaion as $key=>$value){ ?>
                                <label class="filter_label">
                                        <div class="custom_checkbox" id="Apc"><span></span>
                                            <input class="accessories_quantity_checkbox common_selector" type="checkbox" value="<?php echo $value;?>">
                                        </div>
                                        <span class="filter_link"><?php echo $value;?></span>
                                    </label>
                                  <?php }?>
                                </div>
                            </div>
                            <?php } ?>
                            
                        <?php }?>
                            
                    </div>
                    
                </div>
           
            
            <div id="main">
                <div class="buttons">
                    <button class="grid_view"><i class="fa fa-th"></i></button>
                    <button class="list_view "><i class="fa fa-bars"></i></button>
                </div>
                
                <div class="custom__gird__row filter_data">
               </div>
               <div id="pagination_link">  </div>
            </div>
             </div>
        </div>
        
        
</section>


<script>
     var str = '<?php 



$currentURL = current_url();
$params   = $_SERVER['QUERY_STRING'];


$fullURL = $currentURL . '?' . $params;

 $this->input->get($params);

$url = $fullURL;

$value = (parse_url($url, PHP_URL_QUERY));
echo $value;
?>';
 var parts = str.split('=');
 for (var i=0;i<parts.length-1;i++){
    var magic =parts[i];
        switch (magic) { 
        	case 'brands': 
        	    $('#brands_h').hide();
        		break;
        	case 'kva': 
        		 $('#kva_h').hide();
        		 break;
        	case 'application': 
        	 $('#app_h').hide();
        	 	break;
        	default:
        	
        }
  }
 
</script>
<style>

.card {
    width: 100%;
    float: left;
    border: 1px solid #ddd;
    margin-right: 10px;
    margin-top: 52px;
    margin-bottom: 52px;
}

.image {
    background: #e9ebee;
    height: 257px;
}

.bars {
    height: 85px;
}

.bar {
    background: #e9ebee;
    margin: 0 13px 13px;
    height: 19px;
}

.bar1 {
    width: 80%;
    margin-top: 17px;
}

.bar2 {
    width: 30%;
}

.loading {
    position: relative;
    overflow: hidden;

}

.loading::after {
    content: "";
    display: block;
    background-color: #dddfe2;
    position: absolute;
    top: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    transform: translateX(0);
    animation: 1.5s loading-placeholder ease-in-out infinite;
}

@keyframes loading-placeholder {
    0% {
        transform: translateX(-100%);
    }

    100% {
        transform: translateX(100%);
    }
}

</style>

<script>
$(document).ready(function(){

    filter_data(1);

    function filter_data(page)
    {
        $('.filter_data').html('<div class="card"><div class="image loading"></div><div class="bars"><div class="bar bar1 loading"></div><div class="bar bar2 loading"></div></div></div><div class="card"><div class="image loading"></div><div class="bars"><div class="bar bar1 loading"></div><div class="bar bar2 loading"></div></div></div>');
        var action = 'fetch_data';
        var product_checkbox = get_filter('product_checkbox');
        var category_checkbox = get_filter('category_checkbox');
        var kva_checkbox = get_filter('kva_checkbox');
        var application_checkbox = get_filter('application_checkbox');
        var capacity = get_filter('capacity');
        var battery_application_checkbox = get_filter('battery_application_checkbox');
        var search=getQueryStringValue('search');
        var products_search=getQueryStringValue('products');
        var brands_search=getQueryStringValue('brands');
        var kva_search=getQueryStringValue('kva');
        var application_search=getQueryStringValue('application');
        var accessories_name_checkbox=get_filter('accessories_name_checkbox');
        var accessories_quantity_checkbox=get_filter('accessories_quantity_checkbox');
        var servo_type_checkbox=get_filter('servo_type_checkbox');
        var servo_phase_checkbox=get_filter('servo_phase_checkbox');
        $.ajax({
            url:"<?php echo base_url(); ?>products/fetch_data/"+page,
            method:"POST",
            dataType:"JSON",
            data:{action:action, product_checkbox:product_checkbox, category_checkbox:category_checkbox, kva_checkbox:kva_checkbox,application_checkbox:application_checkbox,search:search,products_search:products_search,brands_search:brands_search,kva_search:kva_search,capacity:capacity,battery_application_checkbox:battery_application_checkbox,application_search:application_search,accessories_name_checkbox:accessories_name_checkbox,accessories_quantity_checkbox:accessories_quantity_checkbox,servo_type_checkbox:servo_type_checkbox,servo_phase_checkbox:servo_phase_checkbox},
            success:function(data)
            {
                $('.filter_data').html(data.product_list);
                $('#pagination_link').html(data.pagination_link);
            }
        })
    }

    function get_filter(class_name)
    {   
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }
function getQueryStringValue(key) {  
  return decodeURIComponent(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + encodeURIComponent(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));  
} 
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

    $(document).on('click', '.pagination li a', function(event){
        event.preventDefault();
        var page = $(this).data('ci-pagination-page');
        filter_data(page);
    }); 

    $('.common_selector').click(function(){
        filter_data(1);
    });
});
</script>



<?php echo $footer;?>
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
             
          }
        });
 </script>
//  <script> 
//         alert("host = " + $(location).attr('host') +  
//               "\nhostname = " + $(location).attr('hostname') +  
//               "\npathname = " + $(location).attr('pathname') +  
//               "\nhref = " + $(location).attr('href') +  
//               "\nport = " + $(location).attr('port') +  
//               "\nprotocol = " + $(location).attr('protocol')); 
//     </script> 