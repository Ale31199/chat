<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
  <link rel="stylesheet" href="registerStyle.css">
  <script src="registerPage.js"></script>
  </head>
<body>
  <?php
  //definire le variabili e impostarle vuote-->
$name = $email = $password = $gender = '';

if ($_SERVER['REQUEST_METHOD']== 'POST'){
  $name = test_input($_POST['name']);
  $email = test_input($_POST['email']);
  $password = test_input($_POST['password']);
  $gender = test_input($_POST['gender']);
};

function test_input($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="form">
<h2>Register to Chat Online</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
 Name: <input  class="bart" type="text" name="name">
 Email: <input  class="bart" type="text" name="email">
 Password: <input class="bart" type="text" name="password">
 Man: <input class="baro" type="radio" name="gender">
 Woman: <input class="baro" type="radio" name="gender">
 Other: <input class="baro" type="radio" name="gender">
 <button class="reg">Register</button>
</div>

<?php
echo 'Your Registration';
echo $name;
echo $email;
echo $password;
echo $gender;

echo '**Do not share your personal info to nobody!**';

?>
  <body>
    <html>