<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/formulario.css">
    <title>Iniciar Sesión</title>
</head>

<body>
    <h1 class="title">KevinDev</h1>
    <form action="<?php echo constant('URL'); ?>registro/registrarUsuario" method="POST" class="formulario">
        <h2 class="sub-title">Resgistrase</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="correo">Correo electronico:</label>
        <input type="email" id="correo" name="email">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="pass">
        <input type="submit" value="Ingresar" name="enviar" class="btn-enviar">
        <p>¿Ya estas registrado? <a href="<?php echo constant('URL'); ?>login">Iniciar sesion</a>
        </p>
    </form>

    <?php if(!empty($this->mensaje)){
        echo "<p>$this->mensaje</p>";
    } ?>
</body>