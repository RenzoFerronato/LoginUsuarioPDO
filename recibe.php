<?php

require 'form.php';

// $errores = '';
// $enviara = '';

$errores;
$enviara;

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $pais = $_POST['pais'];
    $telefono = $_POST['telefono'];
    $documento = $_POST['documento'];

    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa un nombre <br />'; 
    }
}

?>

// if ($_POST) {
//     $nombre = $_POST['nombre'];
//     $apellido = $_POST['apellido'];
//     $email = $_POST['email'];
//     $pais = $_POST['pais'];
//     $telefono = $_POST['telefono'];
//     $documento = $_POST['documento'];

//     echo 'Hola, ' . $nombre . ' ' . ' ' . $apellido . ' tu DNI de identidad es: ' . $documento . ' correspondiente al pais ' . 
//     $pais . ' te contactaremos mediante ' . $email . ' y tu telefono ' . $telefono;
// } else {
//     header('Location: http://localhost/formulario/form.php/');
// }

