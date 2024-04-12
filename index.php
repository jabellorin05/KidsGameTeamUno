<?php require($_SERVER['DOCUMENT_ROOT'] . '/kidsgameteamuno/config.php');   ?>
<!DOCTYPE html>
<html lang="en">

    <?php require $_SERVER['DOCUMENT_ROOT'] . ROOT_PATH . '/public/template/head.php'; ?>

  <body>
  <?php require $_SERVER['DOCUMENT_ROOT'] . ROOT_PATH . '/public/template/header.php'; ?>
  <?php require $_SERVER['DOCUMENT_ROOT'] . ROOT_PATH . '/public/template/nav.php'; ?>
  <div class="container" >
     <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body" >
            <h5 class="card-title">Level 1: Order 6 letters in ascending order</h5>
            <p class="card-text">Click to start</p>
            <a class="nav-link" href="<?php echo ROOT_PATH; ?>public/form/game-form.php" style="font-size: 18px;">|
              <button class="btn btn-primary btn-block">Start</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <?php require $_SERVER['DOCUMENT_ROOT'] . ROOT_PATH . '/public/template/footer.php'; ?>
  <?php require_once ($_SERVER['DOCUMENT_ROOT'] . ROOT_PATH . 'db/create.php');?>
  </body>
</html>
