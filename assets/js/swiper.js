$(document).ready(function(){
    var mySwiper = new Swiper(".swiper-container", {
      loop: true,
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      slidesPerView: 3,
      paginationClickable: true,
     
      spaceBetween: 20,
      breakpoints: {
          1920: {
              slidesPerView: 1,
              spaceBetween: 30
          },
          1028: {
              slidesPerView: 1,
              spaceBetween: 30
          },
          480: {
              slidesPerView: 1,
              spaceBetween: 10
          }
      }
      });
      

});

