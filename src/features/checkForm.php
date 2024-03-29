<?php
//connection with db info 
if (isset($_POST["register"])) {

   

if (isset($_POST["uName"])) {
  
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

    if(!$validEUsername==false && !$validUsername==false && !$validName==false && !$validlName==false && !$password==false  && !$validEmail==false) {
        header("Location: prueba.php");
       
    }

}

if (isset($_POST["name"])) {
    $name = $_POST["name"];
}

if (isset($_POST["lName"])) {
    $lName = $_POST["lName"];
}

if (isset($_POST["password"])) {
    $password = $_POST["password"];
}

if (isset($_POST["passwordC"])) {
    $passwordC = $_POST["passwordC"];
}

if (isset($_POST["email"])) {
    $email = $_POST["email"];
}

//function to check if all the <span> are empty
function checkForm() {
    global $username, $name, $lName, $password, $passwordC, $email;
  
  
  if($username=="jose"){
    
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    echo "username vacio";
  }else{
    header("Location: otra_pagina.php");

  }
  
  
  
  // echo $username . " " . $name . " " . $lName . " " . $password . " " . $passwordC . " " . $email;
}




}
?>

