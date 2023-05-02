<?php
$prod = ProductsController::getOneProduct();


?>




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
    <title>MyLibrary</title>
</head>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
<?php require_once VIEWS . 'header.php' ?>

<div class=" mt-20 mx-auto w-full max-w-[550px]">

  
   
  <form method="POST" action="<?php echo BaseUrl; ?>products/updateProduct" enctype="multipart/form-data" >
  <h2 style="color:white">Update</h2>
   <div class="form-group">
  
   <label for="ProductName">Product Name</label><br>
   <input placeholder="ProductName" value="<?php echo $prod->ProductName; ?>" type="text" name="ProductName" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >  <br>
   <input type="hidden" name="ProductId" value="<?php echo $prod->ProductId;?>"> <br>
   
   <label for="ProductPrice"> Product Price</label><br>
   <input value="<?php echo $prod->ProductPrice; ?>" type="number" name="ProductPrice" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="price"><br>

   <label for="ProductDesc">Product Desc</label><br>
   <input value="<?php echo $prod->ProductDesc; ?>" type="text" name="ProductDesc" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="room Type"><br>

   <label for="ProductImage"  > IMAGE</label><br>
   <input type="file" name="ProductImage"  value="<?php echo BaseUrl;?>assets/img/<?php echo $prod->ProductImage; ?>"><br>

   
   <button  type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none mt-2" name="update" value="update">update</button>
   </div>

  </form>
   
</div>


<!--links-->
<?php require_once VIEWS . 'footer.php' ?>

<!--links-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo BaseUrl; ?>assets/js/script.js"></script>
<script>
//   const btn = document.querySelector('button.mobile-menu-button');
// const menu = document.querySelector('.mobile-menu');
// btn.addEventListener("click", ()=> {
// menu.classList.toggle("hidden");
// });
</script>
</body>
</html>