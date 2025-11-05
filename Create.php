 <?php
    include("db_connection.php");
   // $sql = "INSERT INTO `users`(`Name`, `Surname`, `email`) VALUES ('adam','małysz','amalysz@gmail.com')";

    //$sql = "UPDATE `users` SET `Name`='Piotr' WHERE name='adam'";

    //$sql = "DELETE FROM users WHERE name='Piotr'";

   //if(mysqli_query($conn, $sql)){
    //   echo "Wykonano zapytanie";
   //}else{
      //  echo "Błąd".mysql_error($conn);
   // }
    
    $sql = "Select * from Users";
    $result = mysqli_query($conn, $sql);  // zwracany jest mysqli_result
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["Name"]. " ".$row["Surname"];
        }
    }else{
        echo "Brak pobranych rekordow";
    }
    ?>
