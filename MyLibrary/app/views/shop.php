<?php $products = ProductsController::getAllProducts(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="<?php echo BaseUrl; ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- font awsome library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">
    <!--jquery-->
    <link rel="stylesheet" type="text/css" href="http://schauhan.in/Examples/ecommerce_product_slider/style1.css" />
    <link rel="stylesheet" type="text/css"
        href="http://schauhan.in/Examples/ecommerce_product_slider/lightslider.css" />
    <title>MyLibrary</title>



    <!-- <div class="h-20 bg-pink-600"></div> -->

    <style>


        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }


    </style>

    </head>

    <body class=" ">
    <?php require_once VIEWS . 'header.php' ?>

<div >
  <img class="m-0 p-0" src="<?php echo BaseUrl;?>assets/img/capture.png">
</div>
        <!--	 
Alternatively if you want to just have a single hero
<section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">
    <div class="container mx-auto">
        <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
            <h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">products</a>
        </div>
      </div>
</section>
-->

        <section class=" flex bg-white py-10">

            <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

                <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                            href="#">
                            Store
                        </a>

                        <div class="flex items-center" id="store-nav-content">

                            <a class="pl-3 inline-block no-underline hover:text-black" >
                            <select id="product-filter" class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
  <option value="all">All Products</option>
  <option value="Backpack">Backpacks</option>
  <option value="Pencils">Pencils</option>
  <option value="Notebook">Notebook</option>
  <option value="Case">Case</option>
</select>
                            </a>



                        </div>
                    </div>
                </nav>




                <?php foreach ($products as $product): ?>
    <div class="product md:w-1/4 xl:w-1/4 p-6 flex flex-col <?php echo strtolower($product['ProductName']); ?>">
        <a href="#" class="box w-50">
            <div class="w-50">
                <img class="product-img w-full w-30 h-40 hover:grow hover:shadow-lg"
                     src="<?php echo BaseUrl; ?>assets/img/<?php echo $product['ProductImage']; ?>">
            </div>
            <div class="card-body w-full flex flex-col items-center">
                <a  class="card-title product-id hidden">
                   <?php echo $product['ProductId']; ?>
                </a>
                <a class="card-title product-name">
                    <?php echo $product['ProductName']; ?>
                </a><br>
                <span class="card-text ">
                    <?php echo $product['ProductDesc']; ?>
                </span><br>
                <a class="product-price bg-purple-500 rounded-full p-2">
                    <?php echo $product['ProductPrice']; ?>$
                </a>
                <button class="btn badge badge-pill badge-secondary w-full h-9 mt-2 float-right bg-blue-600 text-white items-center rounded hover:bg-blue-800" type="button"
                        data-action="add-to-cart">Add to cart
                        <!-- <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg> -->
                    </button>
            </div>
        </a>
    </div>
<?php endforeach; ?>



            </div>



        </section>

        <section class="bg-white py-8">

            <div class="container py-8 px-6 mx-auto">

                <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8"
                    href="#">
                    About
                </a>

                <p class="mt-8 mb-8">This template is inspired by the stunning nordic minamalist design - in particular:
                    <br>
                    <a class="text-gray-800 underline hover:text-gray-900" href="http://savoy.nordicmade.com/"
                        target="_blank">Savoy Theme</a> created by <a
                        class="text-gray-800 underline hover:text-gray-900"
                        href="https://nordicmade.com/">https://nordicmade.com/</a> and <a
                        class="text-gray-800 underline hover:text-gray-900" href="https://www.metricdesign.no/"
                        target="_blank">https://www.metricdesign.no/</a>
                </p>

                <p class="mb-8">Lorem ipsum dolor sit amet, consectetur <a href="#">random link</a> adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas
                    accumsan lacus vel facilisis volutpat. Vitae aliquet nec ullamcorper sit. Nullam eget felis eget
                    nunc lobortis mattis aliquam. In est ante in nibh mauris. Egestas congue quisque egestas diam in.
                    Facilisi nullam vehicula ipsum a arcu. Nec nam aliquam sem et tortor consequat. Eget mi proin sed
                    libero enim sed faucibus turpis in. Hac habitasse platea dictumst quisque. In aliquam sem fringilla
                    ut. Gravida rutrum quisque non tellus orci ac auctor augue mauris. Accumsan lacus vel facilisis
                    volutpat est velit egestas dui id. At tempor commodo ullamcorper a. Volutpat commodo sed egestas
                    egestas fringilla. Vitae congue eu consequat ac.</p>

            </div>

        </section>








        <!--links-->


        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script> -->
            <script src="<?php echo BaseUrl; ?>assets/js/script.js"></script>





 





