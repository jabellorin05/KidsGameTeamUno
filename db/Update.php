<?php 


function updatePassword($connection,$registrationOrder,$password){

    $Hpassword=password_hash($password,PASSWORD_DEFAULT);

    $sql="update authenticator set passCode = '$Hpassword' where registrationOrder = '$registrationOrder'";
   $query= $connection->query($sql);

    if($query==null){

        echo "update went wrong";
    }else{
        echo "<script>alert('Update successfully')<script/>";
    }
   




}





?>
