<?php
session_start();
session_destroy();
echo("Wylogowano Cię");
header("Location: form1.php")
?>
<head>
    <title>Document</title>
</head>
<body>
 
</body>
</html>