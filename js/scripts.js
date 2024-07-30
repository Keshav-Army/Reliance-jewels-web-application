/*===================================================================================*/
// 	MAIN SLIDER HOME PAGE START

let slideIndex = 0;
let slideInterval;

function plusSlides(n) {
  clearTimeout(slideInterval);
  slideIndex += n;
  if (slideIndex > document.getElementsByClassName("mySlidesTop").length) {slideIndex = 1}
  if (slideIndex < 1) {slideIndex = document.getElementsByClassName("mySlidesTop").length}
  showSlides();
}

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlidesTop");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  if (++slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";  
  slideInterval = setTimeout(showSlides, 3000); // It will be Change image every 3 seconds
}

// Initialize the slideshow
showSlides();

// 	MAIN SLIDER HOME PAGE END
/*===================================================================================*/






/*===================================================================================*/
// 	Featured Products START

jQuery(document).ready(function () {
  "use strict";

  jQuery(function () {
    var dragging = true;
    var owlElementID = "#owl-main";

    jQuery(".home-owl-carousel").each(function () {
      var owl = $(this);
      var itemPerLine = owl.data("item");
      if (!itemPerLine) {
        itemPerLine = 6;
      }
      owl.owlCarousel({
        items: itemPerLine,
        itemsDesktop: [1199, 4],
        itemsTablet: [991, 3],
        navigation: true,
        pagination: false,

        navigationText: ["", ""],
      });
    });

    jQuery(".homepage-owl-carousel").each(function () {
      var owl = $(this);
      var itemPerLine = owl.data("item");
      if (!itemPerLine) {
        itemPerLine = 4;
      }
      owl.owlCarousel({
        items: itemPerLine,
        itemsTablet: [991, 3],
        itemsDesktop: [1199, 4],
        navigation: true,
        pagination: false,

        navigationText: ["", ""],
      });
    });
  });
});

// Featured Products END
/*===================================================================================*/
