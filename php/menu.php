<nav class="navbar">
        <div class="navbar-container">
            <!-- Logo -->
            <div class="logo">
                <img src="../assets/images/twitter.jpg" alt="Logo" />
            </div>
            <!-- Nombre de usuario -->
            <div class="username">
                <?php
                if (isset($_SESSION['nombre_usuario'])) {
                    echo htmlspecialchars($_SESSION['nombre_usuario']);
                } else {
                    echo "Invitado"; // O redirigir al inicio de sesión
                }
                ?>
            </div>
            <!-- Botón de cerrar sesión -->
            <div class="logout">
                <a href="logout.php">Cerrar Sesión</a>
            </div>
        </div>
    </nav>