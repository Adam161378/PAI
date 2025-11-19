<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dodawanie nowego rekordu</h1>
    <form method="POST">
        <label>Imie</label>
<input type="text" name="name">
        <label>Nazwisko</label>
<input type="text" name="surname">
        <label>Email</label>
<input type="text" name="email">

<button type="submit">ADD record</button>

    </form>
</body>
</html>
<?php
    require_once("db_connection.php"); 

    $name = $_POST["name"];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

   if ($name == 'admin') {
      echo "Nie można dodać imienia 'admin'.";
    } else {
        $sql = "INSERT INTO users (Name, Surname, email) VALUES ('$name', '$surname', '$email')";

if(mysqli_query($conn,$sql)){
    echo "Rekord dodany";
   // header(Location:"List.php");
    //exit();
}else{
    echo "Błąd: " . mysqli_error($conn);
}
    }




?>
