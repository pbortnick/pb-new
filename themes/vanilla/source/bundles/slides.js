// import dist from 'owl.carousel';
//
//
// import $ from 'jquery';
// import 'imports?jQuery=jquery!owl.carousel';
//
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
  })
});
