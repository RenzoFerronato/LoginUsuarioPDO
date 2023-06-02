<?php

session_start();

// error_reporting (E_ALL ^ E_NOTICE);

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}
// SI el metodo post esta activo, es porque el usuario paso los datos...
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $clave = $_POST['clave'];
    $clavetwo = $_POST['clavetwo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    // echo "$usuario . $clave . $nombre . $apellido";

    $errores = '';

    if (empty($usuario) or empty($clave) or empty($nombre) or empty($apellido)) {
        $errores .= '<li> Por favor, rellena todos los campos para registrarse. </li>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost; dbname=blog', 'root', 'root');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
        // preparamos la consulta con la variable conexion -> :usuario toma el valor que pasamos del placeholder y LIMIT 1 para que solo nos traiga un registro
        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();
        //  lo transformamos en valor boleano para que nos devuelva true o false con el metodo fetch
        // si nos devuelve false es porque no existe en la BDD el usuario agregado, si nos da true que muestre el error de abajo.

        if ($resultado != false) {
            $errores .= '<li> El nombre de usuario ya existe, por favor escriba otro. </li>';
        }

        $clave = hash('sha512', $clave);
        $clavetwo= hash('sha512', $clavetwo);
        
        if ($clave != $clavetwo) {
            $errores .= '<li> Las contrasenas no son iguales. </li>';
        }
    }

    if ($errores == '') {
        $statement = $conexion->prepare('INSERT INTO usuarios (idusuario, usuario, clave, nombre, apellido) VALUES (null, :usuario, :clave, :nombre, :apellido)');
        $statement->execute(array(
            ':usuario' => $usuario, 
            ':clave' => $clave, 
            ':nombre' => $nombre, 
            ':apellido' => $apellido
        ));

        // echo "Hola";
        header('Location: login.php');
    }
}
// Datos pasados por input name y guardado c/u en su variable para poder enviarlos

require 'views/registro.view.php'

?>