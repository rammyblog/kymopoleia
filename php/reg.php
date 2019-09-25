  
<?php
session_start();
if(isset($_POST['signup-submit'])){
//user clicked submit button, implement logic
require('database.php');
// require "database.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['emailAddress'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$regError = "";
$_SESSION['errors'] = array();
if(empty($firstname) && empty($lastname) && empty($emailAddress) && empty($username) && empty($password) && empty($confirmPassword)){
    $regError= "Fill in all fields". "</br>";
    header('location: ../index.php');
    exit();
}
else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
	$regError = "Username should contain only alphanumeric characters". "</br>";
    header('location: ../index.php');
    exit();
}
else if(empty($lastname)){
	$regError = "Please Enter your last name". "</br>";
    header('location: ../index.php');
    exit();
}
else if(empty($firstname)){
	$regError = "Please Enter your first name". "</br>";
    header('location: ../index.php');
    exit();
}
else if(empty($username)){
	$regError = "Username is a required field". "</br>";
    header('location: ../index.php');
    exit();
}
else if(empty($password)){
    $regError = "Password is a required field". "</br>";
    header('location: ../index.php');
    exit();
}
else if(empty($confirmPassword)){
    $regError = "Password is a required field". "</br>";
    header('location: ../index.php');
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $regError = "Email is not in a valid format". "<br>";
    header('location: ../index.php');
exit();
}
else if ($password !== $confirmPassword){
    $regError = "Passwords do not match". "<br>";
    header('location: ../index.php');
exit();
}
else{
    
$checkUser = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($checkUser);
$user = $result->fetch(PDO::FETCH_ASSOC);
if($user){
    $regError = "Username already exists. Please choose a different username";
    header('location: ../index.php');
    exit;
}else{
    $passHash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (firstname, lastname, username, email, password)
 VALUES ('$firstname', '$lastname', '$username', '$email', '$passHash')";
$done = $conn->exec($sql);
    // $_SESSION['success'] = "Sign up was successful, please use your registration details to login";
    header('location: ../success.php');
    exit();
} 
   }
}
else{
//user did not click submit but got here through url modification redirect back to login page
header('location: ./index.php');
exit();
}