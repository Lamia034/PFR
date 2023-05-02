<?php 

class ProductsController{


	public static function getAllProducts(){
		$products = product::getAll();
		return $products;
	}

	public static function getOneProduct(){
		if(isset($_POST['ProductId'])){
			$data = array(
				'ProductId' => $_POST['ProductId']
			);
			$product = product::getProduct($data);
			return $product;
		}
	}
	

	public static function addProduct(){
		if(isset($_POST['add'])){

			$data = array(
				'ProductName' => $_POST['ProductName'],
				'ProductImage' => $_FILES['ProductImage']['name'],
				'ProductPrice' => $_POST['ProductPrice'],
				'UserId' => $_SESSION['UserId'],
                'ProductDesc' => $_POST['ProductDesc'],

			);
			$result = product::add($data);
			if($result === 'ok'){
				header('location:' . BaseUrl . 'home/profil');
			}else{
				echo $result;
			}
		}
	}


	

	public static function updateProduct(){
	
			if(isset($_POST['update'])){
       $data = array(
				'ProductId' => $_POST['ProductId'],
				'ProductName' => $_POST['ProductName'],
				'ProductPrice' => $_POST['ProductPrice'],
				'ProductDesc' => $_POST['ProductDesc'],
				'ProductImage' => $_FILES['ProductImage']['name'],
	  			 );	
				 $result = Product::update($data);
				if($result === 'ok'){

				header('location:' . BaseUrl . 'home/profil');
				 }else{
				echo $result;
			}
		}
	}

	
	public static function deleteProduct(){
		if(isset($_POST['ProductId'])){
			$data['ProductId'] = $_POST['ProductId'];
			$result = product::delete($data);
			if($result === 'ok'){

				header('location:' . BaseUrl . 'home/profil');
			}else{
				echo $result;
			}
		}
	}


	public static function searchProduct() {
		if (isset($_POST['search'])) {
			$searchTerm = $_POST['search'];
			// echo "Search term: " . $searchTerm . "<br>";
			$products = product::search($searchTerm);
			// echo "Search results: " . print_r($products, true) . "<br>";
			if(!empty($products)){
	
				View::load('searched', ['products' => $products]);
				
			}else {
				echo 'No products found'; // debug statement
			}
		
	}
	

}




}


?>