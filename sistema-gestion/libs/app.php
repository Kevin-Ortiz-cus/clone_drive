<?php

include_once("controllers/ErrorHandle.php");

    Class App{

        function __construct(){

            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, "/");
            $url = explode("/", $url);

            if(empty($url[0])) {
                $archivoLogin = "controllers/login.php";

                include_once($archivoLogin);
                $controller = new Login();
                $controller->loadModel("login");
                $controller->render();

                return '';
            }

            $archivoController = "controllers/" . $url['0'] . ".php";

            if(file_exists($archivoController)) {
                include_once($archivoController);
                $controller = new $url[0];
                $controller->loadModel($url[0]);

                if(count($url) > 1) {
                    if(count($url) > 2) {
                        $controller->{$url[1]}($url[2]);
                    }else {
                        $controller->{$url[1]}();
                    }
                }else {
                    $controller->render();
                }
                
            }else {
                $controller = new ErrorHandle();
                $controller->render();
            }
        }

    }

?>