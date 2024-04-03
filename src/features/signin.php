<?php


include ("../../db/Select.php");

$connectionToDb = ConnectDb();
if ($connectionToDb) {
    if (isset($_POST["login"])) {
    $result = checkPassword($connectionToDb, GetRegistrationOrder($connectionToDb));

    if($result["success"]){
            
            $username = $_POST["uName"];
            $id=GetUserId($connectionToDb,$username);
            print($id);
           
           
            session_start();

            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $id;
            $_SESSION['game'] = 1 ; 
            $_SESSION['lives'] = 6;
        
            echo "Authentication success";

       

        echo "<script>alert('Login successful. You are being redirected to the Home page'); window.location.href = '../../index.php';</script>";
    }else if($result["invalidPassword"]){
     
        echo "Password incorrect. Try again";
    }elseif($result["userNotFound"]){

       

            echo "User not found"; // Mensaje adicional si el usuario no existe
        
        
    
    }
    }

    DisconnectDB($connectionToDb);
}



include("timeOut.php");

timeOut();










?>
