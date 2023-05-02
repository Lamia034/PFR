<?php
$prod = BooksController::getOneBook();


?>
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


    <body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
    <?php require_once VIEWS . 'header.php' ?>





    <div class="mx-auto w-full max-w-[550px] mt-20">

  
   
  <form method="POST" action="<?php echo BaseUrl; ?>borrows/BorrowBook" enctype="multipart/form-data" >
  <h2 style="color:white">Fill this form please</h2>
   <div class="form-group">
  
   <label for="BookName">Book Name</label><br>
   <input placeholder="BookName" value="<?php echo $prod->BookName; ?>" type="text" name="BookName" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >  <br>
   <input type="hidden" name="BookId" value="<?php echo $prod->BookId;?>"> <br>


   <label for="BookDesc">Book Desc</label><br>
   <input value="<?php echo $prod->BookDesc; ?>" type="text" name="BookDesc" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" ><br>


   <div class="mb-5">
            <label
            for="TakeDate"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
            Acquisition Date:
            </label>
            <input type="date" name="TakeDate" id=""  min="<?= date('Y-m-d') ?>" 
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
          </div>


          <div class="mb-5">
          <label
            for="ReturnDate"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
            Return Date:
            </label>
            <input type="date" name="ReturnDate" id=""  min="<?= date('Y-m-d') ?>"    max="<?= date('Y-m-d', strtotime('+7 days')) ?>"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
          </div>
   
   <button  type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none mt-2" name="borrow" value="borrow">Send</button>
   </div>

  </form>
   
    


</div>


<script src="<?php echo BaseUrl; ?>assets/js/script.js"></script>
    
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