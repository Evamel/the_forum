<?php require '../app/View/includes/header.php' ?>

<!DOCTYPE html>
<html>
<body>
<form method="post" action="">
Pseudo:<br>
<input type="text" name="user_name" >
<br>
Email:<br>
<input type="text" name="user_email">
<br><br>
Password:<br>
<input type="password" name="user_pass">
<br><br>
<input type="submit" value="Submit">
</form> 
</body>
</html>

<?php
require_once '../app/libraries/DatabaseManager.php';
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$pass = $_POST['user_pass'];
$req = $bd->prepare('INSERT INTO users(user_name, user_email, user_pass) 
VALUES($name, $email, $pass)');


echo 'user added!';

?>


<?php require '../app/View/includes/footer.php'?>