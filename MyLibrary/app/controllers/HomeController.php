<?php


class HomeController {
    public function index() {
        // echo "Welcome to my website!";
        View::load('home');
    }
    public function reservation() {
        // echo "Welcome to my website!";
        View::load('reservation');
    }
    public function profil() {
        if(isset($_SESSION['UserName'])&& $_SESSION['UserName']==='admin'){
            View::load('dashboard');
        }elseif(isset($_SESSION['UserId'])){
            View::load('profil');
        }else{
            View::load('login');
        }
       
    }

    public function shop() {
        if(isset($_SESSION['UserId'])){
            View::load('shop');
        }else{
            View::load('login');
        }
       
    }

    // public function dashboard() {
    //     if(isset($_SESSION['ClientName'])&& $_SESSION['ClientName']==='admin'){
    //         View::load('dashboard');
    //     }else{
    //         View::load('login');
    //     }
       
    // }
    public function about() {
  
        View::load('about');
    }
    public function login() {

        View::load('login');
    }
    public function register() {
 
        View::load('register');
    }
    public function logout() {

        View::load('logout');
    }

    public function addproduct() {

        View::load('addproduct');
    }

    public function addbook() {

        View::load('addbook');
    }

    public function updateproduct() {

        View::load('updateproduct');
    }

    public function updatebook() {

        View::load('updatebook');
    }

    public function books() {
        if(isset($_SESSION['UserId'])){
            View::load('books');
        }else{
            View::load('login');
        }
       
    }
    public function implement() {

        View::load('implement');
    }


    // public function searched() {

    //     // $products = ProductsController::searchProduct();
    //     // View::load('searched', ['products' => $products]);
    //     View::load('searched');
    // }

    // public function searched() {
    //     $products = ProductsController::searchProduct();
    //     View::load('searched', ['products' => $products]);
    // }
    

    // public function index2() {
    //     // Display the home page content here
    //     echo "Welcome to my website!";
    
    // }
}