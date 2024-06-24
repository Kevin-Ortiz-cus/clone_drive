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
    <form action="<?php echo constant('URL'); ?>login/entrarWeb" method="POST" class="formulario">
        <h2 class="sub-title">Iniciar Sesión</h2>
        <label for="correo">Correo electronico:</label>
        <input type="email" id="correo" name="email" value="kevin@gmail.com">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="pass" value="kevin">
        <input type="submit" value="Ingresar" name="enviar" class="btn-enviar">
        <p>¿Aún no te has registrado? <a href="<?php echo constant('URL'); ?>registro">Registrarse</a>
        </p>
    </form>
    <?php if(!empty($this->mensaje)){
        echo "<p>$this->mensaje</p>";
    } ?>
</body>