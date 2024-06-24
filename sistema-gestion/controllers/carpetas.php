<?php

    Class Carpetas extends Controller{

        function __construct(){
            parent::__construct();
        }

        function render(){
            $this->view->title = "Carpetas compartidos";
            $this->view->renderHadle('carpetas/index');
        }
    }

?>