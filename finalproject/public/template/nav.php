<?php 
        if (session_status() == PHP_SESSION_ACTIVE) {
            echo "Session is already started.";
        } else {
            session_start();
            $_SESSION['username'] = 'JohnDoe    ';// user name is empty or not exists thios variable game, history results, log in
            $_SESSION['user_id'] = 123;  // log out, and show option for game and table results
            $_SESSION['game'] = 6 ;
            $_SESSION['startedGame'] = false;
            $_SESSION['lives'] = 1;
        }
    ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/config.php'); ?>
<nav class="navbar">
    <a class="logo" href="<?php echo ROOT_PATH; ?>index.html">True Colors Personality Test<span>.</span></a>
    <ul class="menu-links">
        <span id="close-menu-btn" class="material-symbols-outlined">close</span>
        <li><a href="<?php echo ROOT_PATH; ?>index.php">Home</a></li>
        <li><a href="<?php echo ROOT_PATH; ?>public/form/game-form.php">Game</a></li>
        <li><a href="./aboutUs.html">About us</a></li>
        <li><a href="./contactUs.html">Contact</a></li>
        <li><a href="<?php echo ROOT_PATH; ?>public/form/signin-form.php" id="login">Login</a></li>
    </ul>
    <span id="uName"></span>
</nav>
