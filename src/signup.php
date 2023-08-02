<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up Page</title>
  <link rel="stylesheet" href="registerStyle.css">
  <script src="registerPage.js"></script>
  </head>
<body>
  <?php
  //definire le variabili e impostarle vuote-->
$name = $email = $password = $gender = '';
$nameErr = $emailErr = $passwordErr = $genderErr = '';
$formValid = true;

if ($_SERVER['REQUEST_METHOD']== 'POST'){
  $name = test_input($_POST['name']);
  $email = test_input($_POST['email']);
  $password = test_input($_POST['password']);
  if (isset($_POST['gender'])) {
    $gender = test_input($_POST['gender']);
};
};

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
<span class="error">*<?php echo $nameErr; ?></span>
 Name: <input  class="bart" type="text" name="name" placeholder="Name...">
 <span class="error">*<?php echo $emailErr; ?></span>
 Email: <input  class="bart" type="text" name="email" placeholder="Email...">
 <span class="error">*<?php echo $passwordErr; ?></span>
 Password: <input class="bart" type="text" name="password" placeholder="Password...">
 <span class="error">*<?php echo $genderErr; ?></span>
 Man: <input class="baro" type="radio" name="gender">
 Woman: <input class="baro" type="radio" name="gender">
 Other: <input class="baro" type="radio" name="gender">
 
 <input id="sub" value="Register" type="submit" name="submit" class="reg">
 <a href="http://localhost:3001/" class="back">Go the Main Page</a href="">
</div>



  <div class="registration">Your Registration:</div>
 
  <div id="data" class="registration1"><?php echo $name; ?></div>
  <div id="data" class="registration1"><?php echo $email; ?></div>
  <div id="data" class="registration1"><?php echo $password; ?></div>
  <div id="data" class="registration1"><?php echo $gender; ?></div>
  

  <div class="registration2">**Do not share your personal info!**</div>




  <body>
    <html>