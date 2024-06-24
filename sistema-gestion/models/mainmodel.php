<?php

    class MainModel extends Model{

        function __construct() {
            parent::__construct();
        }

        function myCount($tabla) {
            try {
                $query = $this->db->connect()->prepare("SELECT COUNT(*) FROM $tabla");
                $query->execute();
            
                // Obtener el resultado como un array asociativo
                $result = $query->fetch(PDO::FETCH_ASSOC);

                // Devolver el conteo de usuarios
                return $result;
                
            } catch(PDOException $ex) {
                return false;
            }
        }

    }

?>