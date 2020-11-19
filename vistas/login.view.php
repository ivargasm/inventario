<?php require 'header.php'; ?>

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