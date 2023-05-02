
//navbar

const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    navbar.classList.add('bg-pink-600');
    navbar.classList.remove('bg-transparent');
  } else {
    navbar.classList.remove('bg-pink-600');
    navbar.classList.add('bg-transparent');
  }
});

//menu
const btn = document.querySelector('button.mobile-menu-button');
const menu = document.querySelector('.mobile-menu');
btn.addEventListener("click", ()=> {
menu.classList.toggle("hidden");
});


// Get the card element

const toggleBtn = document.getElementById('toggle-btn');
const secondBlock = document.getElementById('second-block');

toggleBtn.addEventListener('click', () => {
  if (secondBlock.style.display === 'none') {
    secondBlock.style.display = 'block';
  } else {
    secondBlock.style.display = 'none';
  }
});

// //modal
// const modal = document.getElementById('modal');
// const showModal = document.getElementById('show-modal');
// console.log("true");
// showModal.addEventListener('click', function(){
// modal.classList.remove('hidden')

// });

// const closeModal = document.getElementById('close-modal');
// closeModal.addEventListener('click', function(){
// modal.classList.add('hidden')
// });







   //products filter
//    const productFilter = document.querySelector("#product-filter");

// productFilter.addEventListener("change", function () {
//     const selectedCategory = this.value.toLowerCase();
//     const products = document.querySelectorAll(".product");

//     products.forEach(function (product) {
//         if (selectedCategory === "all" || product.classList.contains(selectedCategory)) {
//             product.style.display = "block";
//         } else {
//             product.style.display = "none";
//         }
//     });
// });


//shopping cart

//  "use strict";


//     let cart = [];
//     let cartTotal = 0;
//     // let x = 1;
//     const cartDom = document.querySelector(".cart");
//     const addtocartbtnDom = document.querySelectorAll('[data-action="add-to-cart"]');

//     addtocartbtnDom.forEach(addtocartbtnDom => {
//         addtocartbtnDom.addEventListener("click", () => {
//             const productDom = addtocartbtnDom.parentNode.parentNode;
//             const product = {
//                 img: productDom.querySelector(".product-img").getAttribute("src"),
//                 name: productDom.querySelector(".product-name").innerText,
//                 price: productDom.querySelector(".product-price").innerText,
//                 id: productDom.querySelector(".product-id").innerText,
//                 quantity: 1
                
//             };

//             const IsinCart = cart.filter(cartItem => cartItem.name === product.name).length > 0;
//             if (IsinCart === false ) {
//                 cartDom.insertAdjacentHTML("beforeend", `

//   <div class=" pro sticky bg-white flex py-6 d-flex flex-row shadow-sm card cart-items mt-2 mb-3 animated flipInX">
//     <div class="p-2 h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
//         <img src="${product.img}" alt="${product.name}" class="h-full w-full object-cover object-center"/>

//         <input type="hidden" value="${product.id}" name="ProductId[]" >
//     </div>
//     <div class="p-2 mt-3">
//         <p class="text-info cart_item_name" >${product.name}</p>
//         <input type="hidden" value="${product.name}" name="ProductName[]" >
//     </div>
//     <div class="p-2 mt-3">
//         <p class="text-success cart_item_price">${product.price}</p>
//         <input type="hidden" value="${product.price}" name="ProductPrice[]" >
//     </div>
//     <div class="p-2 mt-3 ml-auto">
//         <button class="btn badge badge-secondary" type="button" data-action="increase-item">&plus;
//     </div>
//     <div class="p-2 mt-3">
//       <p class="text-success cart_item_quantity">${product.quantity}</p>
//       <input type="hidden" value="${product.quantity}" name="ProductQuantity[]">
//     </div>

//     <input type="hidden" value="${cartTotal}" name="cartTotal">

