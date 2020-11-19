<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/normalizer.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <div class="fondo">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
            <div class="form">
                <h1>Login</h1>
                <div class="grupo">
                    <input type="text" id="autocomplete-input" name="usuario" required><span class="barra"></span>
                    <label for="autocomplete-input">Usuario</label>
                </div>
                <div class="grupo">
                    <input type="password" name="psw" id="" required><span class="barra"></span>
                    <label for="psw">Contraseña</label>
                </div>
                <input type="submit" value="Ingresar" class="btn white-text">
            </div>
            <?php if(!empty($errores)): ?>
                <div>
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
    </div>

    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/java.js"></script>
</body>
</html>