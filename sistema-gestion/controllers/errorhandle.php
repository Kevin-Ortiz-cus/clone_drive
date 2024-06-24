<?php

    class ErrorHandle extends Controller{

        function __construct(){
            parent::__construct();
        }

        function render(){
            $this->view->title = "Ups parece que hay un error";
            $this->view->renderHadle("errores/index");
        }

    }

?>