<?php

    class usuarioModel extends Model{

        function __construct() {
            parent::__construct();
        }

        function getUsuario() {
            try {
                $results = [];
                $query = $this->db->connect()->prepare("SELECT * FROM usuario");
                $query->execute();
        
                $results = $query->fetchAll(PDO::FETCH_ASSOC);
        
                return $results;
                
            } catch(PDOException $ex) {
                // Mostrar el mensaje de error específico
                echo "Error: " . $ex->getMessage();
                return false;
            }
        }
        

        function getUsuarioId($id) {
            try {
                $datosUsuario;
                $query = $this->db->connect()->prepare("SELECT * FROM usuario WHERE id=$id");
                $query->execute();
        
                return $datosusuario;
                
            } catch(PDOException $ex) {
                return false;
            }
        }

    }

?>