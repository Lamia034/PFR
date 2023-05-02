<?php 

class product {

	public static function getAll(){
		$stmt = connection::connect()->prepare('SELECT * FROM products');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt = null;
	}

	static public function getProduct($data){
		$ProductId = $data['ProductId'];
		try{
			$query = 'SELECT * FROM products WHERE ProductId=:ProductId';
			$stmt = connection::connect()->prepare($query);
			$stmt->execute(array(":ProductId" => $ProductId));
			$product = $stmt->fetch(PDO::FETCH_OBJ);
			return $product;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	} 

	static public function add($data){
		$stmt = connection::connect()->prepare('INSERT INTO products (ProductImage,ProductName,ProductDesc,UserId,ProductPrice)
			VALUES (:ProductImage,:ProductName,:ProductDesc,:UserId,:ProductPrice)');
		$str = strval($data['ProductImage']);	
		$stmt->bindParam(':ProductImage',$str, PDO::PARAM_STR);
		$stmt->bindParam(':ProductPrice',$data['ProductPrice'], PDO::PARAM_INT);
		$stmt->bindParam(':UserId',$data['UserId'], PDO::PARAM_INT);
		$stmt->bindParam(':ProductDesc',$data['ProductDesc'], PDO::PARAM_STR);
		$pc = strval($data['ProductName']);
		$stmt->bindParam(':ProductName' , $pc, PDO::PARAM_STR);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt = null;
	}
	static public function update($data){
		$stmt = connection::connect()->prepare('UPDATE products SET ProductImage=:ProductImage ,ProductName=:ProductName , ProductDesc=:ProductDesc , ProductPrice=:ProductPrice  WHERE ProductId=:ProductId');
		$str = strval($data['ProductImage']);
		$stmt->bindParam(':ProductImage',$str, PDO::PARAM_STR);
		$stmt->bindParam(':ProductName',$data['ProductName'], PDO::PARAM_STR);
		$stmt->bindParam(':ProductDesc',$data['ProductDesc'], PDO::PARAM_STR);
		$pr = intval($data['ProductPrice']);
		$stmt->bindParam(':ProductPrice' , $pr, PDO::PARAM_INT );
		$stmt->bindParam(':ProductId' , $data['ProductId'], PDO::PARAM_INT );

		// var_dump($data['price']);
		// die();
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt = null;
	}



	static public function delete($data){
		$ProductId = $data['ProductId'];
		try{
			$query = 'DELETE FROM products WHERE ProductId=:ProductId';
			$stmt = connection::connect()->prepare($query);
			$stmt->execute(array(":ProductId" => $ProductId));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function search($searchTerm) {
		try {
			$stmt = connection::connect()->prepare("SELECT * FROM products WHERE ProductName LIKE :searchTerm");
			$stmt->bindValue(':searchTerm', "%$searchTerm%", PDO::PARAM_STR);
			$stmt->execute();
			$products = $stmt->fetchAll(PDO::FETCH_OBJ);
			$stmt = null;
			return $products;
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
			return false;
		}
	}




}
