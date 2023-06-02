<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&family=Tilt+Prism&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&family=Source+Code+Pro:wght@500&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="lightbox.min.css"/>
    <title>Registrarse</title>
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
        <h3 class="titulo"><b>REGISTRO</b></h3>

        <form class="formulario" id="contactform"  autocomplete="off" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
        
            <input type="text" maxlength="25" placeholder="Usuario" id="usuario" name="usuario" autocomplete="nope">
            <br>
            <input type="password" maxlength="25" placeholder="Contraseña" id="clave" name="clave" autocomplete="new-password">
            <br>   
            <input type="password" maxlength="25" placeholder="Repita la Contraseña" id="clave2" name="clavetwo">
            <br>
            <input type="text" maxlength="25" placeholder="Nombre" id="nombre" name="nombre">
            <br>  
            <input type="text" maxlength="25" placeholder="Apellido" id="apellido" name="apellido">
            <br>  
            <input class="boton" name="submit" type="submit" id="ingreso" value="Registrarse"> <br>
            <!-- <h3 class="registro">¿Todavia no te registraste?</h3>  -->

            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <a class="register" href="login.php">Ya estoy registrado</a> 

        </form>
    </div>



</body>