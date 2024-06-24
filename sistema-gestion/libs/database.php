<?php
    class Database {

        private $hostname;
        private $databa;
        private $user;
        private $password;
        private $charset;
        public $conect;

        public function __construct(){
            $this->hostname = constant('HOST');
            $this->database = constant('BD');
            $this->user = constant('USER');
            $this->password = constant('PASSWORD');
            $this->charset = constant('CHARSET');
        }

        public function connect(){
            try{
                $this->conect = new PDO("mysql:host=$this->hostname; dbname=$this->database; charset=$this->charset", $this->user, $this->password);
                return $this->conect;
            } catch(PDOException $error){
                echo $error->getMessage();
            }
        }
    }

?>