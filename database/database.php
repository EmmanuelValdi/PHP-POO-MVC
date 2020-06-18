<?php 
    class Database
    {
        public static function StartUp()
        {
            $conexion = new PDO ("mysql:host=localhost;dbname=mvc","root","");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
            return $conexion;
        }
    }
?>