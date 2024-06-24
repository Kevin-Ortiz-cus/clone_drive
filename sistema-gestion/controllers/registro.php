<?php

    Class Registro extends Controller{

        function __construct(){
            parent::__construct();
        }

        function render(){
            $this->view->renderHadle('registro/index');
        }

        function registrarUsuario() {
            $nombre = !empty($_POST['nombre']) ? $_POST['nombre'] : null;
            $email = !empty($_POST['email']) ? $_POST['email'] : null;
            $password = !empty($_POST['pass']) ? $_POST['pass'] : null;

            $datos = ["nombre" => $nombre, "email" => $email, "pass" => $password];


            if($this->model->insert($datos)){

                $this->view->mensaje = "Te has inscrito correctamente";
                $this->render();
                
            }else {
                $this->view->mensaje = "Ha ocurrido un error al registrarse";
                $this->render();
            }
        }
    }

?>