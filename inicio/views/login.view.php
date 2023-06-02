<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&family=Tilt+Prism&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&family=Source+Code+Pro:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="lightbox.min.css"/>
    <title>Login - Independiente</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/styletwo.css">
</head>

<body>

    <header>
        <div class="conteiner">
            <a href="#"><img src="logo.png"></a>
        </div>
    </header>

    <div class="contenedor">
        <h3 class="titulo"><b>INGRESO AL SISTEMA</b></h3>
        <!-- en el siguiente action con el htmlspeacial enviamos los datos a la misma pagina recargandose -->
        <form class="formulario" id="contactform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        
            <input type="text" maxlength="25" placeholder="Usuario" id="usuario" name="usuario" required>
            <br>
            <input type="password" maxlength="25" placeholder="Contraseña" id="clave" name="clave" required>
            <br>   
            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <input class="boton" name="submit" type="submit" id="ingreso" value="Iniciar Sesion">
            <h3 class="registro">¿Todavia no te registraste?</h3> 
            <a class="register" href="registro.php">Registrarse</a>

        </form>
    </div>



</body>