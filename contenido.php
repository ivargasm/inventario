<?php session_start();

    if (isset($_SESSION['usuario'])){
        require 'vistas/contenido.view.php';
    }else{
        header('location: index.php');
    }
    
    

?>