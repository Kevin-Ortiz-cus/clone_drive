<?php

    Class Login extends Controller{

        function __construct(){
            parent::__construct();
        }

        function render(){
            $this->view->renderHadle('login/index');
        }

        function entrarWeb() {
            $email = $_POST['email'];
            $password = $_POST['pass'];

            $datos = ["email" => $email, "pass" => $password];

            if($this->model->select($datos) == false){
                $this->view->mensaje = "Este usuario no existe";
                $this->render();
            }
        }
    }

?>