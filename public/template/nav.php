<nav class="navbar navbar-dark bg-dark navbar-expand-lg" style="padding: 0;">
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
        <li class="nav-item">
          <a class="nav-link" href="#" style="font-size: 18px;">Products/Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="font-size: 18px;">Contact</a>
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
            <a class="dropdown-item" href="#">New around here? Sign up</a>
            <a class="dropdown-item" href="#">Forgot password?</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  document.getElementById("loginForm").addEventListener("submit", function(event) {
    var username = document.getElementById("loginUsername").value.trim();
    if (username === "") {
      alert("Username cannot be empty");
      event.preventDefault(); // Prevent form submission if username is empty
    }
  });
</script>
