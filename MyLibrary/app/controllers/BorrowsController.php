<?php 


class BorrowsController{

	public static function getAllBorrows(){
		$borrows = borrows::getAll();
		return $borrows;
	}

	public static function getOneBorrowedBook(){
		if(isset($_POST['BorrowId'])){
			$data = array(
				'BorrowId' => $_POST['BorrowId']
			);
			$borrow = borrows::getBorrow($data);
			return $borrow;
		}
	}


	public static function getPersonalBorrows(){
		if(isset($_SESSION['UserId'])){
			$data = array(
				'UserId' => $_SESSION['UserId']
			);
			$borrows = borrows::getPersonalBorrow($data);
			return $borrows;
		}
	}
	


	// public static function getAllBorrowedBooks($BorrowId)
	// {
	// 	$borrowedbooks = borrows:: getBorrowedBooksByBorrowId($BorrowId);

	// 	return $borrowedbooks;
	// }
	
	



	public static function BorrowBook(){
		if(isset($_POST['borrow'])){

			$borrowData = array(
                'BookId' => $_POST['BookId'],
				'UserId' => $_SESSION['UserId'],
				'UserName' => $_POST['UserName'], 
                'BookName' => $_POST['BookName'],              
				'BookDesc' => $_POST['BookDesc'],
                'TakeDate' => $_POST['TakeDate'],
                'ReturnDate' => $_POST['ReturnDate'],
			);
		
		
			$borrow = borrows::borrowBook($borrowData);
			if($borrow === 'ok'){
			
				header('location:' . BaseUrl . 'home/profil');
			}else{
				return $borrow;
			}
				
			
			}

		}
	
	





	
	public function deleteBorrow(){
		if(isset($_POST['BorrowId'])){
			$data['BorrowId'] = $_POST['BorrowId'];
			$result = borrows::delete($data);
			if($result === 'ok'){
				header('location:' . BaseUrl . 'home/profil');
			}else{
				echo $result;
			}
		}
	}


}



?>