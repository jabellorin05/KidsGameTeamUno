<?php
//connection with db info 

class Data{


    

    
}



 $hostName="localhost";
 $userName="root";
 $password="";

// Función para conectar con la base de datos
function ConnectDb() {
    $hostName="localhost";
    $userName="root";
    $password="";


    try {
        $connection = new mysqli($hostName, $userName, $password);
        echo "conexion success"."<br>";
        return $connection;
    } catch (mysqli_sql_exception $error) {
        // Si la conexión falla, muestra el mensaje de error y detiene el script
        die("Connection to MySQL failed! <br>" . $error);
    }
}




// Función para crear la estructura de la base de datos si aún no existe
function createDBIfNotExits($connection) {
    try {
        $connection->multi_query(file_get_contents("3-database-entity.sql"));
       // echo "Creation success. Waiting for database registration...";
        
    } catch (mysqli_sql_exception $error) {
        // Si la creación falla, muestra el mensaje de error y detiene el script
       // die("Creation of Database and Tables failed! <br>" . $error);
    }
}

function checkIfDbExists($connection, $dbName) {
    $sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbName'";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        // La base de datos existe
        return true;
    } else {
        createDBIfNotExits($connection);
        return false;
    }
}

//2-SELECT THE DATABASE
function selectDb($Connection){
    try {
        //$selectDBUsers = mysqli_select_db($connection, "users");
        mysqli_select_db($Connection, "kidsgames");
    } catch (mysqli_sql_exception $error) {
        //If the selection failed, display error message and stop the script
       // die("Connection to the Database failed!<br/> " . $error);
    }

}


// Función para desconectar de la base de datos
function DisconnectDB($connection) {
    try {
        $connection->close();
    } catch (mysqli_sql_exception $error) {
        die("Disconnection from MySQL failed!<br/>" . $error);
    }
}






// Función para seleccionar usuarios
function userExists($connection,$userName) {
    try {
    
   
    $sqlCode = "SELECT userName FROM player where userName=$userName ";
    $result = $connection->query($sqlCode);

    
           if ($result->num_rows > 0) {
             echo "true";
        
      
    }else{

        echo "false";
    }
}catch (mysqli_sql_exception $error) {
    //If the selection failed, display error message and stop the script
    die("Data selection from the Table failed!<br/>" . $error);
}

}




$bdName="kidsgames";
// Conectar a la base de datos
$connectionDb = ConnectDb();

//check if the db exists
checkIfDbExists($connectionDb,$bdName);
//select db
selectDb($connectionDb);
//selecs users
userExists($connectionDb,"pokemon527");
DisconnectDB($connectionDb);
?>
