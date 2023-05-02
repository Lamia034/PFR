<?php
$orders = OrdersController::getAllOrders();
$products = ProductsController::getAllProducts();
$books = BooksController::getAllBooks();
$borrows = BorrowsController::getAllBorrows();

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

<body class="bg-gradient-to-r  from-indigo-500 via-purple-500 to-pink-500 ">

<?php require_once VIEWS . 'header.php' ?>

<div class=" mt-40  ">

<!--table products crud-->



<div class="flex flex-col items-center justify-center">
<h2 class="text-white text-center text-2xl bg-violet-600 rounded-md w-fit">Products:</h2>
<br>
<table  class="table " >
  <thead>
    <th >Image</th>
    <th >Product Name</th>
    <th>Product Description</th>
    <th>Product Price</th>
    <th>edite/delete</th>
  </thead>
  <tbody>
    <?php foreach($products as $product):?>
    <tr>
      <td class="text-center"><img src="<?php echo BaseUrl;?>assets/img/<?php echo $product['ProductImage'];?>" style="width: 100px;"></td>
      <td class="text-center"><?php echo $product['ProductName'];?></td>
      <td class="text-center"><?php echo $product['ProductDesc'];?></td>
      <td class="text-center"><?php echo $product['ProductPrice'];?>$</td>


      <td class=" space-x-4 justfy-center items-center text-center">
                    <form method="POST" class="me-1 inline-block align-middle" action="<?php echo BaseUrl;?>home/updateproduct">
                        <input type="hidden" name="ProductId" value="<?php echo $product['ProductId'];?>">
                        <button type="submit" name="submit" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                        <!-- <input type="submit" name="submit" class="btn btn-sm btn-warning"> -->
                        
                    </form>
                    <form method="POST" class="me-1 inline-block align-middle" action="<?php echo BaseUrl;?>products/deleteProduct">
                        <input type="hidden" name="ProductId" value="<?php echo $product['ProductId'];?>">
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                    
                </td>
         </tr> 
            <?php endforeach; ?> 
            </tbody>

</table>  
<br>
               <form method="POST" class="me-1 justfy-center items-center text-center" action="<?php echo BaseUrl; ?>home/addproduct">
                        <input type="hidden" name="ProductId" value="<?php echo $product['ProductId'];?>">
                        <button class="btn btn-sm btn-danger bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">ADD NEW PRODUCT</button>
                    </form>
   </div>  <br><br>

<!--table books crud -->

<div class="flex flex-col items-center justify-center">
<h2 class="text-white mt-2 text-2xl bg-violet-600 rounded-md w-fit">Books:</h2><br>
<table  class="table" >
  <thead>
    <th >Image</th>
    <th >Book Name</th>
    <th>Book Description</th>
    <th>delete</th>
    <th>the book</th>
  </thead>
  <tbody>
    <?php foreach($books as $book):?>
    <tr>
      <td class="text-center"><img src="<?php echo BaseUrl;?>assets/books/<?php echo $book['BookImage'];?>" style="width: 100px;"></td>
      <td class="text-center"><?php echo $book['BookName'];?></td>
      <td class="text-center"><?php echo $book['BookDesc'];?></td>




      <td class=" space-x-4 justfy-center items-center text-center">
   
                    <form method="POST" class="me-1 inline-block align-middle" action="<?php echo BaseUrl;?>books/deleteBook">
                        <input type="hidden" name="BookId" value="<?php echo $book['BookId'];?>">
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                    
                </td>

                <td class="text-center"><a href="<?php echo BaseUrl;?>assets/books/<?php echo $book['BookPdf'];?>" target="_blank">click here</a></td>

              </tr>
    <?php endforeach; ?>
  </tbody>
</table><br>
                <form method="POST" class="me-1 justfy-center items-center text-center" action="<?php echo BaseUrl ?>home/addbook">
                        <input type="hidden" name="BookId" value="<?php echo $book['BookId'];?>">
                        <button class="btn btn-sm btn-danger bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ">ADD NEW BOOK</button>
                    </form>


    </div> <br><br>
    
<!--table orders validation-->
<div class="flex flex-col items-center justify-center">
  <h2 class="text-white text-2xl bg-violet-600 rounded-md w-fit ">Orders you got:</h2><br>
<table  class="table mb-10" >
  <thead>
    <th >Client Name</th>
    <th >Client Adress</th>
    <th>Client Email</th>
    <th>Ordered products</th>
    <th>Total Price</th>
    <!-- <th>Order Status</th> -->
  </thead>
  <tbody>
    <?php foreach($orders as $order):?>
      <?php
        $dataaa = new OrdersController();
        $orderId = $order['OrderId'];
        $orderedproducts = $dataaa->getAllOrderedProducts($orderId);
      ?>
    <tr>
      <td><?php echo $order['UserName'];?></td>
      <td><?php echo $order['Adress'];?></td>
      <td><?php echo $order['Email'];?></td>

      <?php foreach ($orderedproducts as $orderedproduct): ?>
  
      <td class="flex flex-col"><?php echo $orderedproduct['ProductName'];?> <?php echo $orderedproduct['ProductQuantity'];?></td>
  
      <?php endforeach; ?>
     <td><?php echo $order['cartTotal'];?>$</td> 
      <!-- <td>calculate number of products</td> -->
      <!-- <td>validate</td> -->
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
      </div>


    <!--table borrowing books-->
    <div class="flex flex-col items-center justify-center">
  <h2 class="text-white text-2xl bg-violet-600 rounded-md w-fit ">Books Borrows you got:</h2><br>
<table  class="table mb-10" >
  <thead>
    <th >Client Name</th>
    <th >Client Adress</th>
    <th>Client Email</th>
    <th>Book Name</th>
    <th>Book Desc</th>
    <th>Borrow date</th>
    <th>BringBack Date</th>
  </thead>
  <tbody>
    <?php foreach($borrows as $borrow):?>
      <?php
        // $dataaa = new BorrowsController();
        // $BorrowId = $borrow['BorrowId'];
        // $borrowedbooks = $dataaa->getAllBorrowedBooks($BorrowId);
      ?>
    <tr>
      <td><?php echo $borrow['UserName'];?></td>
      <td><?php echo $borrow['Adress'];?></td>
      <td><?php echo $borrow['Email'];?></td>
      <td><?php echo $borrow['BookName'];?></td>
      <td><?php echo $borrow['BookDesc'];?></td>
      <td><?php echo $borrow['TakeDate'];?></td>
      <td><?php echo $borrow['ReturnDate'];?></td>

      <td>validate</td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>

    </div>















            <script src="<?php echo BaseUrl; ?>assets/js/script.js"></script>

            </body>
            </html>