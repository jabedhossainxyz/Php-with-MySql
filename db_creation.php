<?php

$servername = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die('Sorry it is failed to connect: '.mysqli_connect_error());
}else {
    echo "Connection was successfful <br>";
}

$sql = 'CREATE DATABASE jabed2';
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The database was created successfully <br>";
}else {
    echo "The database wasn't created successfully cause of this error --->".mysqli_error($conn);
}


?>