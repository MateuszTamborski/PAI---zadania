<?php session_start(); 
    if(isSet($_GET["czas"])){
        setcookie("Cookie",$_GET["czas"],time()+10, "/");
        echo "Pomyślnie dodano ciasteczko!<br>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
<body>
    <?php
        require_once("funkcje.php");
    ?>  

    <a href="index.php">Wstecz</a>
</body>
</html>