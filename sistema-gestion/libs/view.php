<?php

    class View{

        function __construct() {
        }

        function renderHadle($nombre){
            include_once("./views/" . $nombre . ".php");
        }

    }

?>