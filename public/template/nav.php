<?php

if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}

$login = 0; // Inicialmente el usuario no está logueado

if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
  // La variable de sesión existe y no está vacía, entonces el usuario está logueado
  $login = 1;
}
echo "<script>console.log('User logged:" . $login. "')</script>";
?> 

<nav class="navbar navbar-dark bg-green navbar-expand-lg" style="padding: 0; background-size: cover; background-color: #4caf50; color: white;">
<div class="container" style="height: 0.5px;">
    <a class="navbar-brand" href="#" style="font-size: 34px;">Kids Games</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-auto" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_PATH; ?>" style="font-size: 18px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" style="font-size: 18px;">About Us</a>
        </li>
        <?php 
        if ($login == 1){
      
          echo '<li class="nav-item" id="gameMenuItem">
          <a class="nav-link" href="' . ROOT_PATH . 'public/form/game-form.php" style="font-size: 18px;">Game</a>
          </li>';
          echo '<li class="nav-item" id="resultsMenuItem">
          <a class="nav-link" href="' . ROOT_PATH . 'public/message/history-table.php" style="font-size: 18px;">Results</a>
          </li>';
          echo '<li class="nav-item" id="resultsMenuItem">
          <a class="nav-link" href="' . ROOT_PATH . 'src/features/signout.php" style="font-size: 18px;">Log out</a>
          </li>';
          echo '<li class="nav-item" id="resultsMenuItem">
          <a class="nav-link" href="#">User: '.  $_SESSION['username'] . '</a>
          </li>';
        }
        else 
        {
          echo '<li class="nav-item" id="resultsMenuItem">
          <a class="nav-link" href="' . ROOT_PATH . 'public/form/signin-form.php" style="font-size: 18px;">Log in</a>
          </li>';

        }
        ?>




        <!--
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
            <a class="dropdown-item" href="#">New around here? Sign up</a>
            <a class="dropdown-item" href="#">Forgot password?</a>
          </div>
        </li>
      -->
      </ul>
    </div>
  </div>
</nav>
