<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- die(); zakonczenie skryptu 
    $conn = mysqli_connect(hostname,  username,   password,  db_name ) polaczenie z baza 
     mysqli_connect("localhost", "root", "", "Adam_Sadowski" )

     if(!$conn){
     die("Błąd połączenia");
     }
        echo "Wszystko git";
        
        podlaczanie plików:
        1) include      -> Warning, program dziala dalej
        2) include once
        3) require     -> error, program NIE działa
        4) require once

        include("");
    -->
<?php
$conn = mysqli_connect("localhost", "root", "", "adam_sadowski");
if(!$conn){
    die("Błąd połączenia" . mysqli_connect_error());
}
echo "Sukces połączeniowy ";


?>
</body>
</html>