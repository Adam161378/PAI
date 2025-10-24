<?php session_start(); ?>
<html>
<head>
    <title>Dane osobowe</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h1>Welcome on main page</h1>
    <form action="form2.php" method="POST">
        <label for="imie">Imię:</label>
        <input type="text" name="name" id="name"><br>

        <label for="nazwisko">Nazwisko:</label>
        <input type="text" name="surname" id="surname"><br>

        <button type="submit">SEND</button>
    </form>
</body>
</html>
