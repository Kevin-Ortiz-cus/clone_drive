<?php

    class RegistroModel extends Model{

        function __construct() {
            parent::__construct();
        }

        function insert($datos) {
            try {
                $query = $this->db->connect()->prepare("INSERT INTO usuario VALUES (null, :nombre, :pass, :correo, null)");
                $query->bindParam(':nombre', $datos['nombre']);
                $query->bindParam(':pass', $datos['pass']);
                $query->bindParam(':correo', $datos['email']);
                $query->execute();
                return true;
            } catch(PDOException $ex) {
                return false;
            }
        }

    }

?>