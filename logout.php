<?php
 session_start();
 include '../dbh.php';
 
 $email =  $_POST['email'];
 $password =  $_POST['password'];
 
$sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn,$sql);

if (!$row = mysqli_fetch_assoc($result)){
	echo "Login Failed";
} else {
	$_SESSION['id'] = $row['id'];
}
	
if (isset($_SESSION['id'])) {
	echo $_SESSION['id'];
} 
else { echo "Login failed";}

	
	header("Location: ../login.php"); 
 ?>