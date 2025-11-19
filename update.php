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

    $sql = "UPDATE users SET name = '$name', surname = '$surname', email = '$email'";

    if(mysqli_query($conn, $sql)){
        echo "Dodano";
    }else{
        echo "Błąd" . mysql_error($conn);
    }
}

?>

<html>
    <head>
    </head>
    <body>
        <h1>Edycja użytkownika</h1>
<?php if(!empty($user)): ?>
        <form method="POST">
            <label>Imie</label>
        <input type="text" name="name" value=' <?= $user["Name"] ?>'>
        <label>Nazwisko</label>
        <input type="text" name="surname" value = '<?= $user["Surname"] ?>'>
        <label>Email</label>
        <input type="text" name="email" value = '<?= $user["email"] ?>'>

        <button type="submit">ADD record</button>
        </form>

        <?php else: ?>
            <p>Nie znaleziono usera</p>

            <?php endif; ?>
</body>
</html>
