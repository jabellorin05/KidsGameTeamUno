
<?php

$warn_msg = "";
$start_Letter_msg = "Must start with Capital letter .";
$max_lenght = "Username must contain at least 8 characters";
$empty_msg ="The username is empty";
global $validUsername;
$validUsername=true;

$uName = isset($_POST["uName"]) ? $_POST["uName"] : '';



if ($uName == '') {
    echo $empty_msg;
    $validUsername=false;
} elseif (!preg_match('/^[A-Z]/', $uName)) {
    echo $start_Letter_msg;
    $validUsername=false;
} elseif (strlen($uName) < 8 ) {
    $validUsername=false;
    echo $max_lenght;
}
//check if the username already exist.
include_once "checkUsername.php";

?> 
