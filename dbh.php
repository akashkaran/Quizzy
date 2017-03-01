<?php
$conn = mysqli_connect("localhost","root","","quizzydb");
 
 if (!$conn){
	 die("Connection failed: ".mysqli_connect_error());
 }
 /*if (isset($_SESSION['id'])) {
	echo $_SESSION['id'];
} 
//else { echo "Login failed";}*/
?>