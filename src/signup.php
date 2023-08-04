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

  
$name = $email = $password = $gender = '';
$nameErr = $emailErr = $passwordErr = $genderErr = '';


if ($_SERVER['REQUEST_METHOD']== 'POST'){
  
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  $password = test_input($_POST['password']);
  if (isset($_POST['gender'])) {
  $gender = test_input($_POST['gender']);
  };
};



function check($name, $email, $password){
if($name === '' || $email === '' || $password === ''){
echo '<script>alert("test")</script>';
return false;
} else {
  return true;
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" onsubmit="return check()">


<span class="error">*<?php echo $nameErr; ?></span>
 Name: <input  class="bart" type="text" name="name" placeholder="Name...">


 <span class="error">*<?php echo $emailErr; ?></span>
 Email: <input  class="bart" type="text" name="email" placeholder="Email...">


 <span class="error">*<?php echo $passwordErr; ?></span>
 Password: <input class="bart" type="text" name="password" placeholder="Password...">


 <span class="error">*<?php echo $genderErr; ?></span>
<input class="baro" type="radio" name="gender" <?php ?>>Male
<input class="baro" type="radio" name="gender">Female
<input class="baro" type="radio" name="gender">Other
 
 <input id="sub" value="Register" type="submit" name="submit" class="reg">
 <a href="http://localhost:3001/" class="back">Go the Main Page</a href="">
</div>





  <div class="registration">Your Registration:</div>

  <div id="data" class="registration1"> <?php 
  function getName($name){
      $test = fopen('regdata.txt', 'a') or die('something wrong');
      $name= "$name\n"; 
      fwrite($test, $name);
      fclose($test);
      return($name);
  }
   getName($name); ?></div>



<div id="data" class="registration1"><?php 
  function getNamee($email){
      $test = fopen('regdata.txt', 'a') or die('something wrong');
      $email= "$email\n"; 
      fwrite($test, $email);
      fclose($test);
  }
    getNamee($email); ?></div>


<div id="data" class="registration1"><?php 
  function getNameee($password){
      $test = fopen('regdata.txt', 'a') or die('something wrong');
      $password= "$password\n"; 
      fwrite($test, $password);
      fclose($test);
  }
  getNameee($password); ?></div>



<div id="data" class="registration1"><?php 
  function getNameeee($gender){
      $test = fopen('regdata.txt', 'a') or die('something wrong');
      $gender= "$gender\n"; 
      fwrite($test, $gender);
      fclose($test);
  }
   getNameeee($gender); ?></div>


<div id="data" class="registration11"><?php 
function randomId(){
  $limit = rand(10, 20);
  $id= '';
  $chara= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

 for ($i=0; $i < $limit; $i++){
  $random = rand(0, strlen($chara));
  $id .=$chara[$random];
 };
 return $id;
};
$id = randomId();
echo($id);


  function getNameeeex($id){
      $test = fopen('regdata.txt', 'a') or die('something wrong');
      $id= "$id\n"; 
      fwrite($test, $id);
      fclose($test);
  }
  getNameeeex($id); 
  ?>
</div>
  <div class="registration2">**Do not share your personal info!**</div>


  <body>
    <html>