//     <div class="p-2 mt-3">
//       <button class="btn badge badge-info" type="button" data-action="decrease-item">&minus;
//     </div>
//     <div class="p-2 mt-3">
//       <button class="btn badge badge-danger" type="button" data-action="remove-item">&times;
//     </div>


  
//   `);

//                 addtocartbtnDom.innerText = "In cart";
//                 addtocartbtnDom.disabled = true;
//                 cart.push(product);

//                 const cartItemsDom = cartDom.querySelectorAll(".cart-items");
//                 cartItemsDom.forEach(cartItemDom => {

//                     if (cartItemDom.querySelector(".cart_item_name").innerText === product.name) {

//                         cartTotal += parseInt(cartItemDom.querySelector(".cart_item_quantity").innerText)
//                             * parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
//                         document.querySelector('.pay').innerText = cartTotal + " ";

//                         // increase item in cart
//                         cartItemDom.querySelector('[data-action="increase-item"]').addEventListener("click", () => {
//                             cart.forEach(cartItem => {
//                                 if (cartItem.name === product.name) {
//                                     cartItemDom.querySelector(".cart_item_quantity").innerText = ++cartItem.quantity;
//                                     cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
//                                         parseInt(cartItem.price) + " ";
//                                     cartTotal += parseInt(cartItem.price)
//                                     document.querySelector('.pay').innerText = cartTotal + " ";
//                                     cartItemDom.querySelector('[name="ProductQuantity[]"]').value = cartItem.quantity;
//                                     cartItemDom.querySelector('[name="cartTotal"]').value = cartTotal;

//                                 }
//                             });
//                         });

//                         // decrease item in cart
//                         cartItemDom.querySelector('[data-action="decrease-item"]').addEventListener("click", () => {
//                             cart.forEach(cartItem => {
//                                 if (cartItem.name === product.name) {
//                                     if (cartItem.quantity > 1) {
//                                         cartItemDom.querySelector(".cart_item_quantity").innerText = --cartItem.quantity;
//                                         cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
//                                             parseInt(cartItem.price) + " ";
//                                         cartTotal -= parseInt(cartItem.price)
//                                         document.querySelector('.pay').innerText = cartTotal + " ";
//                                         cartItemDom.querySelector('[name="ProductQuantity[]"]').value = cartItem.quantity;
//                                         cartItemDom.querySelector('[name="cartTotal[]"]').value = cartTotal;
//                                     }
//                                 }
//                             });
//                         });

//                         //remove item from cart
//                         cartItemDom.querySelector('[data-action="remove-item"]').addEventListener("click", () => {
//                             cart.forEach(cartItem => {
//                                 if (cartItem.name === product.name) {
//                                     cartTotal -= parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
//                                     document.querySelector('.pay').innerText = cartTotal + " ";
//                                     cartItemDom.remove();
//                                     cart = cart.filter(cartItem => cartItem.name !== product.name);
//                                     addtocartbtnDom.innerText = "Add to cart";
//                                     addtocartbtnDom.disabled = false;
//                                 }
//                                 if (cart.length < 1) {
//                                     // document.querySelector('.cart-footer').remove();
//                                 }
//                             });
//                         });

//                         //clear cart
//                         document.querySelector('[data-action="clear-cart"]').addEventListener("click", () => {
//                             cartItemDom.remove();
//                             cart = [];
//                             cartTotal = 0;
//                             if (document.querySelector('.cart-footer') !== null) {
//                                 // document.querySelector('.cart-footer').remove();
//                             }
//                             addtocartbtnDom.innerText = "Add to cart";
//                             addtocartbtnDom.disabled = false;
//                         });

   
//                     }
//                 });
//             }
//         });
//     });


















// //shoppint cartt 



// "use strict";


// let cart = [];
// let cartTotal = 0;
// // let x = 1;
// const cartDom = document.querySelector(".cart");
// const addtocartbtnDom = document.querySelectorAll('[data-action="add-to-cart"]');

