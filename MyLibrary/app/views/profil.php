<?php 

$orders = OrdersController::getPersonalOrders(); 
$borrows = BorrowsController::getPersonalBorrows(); 

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
        <!--jquery-->
        <link rel="stylesheet" type="text/css" href="http://schauhan.in/Examples/ecommerce_product_slider/style1.css" />
<link rel="stylesheet" type="text/css" href="http://schauhan.in/Examples/ecommerce_product_slider/lightslider.css" />
        <!--stripe-->
        <script src="https://js.stripe.com/v3"></script>
    <title>MyLibrary</title>
</head>
<body>





<?php require_once VIEWS . 'header.php' ?>
<div class=" mt-40  ">

<h2 class="text-xl text-center mt-1 ">Welcome again <?php echo $_SESSION['UserName']; ?>!</h2>

<!--content-->
<h3 class="text-center">Your Orders:</h3>
<div class="border-2  divide-solid ">

<div class="p-10  grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-5">

<?php if (!empty($orders)): ?>
  <?php $i=1; ?>
    <?php foreach ($orders as $order):?>
      <?php
        $dataaa = new OrdersController();
        $OrderId = $order->OrderId;
        $orderedproducts = $dataaa->getAllOrderedproducts($OrderId);
      ?> 

  
      
    <!--Card 1-->
    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

    <div class="p-5 ">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Order Number: <?php echo " $i "; ?></h5>



        <?php if (!empty($orderedproducts)): ?>
          <?php $j=1 ?>

          
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
            <tr>
            <th scope="col" class="px-6 py-3">
                    Product number
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>

            </tr>
        </thead>
        <tbody> 
           <?php foreach ($orderedproducts as $orderedproduct): ?>
            <tr class="bg-white dark:bg-gray-800">

                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo " $j "; ?>
            </td>
                <td class="px-6 py-4">
                <?php echo $orderedproduct['ProductName'];?>
                </td>
                <td class="px-6 py-4">
                <?php echo $orderedproduct['ProductQuantity'];?>
                </td>
                <td class="px-6 py-4">
                <?php echo $orderedproduct['ProductPrice'];?>
                </td>   

                       <?php $j++; ?>
        
            </tr>

         <?php endforeach; ?> 
                <th scope="col" class="px-6 py-3">
                    Totale
                </th>
                <td class="px-6 py-4 text-center" colspan="3">
                <?php echo $order->cartTotal;?>$
                </td> 
        </tbody>
    </table>
</div>

       

      
        <?php endif; ?>
        <div class="flex flex-col md:flex-row md:max-w-md justify-center mt-2 space-y-3 md:space-y-0 md:space-x-3">
  <a href="#" onclick="window.print()" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    Print Your Order
  </a>

<form method="POST" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" action="<?php echo BaseUrl; ?>orders/deleteOrder" >
                        <input type="hidden" name="OrderId" value="<?php echo $order->OrderId;?>">
                        <button class="btn btn-sm btn-danger">Delete Order</button>
                    </form>
</div>
    </div>
</div>
<?php $i++; ?>
<?php endforeach ;?>

<?php endif ;?>

  </div>
  </div>

















  
<h3 class="text-center">Books you took:</h3>
<div class="border-2  divide-solid ">

<div class="p-10  grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-5">

<?php if (!empty($borrows)): ?>
    <?php $i=1; ?>
    <?php foreach ($borrows as $borrow):?>


  
      
    <!--Card 1-->
    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

    <div class="p-5 ">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Book Number: <?php echo " $i "; ?></h5>




          
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
            <tr>
            <th scope="col" class="px-6 py-3">
                    Book Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Book Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Acquisition Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Bring Back Date
                </th>
            </tr>
        </thead>
        <tbody> 

            <tr class="bg-white dark:bg-gray-800">

                <td class="px-6 py-4">
                <?php echo $borrow->BookName;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $borrow->BookDesc;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $borrow->TakeDate;?>
                </td>   
                <td class="px-6 py-4">
                <?php echo $borrow->ReturnDate;?>
                </td>  

        
            </tr>


        </tbody>
    </table>
</div>

       

      
   
        <div class="flex flex-col md:flex-row md:max-w-md justify-center mt-2 space-y-3 md:space-y-0 md:space-x-3">


<form method="POST" class="inline-flex items-center w-40  px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" action="<?php echo BaseUrl; ?>borrows/deleteBorrow" >
                        <input type="hidden" name="BorrowId" value="<?php echo $borrow->BorrowId;?>">
                        <button class="btn btn-sm btn-danger">Cancel</button>
                    </form>
</div>
    </div>
</div>

<?php endforeach ;?>
<?php $i++; ?>
<?php endif ;?>

  </div>
  </div>

<!--links-->
<script src="<?php echo BaseUrl; ?>assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <?php require_once VIEWS . 'footer.php' ?>
</div>


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



           </body>
           </html>















