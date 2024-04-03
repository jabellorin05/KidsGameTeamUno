
<?php include('public/template/head.php'); ?>
<?php include('public/template/header.php'); ?>
<?php include('public/template/nav.php'); ?>
<div class="container">
  <h3 class="text-center">Score: <span id="score">0</span></h3>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Level 1: Order 6 letters in ascending order</h5>
          <p class="card-text">Click to start</p>
          <button class="btn btn-primary btn-block" onclick="startGame(1)">Start</button>
        </div>
      </div>
    </div>
    <!-- Other game levels go here -->
  </div>
</div>
<?php include('public/template/footer.php'); ?>
<script src="public/template/main.js"></script>

</body>
</html>
