
$(document).ready(function(){
  gsap.registerPlugin(ScrollTrigger);

  let revealContainers = document.querySelectorAll(".reveal");
  
  revealContainers.forEach((container) => {
    let image = container.querySelector("img");
    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: container,
        toggleActions: "restart none none reset"
      }
    });
  
    tl.set(container, { autoAlpha: 1 });
    tl.from(container, 1.5, {
      xPercent: -100,
      ease: Power2.out
    });
    tl.from(image, 1.5, {
      xPercent: 100,
      scale: 1.3,
      delay: -1.5,
      ease: Power2.out
    });
  });
});




$(document).ready(function() {
  // Swiper: Slider
      new Swiper('.swiper-containers', {
          loop: true,
          autoplay: 2000,
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          slidesPerView: 4,
          paginationClickable: true,
         
          spaceBetween: 20,
          breakpoints: {
              1920: {
                  slidesPerView: 4,
                  spaceBetween: 30
              },
              1028: {
                  slidesPerView: 2,
                  spaceBetween: 30
              },
              480: {
                  slidesPerView: 1,
                  spaceBetween: 10
              }
          }
      });
  });
  

  $(document).ready(function () {
 
    $('.jumpto_all > a').click(function () {
      $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
      }, 500);
      return false;
    });
  })
  



//   $(document).ready(function () {
//     $(".refinement_toggle").click(function () {
//       $(".product_filterUiWrap").toggleClass("activefilter");
//       $('body').addClass("notscrool");
//     });
//     $(".close_cart").click(function () {
//       $(".product_filterUiWrap").removeClass("activefilter");
//       $('body').removeClass("notscrool");
//     });
//   });



  $(document).ready(function(){
    $(".acc_title").on("click", function(){
        if ($(this).hasClass("activecollapse")) {
           $(this).removeClass("activecollapse");
           $(this).siblings(".acc__panel")
           .slideUp(400);
        } else {
         $(".acc_title").removeClass("activecollapse");
         $(this).addClass("activecollapse");
         $(".acc__panel").slideUp(400);
         $(this)
           .siblings(".acc__panel")
           .slideDown(400);
       }
        
    });
  });



  
$(document).ready(function(){

 
  AOS.init({
      duration : 1500,
    });
    setTimeout(function() { $("#confirm-div").fadeOut(1500); }, 5000);
});





$(document).ready(function(){
  $('.thumb a').click(function(e){
      e.preventDefault();
      $('.pro_box img').attr("src" , $(this).attr("href"))
  })
})


$(document).ready(function(){
  $('.humbergs').click(function(){
     $(this).toggleClass('open');
      $(".menus_desktop").toggleClass("slide_menu");
     
  });
   $(".crossmenu").click(function () {
  
    $(".menus_desktop").removeClass("slide_menu");
  });
});


$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

});

$(document).ready(function () {
  $(window).scroll(function () {

    if ($(window).scrollTop() >= 300) {
      $('.headers').addClass('fixed_header')
    } else {
      $('.headers').removeClass('fixed_header')
    }

  });
});


$(document).ready(function(){
 
   $(".mobileFilter").click(function () {
  
    $(".leftwraps_fillers").addClass("activeFilter");
  });
  
    $(".cancel").click(function () {
  
    $(".leftwraps_fillers").removeClass("activeFilter");
  });
  
  
});



//   var window_size = window.matchMedia('(max-width: 768px)');
//   if (window.matchMedia('(max-width : 768px)').matches)
//   {
//   $(document).ready(function() {
//   $(".menuinner > h5").on("click", function() {
//     if ($(this).hasClass("active")) {
//       $(this).removeClass("active");
//       $(this)
//         .siblings(".content")
//         .slideUp(200);
//       $(".menuinner > h5 i")
//         .removeClass("fa-minus")
//         .addClass("fa-plus");
//     } else {
//       $(".menuinner > h5 i")
//         .removeClass("fa-minus")
//         .addClass("fa-plus");
//       $(this)
//         .find("i")
//         .removeClass("fa-plus")
//         .addClass("fa-minus");
//       $(".menuinner > h5").removeClass("active");
//       $(this).addClass("active");
//       $(".content").slideUp(200);
//       $(this)
//         .siblings(".content")
//         .slideDown(200);
//     }
//   });
// });


// }



