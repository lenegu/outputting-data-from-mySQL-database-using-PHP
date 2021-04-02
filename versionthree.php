<html>
 <head>
  <meta charset="utf-8">
  <title>Тег table</title>
   </head>
 <body>
  <table border="1" width="30%" cellpadding="5">

<?php
require_once 'connection.php'; 
 

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 


$query = "SELECT * FROM users";

if ($result = mysqli_query($link, $query)) {


    while ($row = mysqli_fetch_assoc($result)) 
    {

        echo "<th>",$row["id"],"</th>";
        echo "<th>",$row["firt_name"],"</th>";
        echo "<th>",$row["last_name"],"<tr>";


    }


    mysqli_free_result($result);
}


mysqli_close($link);
?>
