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
echo '<br>';

$sql = "SELECT * FROM trip";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
echo ('Number of rows '.$num.'<br>');
echo '<br>';
echo 'Records found in the database: <br><br>';

for ($i=0; $i < $num; $i++) { 
    $row = mysqli_fetch_assoc($result);
    echo $row['sno']. ' Hello '.$row['name'].'Welcome to '. $row['dest'];
    echo '<br>';    
}

?>