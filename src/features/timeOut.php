<?php

function timeOut() {
    echo "<script>
    var time =900000;//miliseconds
    
    setTimeout(function() { window.location.href = '../../index.php'; }, time);
    
    </script>";
}





?>