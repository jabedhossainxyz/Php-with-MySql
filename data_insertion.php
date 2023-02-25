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

// $name = 'Jabed';
// $destination = 'Belgium';


$sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('Jamee', 'Canada')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The record has been inserted successfully <br>";
}else {
    echo "The record wasn't inserted  successfully cause of this error --->".mysqli_error($conn);
}

?>