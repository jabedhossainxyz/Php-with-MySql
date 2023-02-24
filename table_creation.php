<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jabed2';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die('Sorry it is failed to connect: '.mysqli_connect_error());
}else {
    echo "Connection was successfful <br>";
}

$sql = "CREATE TABLE `trip` (`sno` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(12) NOT NULL, `dest` VARCHAR(6) NOT NULL, PRIMARY KEY (`sno`))";


$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The table was created successfully <br>";
}else {
    echo "The table wasn't created successfully cause of this error --->".mysqli_error($conn);
}

?>