// addtocartbtnDom.forEach(addtocartbtnDom => {
//     addtocartbtnDom.addEventListener("click", () => {
//         const productDom = addtocartbtnDom.parentNode.parentNode;
//         const product = {
//             img: productDom.querySelector(".product-img").getAttribute("src"),
//             name: productDom.querySelector(".product-name").innerText,
//             price: productDom.querySelector(".product-price").innerText,
//             id: productDom.querySelector(".product-id").innerText,
//             quantity: 1
            
//         };

//         const IsinCart = cart.filter(cartItem => cartItem.name === product.name).length > 0;
//         if (IsinCart === false ) {
//             cartDom.insertAdjacentHTML("beforeend", `

// <div class=" pro sticky bg-white flex py-6 d-flex flex-row shadow-sm card cart-items mt-2 mb-3 animated flipInX">
// <div class="p-2 h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
//     <img src="${product.img}" alt="${product.name}" class="h-full w-full object-cover object-center"/>

//     <input type="hidden" value="${product.id}" name="ProductId[]" >
// </div>
// <div class="p-2 mt-3">
//     <p class="text-info cart_item_name" >${product.name}</p>
//     <input type="hidden" value="${product.name}" name="ProductName[]" >
// </div>
// <div class="p-2 mt-3">
//     <p class="text-success cart_item_price">${product.price}</p>
//     <input type="hidden" value="${product.price}" name="ProductPrice[]" >
// </div>
// <div class="p-2 mt-3 ml-auto">
//     <button class="btn badge badge-secondary" type="button" data-action="increase-item">&plus;
// </div>
// <div class="p-2 mt-3">
//   <p class="text-success cart_item_quantity">${product.quantity}</p>
//   <input type="hidden" value="${product.quantity}" name="ProductQuantity[]">
// </div>

// <input type="hidden" value="${cartTotal}" name="cartTotal">

// <div class="p-2 mt-3">
//   <button class="btn badge badge-info" type="button" data-action="decrease-item">&minus;
// </div>
// <div class="p-2 mt-3">
//   <button class="btn badge badge-danger" type="button" data-action="remove-item">&times;
// </div>



// `);

//             addtocartbtnDom.innerText = "In cart";
//             addtocartbtnDom.disabled = true;
//             cart.push(product);

//             const cartItemsDom = cartDom.querySelectorAll(".cart-items");
//             cartItemsDom.forEach(cartItemDom => {

//                 if (cartItemDom.querySelector(".cart_item_name").innerText === product.name) {

//                     cartTotal += parseInt(cartItemDom.querySelector(".cart_item_quantity").innerText)
//                         * parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
//                     document.querySelector('.pay').innerText = cartTotal + " ";

//                     // increase item in cart
//                     cartItemDom.querySelector('[data-action="increase-item"]').addEventListener("click", () => {
//                         cart.forEach(cartItem => {
//                             if (cartItem.name === product.name) {
//                                 cartItemDom.querySelector(".cart_item_quantity").innerText = ++cartItem.quantity;
//                                 cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
//                                     parseInt(cartItem.price) + " ";
//                                 cartTotal += parseInt(cartItem.price)
//                                 document.querySelector('.pay').innerText = cartTotal + " ";
//                                 cartItemDom.querySelector('[name="ProductQuantity[]"]').value = cartItem.quantity;
//                                 cartItemDom.querySelector('[name="cartTotal"]').value = cartTotal;

//                             }
//                         });
//                     });

//                     // decrease item in cart
//                     cartItemDom.querySelector('[data-action="decrease-item"]').addEventListener("click", () => {
//                         cart.forEach(cartItem => {
//                             if (cartItem.name === product.name) {
//                                 if (cartItem.quantity > 1) {
//                                     cartItemDom.querySelector(".cart_item_quantity").innerText = --cartItem.quantity;
//                                     cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
//                                         parseInt(cartItem.price) + " ";
//                                     cartTotal -= parseInt(cartItem.price)
//                                     document.querySelector('.pay').innerText = cartTotal + " ";
//                                     cartItemDom.querySelector('[name="ProductQuantity[]"]').value = cartItem.quantity;
//                                     cartItemDom.querySelector('[name="cartTotal[]"]').value = cartTotal;
//                                 }
//                             }
//                         });
//                     });

