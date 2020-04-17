<?php 
    session_start(); 
    require_once("funkcje.php");

    if( test_input($_POST["login"]) == $osoba1->login && test_input($_POST["haslo"]) == $osoba1->haslo){
        $_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
        $_SESSION["zalogowany"] = 1;
        header('Location: user.php');
    } elseif( test_input($_POST["login"]) == $osoba2->login && test_input($_POST["haslo"]) == $osoba2->haslo){
        $_SESSION["zalogowanyImie"] = $osoba2->imieNazwisko;
        $_SESSION["zalogowany"] = 1;
        header("Location: user.php");
    } else {
        header("Location: index.php");
    }

?>