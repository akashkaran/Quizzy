<?php
 session_start();
 include '../dbh.php';
 
 $name =  $_POST['name'];
 $email =  $_POST['email'];
 $password =  $_POST['password'];
 $gender = $_POST['gender'];
 $age = $_POST['age'];
 $profile = $_POST['profile'];
 $work = $_POST['work'];
 $interests = $_POST['interests'];
 //To check if user already exists
 $query = "SELECT email FROM login";
 $res = mysqli_query($conn,$query);
 $flag=false;
 while($row=mysqli_fetch_assoc($res))
 {
	if($_POST['email']==$row['email'])
	{
		$flag=true;
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('You are already Registered!!!');
		window.location.href='../login.php';
		</SCRIPT>");
	}
 }
 //If User is new, enter details in DB
 if($flag==false)
 {
	 $sql = "INSERT INTO login (name,email,password,gender,age,profile,work,interests) 
	 VALUES ('$name','$email','$password','$gender','$age','$profile','$work','$interests')";

	 $result = mysqli_query($conn,$sql);


	 if($result)
	 {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Succesfully Registered');
		window.location.href='../login.php';
		</SCRIPT>");
	 }
 }

?>