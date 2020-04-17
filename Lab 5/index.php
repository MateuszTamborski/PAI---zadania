<?php session_start(); 
    if(isSet($_POST['wyloguj'])){
        $_SESSION["zalogowany"] = 0; 
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

        echo "<h1>Nasz system</h1>";
        //if(isSet($_POST["login"]) && isSet($_POST["haslo"])){
            //echo "Przesłany login: " . test_input($_POST["login"]) . "<br>";
            //echo "Przesłane hasło: " . test_input($_POST["haslo"]);
        //}
    ?>
    <form action="/logowanie.php" method="POST">
        <fieldset>
            <legend>Logowanie</legend>
            <table>
                <tr><td>Login:</td><td><input type="text" name="login"></td></tr>
                <tr><td>Hasło:</td><td><input type="password" name="haslo"></td></tr>
                <tr><td><input type="submit" value="Zaloguj" name="zaloguj"></td></tr>
            </table>
        </fieldset>
    </form>

    <form action="/cookie.php" method="GET">
        <fieldset>
            <legend>Tworzenie cookies</legend>
            <input type="number" name="czas" /> 
            <input type="submit" value="Utwórz Cookie" />
        </fieldset>
    </form>
    
    <?php
        if(isSet($_COOKIE["Cookie"])){
            echo "Wartość cookie: " . $_COOKIE["Cookie"] . "<br>";
        }
    ?>
    
    Strona: <a href="user.php">user.php</a>
</body>
</html>
