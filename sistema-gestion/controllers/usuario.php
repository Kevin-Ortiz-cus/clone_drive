<?php

    Class usuario extends Controller{

        function __construct(){
            parent::__construct();
        }

        function render(){
            $this->view->title = "usuario Registrados";
            $this->view->datos = $this->model->getUsuario();
            $this->view->renderHadle('usuario/index');
        }

    }

?>