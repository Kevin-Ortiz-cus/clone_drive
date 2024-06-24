<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location:" . constant('URL') . "login");
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <title>Sistema gestion archivos</title>
</head>

<body>
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a href="#" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="<?php echo constant('URL'); ?>main" class="brand-logo logo">
                    <i class="fa-brands fa-wolf-pack-battalion"></i>
                    <span>KevinDev</span>
                </a>
            </header>
            <nav class="dashboard-nav-list">
                <a href="<?php echo constant('URL'); ?>main" class="dashboard-nav-item">
                    <i class="fas fa-home"></i>
                    Inicio
                </a>
                <a href="<?php echo constant('URL'); ?>usuario" class="dashboard-nav-item active">
                    <i class="fa-solid fa-users"></i>
                    usuario
                </a>
                <a href="<?php echo constant('URL'); ?>ficheros" class="dashboard-nav-item">
                    <i class="fa-solid fa-file"></i>
                    Ficheros
                </a>
                <a href="<?php echo constant('URL'); ?>carpetas" class="dashboard-nav-item">
                    <i class="fa-solid fa-folder"></i>
                    Carpetas
                </a>
                <div class="nav-item-divider"></div>
                <a href="#" class="dashboard-nav-item">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
            </header>
            <div class='dashboard-content d-flex flex-column justify-content-between'>
                <div class='card-header bg-transparent text-dark'>
                    <h2><?php echo $this->title ?></h2>
                </div>