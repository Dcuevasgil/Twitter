<?php

    require_once('../connection/connection.php');
    $conexion = connection();

    

    $nombreUsuario = $_POST['username'];
    $correo = $_POST['mail'];
    $fecha = date("Y-m-d");
    $descripcion = '';
    echo $fecha;

    if($_POST['pass'] == $_POST['passConfirm']) {
        $contraseña = $_POST['pass'];
    } else {
        echo "Las contraseñas no coinciden";
    }

    if($conexion) {
        $query = "INSERT INTO users (username, email, password, description, createDate) VALUES (?, ?, ?, ?, ?)";
        echo $query;
        $result = mysqli_prepare($conexion, $query);
        mysqli_stmt_bind_param($result, "sssss", $nombreUsuario, $correo, $contraseña, $descripcion, $fecha);
        if(mysqli_stmt_execute($result)) {
            echo "Registro exitoso";
        } else {
            echo "Registro fallido" . mysqli_stmt_error($result);
        }
    } else {
        echo "No hay conexion con la base de datos";
    }
?>
