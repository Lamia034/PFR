

<nav  id="navbar" class="flex items-center justify-between flex-wrap fixed w-full top-0 bg-transparent py-4 lg:px-12 shadow  bg-gray-700  ">
        <div class="flex justify-between lg:w-auto w-full lg:border-b-0 pl-6 pr-2  pb-5 lg:pb-0">
            <div class="flex items-center flex-shrink-0  mr-16">
                <span class="font-semibold h-10 w-10  text-white text-xl tracking-tight"> <a href="home.php"><img src="<?php echo BaseUrl;?>assets/img/logo.png"></a></span>
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
        </div>
    
        <div class="menu w-full lg:block flex-grow lg:flex lg:items-center lg:w-auto lg:px-3 px-8 mobile-menu hidden" >
        <div class="text-md font-bold text-indigo-100 lg:flex-grow">
        <a href="<?php echo BaseUrl; ?>home/aboutus"
                   class="block mt-4 lg:inline-block  lg:mt-0 text-white hover:text-white px-4 py-2 rounded hover:bg-purple-600 mr-2">
                   About&Contact
                </a>
        <?php if(isset($_SESSION['logged']) && $_SESSION['logged'] === true): ?>
                <a href="profil.php"
                   class="block mt-4 lg:inline-block text-white  lg:mt-0 hover:text-white px-4 py-2 rounded hover:bg-purple-600 mr-2">
                   Shop
                </a>
                <?php  else:?>
                    <a href="login.php"
                   class="block mt-4 lg:inline-block text-white lg:mt-0 hover:text-white px-4 py-2 rounded hover:bg-purple-600 mr-2">
                   Shop
                </a>
                <?php endif; ?>
            </div>
            <!-- This is an example component -->
          
            <div class="relative mx-auto text-gray-600 lg:block hidden">
                <input
                    class="border-2 border-gray-300 bg-white h-10 pl-2 pr-8 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-3 mr-2">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                         version="1.1" id="Capa_1" x="0px" y="0px"
                         viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                         xml:space="preserve"
                         width="512px" height="512px">
                <path
                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
              </svg>
                </button>
            </div>
            <div class="flex ">
   <!-- check if user is logged in -->
   <?php if(isset($_SESSION['logged']) && $_SESSION['logged'] === true): ?>
    <div class="block text-md px-4 py-2 rounded text-white ml-2 font-bold hover:text-white mt-4 hover:bg-blue-700 lg:mt-0">Welcome, <?php echo $_SESSION['UserName']; ?>!</div>
    <a href="logout.php" class="block text-md px-4 py-2 rounded text-white ml-2 font-bold hover:text-white mt-4 hover:bg-blue-700 lg:mt-0">Logout</a>
<?php else: ?>
    <a href="register.php" class="block text-md px-4 py-2 rounded text-white ml-2 font-bold hover:text-white mt-4 hover:bg-green-500 lg:mt-0">Sign up</a>
    <a href="login.php" class=" block text-md px-4  ml-2 py-2 rounded text-white font-bold hover:text-white mt-4 hover:bg-green-500 lg:mt-0">login</a>
<?php endif; ?>
            </div>
        </div>
    
    </nav>


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
    <script src="<?php BaseUrl ?>assets/js/script.js"></script>