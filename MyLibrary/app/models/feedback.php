<?php 
 class feedback {

    public static function sendfeedback($data){
        $stmt = connection::connect()->prepare('INSERT INTO feedbacks (Email,Message) VALUES (:Email,:Message)');
        $stmt->bindParam(':Email',$data['Email']);
        $stmt->bindParam(':Message',$data['Message']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }

        $stmt = null;
    }



    

 }