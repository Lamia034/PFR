<?php 


class BooksController{

	public static function getAllBooks(){
		$books = books::getAll();
		return $books;
	}

	public static function getOneBook(){
		if(isset($_POST['BookId'])){
			$data = array(
				'BookId' => $_POST['BookId']
			);
			$book = books::getBook($data);
			return $book;
		}
	}




	public static function addBook(){
		if(isset($_POST['add'])) {
			$bookName = $_POST['BookName'];
			$bookDesc = $_POST['BookDesc'];
			
			
			$bookImageName = $_FILES['BookImage']['name'];
			// $bookImagePath = $_SERVER['DOCUMENT_ROOT'] . '/MyLibrary/public/assets/books/' . $bookImageName;
			$bookImagePath =  '/MyLibrary/public/assets/books/' . $bookImageName;
			move_uploaded_file($_FILES['BookPdf']['tmp_name'], $bookImagePath);
		
			//book PDF upload
			$bookPdfName = $_FILES['BookPdf']['name'];
			// $bookPdfPath = BaseUrl . 'assets/books/';
			$bookPdfPath = '/MyLibrary/public/assets/books/' . $bookPdfName;

			// move_uploaded_file($_FILES['BookPdf']['tmp_name'], $bookPdfPath . $bookPdfName);
			move_uploaded_file($_FILES['BookPdf']['tmp_name'], $bookPdfPath);

		
		
			$bookData = array(
				'BookName' => $_POST['BookName'],
				'BookDesc' => $_POST['BookDesc'],              
				'UserId' => $_SESSION['UserId'],
				'BookImage' => $bookImageName,
				'BookPdf' => $bookPdfName
			);
			$book = books::addbook($bookData);
			if($book === 'ok'){
			
				header('location:' . BaseUrl . 'home/profil');
			}else{
				return $book;
			}
		}
	}


	


	
	public function deleteBook(){
		if(isset($_POST['BookId'])){
			$data['BookId'] = $_POST['BookId'];
			$result = books::delete($data);
			if($result === 'ok'){
				header('location:' . BaseUrl . 'home/profil');
			}else{
				echo $result;
			}
		}
	}




}



// public static function getPersonalOrders(){
	// 	if(isset($_SESSION['UserId'])){
	// 		$data = array(
	// 			'UserId' => $_SESSION['UserId']
	// 		);
	// 		$orders = orders::getPersonalOrder($data);
	// 		return $orders;
	// 	}
	// }
	

	// public static function getAllOrderedproducts($reservationId){
	// 	$orderedproducts = orders::getOrderedproductsByOrderId($reservationId);

	// 	return $orderedproducts;
	// }
?>




