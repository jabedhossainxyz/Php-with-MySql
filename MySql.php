<?php 
echo "Welcome to the stage where we are ready to get connected to a database <br>";

$servername = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die('Sorry it is failed to connect: '.mysqli_connect_error());
}else {
    echo "Connection was successfful";
}


?>