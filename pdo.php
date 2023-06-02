<?php

try {
    $conexion = new PDO('mysql:host=localhost; dbname=blog', 'root', 'root');
    echo "conexion todo viento";
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

?>