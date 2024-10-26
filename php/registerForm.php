<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="../php/registro.php" method="POST">
    <legend>Registro</legend>
        <fieldset>
            <input type="text" name="username" id="username" placeholder="Username">

            <input type="email" name="mail" id="mail" placeholder="Mail">

            <input type="password" name="pass" id="pass" placeholder="Password">
            <input type="password" name="passConfirm" id="passConfirm" placeholder="Password Confirm">

            <input type="submit" name="submit" value="Register">
        </fieldset>
    </form>
</body>
</html>
