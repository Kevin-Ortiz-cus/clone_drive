<?php

    Class Main extends Controller{

        function __construct(){
            parent::__construct();
        }

        function render(){
            $this->view->title = "Información general";
            $this->view->usuarios = $this->model->myCount("usuario");
            $this->view->carpetas = $this->model->myCount("carpeta");
            $this->view->ficheros = $this->model->myCount("archivo");
            $this->view->renderHadle('main/index');
        }
    }

?>