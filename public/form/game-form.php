<?php 
        if (session_status() == PHP_SESSION_ACTIVE) {
            echo "Session is already started.";
        } else {
            session_start();
        }

        if ( $_SESSION['user_id'] = "")
        {
            //redirect to home
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    //echo $_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/config.php';
    require($_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/config.php');
    //echo ROOT_PATH . 'public/template/head.php';
    //require_once ROOT_PATH . 'public/template/head.php' 
    require $_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/public/template/head.php'
    ?>
    
</head>
<body class="introduction">

    <?php //  require $_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/public/template/header.php' 
    ?> 
    <?php  require $_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/src/features/game.php'?> 
   
<nav class="navlives">
    <ul class="menu-lives">
        <li class="lititle" id="Lives">Lives:</li>
        <li id="live6">6</li>
        <li id="live5">5</li>
        <li id="live4">4</li>
        <li id="live3">3</li>
        <li id="live2">2</li>
        <li id="live1">1</li>
    </ul>
</nav>


    
    <!-- Your main content goes here -->
         <!-- Form 1 -->
         
        

            <section class="test-section">
                <div class="dragndrop">
                    <div id="topdiv">
                        <input type="submit" name="StopGame" value="Stop Game">
                        <label id="lblGame"></label>
                        <button id="btnValidate" onclick="Validate(<?php echo $_SESSION['game']; ?>)"> Validate</button>
                       
                        
                    </div>   



                    <form name="gameform" action="" method="post">
                        <div id="left" title="0" draggable="true">
                            <div class="list" draggable="true" id="divA">
                                <p id="FP1" class="pform"></p>
                            </div>
                                
                            <div class="list" draggable="true" id="divB">
                                <p id="FP2" class="pform"></p>
                            </div>
                            <div class="list" draggable="true" id="divC">
                                <p id="FP3" class="pform"></p>
                            </div>
                            <div class="list" draggable="true" id="divD">
                                <p id="FP4" class="pform"></p>
                            </div>
                            <div class="list" draggable="true" id="divE">
                                <p id="FP5" class="pform"></p>
                            </div>
                            <div class="list" draggable="true" id="divF">
                                <p id="FP6" class="pform" ></p>
                            </div>
                        </div>
                        <div class="containerquestionnaire">
                            <div id="one" title="1"></div>
                            <div id="two" title="2"></div>
                            <div id="three" title="3"></div>
                            <div id="four" title="4"></div>
                            <div id="five" title="5"></div>
                            <div id="six" title="6"></div>
                        </div>
                    </form>
                </div>

                <script>
                    DragDrop();
                </script>

            </section>
       <br>
       
       
   
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/public/template/footer.php' ?>
</body>
</html>
