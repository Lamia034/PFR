<?php $products = ProductsController::getAllProducts();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="<?php echo BaseUrl;?>assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- font awsome library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--jquery-->
        <link rel="stylesheet" type="text/css" href="http://schauhan.in/Examples/ecommerce_product_slider/style1.css" />
<link rel="stylesheet" type="text/css" href="http://schauhan.in/Examples/ecommerce_product_slider/lightslider.css" />
        <!--stripe-->
        <script src="https://js.stripe.com/v3"></script>
    <title>MyLibrary</title>
</head>
<body>
<?php require_once VIEWS . 'header.php' ?>







  <!-- reception -->
<!-- <div >
  <img class="m-0 p-0" src="<?php echo BaseUrl;?>assets/img/4.jpg">
</div> -->
<!--slider-->
<div class="slider-frame" >

</div>







<h1 class="mb-4 text-3xl text-center font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Keep Up</span> With Technology.</h1>
<p class="text-lg font-normal text-center text-gray-500 lg:text-xl dark:text-gray-400">The word become more and more small ,let's bring technology to our service, MyLibrary's Welcoming you.</p>




  
<main class="py-12 md:px-20 sm:px-14 px-6">
  <div class="sm:flex items-center shadow-md">
    <div class="md:px-10 sm:px-5">
      <h1 class="text-gray-800 font-bold text-2xl my-2">High level services</h1>
      <p class="text-gray-700 mb-2 md:mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
      <div class="flex justify-between mb-2">
        <span class="font-thin text-sm">May 20th 2020</span>
      </div>
    </div>
    <div>
      <img class="bg-cover" src="<?php echo BaseUrl;?>assets/img/4.jpg" alt="" />
    </div>
  </div>
  <div class="mt-6 md:flex space-x-6">
    <div class="shadow-md">
      <img src="<?php echo BaseUrl;?>assets/img/5.jpeg" alt="" />
      <div class="px-4">
        <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">Increase your kids' creativity and productivity!</h1>
        <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
        <div class="flex justify-between mt-4">
          <span class="font-thin text-sm">May 20th 2020</span>
 
        </div>
      </div>
    </div>
    <div class="shadow-md">
      <img src="<?php echo BaseUrl;?>assets/img/6.jpeg" alt="" />
      <div class="px-6">
        <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">Offering spacious categories of books and stories</h1>
        <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
        <div class="flex justify-between mt-4">
          <span class="font-thin text-sm">May 20th 2020</span>
        </div>
      </div>
    </div>
    <div class="shadow-md">
      <img src="<?php echo BaseUrl;?>assets/img/9.jpeg" alt="" />
      <div class="px-4">
        <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">Let your Kids happy by the start of the year</h1>
        <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
        <div class="flex justify-between mt-4">
          <span class="font-thin text-sm">May 20th 2020</span>
        </div>
      </div>
    </div>
  </div>
  <div class="sm:flex items-center shadow-md mt-10">
    <div>
      <img class="bg-cover" src="<?php echo BaseUrl;?>assets/img/7.jpeg" alt="" />
    </div>
    <div class="md:px-10 sh sm:px-5">
      <h1 class="text-gray-800 font-bold text-2xl my-2">long established</h1>
      <p class="text-gray-700 mb-2 md:mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
      <div class="flex justify-between mb-2">
        <span class="font-thin text-sm">May 20th 2020</span>
      </div>
    </div>

</div>
</main>



  <!-- <script src="http://schauhan.in/Examples/ecommerce_product_slider/jquery-3.5.1.js" ></script>
<script src="http://schauhan.in/Examples/ecommerce_product_slider/lightslider.js" ></script> -->
<script>
	//   $(document).ready(function() {
  //   $('#autoWidth').lightSlider({
  //       autoWidth:true,
  //       loop:true,
  //       onSliderLoad: function() {
  //           $('#autoWidth').removeClass('cS-hidden');
  //       } 
  //   });  
  // });
	</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo BaseUrl; ?>assets/js/script.js"></script>









<?php require_once VIEWS . 'footer.php' ?>

<!--links-->



</body>
</html>