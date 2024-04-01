<?php


include ("../../db/Select.php");

$connectionToDb = ConnectDb();
if ($connectionToDb) {
    $result = checkPassword($connectionToDb, checkUserExist($connectionToDb));

    if($result["success"]){
            
            $username = $_POST["uName"];
            $id=GetUserId($connectionToDb,$username);
            print($id);
           
           
            session_start();

            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $id;
        echo "Authentication success";

        echo  $_SESSION['username']. $_SESSION['user_id'];

        //echo "<script>alert('Login successful. You are being redirected to the Home page'); window.location.href = '../../index.php';</script>";
    }else if($result["invalidPassword"]){
     
        echo "Password incorrect. Try again";
    }elseif($result["userNotFound"]){

       

            echo "User not found"; // Mensaje adicional si el usuario no existe
        
        
    
    }


    DisconnectDB($connectionToDb);
}



include("timeOut.php");

timeOut();










?>
