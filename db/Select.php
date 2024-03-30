<?php
require_once '../../db/connection.php';

// Connection with the database
function selectDb($connection) {
    try {
        mysqli_select_db($connection, "Kidsgames");
    } catch(mysqli_sql_exception $error) {
        echo $error;
    }
}

function checkUserExist($connection) {
    if (isset($_POST["login"])) {
        $username = $_POST["uName"];
        $password = $_POST["password"];
        
        selectDb($connection);
        
        $sql_query = "SELECT userName, registrationOrder FROM player WHERE username = '$username'";
        $queryRessult = $connection->query($sql_query);
        $rows = $queryRessult->num_rows;
        
        if ($rows > 0) {
            $result = $queryRessult->fetch_assoc();
            return $result["registrationOrder"];
        } else {
            echo "Username does not exist";
        }
    }
}

function checkPassword($connection, $registrationOrder) {
    $password = $_POST["password"];

    $sql_query = "Select passCode FROM authenticator WHERE registrationOrder = $registrationOrder";
    $queryResult = $connection->query($sql_query);
    $result = $queryResult->fetch_assoc();

    if (password_verify($password, $result["passCode"])) {
        echo "Authentication success";
        echo " <script>alert('Login successfull You are going to the Home page') </script> <script>window.location.href = 'Home';</script>";
    } else {
        echo "Password incorrect. Try again";
    }
}

$connectionToDb = ConnectDb();
if ($connectionToDb) {
    checkPassword($connectionToDb, checkUserExist($connectionToDb));
    DisconnectDB($connectionToDb);
}
?>
