

<nav  id="navbar" class="flex items-center justify-between flex-wrap z-40 fixed w-full top-0 bg-transparent py-4 lg:px-12 shadow  bg-gray-700  ">
        <div class="flex justify-between lg:w-auto w-full lg:border-b-0 pl-6 pr-2  pb-5 lg:pb-0">
            <div class="flex items-center flex-shrink-0  mr-16">
                <span class="font-semibold h-10 w-10  text-white text-xl tracking-tight"> <a href="home.php"><img src="<?php echo BaseUrl ;?>assets/img/logo.png"></a></span>
            </div>
            <div class="block lg:hidden  ">
                <button
                    id="nav"
                    class="flex items-center px-3 py-2 border-2 rounded text-white border-b hover:text-green-300 hover:border-green-300 mobile-menu-button">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                
                </button>


            </div>
                <!-- <button id="toggle-btn" class="block text-md px-4 py-2 rounded text-white ml-2 lg:mt-0 shopping-cart-button md:float-right">
                <div class="relative">
                <div class=" absolute left-3">
    <p class="flex h-1 w-1 items-center justify-center rounded-full bg-red-500 p-2 text-xs text-white" id="cart-item-count"></p>
  </div>        
  <i class="fa-solid fa-cart-shopping cursor-pointer" style="color: #ffffff;">  </i>
</div>
</button> -->
        <button id="toggle-btn" class=" text-md px-4 py-2 rounded text-white ml-2  lg:mt-0 shopping-cart-button">
  <i class="fa-solid fa-cart-shopping cursor-pointer" style="color: #ffffff;"></i> 

</button>
        </div>
        
        <!-- <button id="toggle-btn"  class=" block text-md px-4 py-2 rounded text-white ml-2 lg:mt-0 shopping-cart-button md:float-right">
    <div class="relative">
  <div class=" absolute left-3">
    <p class="flex h-1 w-1 items-center justify-center rounded-full bg-red-500 p-2 text-xs text-white">3</p>
  </div>
  <i class="fa-solid fa-cart-shopping cursor-pointer" style="color: #ffffff;">  </i>
</div>
</button> -->
        <div class="menu w-full lg:block flex-grow lg:flex lg:items-center lg:w-auto lg:px-3 px-8 mobile-menu hidden" >
        <div class="text-md font-bold text-indigo-100 lg:flex-grow">
        <a href="<?php echo BaseUrl; ?>"
                   class="block mt-4 lg:inline-block  lg:mt-0 text-white hover:text-white px-4 py-2 rounded hover:bg-purple-600 mr-2">
                   Home
                </a>
        <a href="<?php echo BaseUrl; ?>home/about"
                   class="block mt-4 lg:inline-block  lg:mt-0 text-white hover:text-white px-4 py-2 rounded hover:bg-purple-600 mr-2">
                   About&Contact
                </a>
  
                <a href="<?php echo BaseUrl; ?>home/shop"
                   class="block mt-4 lg:inline-block text-white  lg:mt-0 hover:text-white px-4 py-2 rounded hover:bg-purple-600 mr-2">
                   Shop
                </a>
                <a href="<?php echo BaseUrl; ?>home/books"
                   class="block mt-4 lg:inline-block text-white  lg:mt-0 hover:text-white px-4 py-2  mr-2">
                  
                   <span class="relative flex h-3 w-3 ">
  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
  <span class="relative inline-flex rounded-full h-3 w-3  bg-sky-500"> NEW!</span>
</span>Read books for free
</a>
            </div>
            <!-- This is an example component -->
          
            <div class="relative mx-auto text-gray-600 lg:block hidden">
            <form method="POST" action="<?php echo BaseUrl;?>products/searchProduct">
    <input
        class="border-2 border-gray-300 bg-white h-10 pl-2 pr-8 rounded-lg text-sm focus:outline-none"
        type="search" name="search" value="" placeholder="Search">
    <button type="submit" name="submit" value="search" class="absolute right-0 top-0 mt-3 mr-2">
        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
             version="1.1" id="Capa_1" x="0px" y="0px"
             viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
             xml:space="preserve"
             width="512px" height="512px">
            <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
        </svg>
    </button>
