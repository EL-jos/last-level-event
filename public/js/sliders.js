/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/sliders.js ***!
  \*********************************/
$(document).ready(function () {
  /* $('#el-sliders .owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 1000,
    smartSpeed: 1500,
    autoplayHoverPause: true,
  }); */

  $('#el-banner .owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 1000,
    smartSpeed: 1000,
    autoplayHoverPause: true
  });
  $('#el-products .owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 1000,
    smartSpeed: 1000,
    autoplayHoverPause: true
  });
  var owl = $('#el-sliders .owl-carousel');
  owl.owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 1000,
    smartSpeed: 1000,
    autoplayHoverPause: true
  });
  var images = document.querySelectorAll("#el-sliders img");
  owl.on('changed.owl.carousel', function (event) {
    var pos = event.relatedTarget.normalize(event.item.index, true);
    var img = images[pos];
    if (img.complete) {
      getDominantColor(img);
    } else {
      img.addEventListener('load', function () {
        getDominantColor(img);
      });
    }
  });
  /*  $('#el_gallery .owl-carousel').owlCarousel({
     items: 3,
     loop: true,
     nav: false,
     dots: true,
     autoplay: true,
     autoplaySpeed: 1000,
     smartSpeed: 1500,
     autoplayHoverPause: true,
     animateOut: true,
     responsive: {
       0: {
         items: 1,
         center: true
       },
       600: {
         items: 2,
         center: true,
         margin: 20
       },
       900: {
         items: 3,
         center: true,
         margin: 20
       },
       1000: {
         items: 3,
         center: true,
         margin: 20
       },
       1300: {
         items: 4,
         center: true,
         margin: 20
       }
     }
   });
   $('#posts_facebook .owl-carousel').owlCarousel({
     items: 4,
     loop: true,
     nav: false,
     dots: true,
     autoplay: true,
     autoplaySpeed: 1000,
     smartSpeed: 1500,
     autoplayHoverPause: true,
     animateOut: true
   }); */
});

var colorThief = new ColorThief();
var rgbToHex = function rgbToHex(r, g, b) {
  return '#' + [r, g, b].map(function (x) {
    var hex = x.toString(16);
    return hex.length === 1 ? '0' + hex : hex;
  }).join('');
};
function getDominantColor(img) {
  var dominantRGB = colorThief.getColor(img);
  createDots(rgbToHex(dominantRGB[0], dominantRGB[1], dominantRGB[2]));
}
function createDots(hexcode) {
  document.querySelector("#el-sliders #el-bg").style.backgroundColor = hexcode;
}
/******/ })()
;