<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  <link rel="stylesheet" href="registerStyle.css">
  <script src="registerPage.js"></script>
  </head>
<body>
  <?php
  //definire le variabili e impostarle vuote-->
$email = $password = '';
$emailErr = $passwordErr =  '';
$formValid = true;

if ($_SERVER['REQUEST_METHOD']== 'POST'){
  $email = test_input($_POST['email']);
  $password = test_input($_POST['password']);

};

function test_input($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
};

?>

<div class="form">
<h2>Login to Chat Online</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">

 <span class="error">*<?php echo $emailErr; ?></span>
 Email: <input  class="bart" type="text" name="email" placeholder="Email...">
 <span class="error">*<?php echo $passwordErr; ?></span>
 Password: <input class="bart" type="text" name="password" placeholder="Password...">

 
 <input id="sub" value="Login" type="submit" name="submit" class="reg">
 <a href="http://localhost:3001/" class="back">Go the Main Page</a href="">
</div>








  <body>
    <html>