<?php

$connect = mysqli_connect (
    'mysql_db',
    'database',
    'azhar',
    'php_docker'
);

$table_name = "azhar";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['TITLE']."</p>";
    echo "<p>".$i['BODY']."</p>";
    echo "<p>".$i['TANGGAL']."</p>";
    echo "<hr>";
}  
 else {
    echo "Error: " . mysqli_error($connect);
}

mysqli_close($connect);