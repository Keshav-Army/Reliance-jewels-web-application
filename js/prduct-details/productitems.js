let items = [
  {
    id: "1",
    item_image: "images/PIMAGES/ERGDR18KU.jpg",
    item_name: "Reliance Jewels 22 Kt Gold Round Designed Hoops Earrings",
    current_price: 8840,
    orginal_price: 13000,
    discount_price: 32,
  },
  {
    id: "2",
    item_image: "images/PIMAGES/PDTDR17P1.jpg",
    item_name: "Reliance Jewels 22 Kt Gold Heart Pendant",
    current_price: 6120,
    orginal_price: 9000,
    discount_price: 32,
  },
  {
    id: "3",
    item_image: "images/PIMAGES/NOSDR18CO.jpg",
    item_name: "Reliance Jewels 14 Kt Gold & Diamond Nose Pin",
    current_price: 3400,
    orginal_price: 5000,
    discount_price: 32,
  },
  {
    id: "4",
    item_image: "images/PIMAGES/CHNRG15AC.jpg",
    item_name: "Reliance Jewels 22 Kt Gold Box Style Chain",
    current_price: 20400,
    orginal_price: 30000,
    discount_price: 32,
  },
  {
    id: "5",
    item_image: "images/PIMAGES/BLTDH17PT.jpg",
    item_name: "Reliance Jewels 14 Kt Gold & Diamond Openable Bracelet",
    current_price: 17000,
    orginal_price: 25000,
    discount_price: 32,
  },
  {
    id: "6",
    item_image: "images/PIMAGES/RNGDF17GD.jpg",
    item_name: "Reliance Jewels 22 Kt Gold Asymmetric Designed Pendant",
    current_price: 12852,
    orginal_price: 18900,
    discount_price: 32,
  },
  {
    id: "7",
    item_image: "images/PIMAGES/RNGDG17VW.jpg",
    item_name: "Reliance Jewels 22 Kt Gold Round Designed Hoops Kada",
    current_price: 8840,
    orginal_price: 13000,
    discount_price: 32,
  },
  // ======================================
  {
    id: "8",
    item_image: "images/PIMAGES/ERGDR18KU.jpg",
    item_name: "Reliance Jewels 22 Kt Gold Round Designed Hoops Earrings",
    current_price: 8840,
    orginal_price: 13000,
    discount_price: 32,
  },
  {
    id: "9",
    item_image: "images/PIMAGES/PDTDR17P1.jpg",
    item_name: "Reliance Jewels 22 Kt Gold Heart Pendant",
    current_price: 6120,
    orginal_price: 9000,
    discount_price: 32,
  },
  {
    id: "10",
    item_image: "images/PIMAGES/NOSDR18CO.jpg",
    item_name: "Reliance Jewels 14 Kt Gold & Diamond Nose Pin",
    current_price: 3400,
    orginal_price: 5000,
    discount_price: 32,
  },
];

document.querySelector(".search-field").addEventListener("input", (event) => {
  const query = event.target.value.toLowerCase(); // Get the search query in lowercase
  const filteredItems = items.filter((item) =>
    item.item_name.toLowerCase().includes(query)
  ); // Filter items based on the query
  displayFilteredItems(filteredItems); // Display only matching items
});

function displayFilteredItems(filteredItems) {
  let itemContainerElement = document.querySelector(".items-container");
  if (itemContainerElement === null) {
    return;
  }

  let innerHTML = "";
  filteredItems.forEach((item) => {
    innerHTML += `<div class="item-container">
                            <img src="${item.item_image}" alt="" class="item-image">
                            <div class="item-name">${item.item_name}</div>
                            <div class="price">
                                <span class="current-price">₹ ${item.current_price}</span>
                                <span class="orginal-price">₹ ${item.orginal_price}</span>
                                <span class="discount-price">(${item.discount_price}% OFF)</span>
                            </div>
                            <button class="btn-add-card" onclick="addToBag(${item.id})">Add to Card</button>
                         </div>`;
  });

  itemContainerElement.innerHTML = innerHTML;
}

// Initialize the page with all items displayed
window.onload = () => {
  displayFilteredItems(items);
};

function addToBag(itemId) {
  alert(`Item with ID ${itemId} added to the bag!`);
}
