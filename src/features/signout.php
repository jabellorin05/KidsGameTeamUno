<?php
require $_SERVER['DOCUMENT_ROOT'] . '/kidsgameteamuno/config.php';

function LogOut(){


session_start();

$_SESSION['username'] = "";
$_SESSION['user_id'] = "";
$_SESSION['game'] = "" ; 
$_SESSION['lives'] = "";


echo "<script>window.location.href='" . ROOT_PATH . "public/form/signin-form.php'</script>";




}



LogOut();


?>