</form>

            </div>




            <div class="flex ">
   <!-- check if user is logged in -->
   <?php if(isset($_SESSION['logged']) && $_SESSION['logged'] === true): ?>
    <a href="<?php echo BaseUrl; ?>home/profil" class="block text-md px-4 py-2 rounded text-white ml-2 font-bold hover:text-white mt-4 hover:bg-blue-700 lg:mt-0">Welcome, <?php echo $_SESSION['UserName']; ?>!</a>
    <a href="<?php echo BaseUrl; ?>home/logout" class="block text-md px-4 py-2 rounded text-white ml-2 font-bold hover:text-white mt-4 hover:bg-blue-700 lg:mt-0">Logout</a>
<?php else: ?>
    <a href="<?php echo BaseUrl; ?>home/register" class="block text-md px-4 py-2 rounded text-white ml-2 font-bold hover:text-white mt-4 hover:bg-green-500 lg:mt-0">Sign up</a>
    <a href="<?php echo BaseUrl; ?>home/login" class=" block text-md px-4  ml-2 py-2 rounded text-white font-bold hover:text-white mt-4 hover:bg-green-500 lg:mt-0">login</a>
<?php endif; ?> 


            </div>


        </div>

   <!--      <button id="toggle-btn" class=" text-md px-4 py-2 rounded text-white ml-2  lg:mt-0 shopping-cart-button">
  <i class="fa-solid fa-cart-shopping cursor-pointer" style="color: #ffffff;"></i> 

</button> -->

<div id="second-block" class="  relative mt-300 hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
  <div class="pointer-events-none fixed mt-9 right-0 flex max-w-full pl-10">
    <div class="pointer-events-auto max-w-md">
      <form action="http://localhost/MyLibrary/public/orders/addOrder" method="post">
      <div class="flex h-90 flex-col overflow-y-scroll bg-white shadow-xl">
        <div id="cart" class=" flex-1 overflow-y-auto px-4 py-6 sm:px-6">
          <div class="flex items-start justify-between">
            <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
          </div>

          <div class="mt-8">
            <div class="flow-root">
              <ul role="list" id="cart-items" class="-my-6 divide-y divide-gray-200">



                  <div class="overflow-y-auto h-60 cart">
        <!-- cart content goes here -->
        <!-- <input type="hidden" value="${cartTotal}" name="cartTotal"> -->
    </div>
                </ul>
              </div>
            </div>
          </div>

          <div class="flex  items-center justify-center  bg-white d-flex flex-row shadow-sm card cart-footer mt-2 mb-3 animated flipInX">
        <div class=" p-2">
          <button class="bg-red-500 px-6 py-3 rounded-md border border-transparent text-white btn badge-danger" type="button" data-action="clear-cart">Clear Cart
        </div>
        <div class="p-2 ml-auto">
        <button id="checkout" type="submit" name="addorder" value="addorder"  class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 btn badge-dark" type="button" data-action="check-out">Pay <span class="pay">   </span> $</button>
 

        </div>
      </div>
      </div>
      </form>

        </div>
      </div>
    </div>

</div>







    </nav>


    <!-- <nav class="bg-blue-500">
  <div class="relative h-16">
    <div class="absolute inset-y-0 left-0 w-full bg-white transform -skew-y-6"></div>
    <div class="absolute inset-y-0 left-0 w-full bg-blue-600 transform -skew-y-3"></div>
    <div class="relative container flex items-center h-full">
      <a href="#" class="text-white font-bold text-xl">My Website</a>
    </div>
  </div>
</nav> -->



<script>
// const navbar = document.getElementById('navbar');

// window.addEventListener('scroll', () => {
//   if (window.scrollY > 10) {
//     navbar.classList.add('bg-pink-600');
//     navbar.classList.remove('bg-transparent');
//   } else {
//     navbar.classList.remove('bg-pink-700');
//     navbar.classList.add('bg-transparent');
//   }
// });

// const navbar = document.getElementById('navbar');

// window.addEventListener('scroll', () => {
//   if (window.scrollY > 10) {
//     navbar.classList.add('bg-pink-600');
//     navbar.classList.remove('bg-transparent');
//   } else {
//     navbar.classList.remove('bg-pink-600');
//     navbar.classList.add('bg-transparent');
//   }
// });

</script>

<script>// Get the card element

// const toggleBtn = document.getElementById('toggle-btn');
// const secondBlock = document.getElementById('second-block');

// toggleBtn.addEventListener('click', () => {
//   if (secondBlock.style.display === 'none') {
//     secondBlock.style.display = 'block';
//   } else {
//     secondBlock.style.display = 'none';
//   }
// });
</script>



</script>  


<script src="<?php echo BaseUrl; ?>assets/js/script.js"></script>