<?php
//connection with db info 



if (isset($_POST["uName"])) {
    $username = $_POST["uName"];
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
    echo $username . " " . $name . " " . $lName . " " . $password . " " . $passwordC . " " . $email;
}


checkForm();
?>

