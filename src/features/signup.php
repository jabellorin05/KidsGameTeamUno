<?php
if (isset($_POST["register"])) {

   



include('../../src/features/checkUsername.php');
if($validEUsername==false)
 echo "<br>";
require_once '../../src/signup-onKeyup/uname-ajax.php';
if($validUsername==false)
echo "<br>";
require_once '../../src/signup-onKeyup/fname-ajax.php';
if($validName==false)
echo "<br>";
require_once '../../src/signup-onKeyup/lname-ajax.php';
if($validlName==false)
echo "<br>";
require_once '../../src/signup-onKeyup/pcode1-ajax.php';

if($password==false)
echo "<br>";






//if all the validation are correct the variable keep being true and it able to go to the next page
if($validEUsername==true && $validUsername==true && $validName==true && $validlName==true && $validPassowrd==true) {
    include("../../src/features/newUserClass.php");
    $userName=$_POST["uName"];        
    $fName=$_POST["fName"];        
    $lName=$_POST["lName"];       
    $password=$_POST["password"];
     echo $userName;   
    $newUserN = new NewUser($userName, $fName, $lName,$password);

    require_once '../../db/Insert.php';
    insertNewPlayer($newUserN);
    insertPassword($newUserN);
    // Mensaje que deseas mostrar al usuario
   $message = "Thanks for logging up. You are going to the Home Page";
 
    // Redirige al usuario a otra página después de cierto tiempo

   echo"<script>alert('$message'); window.location.href = 'home.php';</script>";

   
} 
}