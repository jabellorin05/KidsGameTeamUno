<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="Author" content="xxxx" />
<!-- call my js files -->

<script src="../assets/js/fname-ajax.js"></script>
<script src="../assets/js/lname-ajax.js"></script>
<script src="../assets/js/email-ajax.js"></script>
<script src="../assets/js/uname-ajax.js"></script>
<script src="../assets/js/password-ajax.js"></script>
<script src="../assets/js/cPassword-ajax.js"></script>
<script src="../assets/js/uname-Exist.js"></script>
<body>

<!--Form-->
<form id="form1" method="POST" action="../assets/js/checkForm-ajax" >
  <!--Form fields to input data-->
 
 
  <label for="inputName">UserName</label>
  <input id="uName" type="text" name="uName" placeholder="JohnDoe" onkeyup="ValidateUserNameExist()" required><br>  
  <span id="uNameMessage"></span>  <br>    

 
  <label for="password">Password</label>
  <input id="password" type="password" name="password" placeholder="Password" required onkeyup="ValidatePassword()"  > <br> 
  <span id="passwordMessage"></span><br>  
  <label for="password">Confirm Password</label>
  <input id="passwordC" type="password" name="passwordC" placeholder="Password" required onkeyup="ValidatePassword()"   >  <br>  <br>
  <span id="cPasswordMessage"></span>  
 
  <label for="inputName">First Name</label>
  <input id="fName" type="text" name="fname" placeholder="John" onkeyup="ValidateFname()" required><br>  
  <span id="fNameMessage"></span>  
  <br>  
  <label for="inputlname">Last Name|Nom</label>
  <input id="lName" type="text" name="lname" placeholder="Doe" required onkeyup="ValidateLname()"><br> 
  <span id="lNameMessage"></span><br>
  <label for="email">E-mail</label>
  <input id="email" type="text" name="email" placeholder="JohnDoe@gmail.com" required onkeyup="ValidateEmail()"><br>
  <span id="emailMessage"></span><br>
  
  
  
  <!--Submit button to send form data-->
  <input id="register" type="submit" name="register" value="Register" />
  <input id="login" type="submit" name="login" value="Login" />

            
        

</form>
<script>
    // Obtener el botón por su ID
  //  var button = document.getElementById("register");

    // Habilitar el botón eliminando el atributo disabled
   // button.removeAttribute("disabled");
</script>

</body>
<?php

//connection with the db  variable  to have the connectoin ($connection)
require_once '../../db/conection.php';
require_once '../../src/features/checkUsername.php';


?>

</head>

</html>


