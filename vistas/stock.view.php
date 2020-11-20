<?php require 'header.php'; ?>

    <div class="fondo_update">
        <div class="logout">
            <a href="cerrar.php" class="btn red darken-4 white-text">cerrar sesion</a>
        </div>
        <div class="encabezados">
            <div class="detalle">
                <p>Usuario</p>
                <div class="info">
                    <?php foreach ($users as $user): ?>
                        <p><?php echo $user['user']; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="detalle">
                <p>Nombre</p>
                <div class="info">
                    <?php foreach ($users as $user): ?>
                        <p><?php echo $user['nombre']; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="detalle">
                <p>Equipo</p>
                <div class="info">
                    <?php foreach ($users as $user): ?>
                        <p><?php echo $user['type_dsc']; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="detalle">
                <p>Descripcion</p>
                <div class="info">
                    <?php foreach ($users as $user): ?>
                        <p><?php echo $user['description']; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="detalle">
                <p>Acciones</p>
                <div class="info">
                    <?php foreach ($users as $user): ?>
                        <p><?php echo $user['user_id']; ?></p>
                        <a href=""><i class="fas fa-edit"></i></a>
                        <a href=""><i class="fas fa-file-import"></i></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>



<script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/java.js"></script>
</body>
</html>