<?php 
        //echo $_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/config.php';
        require($_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/config.php');


        // Generamos datos aleatorios para la tabla
// Con 10 filas de datos
$resultados = [];
for ($i = 0; $i < 10; $i++) {
    $resultados[] = [
        'id' => $i + 1,
        'first_name' => 'The' ,
        'last_name' => 'Player' . ($i + 1),
        'game_outcome' => rand(0, 1) ? 'Won' : 'Lost',
        'lives_used' => rand(1, 5),
        'end_date' => date('Y-m-d H:i:s', strtotime("-" . rand(0, 10) . " days")),
    ];
}
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require $_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/public/template/head.php';
    ?>
</head>
<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/public/template/header.php'; ?>

    

    <section class="result-section">
        <div class="containerresults">
            <table id="myTable" border="1">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Outcome of the Game</th>
                    <th>Number of Lives Used</th>
                    <th>Date and Time</th>
                </tr>
                <?php foreach ($resultados as $row): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                        <td><?php echo $row['game_outcome']; ?></td>
                        <td><?php echo $row['lives_used']; ?></td>
                        <td><?php echo $row['end_date']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
 
            <div class="description">
                <p>This page displays the game history for all players.</p>
            </div>
        </div>
 
        <button  id="btnHome"> Go Home </button>
        <script>
            document.getElementById('btnHome').addEventListener('click', function() {
            console.log("Redirigiendo a la página de inicio");
            window.location.href = '/dw3/finalproject/index.php'; // Cambia la URL a la pagina de inicio
            });
        </script>
 
        <button  id="btnTryAgain"> Try Again!</button>
 
        <script>
            document.getElementById('btnTryAgain').addEventListener('click', function() {
            console.log("Redirigiendo al inicio del juego");
            window.location.href = '/dw3/finalproject/public/form/game-form.php'; // Cambia la URL del inicio del juego
            });
        </script>
    </section>
    
    <br>
    
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/dw3/finalproject/public/template/footer.php'; ?>
</body>
</html>

