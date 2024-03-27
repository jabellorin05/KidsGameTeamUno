
<?php
$warn_msg = "";
$only_Letter_msg = "Must have only letters [a-z].";
$only_cLetter_msg = "Must start with capital letter";
$empty_msg ="The name is empty";

$fName = isset($_POST["fName"]) ? $_POST["fName"] : '';

if ($fName == '') {
    echo $empty_msg;
} elseif (!preg_match('/^[a-zA-Z]+$/', $fName)) {
    echo $only_Letter_msg;
}elseif(!preg_match('/^[A-Z]/', $fName)) 
echo $only_cLetter_msg;

?> 