//                     //remove item from cart
//                     cartItemDom.querySelector('[data-action="remove-item"]').addEventListener("click", () => {
//                         cart.forEach(cartItem => {
//                             if (cartItem.name === product.name) {
//                                 cartTotal -= parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
//                                 document.querySelector('.pay').innerText = cartTotal + " ";
//                                 cartItemDom.remove();
//                                 cart = cart.filter(cartItem => cartItem.name !== product.name);
//                                 addtocartbtnDom.innerText = "Add to cart";
//                                 addtocartbtnDom.disabled = false;
//                             }
//                             if (cart.length < 1) {
//                                 // document.querySelector('.cart-footer').remove();
//                             }
//                         });
//                     });

//                     //clear cart
//                     document.querySelector('[data-action="clear-cart"]').addEventListener("click", () => {
//                         cartItemDom.remove();
//                         cart = [];
//                         cartTotal = 0;
//                         if (document.querySelector('.cart-footer') !== null) {
//                             // document.querySelector('.cart-footer').remove();
//                         }
//                         addtocartbtnDom.innerText = "Add to cart";
//                         addtocartbtnDom.disabled = false;
//                     });


//                 }
//             });
//         }
//     });
// });






// const modal = document.getElementById('modal');
// const showModal = document.getElementById('show-modal');
// console.log("true");
// showModal.addEventListener('click', function(){
// modal.classList.remove('hidden')

// });

// const closeModal = document.getElementById('close-modal');
// closeModal.addEventListener('click', function(){
// modal.classList.add('hidden')
// });





// "use strict";

//     let cart = [];
//     let cartTotal = 0;
//     // let x = 1;
//     const cartDom = document.querySelector(".cart");
//     const addtocartbtnDom = document.querySelectorAll('[data-action="add-to-cart"]');

//     addtocartbtnDom.forEach(addtocartbtnDom => {
//         addtocartbtnDom.addEventListener("click", () => {
//             const productDom = addtocartbtnDom.parentNode.parentNode;
//             const product = {
//                 img: productDom.querySelector(".product-img").getAttribute("src"),
//                 name: productDom.querySelector(".product-name").innerText,
//                 price: productDom.querySelector(".product-price").innerText,
//                 id: productDom.querySelector(".product-id").innerText,
//                 quantity: 1
                
//             };

//             const IsinCart = cart.filter(cartItem => cartItem.name === product.name).length > 0;
//             if (IsinCart === false ) {
//                 cartDom.insertAdjacentHTML("beforeend", `

//   <div class="pro sticky bg-white flex py-6 d-flex flex-row shadow-sm card cart-items mt-2 mb-3 animated flipInX">
//     <div class="p-2 h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
//         <img src="${product.img}" alt="${product.name}" class="h-full w-full object-cover object-center"/>

//         <input type="hidden" value="${product.id}" name="ProductId[]" >
//     </div>
//     <div class="p-2 mt-3">
//         <p class="text-info cart_item_name" >${product.name}</p>
//         <input type="hidden" value="${product.name}" name="ProductName[]" >
//     </div>
//     <div class="p-2 mt-3">
//         <p class="text-success cart_item_price">${product.price}</p>
//         <input type="hidden" value="${product.price}" name="ProductPrice[]" >
//     </div>
//     <div class="p-2 mt-3 ml-auto">
//         <button class="btn badge badge-secondary" type="button" data-action="increase-item">&plus;
//     </div>
//     <div class="p-2 mt-3">
//       <p class="text-success cart_item_quantity">${product.quantity}</p>
//       <input type="hidden" value="${product.quantity}" name="ProductQuantity[]">
//     </div>
//     <input type="hidden" value="${cartTotal}" name="cartTotal">
//     <div class="p-2 mt-3">
//       <button class="btn badge badge-info" type="button" data-action="decrease-item">&minus;
//     </div>
//     <div class="p-2 mt-3">
//       <button class="btn badge badge-danger" type="button" data-action="remove-item">&times;
//     </div>


  
//   `);



    










