<?php

class User{

    
    public static function login($data){
        $Email = $data['Email'];
        try{
            $query = 'SELECT * FROM users WHERE Email = :Email';  
            $stmt = connection::connect()->prepare($query);
            // $stmt->execute(array(":Email" => $Email));
          
            if($stmt->execute(array(":Email" => $Email))){
                $user = $stmt->fetch(PDO::FETCH_OBJ);
                return $user;
            }
        }catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
      }
    
    static public function createUser($data){
        try{
        $stmt = connection::connect()->prepare('INSERT INTO users (UserName,Email,Adress,Password) VALUES (:UserName,:Email,:Adress,:Password)');
        $stmt->bindParam(':UserName',$data['UserName']);
        $stmt->bindParam(':Email',$data['Email']);
        $stmt->bindParam(':Adress',$data['Adress']);
        $stmt->bindParam(':Password',$data['Password']);
        if($stmt->execute()){
            return 'ok';
        }
        }catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }

        $stmt = null;
    }
}
?>