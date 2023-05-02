<?php 


class borrows {

	static public function getAll(){
		$stmt = connection::connect()->prepare('SELECT * FROM borrow JOIN users ON borrow.UserId = users.UserId');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt = null;
	}

	static public function getBorrow($data){
		$BorrowId = $data['BorrowId'];
		try{
			$query = 'SELECT * FROM borrow WHERE BorrowId=:BorrowId';
			$stmt = connection::connect()->prepare($query);
			$stmt->execute(array(":BorrowId" => $BorrowId));
			$borrow = $stmt->fetch(PDO::FETCH_OBJ);
			return $borrow;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	} 


	

	static public function getPersonalBorrow($data){
		$UserId = $data['UserId'];
		try{
			$query = 'SELECT * FROM borrow WHERE UserId=:UserId';
			$stmt = connection::connect()->prepare($query);
			
			$stmt->execute(array(":UserId" => $UserId));
			$borrows = array();
			while ($borrow = $stmt->fetch(PDO::FETCH_OBJ)) {
				$borrows[] = $borrow;
			}
			return $borrows;
			$stmt = null;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
	


	// static public function getBorrowedBooksByBorrowId($BorrowId) {
    //     $db = connection::connect();
    //     $stmt = $db->prepare("SELECT * FROM borrow WHERE BorrowId = :BorrowId");
    //     $stmt->bindParam(':BorrowId', $BorrowId);
    //     $stmt->execute();
    //     $borrowedbooks = $stmt->fetchAll();
    //     $stmt = null;
    //     return $borrowedbooks;
    // }


  




		static public function borrowBook($borrowData){
			$stmt = connection::connect()->prepare('INSERT INTO borrow (UserId,BookId,BookName,BookDesc,TakeDate,ReturnDate)
			VALUES (:UserId,:BookId,:BookName,:BookDesc,:TakeDate,:ReturnDate)');

        $stmt->bindParam(':UserId',$borrowData['UserId'], PDO::PARAM_INT);
        $stmt->bindParam(':BookId',$borrowData['BookId'], PDO::PARAM_INT);
		$stmt->bindParam(':BookName',$borrowData['BookName'], PDO::PARAM_STR);
		$stmt->bindParam(':BookDesc',$borrowData['BookDesc'], PDO::PARAM_STR);
        $stmt->bindParam(':TakeDate',$borrowData['TakeDate'], PDO::PARAM_STR);
        $stmt->bindParam(':ReturnDate',$borrowData['ReturnDate'], PDO::PARAM_STR);
		
		if($stmt->execute()){
			return 'ok';

		}else{
			return 'error';
		}
		$stmt = null;
	}





	





	static public function delete($data){
		$BorrowId = $data['BorrowId'];
		try{
			$query = 'DELETE FROM borrow WHERE BorrowId=:BorrowId';
			$stmt = connection::connect()->prepare($query);
			$stmt->execute(array(":BorrowId" => $BorrowId));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}




}