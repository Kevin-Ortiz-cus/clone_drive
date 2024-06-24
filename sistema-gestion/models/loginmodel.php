<?php

    class LoginModel extends Model{

        function __construct() {
            parent::__construct();
        }

        function select($datos) {
            try {
                $query = $this->db->connect()->prepare("SELECT * FROM usuario WHERE correo_electronico =:correo AND contraseña =:pass");
                $query->bindParam(':correo', $datos['email']);
                $query->bindParam(':pass', $datos['pass']);
                $query->execute();

                $result = $query->fetch(PDO::FETCH_ASSOC);

                if(is_countable($result) && count($result) > 0) {
                    session_start();
                    $_SESSION['email'] = $datos['email'];
                    header("Location:" . constant('URL') ."main");
                    die();
                }
            } catch(PDOException $ex) {
                return false;
            }
        }

    }

?>