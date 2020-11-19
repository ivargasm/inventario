<?php session_start();

if (isset($_SESSION['usuario'])){
    header('location: contenido.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $psw = $_POST['psw'];
    $psw = hash('sha512', $psw);


    try{
        $conexion = new PDO('mysql:host=localhost;dbname=inventarios', 'root', '');
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    $query = $conexion->prepare('select * from users where user = :usuario and psw = :psw');
        $query->execute(array(
            ':usuario' => $usuario,
            ':psw' => $psw
        ));

        $result = $query->fetch();
        
        if($result !=false){
            $_SESSION['usuario'] = $usuario;
            header('Location: contenido.php');
        }else{
            $errores .= '<li>Datos Incorrectos</li>' ;
        }
}

require 'vistas/login.view.php';
?>