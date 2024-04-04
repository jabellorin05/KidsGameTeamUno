<?php
//connection with db info 

require_once "../../db/connection.php";
 $username="";
 $connection=ConnectDb();
if (isset($_POST["uName"])){

    $userName=$_POST["uName"];
}


//2-SELECT THE DATABASE
if (!function_exists('selectDb')) {
function selectDb($connection){
    try {
        //$selectDBUsers = mysqli_select_db($connection, "users");
        mysqli_select_db($connection, "kidsgames");
    } catch (mysqli_sql_exception $error) {
        //If the selection failed, display error message and stop the script
       // die("Connection to the Database failed!<br/> " . $error);
    }

}
}




// Función para seleccionar usuarios
if (!function_exists('userExists')) {
function userExists($connection,$userName) {
  //variable check is the validation are correct or not

    global $validEUsername;
    $validEUsername=true;

    try {
        // Preparar la consulta SQL con un marcador de posición (?)
        $sqlCode = "SELECT userName FROM player WHERE userName = ?";
        $statement = $connection->prepare($sqlCode);
        
        // Vincular el parámetro y establecer el valor
        $statement->bind_param("s", $userName); // "s" indica que es un valor de cadena (string)
        
        // Ejecutar la consulta
        $statement->execute();
        
        // Obtener el resultado
        $result = $statement->get_result();
        
        // Verificar si hay filas en el resultado
        if ($result->num_rows > 0) {
          
            echo "That Username has already been created in the past. Please try again with another username";
            $validEUsername=false;
          
        } 
        
        // Cerrar la declaración y la conexión
        $statement->close();
        $connection->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
  
}
}



$bdName="kidsgames";
// Conectar a la base de datos
//$connectionDb = $connection;

//select db
selectDb($connection);
//selecs users

userExists($connection,$userName);


?>