<!-- <script src="http://schauhan.in/Examples/ecommerce_product_slider/jquery-3.5.1.js"></script>
<script src="http://schauhan.in/Examples/ecommerce_product_slider/lightslider.js"></script> -->
<!-- <script>
    // $(document).ready(function () {
    //     $('#autoWidth').lightSlider({
    //         autoWidth: true,
    //         loop: true,
    //         onSliderLoad: function () {
    //             $('#autoWidth').removeClass('cS-hidden');
    //         }
    //     });
    // });
</script> -->



<script>

   //products filter
   const productFilter = document.querySelector("#product-filter");

productFilter.addEventListener("change", function () {
    const selectedCategory = this.value.toLowerCase();
    const products = document.querySelectorAll(".product");

    products.forEach(function (product) {
        if (selectedCategory === "all" || product.classList.contains(selectedCategory)) {
            product.style.display = "block";
        } else {
            product.style.display = "none";
        }
    });
});


//shopping cart

 "use strict";


    let cart = [];
    let cartTotal = 0;
    // let x = 1;
    const cartDom = document.querySelector(".cart");
    const addtocartbtnDom = document.querySelectorAll('[data-action="add-to-cart"]');

    addtocartbtnDom.forEach(addtocartbtnDom => {
        addtocartbtnDom.addEventListener("click", () => {
            const productDom = addtocartbtnDom.parentNode.parentNode;
            const product = {
                img: productDom.querySelector(".product-img").getAttribute("src"),
                name: productDom.querySelector(".product-name").innerText,
                price: productDom.querySelector(".product-price").innerText,
                id: productDom.querySelector(".product-id").innerText,
                quantity: 1
                
            };

            const IsinCart = cart.filter(cartItem => cartItem.name === product.name).length > 0;
            if (IsinCart === false ) {
                cartDom.insertAdjacentHTML("beforeend", `

  <div class=" pro sticky bg-white flex py-6 d-flex flex-row shadow-sm card cart-items mt-2 mb-3 animated flipInX">
    <div class="p-2 h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
        <img src="${product.img}" alt="${product.name}" class="h-full w-full object-cover object-center"/>

        <input type="hidden" value="${product.id}" name="ProductId[]" >
    </div>
    <div class="p-2 mt-3">
        <p class="text-info cart_item_name" >${product.name}</p>
        <input type="hidden" value="${product.name}" name="ProductName[]" >
    </div>
    <div class="p-2 mt-3">
        <p class="text-success cart_item_price">${product.price}</p>
        <input type="hidden" value="${product.price}" name="ProductPrice[]" >
    </div>
    <div class="p-2 mt-3 ml-auto">
        <button class="btn badge badge-secondary" type="button" data-action="increase-item">&plus;
    </div>
    <div class="p-2 mt-3">
      <p class="text-success cart_item_quantity">${product.quantity}</p>
      <input type="hidden" value="${product.quantity}" name="ProductQuantity[]">
    </div>

    <input type="hidden" value="${cartTotal}" name="cartTotal">

    <div class="p-2 mt-3">
      <button class="btn badge badge-info" type="button" data-action="decrease-item">&minus;
    </div>
    <div class="p-2 mt-3">
      <button class="btn badge badge-danger" type="button" data-action="remove-item">&times;
    </div>


  
  `);

                addtocartbtnDom.innerText = "In cart";
                addtocartbtnDom.disabled = true;
                cart.push(product);

                const cartItemsDom = cartDom.querySelectorAll(".cart-items");
                cartItemsDom.forEach(cartItemDom => {

                    if (cartItemDom.querySelector(".cart_item_name").innerText === product.name) {

                        cartTotal += parseInt(cartItemDom.querySelector(".cart_item_quantity").innerText)
                            * parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
                        document.querySelector('.pay').innerText = cartTotal + " ";

                        // increase item in cart
                        cartItemDom.querySelector('[data-action="increase-item"]').addEventListener("click", () => {
                            cart.forEach(cartItem => {
                                if (cartItem.name === product.name) {
                                    cartItemDom.querySelector(".cart_item_quantity").innerText = ++cartItem.quantity;
                                    cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
                                        parseInt(cartItem.price) + " ";
                                    cartTotal += parseInt(cartItem.price)
                                    document.querySelector('.pay').innerText = cartTotal + " ";
                                    cartItemDom.querySelector('[name="ProductQuantity[]"]').value = cartItem.quantity;
                                    cartItemDom.querySelector('[name="cartTotal"]').value = cartTotal;

                                }
                            });
                        });

                        // decrease item in cart
                        cartItemDom.querySelector('[data-action="decrease-item"]').addEventListener("click", () => {
                            cart.forEach(cartItem => {
                                if (cartItem.name === product.name) {
                                    if (cartItem.quantity > 1) {
                                        cartItemDom.querySelector(".cart_item_quantity").innerText = --cartItem.quantity;
                                        cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
                                            parseInt(cartItem.price) + " ";
                                        cartTotal -= parseInt(cartItem.price)
                                        document.querySelector('.pay').innerText = cartTotal + " ";
                                        cartItemDom.querySelector('[name="ProductQuantity[]"]').value = cartItem.quantity;
                                    cartItemDom.querySelector('[name="cartTotal"]').value = cartTotal;
                                    }
                                }
                            });
                        });

                        //remove item from cart
                        cartItemDom.querySelector('[data-action="remove-item"]').addEventListener("click", () => {
                            cart.forEach(cartItem => {
                                if (cartItem.name === product.name) {
                                    cartTotal -= parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
                                    document.querySelector('.pay').innerText = cartTotal + " ";
                                    cartItemDom.remove();
                                    cartItemDom.querySelector('[name="ProductQuantity[]"]').value = cartItem.quantity;
                                    cartItemDom.querySelector('[name="cartTotal"]').value = cartTotal;
                                    cart = cart.filter(cartItem => cartItem.name !== product.name);
                                    addtocartbtnDom.innerText = "Add to cart";
                                    addtocartbtnDom.disabled = false;
                                    
                                }
                                if (cart.length < 1) {
                                    // document.querySelector('.cart-footer').remove();
                                }
                            });
                        });

                        //clear cart
                        document.querySelector('[data-action="clear-cart"]').addEventListener("click", () => {
                            cartItemDom.remove();
                            cart = [];
                            cartTotal = 0;
                            if (document.querySelector('.cart-footer') !== null) {
                                // document.querySelector('.cart-footer').remove();
                            }
                            addtocartbtnDom.innerText = "Add to cart";
                            addtocartbtnDom.disabled = false;
                        });

   
                    }
                });
            }
        });
    });

  
//     function calculateCartItemCount(cart) {
//   let count = 0;
//   cart.forEach(cartItem => {
//     count += cartItem;
//   });
//   return count;
// }
// const Count = calculateCartItemCount(cart);






//     //number of added products 
//     function updateCartItemCount(count) {
//   const cartItemCountElement = document.getElementById('cart-item-count');
//   cartItemCountElement.textContent = count.toString();
// }



// updateCartItemCount(count);



</script>





<!--links-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<!-- <script>
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
</script>


<?php require_once VIEWS . 'footer.php' ?>

</body>

</html>