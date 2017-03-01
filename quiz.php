<?php
 session_start();
 include '../dbh.php';
 
 $q_id =  $_POST['q_id'];
 $question =  $_POST['question'];
 $a_id=  $_POST['a_id'];
 $a_value =  $_POST['a_value'];
 $b_id=  $_POST['b_id'];
 $b_value =  $_POST['b_value'];
 $c_id=  $_POST['c_id'];
 $c_value =  $_POST['c_value'];
 $d_id=  $_POST['d_id'];
 $d_value =  $_POST['d_value'];
 
$sql = "INSERT INTO login (name,email,password,gender,age,profile,work,interests) 
VALUES ('$name','$email','$password','$gender','$age','$profile','$work','$interests')";

$result = mysqli_query($conn,$sql);

/*if (isset($_SESSION['id'])) {
	echo $_SESSION['id'];
} 
else { echo "Login failed";}*/

header("Location: ../signup.php");
?>