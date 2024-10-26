<?php
    session_start();
    require_once('../connection/connection.php');

    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $conexion = connection();

    if($conexion) {
        $query = "SELECT * FROM social_network.users WHERE email = ? AND password = ? LIMIT 1";
        $result = mysqli_prepare($conexion, $query);
        mysqli_stmt_bind_param($result, "ss", $mail, $pass);

        mysqli_stmt_execute($result);
        $resultados = mysqli_stmt_get_result($result);

    } else {
        echo "No hay conexion con la base de datos";
    }

    $filas = mysqli_fetch_assoc($resultados);

    if($mail == $filas['email'] && $pass == $filas['password']) {
        echo "Login exitoso";
        $_SESSION['id'] = $filas['id'];
        $_SESSION['username'] = $filas['username'];
        echo $_SESSION['id'] . " " . $_SESSION['username'];
        header("Location: ../php/pagina-principal.php");
    } else {
        echo "Login fallido";
    }
?>
