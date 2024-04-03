<?php

require_once '../../src/features/uname_exist.php';
require_once '../../db/update.php';
require_once '../../src/signup-onkeyup/pcode1-ajax.php';
if(isset($_POST["Edit"])){

   
    $connection=ConnectDb();

    if($validUsername && $validPassowrd==true){

          $rOrder=GetRegistrationOrder($connection);


        $userName=$_POST["uName"]; 
        $password=$_POST["password"];

       $response = updatePassword($connection,$rOrder,$password);

        if($response){
    
            echo "<script>alert('Update successfully');</script>";
        }


    }


    DisconnectDB($connection);

}



?> 
 
