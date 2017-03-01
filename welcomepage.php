<?php
  session_start();
  include 'dbh.php';
  //GUEST USER
  if(!isset($_SESSION['id']))
  {
	  $guest=true;
  }
  else
  {
	  $guest=false;
	  $name = $_SESSION['name'];
	  $profile = $_SESSION['profile']; 
	  $sql = "SELECT name,profile FROM login WHERE name='$name' AND profile='$profile'";
	  
	  $result = mysqli_query($conn,$sql);
	  $row=mysqli_fetch_assoc($result);
	  $_SESSION['name']=$row['name'];
	  $_SESSION['profile']=$row['profile'];
	 
  }
  ?>
  <body background="clouds-background.jpg" size="relative">
<script src="nav.js"></script> 
<form action='includes/logout.inc.php'>
			
</form>
  
 
<html>
<link rel="stylesheet" href="nav.css">

<style>
.b1{
  padding: 19px 39px 18px 39px;
  color: #FFF;
  text-shadow : 1px solid #1e7b1e;
  background: -webkit-linear-gradient(top,#80ccff 0%,#007acc 100%);
  isplay: inline-block;
  font-size: relative;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 200px;
  border: 1px solid #007acc;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin:10px;
  cursor: pointer;
}
.b1:hover,
.b1:active {
background: -webkit-linear-gradient(top, #80ccff 0%,#0099ff 100%);
border: 1px solid #0099ff;
}

body {
  font-family: 'Nunito', sans-serif;
  color: white;
  margin: 10px auto;
}
h1{
font-size:800%;
position:fix;
text-shadow: 2px 2px black;
}

</style>
<body background="clouds-background.jpg" size="relative">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a href="includes/logout.inc.php">logout</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
 <p align="right"><?php
  //GUEST USER
  if($guest==false)
  {
	  echo "<p>"."Welcome!!"."</p>".$_SESSION['name'];
	  echo "<br>".$_SESSION['profile'];
  }
  else echo "<p>"."Welcome GUEST USER!!"."</p>";
  ?> </p>
<h1 align="center">Quizzy</h1>
<div class="container">
	<br>
	<div>
	<center>
	<a href="gk.php?id=1"><button type="submit" class="button b1" name="cat_id">General Knowledge</button></a>
	<a href="gk.php?id=2"><button type="submit" class="button b1" name="cat_id">Movies</button></a>
	<a href="gk.php?id=3"><button type="submit" class="button b1" name="cat_id">T.V Series</button><br></a>
	<a href="gk.php?id=4"><button type="submit" class="button b1" name="cat_id">Science</button></a>
	<a href="gk.php?id=5"><button type="submit" class="button b1" name="cat_id">Sports</button></a>
	</center>
	</div>
</div>	
	<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</html>
