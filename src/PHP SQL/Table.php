<?php
$servername = 'localhost';
$username = 'Alessio';
$password = 'caccamella99';
$dbname = 'myDB';

//create connection
$conn = mysqli_connect($servername, $username, $password);

//check connection
if (!$conn) {
  die('Connection failed:' . mysqli_connect_error());
}
echo 'Connected successfully';



//create a database
$sql = "CREATE DATABASE myTest (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAT(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if (mysqli_query($conn, $sql)) {
  echo 'Table myTest created successfully';
} else {
  echo 'Error creating table: ' . mysqli_error($conn);
}

mysqli_close($conn);


?>