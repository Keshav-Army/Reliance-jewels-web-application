/*===================================================================================*/
// 	MAIN SLIDER HOME PAGE START

let slideIndex = 1;
let slideInterval;

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlidesTop");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

// Initialize the slideshow
showSlides(slideIndex);
slideInterval = setInterval(() => plusSlides(1), 5000); // Change image every 3 seconds

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
