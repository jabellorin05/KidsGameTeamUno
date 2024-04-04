
<nav class="navbar navbar-dark bg-dark navbar-expand-lg" style="padding: 0; background-image: url('image/confetti.jpg'); background-size: cover;">
  <div class="container" style="height: 0.5px;">
    <a class="navbar-brand" href="#" style="font-size: 34px;">Kids Games</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#" style="font-size: 18px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="font-size: 18px;">About Us</a>
        </li>
        <li class="nav-item" id="gameMenuItem" style="display: none;">
          <a class="nav-link" href="game.php" style="font-size: 18px;">Game</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;">
            Login
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <form class="px-4 py-3" id="loginForm">
              <div class="form-group">
                <label for="loginUsername">Username</label>
                <input type="text" class="form-control" id="loginUsername" placeholder="Username" required>
              </div>
              <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" class="form-control" id="loginPassword" placeholder="Password" required>
              </div>
              <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" name="register" href="#">New around here? Sign up</a>
            <a class="dropdown-item" href="public/form/signup-form">Forgot password?</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php


?> 


<script>
  document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var username = document.getElementById("loginUsername").value;
    var password = document.getElementById("loginPassword").value;
    if (username.trim() === "") {
      alert("Please enter a username.");
    } else if (password.trim() === "") {
      alert("Please enter a password.");
    } else {
      // Validación de usuario y contraseña
      if (username === "JohnDoe" && password === "123") {
        // Acceso concedido
        document.getElementById("gameMenuItem").style.display = "block";
        alert("Login successful!");
      } else {
        // Acceso denegado
        alert("Invalid username or password.");
      }
    }
  });
</script>

