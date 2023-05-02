<?php 


class books {

	static public function getAll(){
		$stmt = connection::connect()->prepare('SELECT * FROM books');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt = null;
	}

	static public function getBook($data){
		$BookId = $data['BookId'];
		try{
			$query = 'SELECT * FROM books WHERE BookId=:BookId';
			$stmt = connection::connect()->prepare($query);
			$stmt->execute(array(":BookId" => $BookId));
			$book = $stmt->fetch(PDO::FETCH_OBJ);
			return $book;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	} 


	

	

	static public function addbook($bookData){
		$stmt = connection::connect()->prepare('INSERT INTO books (BookName, BookDesc, BookImage, UserId, BookPdf)
			VALUES (:BookName, :BookDesc, :BookImage, :UserId, :BookPdf)');
		
		$stmt->bindParam(':BookName', $bookData['BookName'], PDO::PARAM_STR);
		$stmt->bindParam(':BookDesc', $bookData['BookDesc'], PDO::PARAM_STR);
		$stmt->bindParam(':BookImage', $bookData['BookImage'], PDO::PARAM_STR);
		$stmt->bindParam(':UserId', $bookData['UserId'], PDO::PARAM_INT);
		$stmt->bindParam(':BookPdf', $bookData['BookPdf'], PDO::PARAM_STR);
		
		if($stmt->execute()){
			return 'ok';
		} else {
			return 'error';
		}
		
		$stmt = null;
	}



	// 	static public function addbook($bookData){
	// 		$stmt = connection::connect()->prepare('INSERT INTO books (BookName,BookDesc,BookImage,UserId,BookPdf)
	// 		VALUES (:BookName,:BookDesc,:BookImage,:UserId,:BookPdf)');
	

	// 	$stmt->bindParam(':BookName',$bookData['BookName'], PDO::PARAM_STR);
	// 	$stmt->bindParam(':BookDesc',$bookData['BookDesc'], PDO::PARAM_STR);
	// 	$stmt->bindParam(':BookImage',$bookData['BookImage'], PDO::PARAM_STR);
    //     $stmt->bindParam(':UserId',$bookData['UserId'], PDO::PARAM_INT);
	// 	$stmt->bindParam(':BookPdf',$bookData['BookPdf'], PDO::PARAM_LOB);
		
	// 	if($stmt->execute()){
	// 		return 'ok';

	// 	}else{
	// 		return 'error';
	// 	}
	// 	$stmt = null;
	// }




	





	static public function delete($data){
		$BookId = $data['BookId'];
		try{
			$query = 'DELETE FROM books WHERE BookId=:BookId';
			$stmt = connection::connect()->prepare($query);
			$stmt->execute(array(":BookId" => $BookId));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}


	// static public function search($searchTerm) {
	// 	try {
	// 		$stmt = connection::connect()->prepare("SELECT * FROM books WHERE BookName LIKE :searchTerm");
	// 		$stmt->bindValue(':searchTerm', "%$searchTerm%", PDO::PARAM_STR);
	// 		$stmt->execute();
	// 		$books = $stmt->fetchAll(PDO::FETCH_OBJ);
	// 		$stmt = null;
	// 		return $books;
	// 	} catch (PDOException $e) {
	// 		echo "Error: " . $e->getMessage();
	// 		return false;
	// 	}
	// }

}