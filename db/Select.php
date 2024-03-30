<?php
require_once '../../db/connection.php';

//connection with the db  variable  to have the connectoin ($connection)

function selectDb($connection){

try{
    mysqli_select_db($connection,"Kidsgames");

}catch(mysqli_sql_exception $error){
  echo $error;
}


}

$connectionToDb=ConnectWithDb();

selectDb($connectionToDb);


function checkUserExist(){
global $connectionToDb;
if(isset($_POST["login"])){

    $username = $_POST["uName"];
    $password = $_POST["password"];
    
    
    
    $sql_query = "SELECT userName,registrationOrder from player where username = '$username' ";
    
    $queryRessult = $connectionToDb->query($sql_query);
    
    $rows=$queryRessult->num_rows;
    
    if($rows>0){
    
    echo "NameUser match";
    
    $result=$queryRessult->fetch_assoc();
    
    echo $result["registrationOrder"];
    
    
    }else{
    
        echo "Username does not exist";
    }

}




}




