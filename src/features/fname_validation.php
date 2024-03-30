
<?php

$warn_msg = "";
$only_Letter_msg = "The name must have only letters [a-z].";
$only_cLetter_msg = "Must start with capital letter";
$empty_msg ="The name is empty";
global $validName;
$validName=true;
$fName = isset($_POST["fname"]) ? $_POST["fname"] : '';

if ($fName == '') {
    echo $empty_msg;
    $validName=false;
} elseif (!preg_match('/^[a-zA-Z]+$/', $fName)) {
    echo $only_Letter_msg;
    $validName=false;
}elseif(!preg_match('/^[A-Z]/', $fName)) {
    $validName=false;
    echo $only_cLetter_msg;
}


?> 
