<?php
$servername = 'localhost';
$username = 'Alessio';
$password = 'caccamella99';


//create connection
$conn = mysqli_connect($servername, $username, $password);

//check connection
if (!$conn) {
  die('Connection failed:' . mysqli_connect_error());
}
echo 'Connected successfully';



//create a database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

