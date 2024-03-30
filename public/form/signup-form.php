


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
<script src="../assets/js/uname-ajax.js"></script>
<script src="../assets/js/password-ajax.js"></script>
<script src="../assets/js/cPassword-ajax.js"></script>
<script src="../assets/js/uname-Exist.js"></script>
<script src="../assets/js/checkForm-ajax.js"></script>
<body>

<!--Form-->
<form id="form1" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
  <!--Form fields to input data-->


 
  <label for="inputName">UserName</label>
  <input id="uName" type="text" name="uName" placeholder="JohnDoe" onkeyup="ValidateUserName()" required value="<?php  if(isset($_POST["register"])) $uName=$_POST["uName"];  if(isset($uName)) echo $uName ?>  "><br>  
  <span id="uNameMessage"></span><span id="uNameMessage2"></span>  <br>    

 
  <label for="password">Password</label>
  <input id="password" type="password" name="password" placeholder="Password" required onkeyup="ValidatePassword()"  > <br> 
  <span id="passwordMessage"></span><br>  
  <label for="password">Confirm Password</label>
  <input id="passwordC" type="password" name="passwordC" placeholder="Password" required onkeyup="ValidatePassword()"   >  <br>  <br>
  <span id="cPasswordMessage"></span>  
 
  <label for="inputName">First Name</label>
  <input id="fName" type="text" name="fname" placeholder="John" onkeyup="ValidateFname()" required value="<?php if(isset($_POST["register"])) $fName = $_POST["fname"]; if(isset($fName)) echo $fName  ?>"><br>  
  <span id="fNameMessage"></span>  
  <br>  
  <label for="inputlname">Last Name|Nom</label>
  <input id="lName" type="text" name="lname" placeholder="Doe" required onkeyup="ValidateLname()" value="<?php if(isset($_POST["register"])) $lName = $_POST["lname"];  if(isset($lName)) echo $lName  ?>"><br> 
  <span id="lNameMessage"></span><br>
 
  
  
  <!--Submit button to send form data-->
  <input id="register" type="submit" name="register" value="Register" />
  <input id="login" type="submit" name="login" value="Login" />



</form>


</body>




<?php

//connection with the db  variable  to have the connectoin ($connection)
require_once '../../db/connection.php';

            
include('../../src/features/checkForm.php');     
include("../../db/structureDb.php");
?>

</head>

</html>


