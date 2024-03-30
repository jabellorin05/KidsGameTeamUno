<?php
//connection with db info 
if (isset($_POST["register"])) {

   


  
    require_once '../../src/features/checkUsername.php';
    if($validEUsername==false)
     echo "<br>";
    require_once '../../src/features/uname_validation.php';
    if($validUsername==false)
    echo "<br>";
    require_once '../../src/features/fname_validation.php';
    if($validName==false)
    echo "<br>";
    require_once '../../src/features/lname_validation.php';
    if($validlName==false)
    echo "<br>";
    require_once '../../src/features/password_validation.php';

    if($password==false)
    echo "<br>";
    require_once '../../src/features/email_validation.php';
    if($validEmail==false)
    echo "<br>";

 

    //if all the validation are correct the variable keep being true and it able to go to the next page
    if($validEUsername==true && $validUsername==true && $validName==true && $validlName==true && $validPassowrd==true  && $validPassowrd==true) {
       // Mensaje que deseas mostrar al usuario
       $message = "Thanks for logging in. You are going to the Home Page";
         
        // Redirige al usuario a otra página después de cierto tiempo

       echo"<script>alert('$message'); window.location.href = 'home.php';</script>";

       
    }

}



  



?>