//                 addtocartbtnDom.innerText = "In cart";
//                 addtocartbtnDom.disabled = true;
//                 cart.push(product);

//                 const cartItemsDom = cartDom.querySelectorAll(".cart-items");
//                 cartItemsDom.forEach(cartItemDom => {

//                     if (cartItemDom.querySelector(".cart_item_name").innerText === product.name) {

//                         cartTotal += parseInt(cartItemDom.querySelector(".cart_item_quantity").innerText)
//                             * parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
//                         document.querySelector('.pay').innerText = cartTotal + " ";

//                         // increase item in cart
//                         cartItemDom.querySelector('[data-action="increase-item"]').addEventListener("click", () => {
//                             cart.forEach(cartItem => {
//                                 if (cartItem.name === product.name) {
//                                     cartItemDom.querySelector(".cart_item_quantity").innerText = ++cartItem.quantity;
//                                     cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
//                                         parseInt(cartItem.price) + " ";
//                                     cartTotal += parseInt(cartItem.price)
//                                     document.querySelector('.pay').innerText = cartTotal + " ";
//                                     cartItemDom.querySelector('[name="ProductQuantity[]"]').value = cartItem.quantity;
//                                     cartItemDom.querySelector('[name="cartTotal"]').value = cartTotal;

//                                 }
//                             });
//                         });

//                         // decrease item in cart
//                         cartItemDom.querySelector('[data-action="decrease-item"]').addEventListener("click", () => {
//                             cart.forEach(cartItem => {
//                                 if (cartItem.name === product.name) {
//                                     if (cartItem.quantity > 1) {
//                                         cartItemDom.querySelector(".cart_item_quantity").innerText = --cartItem.quantity;
//                                         cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
//                                             parseInt(cartItem.price) + " ";
//                                         cartTotal -= parseInt(cartItem.price)
//                                         document.querySelector('.pay').innerText = cartTotal + " ";
//                                         cartItemDom.querySelector('[name="ProductQuantity[]"]').value = cartItem.quantity;
//                                         cartItemDom.querySelector('[name="cartTotal[]"]').value = cartTotal;
//                                     }
//                                 }
//                             });
//                         });

//                         //remove item from cart
//                         cartItemDom.querySelector('[data-action="remove-item"]').addEventListener("click", () => {
//                             cart.forEach(cartItem => {
//                                 if (cartItem.name === product.name) {
//                                     cartTotal -= parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
//                                     document.querySelector('.pay').innerText = cartTotal + " ";
//                                     cartItemDom.remove();
//                                     cart = cart.filter(cartItem => cartItem.name !== product.name);
//                                     addtocartbtnDom.innerText = "Add to cart";
//                                     addtocartbtnDom.disabled = false;
//                                 }
//                                 if (cart.length < 1) {
//                                     document.querySelector('.cart-footer').remove();
//                                 }
//                             });
//                         });

//                         //clear cart
//                         document.querySelector('[data-action="clear-cart"]').addEventListener("click", () => {
//                             cartItemDom.remove();
//                             cart = [];
//                             cartTotal = 0;
//                             if (document.querySelector('.cart-footer') !== null) {
//                                 document.querySelector('.cart-footer').remove();
//                             }
//                             addtocartbtnDom.innerText = "Add to cart";
//                             addtocartbtnDom.disabled = false;
//                         });

 
//                    }
//                 });
//             }
//         });
//     });
