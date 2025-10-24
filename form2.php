<?php
session_start();


if(isset($_POST["name"])) {
    $_SESSION["name"] = $_POST["name"];
}
if(isset($_POST["surname"])) {
    $_SESSION["surname"] = $_POST["surname"];
}
?>
<html>
<head>
    <title>Adres</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h1>Welcome on second page</h1>
    <form action="form3.php" method="POST">
        <label for="miasto">Miasto:</label>
        <input type="text" name="city" id="city"><br>

        <label for="adres">Adres:</label>
        <input type="text" name="adress" id="adress"><br>

        <button type="submit">SEND</button>
    </form>
</body>
</html>
