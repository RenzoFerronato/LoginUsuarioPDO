<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, user-scable=no,
    initial-scale=1.0, maxium-scale=1.0, minium-scale=1.0"/>  
	<title>Club Atletico Independiente</title>
</head>
<body>

    <section class="contacto" id="contacto">
                <div class="contenedor">
                    <h3 class="titulo"><b>Asociate al rojo!</b></h3>
                    <h6 class="descripcion">Complete el siguiente formulario para ser parte de la familia del rojo</h6>

                    <form class="formulario" id="contactform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    
                        <input type="text" maxlength="25" placeholder="Nombre*" id="nombre" name="nombre" required>
                        <br>
                        <input type="text" maxlength="25" placeholder="Apellido*" id="apellido" name="apellido" required>
                        <br>
                        <input type="email" maxlength="45" placeholder="E-mail*" id="email" name="email" required>
                        <br>
                        <input type="text" maxlength="20" placeholder="Pais*" id="pais" name="pais" required>
                        <br>
                        <input type="tel" maxlength="25" placeholder="Telefono*" id="telefono" name="telefono" required>
                        <br>
                        <input type="tel" maxlength="12" placeholder="DNI" name="documento" id="documento">
                        <br>
                        
                        <?php if(!empty($errores)): ?>
                            <div class="alert error">
                                <?php echo $errores; ?>
                            </div>
                        <?php elseif($enviara): ?>
                            <div class="alert success">
                                <p>Enviado correctamente</p>
                            </div>
                        <?php endif ?>

                        <input class="boton" name="submit" type="submit" id="enviar" value="Enviar">

                    </form>
                </div>
        </section> 

</body>
</html>