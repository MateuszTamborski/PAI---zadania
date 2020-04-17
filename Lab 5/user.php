<?php session_start(); 
    if($_SESSION["zalogowany"] !== 1){
        header("Location: index.php");
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
        echo "Zalogowano! <br>";
        echo $_SESSION["zalogowanyImie"];
    ?> 

    <form action="/index.php" method="POST">
        <input type="submit" value="Wyloguj" name="wyloguj">
    </form>

    Strona: <a href="index.php">index.php</a>

    <form action="/user.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Upload plików</legend>
            <input type="file"  name="myfile">
            <input type="submit" value="Prześlij plik" name="wyslij">
        </fieldset>
    <?php
        if(isSet($_POST['wyslij'])){
            $fileName = $_FILES['myfile']['name'];
            $fileSize = $_FILES['myfile']['size'];
            $fileTmpName = $_FILES['myfile']['tmp_name'];
            $fileType = $_FILES['myfile']['type'];
            if( $fileName !== "" && in_array($fileType, ['image/png', 'image/jpg', 'image/PNG', 'image/JPEG', 'image/jpeg']))
            {
                $uploadPath = "pliki/" . $fileName;
                if( move_uploaded_file($fileTmpName, $uploadPath))
                    echo "<br>Zdjęcie zostało przesłane!<br>";
                    echo "<img src=".$uploadPath." alt='Tutaj powinno być zdjęcie!' height=288 width=384 />";
                    echo "<br>";
            }
        }
    ?>
    </form>
</body>
</html>