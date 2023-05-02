<?php 


class orders {

	static public function getAll(){
		$stmt = connection::connect()->prepare('SELECT * FROM orders JOIN users ON orders.UserId = users.UserId');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt = null;
	}

	static public function getOrder($data){
		$OrderId = $data['OrderId'];
		try{
			$query = 'SELECT * FROM orders WHERE OrderId=:OrderId';
			$stmt = connection::connect()->prepare($query);
			$stmt->execute(array(":OrderId" => $OrderId));
			$order = $stmt->fetch(PDO::FETCH_OBJ);
			return $order;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	} 



	// static public function getPersonalOrder($data){
	// 	$OrderId = $data['OrderId'];
	// 	try{
	// 		$query = 'SELECT * FROM orderedproducts WHERE OrderId=:OrderId';
	// 		$stmt = connection::connect()->prepare($query);
			
	// 		$stmt->execute(array(":OrderId" => $OrderId));
	// 		$orders = array();
	// 		while ($orderedproduct = $stmt->fetch(PDO::FETCH_OBJ)) {
	// 			$orderedproducts[] = $orderedproduct;
	// 		}
	// 		return $orderedproducts;
	// 		$stmt = null;
	// 	}catch(PDOException $ex){
	// 		echo 'erreur' . $ex->getMessage();
	// 	}
	// }
	

	static public function getPersonalOrder($data){
		$UserId = $data['UserId'];
		try{
			$query = 'SELECT * FROM orders WHERE UserId=:UserId';
			$stmt = connection::connect()->prepare($query);
			
			$stmt->execute(array(":UserId" => $UserId));
			$orders = array();
			while ($order = $stmt->fetch(PDO::FETCH_OBJ)) {
				$orders[] = $order;
			}
			return $orders;
			$stmt = null;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
	



    static public function getOrderedproductsByOrderId($OrderId) {
        $db = connection::connect();
        $stmt = $db->prepare("SELECT * FROM orderedproducts WHERE OrderId = :OrderId");
        $stmt->bindParam(':OrderId', $OrderId);
        $stmt->execute();
        $orderedproducts = $stmt->fetchAll();
        $stmt = null;
        return $orderedproducts;
    }




		static public function addorder($orderData){
			$stmt = connection::connect()->prepare('INSERT INTO orders (UserId,cartTotal)
			VALUES (:UserId,:cartTotal)');
	
		$stmt->bindParam(':UserId',$orderData['UserId'], PDO::PARAM_INT);
		$stmt->bindParam(':cartTotal',$orderData['cartTotal'], PDO::PARAM_INT);

		if($stmt->execute()){
			return 'ok';

		}else{
			return 'error';
		}
		$stmt = null;
	}

	static public function LastIdOrder(){
		$stmt = connection::connect()->query("SELECT 
		OrderId FROM orders ORDER BY OrderId DESC");	

		$orderId = $stmt->fetchColumn();
		// $ReservationId = connection::connect()->lastinsertId();
		
	return $orderId;
	
	}


	static public function addorderedproduct($productData){
		$stmt = connection::connect()->prepare('INSERT INTO orderedproducts (OrderId,ProductName,ProductQuantity,ProductPrice,ProductId) 
										VALUES (:OrderId,:ProductName,:ProductQuantity,:ProductPrice,:ProductId)');
            $stmt->bindParam(':OrderId', $productData['OrderId'], PDO::PARAM_INT);
            $stmt->bindParam(':ProductName', $productData['ProductName'], PDO::PARAM_STR);
            $stmt->bindParam(':ProductQuantity', $productData['ProductQuantity'], PDO::PARAM_INT);
            $stmt->bindParam(':ProductPrice', $productData['ProductPrice'], PDO::PARAM_INT);
			$stmt->bindParam(':ProductId', $productData['ProductId'], PDO::PARAM_INT);
			// $stmt->execute();

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt = null;
	}



	// static public function checkreservation($reservationData){
	// 	$stmt = connection::connect()->prepare('SELECT * FROM reservations WHERE RoomType = :RoomType AND `Leave` > :Arrive ORDER BY `Leave` ASC');
	// 	$stmt->bindParam(':RoomType', $reservationData['RoomType'], PDO::PARAM_STR);
	// 	$stmt->bindParam(':Arrive', $reservationData['Arrive'], PDO::PARAM_STR);
	// 	$stmt->execute();
	// 	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	// 	if($result){
	// 		return 'no';
	// 	}else{
	// 		return 'ok';
	// 	}
	// }
	

	





	static public function delete($data){
		$OrderId = $data['OrderId'];

			$query = 'DELETE FROM orders WHERE OrderId = :OrderId;
					  DELETE FROM orderedproducts WHERE OrderId = :OrderId;';
			$stmt = connection::connect()->prepare($query);
			$stmt->execute(array(":OrderId" => $OrderId));
			$stmt->closeCursor(); 
			
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
	}
	




}