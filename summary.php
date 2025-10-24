<?php
session_start();


if(isset($_POST["age"])) {
    $_SESSION["age"] = $_POST["age"];
}
if(isset($_POST["sex"])) {
    $_SESSION["sex"] = $_POST["sex"];
}
?>
<html>
<head>
    <title>Podsumowanie</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h1>Podsumowanie danych</h1>

    <?php
    if(isset($_SESSION["name"]) && isset($_SESSION["surname"])){
        echo "Nazywam się: " . $_SESSION["name"] . " " . $_SESSION["surname"] . "<br>";
    }

    if(isset($_SESSION["city"]) && isset($_SESSION["adress"])){
        echo "Mieszkam w: " . $_SESSION["city"] . " pod adresem " . $_SESSION["adress"] . "<br>";
    }

    if(isset($_SESSION["age"])){
        echo "Mam lat: " . $_SESSION["age"] . "<br>";
    }

    if(isset($_SESSION["sex"])){
        echo "Jestem płci: " . $_SESSION["sex"] . "<br>";
    }
    ?>
<br>
<br>
<br>    
     <a href="logOUT.php">Wyloguj się</a>   
</body>
</html>
