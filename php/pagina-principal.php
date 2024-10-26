<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        header("Location: ../index.php");
        exit;
        echo $_SESSION['id'] . " " . $_SESSION['username'];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title></title>
</head>
<body>
    <?php
    include "menu.php";
    ?>
    <div class="content"></div>
    <div class="section">
        <?php 
            if(isset($_SESSION['save-tweet'])) {
                echo $_SESSION['save-tweet'];
                unset($_SESSION['save-tweet']);
            }
        ?>
        <div class="content-form">
            <form action="save-tweet.php" method="post" class="form-tweet">
            <legend>Crea tu Tweet</legend>
                <fieldset>
                    <textarea name="tweet" id="tweet" placeholder="Contenido del Tweet"></textarea>
                    <input type="submit" name="submit" value="Publicar" />
                </fieldset>
            </form>
        </div>
    </div>
    <footer>
    
    </footer>
</body>

</html>
