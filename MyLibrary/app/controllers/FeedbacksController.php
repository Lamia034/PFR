<?php 
 class FeedbacksController{


    public function send(){
        if(isset($_POST['submit'])){
            $data = array(
                'Email' => $_POST['Email'],
                'Message' => $_POST['Message'],
            );
            $result = feedback::sendfeedback($data);
            if($result === 'ok'){
                echo '<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">Success alert!</span> message submitted successfully.
              </div>';
              
              header('location: ' . BaseUrl .'home/about');
            }else{
                    echo '<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
                  </div>';
            }
        }
    }



 }