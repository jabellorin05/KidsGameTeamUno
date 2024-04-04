<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="Author" content="xxxx" />

<?php include('../../public/template/head.php'); ?>
<?php include('../../public/template/header.php'); ?>
<?php include('../../public/template/nav.php'); ?>
<div class="container">

  <div class="row justify-content-center align-items-center"> <!-- Modificado para centrar horizontal y verticalmente -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-body text-center"> <!-- Añadida la clase text-center para centrar el contenido -->
          <h5 class="card-title">Signin</h5>


<!-- call my js files -->

<script src="../assets/js/checkForm-ajax.js"></script>
<body>

<!--Form-->
<form id="form1" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
  <!--Form fields to input data-->


 
  <label for="inputName">UserName</label>
  <input id="uName" type="text" name="uName" placeholder="JohnDoe" onkeyup=""  value="<?php  if(isset($_POST["login"])) $uName=$_POST["uName"];  if(isset($uName)) echo $uName ?>  "><br>  
  <span id="uNameMessage"></span><span id="uNameMessage2"></span>  <br>    

 
  <label for="password">Password</label>
  <input id="password" type="password" name="password" placeholder="Password"  onkeyup=""  > <br> 
  <span id="passwordMessage"></span><br>  
  
 
  
  
  <!--Submit button to send form data-->
  <input id="register" class="btn btn-primary" type="submit" name="register" value="Register" />
  <input id="login" class="btn btn-primary" type="submit" name="login" value="Login" />
  <a href="pw-update-form.php">Forgot Password?</a>


</form>
</div>
      </div>
    </div>
    <!-- Other game levels go here -->
  </div>
</div>
<?php include('../../public/template/footer.php'); ?>
<script src="../../public/public/template/main.js"></script>

</body>




<?php
require_once '../../db/connection.php';
//include("../../db/structureDb.php");
//require_once '../../db/Select.php';
include("../../src/features/signin.php");
//checkUserExist(ConnectDb());


if(isset($_POST["register"]))
echo "<script>window.location.href='signup-form.php'</script>"

?> 
