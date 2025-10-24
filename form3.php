<?php
session_start();

// zapis danych z form2 do sesji
if(isset($_POST["city"])) {
    $_SESSION["city"] = $_POST["city"];
}
if(isset($_POST["adress"])) {
    $_SESSION["adress"] = $_POST["adress"];
}
?>
<html>
<head>
    <title>Dodatkowe info</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h1>Welcome on third page</h1>
    <form action="summary.php" method="POST">
        <label for="age">Wiek:</label>
        <input type="text" name="age" id="age"><br>

        <label for="sex">Płeć:</label>
        <input type="text" name="sex" id="sex"><br>

        <button type="submit">SEND</button>
    </form>
</body>
</html>
