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


$sql = "INSERT INTO myTest (firstname, lastname, email)
VALUES ('Alessio', 'Santillo', 'alessiosantillo31199@gmail.com')";

$sql = "INSERT INTO myTest (firstname, lastname, email)
VALUES ('Alessio', 'Santillo', 'alessiosantillo31199@gmail.com')";

$sql = "INSERT INTO myTest (firstname, lastname, email)
VALUES ('Alessio', 'Santillo', 'alessiosantillo31199@gmail.com')";


//if (mysqli_query($conn, $sql))  vale per il singolo $sql

if (mysqli_multi_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);
  echo "New record created successfully";
} else {
  echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
}

mysqli_close($conn);


?>