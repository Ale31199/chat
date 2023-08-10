<div class="form">
<h2>Login to Chat Online</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">

 Email: <input  class="bart" type="text" name="email" placeholder="Email..."> 
 Password: <input class="bart" type="password" name="password" placeholder="Password..."> <!-- Usa input type "password" per la password -->

 
 <input id="sub" value="Login" type="submit" name="submit" class="reg">
 <a href="http://localhost:3001/" class="back">Go the Main Page</a href="">
</div>

<?php
$servername = "127.0.0.1";
$username = "alessio";
$password = "caccamella.31199";
$dbname = "nuvola";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `testtabella` WHERE `Email` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['Password'])) {
            echo "Login successful";
            // Qui puoi effettuare l'accesso all'app o alla pagina dopo il login
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "Invalid email or password";
    }

    $stmt->close();
    $conn->close();
}
?>


<?php
   function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  };


?>
