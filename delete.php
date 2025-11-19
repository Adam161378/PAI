<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Aktualizacja uzytkownika</title>
</head>
<body>
    <h1>Edytuj uzytkownika</h1>
    <?php if(!empty($user)): ?>
        <form action="Aktualizacja.php" method="POST">
            <label>Imie:</label><input type="hidden" name="id" value="<?= $user['name']?>"></label><br>
            <label>Email: <input type="email" value="<?= $user['email']?>"></label>
            <button type="submit">Zapisz zmiany</button>
        </form>
        <p>Nie znaleziono uzytkownika</p>
        <?php endif; ?>
    <?php

require_once('db_connection.php');
if(isset($_GET['email'])){
    $email = $_GET['email'];
    $sql = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $sql = "DELETE FROM users";

    if(mysqli_query($conn, $sql)){
        echo "Dodano";
    }else{
        echo "Błąd" . mysql_error($conn);
    }
}

?>
</body>
    </html>
