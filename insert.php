<?php session_start();

    if (isset($_SESSION['usuario'])){

        try{
            $conexion = new PDO('mysql:host=localhost;dbname=inventarios', 'root', '');
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    
        $query = $conexion->prepare('SELECT u.user_id, u.user, concat(u.name, " ", u.last_name) name FROM users u order by last_name;');
            $query->execute();
    
        $users = $query->fetchall();

        $query = $conexion->prepare('SELECT stock_id, ns, description name FROM stock;');
            $query->execute();
    
        $stocks = $query->fetchall();

        require 'vistas/insert.view.php';
    }else{
        header('location: index.php');
    }

    
?>