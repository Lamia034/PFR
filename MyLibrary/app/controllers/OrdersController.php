<?php


class OrdersController
{

	public static function getAllOrders()
	{
		$orders = orders::getAll();
		return $orders;
	}

	public static function getOneOrder()
	{
		if (isset($_POST['OrderId'])) {
			$data = array(
				'OrderId' => $_POST['OrderId']
			);
			$order = orders::getOrder($data);
			return $order;
		}
	}


	public static function getPersonalOrders()
	{
		if (isset($_SESSION['UserId'])) {
			$data = array(
				'UserId' => $_SESSION['UserId']
			);
			$orders = orders::getPersonalOrder($data);
			return $orders;
		}
	}


	public static function getAllOrderedproducts($OrderId)
	{
		$orderedproducts = orders::getOrderedproductsByOrderId($OrderId);

		return $orderedproducts;
	}







	public static function addOrder()
	{


		if (isset($_POST['addorder'])) {


			$orderData = array(
				'UserId' => $_SESSION['UserId'],
				'cartTotal' => $_POST['cartTotal'],
			);
			$result = orders::addorder($orderData);
			if ($result === 'ok') {

				$orderId = orders::LastIdOrder();

				// Get the array of products
				$productNames = $_POST['ProductName'];
				$productPrices = $_POST['ProductPrice'];
				$productQuantities = $_POST['ProductQuantity'];
				$productIds = $_POST['ProductId'];

				// Insert each product into the database
				for ($i = 0; $i < count($productNames); $i++) {
					$productName = $productNames[$i];
					$productPrice = $productPrices[$i];
					$productQuantity = $productQuantities[$i];
					$productId = $productIds[$i];
					if (!empty($productName) && !empty($productPrice) && !empty($productQuantity)) {
						$productData = array(
							'OrderId' => $orderId,
							'ProductName' => $productName,
							var_dump($productName),
							'ProductPrice' => $productPrice,
							var_dump($productPrice),
							'ProductId' => $productId,
							'ProductQuantity' => $productQuantity,
						);

						$rst = orders::addorderedproduct($productData);
						if ($rst === 'ok') {
							header('location:' . BaseUrl . 'home/profil');
						} else {
							echo $rst;
						}
					}


				}


			}


		}

	}














	public static function deleteOrder()
	{
		if (isset($_POST['OrderId'])) {
			$data['OrderId'] = $_POST['OrderId'];
			$result = orders::delete($data);
			if ($result === 'ok') {
				header('location:' . BaseUrl . 'home/profil');
			} else {
				echo $result;
			}
		}
	}


}



?>