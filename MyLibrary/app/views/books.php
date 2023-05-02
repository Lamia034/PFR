<?php $books = BooksController::getAllBooks(); ?>
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
            transform: scale(2.02);
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

                            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                                </svg>
                            </a>

                            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </nav>



                <?php foreach ($books as $book): ?>
                    <div class="product items-center md:w-1/3 xl:w-1/4 p-6  flex flex-col">
                        <a href="#" class="box w-40">
                            <img class="product-img w-full w-40 h-40 hover:grow hover:shadow-lg"
                                src="<?php echo BaseUrl; ?>assets/books/<?php echo $book['BookImage']; ?>">

                            <div class="card-body inline-block align-base flex flex-col items-center w-40">
                   
                                <a class="card-title product-name">
                               
                                    <?php echo $book['BookName']; ?>
                                </a><br>
                                <span class="card-text ">
                                    <?php echo $book['BookDesc']; ?>
                                </span><br>
                                    <div class="flex flex-col   ">
                                        <div class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <a href="<?php echo BaseUrl;?>assets/books/<?php echo $book['BookPdf'];?>" target="_blank" class="text-center"  >Read online / download</a>
                                        </div>




                                    <form method="POST" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2" action="<?php echo BaseUrl ?>home/implement">
                        <input type="hidden" name="BookId" value="<?php echo $book['BookId'];?>">
                    <button type="submit" name="submit">Borrow it now!</button>
                    </form>


                                </div>

                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>




            </div>



        </section>



  <script>
    // const navbar = document.getElementById('navbar');

    // window.addEventListener('scroll', () => {
    //     if (window.scrollY >= 0) {
    //         navbar.classList.add('bg-pink-600');
    //         navbar.classList.remove('bg-transparent');
    //     } else {
    //         navbar.classList.remove('bg-pink-600');
    //         navbar.classList.add('bg-transparent');
    //     }
    // });
</script>


<?php require_once VIEWS . 'footer.php' ?>


           </body>
           </html>