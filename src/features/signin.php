<?php


include ("../../db/Select.php");

$connectionToDb = ConnectDb();
if ($connectionToDb) {
    $result = checkPassword($connectionToDb, checkUserExist($connectionToDb));

    echo  var_dump($result["success"]);
    if($result["success"]){
            
        echo "Authentication success";
        echo "<script>alert('Login successful. You are being redirected to the Home page'); window.location.href = 'Home';</script>";
    }else if($result["invalidPassword"]){
     
        echo "Password incorrect. Try again";
    }elseif($result["userNotFound"]){

       

            echo "User not found"; // Mensaje adicional si el usuario no existe
        
        
    
    }


    DisconnectDB($connectionToDb);
}















?>
