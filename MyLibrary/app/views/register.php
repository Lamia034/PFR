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
    <title>MyLibrary</title>
</head>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">

<!--register form-->
<form class="bg-grey-lighter min-h-screen flex flex-col" action="<?php echo BaseUrl ?>users/register" method="post">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center">Sign up</h1>
            <input 
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="UserName"
                placeholder="Full Name" />

            <input 
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="Email"
                placeholder="Email" />

                <input 
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="Adress"
                placeholder="Your Adress .." />  

            <input 
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="Password"
                placeholder="Password" />
            <!-- <input 
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="onfirm_password"
                placeholder="Confirm Password" /> -->

                <button class="mt-5 w-full border p-2 bg-gradient-to-r from-pink-800 bg-pink-500 text-white rounded-[4px] hover:bg-slate-400 scale-105 duration-300" value="submit" name="submit" type="submit">Create Account</button>
            

            <div class="text-center text-sm text-grey-dark mt-4">
              <div class="text-grey-dark mt-6">
                Already have an account? 
                <a class="no-underline border-b border-blue text-blue" href="<?php echo BaseUrl; ?>home/login">
                    Log in
                </a>.
            </div>
            </div>
        </div>

    
    </div>
</form>


<!--links-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo BaseUrl; ?>assets/js/script.js"></script>

  </body>
  </html>