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

let itemContainerElement = document.getElementById('slider');
    let currentIndex = 0;

    function renderItems() {
      let innerHTML = '';
      items.forEach((item) => {
        innerHTML += `<div class="item-container">
                            <img src="${item.item_image}" alt="" class="item-image">
                            <div class="item-name">${item.item_name}</div>
                            <div class="price">
                                <span class="current-price">₹ ${item.current_price}</span>
                                <span class="orginal-price">₹ ${item.orginal_price}</span>
                                <span class="discount-price">(${item.discount_price}% OFF)</span>
                            </div>
                            <button class="btn-add-card">Add to Cart</button>
                        </div>`;
      });

      itemContainerElement.innerHTML = innerHTML;
    }

    function slideItems() {
      const totalWidth = itemContainerElement.scrollWidth;
      const visibleWidth = document.querySelector('.slider-container').clientWidth;
      const itemWidth = document.querySelector('.item-container').clientWidth;
      const maxIndex = Math.floor(totalWidth / (itemWidth + 20)) - 4;

      if (currentIndex > maxIndex) {
        currentIndex = 0;
      } else if (currentIndex < 0) {
        currentIndex = maxIndex;
      }

      const newTransform = `translateX(-${currentIndex * (itemWidth + 20)}px)`;
      itemContainerElement.style.transform = newTransform;
    }

    function nextSlide() {
      currentIndex++;
      slideItems();
    }

    function prevSlide() {
      currentIndex--;
      slideItems();
    }

    document.getElementById('nextBtn').addEventListener('click', nextSlide);
    document.getElementById('prevBtn').addEventListener('click', prevSlide);

    // Auto slide
    setInterval(nextSlide, 3000);

    // Initial render
    renderItems();
    slideItems();

// Featured Products END
/*===================================================================================*/
