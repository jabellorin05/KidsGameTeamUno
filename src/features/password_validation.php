
<?php

$warn_msg = "";
$max_lenght = "Password must contain at least 8 characters";

$empty_msg ="The password is empty";

$password = isset($_POST["password"]) ? $_POST["password"] : '';
$passwordC = isset($_POST["passwordC"]) ? $_POST["passwordC"] : '';

if ($password == '') {
    echo $empty_msg;
} elseif (strlen($password)<8) {
    echo $max_lenght;
}elseif($password!==$passwordC){

    echo "Password and Confirm Password must be the same.";
}

    

?> 
