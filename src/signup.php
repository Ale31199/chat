<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up Page</title>
  <link rel="stylesheet" href="registerStyle.css">
  <script id ="registrati" src="registerPage.js"></script>
  </head>
<body>
  <?php
  //definire le variabili e impostarle vuote-->

  
$name = $surname = $email = $pass = '';
$id= '';

if ($_SERVER['REQUEST_METHOD']== 'POST'){
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $email = $_POST["email"];
  $pass = ($_POST["password"]);
};

////////////////////////

$servername= "127.0.0.1";
$username="alessio";
$passw="caccamella.31199";
$dbname="nuvola";

$conn = new mysqli($servername, $username, $passw, $dbname);

if($conn->connect_error){
  die("Connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO `testtabella` (`Name`, `Surname`, `Email`, `Password`)
VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $surname, $email, $pass);

if($stmt->execute()){
  echo "";
} else {
  echo "" . $stmt->error;
}
$stmt->close();
$conn->close();

/////////////////////
function test_input($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
};
?>

<div class="form">
<h2>Sign Up to Chat Online</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">

<span class="error">*</span>
 Name: <input  class="bart" type="text" name="name" placeholder="Name...">

 <span class="error">*</span>
 Surname: <input  class="bart" type="text" name="surname" placeholder="Surname...">

 <span class="error">*</span>
 Email: <input  class="bart" type="email" name="email" placeholder="Email...">

 <span class="error">*</span>
 Password: <input class="bart" type="password" name="password" placeholder="Password...">
</div>

<input id="sub" value="Register" type="submit" name="submit" class="reg">
 <a href="http://localhost:3001/" class="back">Go the Main Page</a href="">
</div>

  <body>
    <html>