
<?php

$warn_msg = "";

$incorrecFormat = "please. introduce a valid email example johndoe@gmail.com";
$empty_msg ="The email is empty";

$email = isset($_POST["email"]) ? $_POST["email"] : '';

if ($email == '') {
    echo $empty_msg;
    //filter_var and FILTER_VALIDATE_EMAIL are features to validate in php
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $incorrecFormat;
}
    
?> 
