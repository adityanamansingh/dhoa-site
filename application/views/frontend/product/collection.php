
<section class="breacumb_wraps">
    <div class="products_breadcumb">
        <div class="containers">
            <h5>Our Collections</h5>
            <p> </p>
           <div class="inner_bread">
            <div class="row">
                <div class="col-md-12">
                    <ul class="pr_breadcumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url();?>collection">Collections</a></li>
    
                    </ul>
                </div>
              
            </div>
           </div>
        </div>
    </div>
</section>

<!-- <section class="product_freaturesection">
    <div class="row no-gutters d-flex align-items-center">
        <div class="col-lg-5 col-12 flex-column category_header">
            <h1>Products</h1>
        </div>
        <div class="col-12 col-lg-7 category_image ml-auto text-center reveal">
            <img src="<?php echo base_url();?>assets//img/slider2.jpg" alt="">
        </div>
    </div>
</section> -->

<section class="product_listingfitter_wrap" id="bgblack">
    <div class="container">
        <div class="searchResults_statsContainer">
            <div class="results_statsLeft">
                <span class="refinement_toggle">
                    <svg class="icon icon-filter-dark icon-filter-dark-dims " viewBox="0 0 20 20">
                        <path d="M2 13h16v1H2z"></path>
                        <path d="M14 11h1v5h-1zM2 6h16v1H2z"></path>
                        <path d="M5 4h1v5H5z"></path>
                    </svg>

                    Filters
                </span>
            </div>
            <div class="results_statsRight">
                <span class="search_productResultsinfo">71 Results</span>
                <div class="searchResults_sortWrap">
                    <div class="searchResultsSort">
                        <span class="search_resultsLabel">Sort By –</span>
                        <select name="sort-order" aria-label="Sort By">
                            <option value="best-seller">Best Sellers</option>
                            <option value="new-arrivals">New Arrivals</option>
                            <option value="price-low-to-high">Price Low To High</option>
                            <option value="price-high-to-low">Price High To Low</option>
                            <option value="A-z">Products A-Z </option>
                            <option value="Z-A">Products Z-A </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="product_mainLisitingWrap"  id="bgblack">
    <div class="grids_prodcts">
         <div class="leftwraps_fillers">
             <div class="product_filterUiWrap">
    <div class="inner_productsFilter">
        <div class="inner_filterwraps">
            <div class="header_filters">
                <h5>Filters</h5>
            </div>
            <div class="filters_wrapsRow">
            
                <div class="acc_cards filter_innerWrap">
                    <div class="acc_titles">
                        <span>Colors</span>
                    </div>
                    <div class="acc__panels ">
                         <?php if(count($colors)>0){ 
                        foreach($colors as $col){?>
                        <label class="search_filterValue">
                        
                            <input class="color_checkbox common_selector" type="checkbox" value="<?php echo $col->id;?>">
                            <span class="blue colorcode" style="#"><img src="<?php echo base_url();?>uploads/color/<?php echo $col->image;?>"</span>
                            <span class="filter_valueName"><?php echo $col->name;?></span>
                        </label>
                      <?php } } ?>
                    </div>
                </div>

                <div class="acc_cards filter_innerWrap">
                    <div class="acc_titles">
                        <span>Fabric</span>
                    </div>
                    <div class="acc__panels">
                        <?php if(count($fabrics)>0){ 
                        foreach($fabrics as $fab){?>
                        <label class="search_filterValue">
                        
                            <input class="fab_checkbox common_selector" type="checkbox" value="<?php echo $fab->id;?>">
                            <span class="filter_valueName"><?php echo $fab->name;?></span>
                        </label>
                      <?php } } ?>
                    </div>
                </div>

               

                <div class="acc_cards filter_innerWrap">
                    <div class="acc_titles">
                        <span>Look</span>
                    </div>
                    <div class="acc__panels ">
                        
                        <?php if(count($looks)>0){ 
                        foreach($looks as $look){?>
                        <label class="search_filterValue">
                        
                            <input class="look_checkbox common_selector" type="checkbox" value="<?php echo $look->id;?>">
                            <span class="filter_valueName"><?php echo $look->name;?></span>
                        </label>
                      <?php } } ?>
                       
                    </div>
                </div>


                
            </div>
        </div>

        <!--close button -->
        <button class="close_cart">
            <span><svg width="64" version="1.1" xmlns="http://www.w3.org/2000/svg" height="64" viewBox="0 0 64 64" enable-background="new 0 0 64 64"><g><path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"></path></g></svg></span>
        </button>
    </div>
</div>
         </div>
        <div class="rightlefts">
             <div class="row filter_data">
                   <div id="pagination_link"> </div>
        </div>
        </div>
      
          
        </div>
    </div>
</section>


<section class="any_question" id="lightbgblack" >
<div class="container bgsin">
        <div class="row">
        <div class="col-md-9">
            <div class="any_questionwraps">
                <div class="images_any">
                    <img src="<?php echo base_url();?>assets/img/any_questions.png" alt="">
                </div>
                <div class="any_contents">
                    <h5>Any questions so far? We can help.</h5>
                    <p>Complimentary design services including expert design consultations, in-home measuring and 3-D
                        renderings of your rooms.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="any_questionLinkscontact">
                <a href="contact-us.php">Conatct Us</a>
                <a href="product-details.php">whatsapp Us</a>
            </div>
        </div>
    </div>
</div>
</section>


<!--==========================================================
      Products Filter Ui Design
============================================================ -->
<style>
#pagination_link {
	width: 43%;
	margin: 0 auto;
}
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
        var cat_checkbox = get_filter('cat_checkbox');
        var subcat_checkbox = get_filter('subcat_checkbox');
        var color_checkbox = get_filter('color_checkbox');
        var fab_checkbox = get_filter('fab_checkbox');
        var material_checkbox=get_filter('material_checkbox');
        var look_checkbox=get_filter('look_checkbox');
        var colid='<?php echo $this->uri->segment(2);?>';
   
        $.ajax({
            url:"<?php echo base_url(); ?>products/fetch_datacollection/"+page,
            method:"POST",
            dataType:"JSON",
            data:{action:action,colid:colid,color_checkbox:color_checkbox,fab_checkbox:fab_checkbox,material_checkbox:material_checkbox,look_checkbox:look_checkbox},
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