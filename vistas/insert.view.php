<?php require 'header.php'; ?>

    <div class="fondo_agrega">
        <div class="logout">
            <a href="cerrar.php" class="btn red darken-4 white-text">cerrar sesion</a>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="insert">
            <div class="form">
                <h1>Alta de registros</h1>
                <div class="grupo">
                    <select name="user_id" id="">
                        <?php foreach($users as $user):?>
                            <option>Selecciona una opción</option>
                            <option name="user_id" value="<?php echo $user['user_id'] ?>"><?php echo $user['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="grupo">
                    <select name="stock_id" id="">
                        <?php foreach($stocks as $stock):?>
                            <option>Selecciona una opción</option>
                            <option name="stock_id" value="<?php echo $stock['stock_id'] ?>"><?php echo $stock['ns'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <input type="submit" value="Guardar" class="btn white-text">
                <a href="contenido.php" class="btn red darken-4 white-text">Regresar</a>
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