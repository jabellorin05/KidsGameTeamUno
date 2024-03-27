
<?php
$warn_msg = "";
$only_Letter_msg = "Must have only letters [a-z].";
$only_cLetter_msg = "Must start with capital letter";
$empty_msg ="The Last name is empty";

$lName = isset($_POST["lName"]) ? $_POST["lName"] : '';

if ($lName == '') {
    echo $empty_msg;
} elseif (!preg_match('/^[a-zA-Z]+$/', $lName)) {
    echo $only_Letter_msg;
}elseif(!preg_match('/^[A-Z]/', $fName)) 
echo $only_cLetter_msg;

?> 
