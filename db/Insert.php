<?php





include("./connection.php");
include("../src/features/newUserClass.php");


function insertNewPlayer(NewUser $newUserN) {
  //  include("../../src/features/newUserClass.php");
   // $newUser = new NewUser($username, $name, $lastName);
    $connectionDBB=ConnectDb();
    selectDb($connectionDBB);


    $sql="insert into player (fname, lName, userName ) values (?, ?, ?)";
    //prepare the query with the params 
    $statement = mysqli_prepare($connectionDBB,$sql);
    //bind the params sss means we are binding 3 strings

    mysqli_stmt_bind_param($statement,"sss",$newUserN->name,$newUserN->lastName,$newUserN->username);

    mysqli_stmt_execute($statement);


    if(mysqli_stmt_affected_rows($statement)>0){

        echo "insertion success";
    }else{

        echo "something wrong with the insertion";
    }

    DisconnectDB($connectionDBB);


   





}


function insertPassword(NewUser $newUser){
$connectionDBB=ConnectDb();
selectDb($connectionDBB);
//encrypt the password with the function hash method.
$encryptedPassword=password_hash($newUser->password,PASSWORD_DEFAULT);
$sql="INSERT INTO authenticator (passCode) values ('$encryptedPassword')";


$sql_Insert=$connectionDBB->query($sql);

if($sql_Insert==false)
echo "something went wrong insertion failed";

}











?>
