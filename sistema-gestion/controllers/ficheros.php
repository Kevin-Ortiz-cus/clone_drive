<?php

    Class Ficheros extends Controller{

        function __construct(){
            parent::__construct();
        }

        function render(){
            $this->view->title = "Ficheros compartidos";
            $this->view->renderHadle('ficheros/index');
        }
    }

?>