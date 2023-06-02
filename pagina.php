<?php

session_start();

if ($_SESSION) {
    $nombre = $_SESSION['nombre'];
    echo "<h1> Hola, $nombre </h1>";
} else {
    echo "No has inciado sesion";
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- <h1>Hola,  <?php echo $_SESSION['nombre'] ?> </h1> -->
    <a href="cerrar.php">Cerrar sesion</a>

</body>
</html>