let bagItems;
onLoad();

function onLoad() {
  //get Items on the local storage
  let bagItemsStr = localStorage.getItem("BagItems");
  bagItems = bagItemsStr ? JSON.parse(bagItemsStr) : [];
  displayItemOnProductPage();
  displayBagIcon();
}

function addToBag(ItemId) {
  bagItems.push(ItemId);
  displayBagIcon();
  //set item in the local storage
  localStorage.setItem("BagItems", JSON.stringify(bagItems));
}

function displayBagIcon() {
  let displayItemCountElement = document.querySelector(".bag-item-count");
  displayItemCountElement.innerText = bagItems.length;
}

function displayItemOnProductPage() {
  let itemContainerElement = document.querySelector(".items-container");
  if (itemContainerElement === null) {
    return;
  }

  let innerHTML = "";
  items.forEach((item) => {
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
