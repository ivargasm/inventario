<?php session_start();

    if (isset($_SESSION['usuario'])){

        try{
            $conexion = new PDO('mysql:host=localhost;dbname=inventarios', 'root', '');
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }

        $query = $conexion->prepare('SELECT u.user_id, u.user, concat(u.name, " ", u.last_name) nombre, t.type_id, t.type_dsc, s.stock_id, s.NS, s.description FROM `assignment` a
                                    JOIN users u on u.user_id = a.user_id
                                    JOIN stock s on s.stock_id = a.stock_id
                                    JOIN type_material t on t.type_id = s.type_id;');
            $query->execute();

        $users = $query->fetchall();

        
        // if ($_SERVER['REQUEST_METHOD']=='POST'){
        //     $user_id = $_POST['user_id'];
        //     $stock_id = $_POST['stock_id'];

        //     $query = $conexion->prepare('insert into assignment values (null, :user_id, :stock_id);');
        //         $query->execute(array(
        //             ':user_id' => $user_id,
        //             ':stock_id' => $stock_id
        //         ));
        // }
        

        require 'vistas/update.view.php';
    }else{
        header('location: index.php');
    }

?>