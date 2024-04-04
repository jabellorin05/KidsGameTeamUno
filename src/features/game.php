 
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/config.php';

require $_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/src/functions/game-functions.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    /*
    if(isset($_POST['Validate'])) {
        
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
            //echo "STARTED WITH POST.";
        }


       
        

        //echo "<script>document.getElementById('FP2').innerText = '" . $_POST["FP2"] ."' </script>";
        //$gameDesc = setGame(4);
        //echo "<script>document.getElementById('lblGame').innerText = '$gameDesc';</script>";
    }
*/

    if (isset($_POST['game'])) {
        // Check which PHP function to call based on the value of the function parameter
        if ($_POST['game'] == 'validateGame') {
            // Call the PHP function with parameters
            //echo $_SESSION['game'];
            validateGame($_POST['param1'], $_POST['param2'], $_POST['param3'], $_POST['param4'], $_POST['param5'], $_POST['param6']);
        }
    }
}
else 
{

    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    } 

    if (isset($_SESSION['game']) && !empty($_SESSION['game'])) {
        // The session variable exists and is not empty
        setGame( $_SESSION['game']);
    } else {
        // The session variable either doesn't exist or is empty
        //redirect to home
        $host = $_SERVER['HTTP_HOST'];

        // Get the current script path
        $script_name = $_SERVER['SCRIPT_NAME'];
        
        // Remove the unwanted parts from the script path
        $new_script_name = str_replace("/public/form/", "/", $script_name);
        
        // Redirect to the new URL
        header("Location: http://$host". ROOT_PATH);
        //header("Location: http://localhost/dw3/finalproject/index.php");
        exit();
    }
   



    if ($_SESSION['game'] > 4)
    {

        $lives = "";
        for ($i =1; $i <= 6; $i ++)
        {
            $lives = $lives . "liv$i = document.getElementById('live$i');";
            if ($_SESSION['lives'] == $i)
                $lives = $lives . "liv$i.classList.add('licurrent');";
            elseif ($_SESSION['lives']== 6 || $_SESSION['lives'] < $i)
                $lives = $lives . "liv$i.classList.add('linext');";
            elseif ($_SESSION['lives'] < $i)
                $lives = $lives . "liv$i.classList.add('linext');";


        }

        echo "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            div3 = document.getElementById('three');
            div3.style.display = 'none';
            div4 = document.getElementById('four');
            div4.style.display = 'none';
            div5 = document.getElementById('five');
            div5.style.display = 'none';
            div6 = document.getElementById('six');
            div6.style.display = 'none';
            


        });
        </script> ";
    }
}


