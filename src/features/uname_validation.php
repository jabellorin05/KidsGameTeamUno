
<?php

$warn_msg = "";
$start_Letter_msg = "Must start with letters [a-z].";
$max_lenght = "Username must contain at least 8 characters";
$empty_msg ="The username is empty";

$uName = isset($_POST["uName"]) ? $_POST["uName"] : '';

if ($uName == '') {
    echo $empty_msg;
} elseif (!preg_match('/^[a-zA-Z]/', $uName)) {
    echo $start_Letter_msg;
} elseif (strlen($uName) < 8 ) {
    echo $max_lenght;
}

?> 
