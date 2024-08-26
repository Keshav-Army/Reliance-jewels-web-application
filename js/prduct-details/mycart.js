// Here you have defined 
let bagItemsObject;
onLoad();

function onLoad() {
    loadBagItemsObject();
    displayCartItems();
}
// To bagItems Id first you have to change in object jha se aap pora object ki details la sako =================== 
// Here you can use map function which give you array into diffrent array ===================
function loadBagItemsObject() {
    console.log(bagItems);

    bagItemsObject = bagItems.map(itemsId => {
        for (i = 0; i < items.length; i++) {
            if (itemsId == items[i].id) {
                return items[i];
            }
        }
    })
    // console.log(bagItemsObject) here pora object print hoga id ke bace pe ===================
}

function displayCartItems() {

    let itemsContainerElement = document.querySelector('.cart-items-container');
    let innerHTML = "";
    bagItemsObject.forEach(bagItems => {
        innerHTML += generateOneItemHTML(bagItems);
    });
    itemsContainerElement.innerHTML = innerHTML;
}

function generateOneItemHTML(item) {
    return `<div class="cart-item-container">
                                        <img class="cart-item-image" src="${item.item_image}" alt="Product Image">
                                        <div class="item-details">
                                            <div class="item-name">${item.item_name}</div>
                                            <div class="price">
                                                <span class="current-price">₹ ${item.current_price}</span>
                                                <span class="orginal-price">₹ ${item.orginal_price}</span>
                                                <span class="discount-price">(${item.discount_price}% OFF)</span>
                                            </div>
                                            <p class="text-muted">14 days return available</p>
                                            <p class="text-muted">Delivery by <strong>10 Oct 2024</strong></p>
                                        </div>
                                        <button class="remove-item" onclick="removeFromBagBtn(${item.id})">&times;</button>
                                    </div>`
}

// Now Remove Part with the help of filter method ================================================================

function removeFromBagBtn(itemId) {
    bagItems = bagItems.filter(bagItemId => bagItemId != itemId);
    //set item in the local storage
    localStorage.setItem('BagItems', JSON.stringify(bagItems));
    loadBagItemsObject();
    displayBagIcon();
    displayCartItems();
}