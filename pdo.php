<?php

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=inventarios', 'root', '');
        echo "Conexion Ok";
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

?>