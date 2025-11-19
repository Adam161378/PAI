<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table {
    border-collapse: collapse;
    width: 80%;
    margin-bottom: 20px;
}
th, td, tr {
    border: 1px solid #ccc;
    padding: 8px 12px;
    text-align: center;
}
        </style>
    <table>
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Nr telefonu</th>
    </tr>
    <?php
    require_once("db_connection.php"); 

     $sql = "Select * from Users";
    $result = mysqli_query($conn, $sql);
 if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
           echo "<tr>";
              echo  "<td>" .$row['Name']. "</td>";
              echo  "<td>" .$row['Surname']. "</td>";
               echo "<td>" .$row['email']. "</td>";
             echo "</tr>";
        }else {
    echo "<tr><td colspan='3'>Brak danych</td></tr>";
}
    }
    
    ?>
    <br>
    <a href="create_record.php">Wróc do formularza</a>
</body>
</html>
