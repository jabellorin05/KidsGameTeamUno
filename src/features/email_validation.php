
<?php

$warn_msg = "";
global $validEmail;
$validEmail=true;

$incorrecFormat = "please. introduce a valid email example johndoe@gmail.com";
$empty_msg ="The email is empty";

$email = isset($_POST["email"]) ? $_POST["email"] : '';

if ($email == '') {
    echo $empty_msg;
    $validEmail=false;
    //filter_var and FILTER_VALIDATE_EMAIL are features to validate in php
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $incorrecFormat;
    $validEmail=false;
}
    
?> 
