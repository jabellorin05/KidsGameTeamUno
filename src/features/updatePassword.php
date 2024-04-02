
<?php

require_once '../../src/features/uname_exist.php';
require_once '../../db/update.php';
require_once '../../src/features/password_validation.php';
if(isset($_POST["Edit"])){

   
    $connection=ConnectDb();

    if($validUsername && $validPassowrd==true){

          $rOrder=GetRegistrationOrder($connection);


        $userName=$_POST["uName"]; 
        $password=$_POST["password"];

        updatePassword($connection,$rOrder,$password);


    }


    DisconnectDB($connection);

}



?> 
