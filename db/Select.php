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
          
            return null; // Devolver null si el usuario no existe
        }
    }
}

function checkPassword($connection, $registrationOrder) {
    if ($registrationOrder !== null) {
        if(isset($_POST["password"])){
            $password="";
            $password = $_POST["password"];
            $sql_query = "SELECT passCode FROM authenticator WHERE registrationOrder = $registrationOrder";
            $queryResult = $connection->query($sql_query);
            $result = $queryResult->fetch_assoc();
        
            if (password_verify($password, $result["passCode"])) {
                // Autenticación exitosa
                echo "Authentication success";
                echo "<script>alert('Login successful. You are being redirected to the Home page'); window.location.href = 'Home';</script>";
            } else {
                // Contraseña incorrecta
                echo "Password incorrect. Try again";
            }
        }
    } else {
        echo "User not found"; // Mensaje adicional si el usuario no existe
    }
}

$connectionToDb = ConnectDb();
if ($connectionToDb) {
    checkPassword($connectionToDb, checkUserExist($connectionToDb));
    DisconnectDB($connectionToDb);
}
?>
