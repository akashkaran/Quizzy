<html>
<link rel="stylesheet" href="nav.css">
<style>
.container {
  display: block;
  margin-bottom: 8px;
}

form 
{
  max-width: 300px;
  margin: 10px auto;
  padding: 40px 80px 40px 80px;
  background: -webkit-linear-gradient(top, #e6f9ff 0%,#00ace6 100%);

 /* border: solid black 1px; */
}


fieldset {
  margin-bottom: 30px;
  border: none;
}

@media screen and (min-width: 780px) {

  form {
    max-width: 780px;
  }

}

body {
  font-family: "Comic Sans MS", cursive, sans-serif;
  color: black;
  margin: 10px auto;
  repeat:no-repeat;
  background: -webkit-linear-gradient(top, 	#99e6ff 0%, #0099cc 100%);
  
}
button{
	padding: 12px 30px 12px 30px;
	color: #FFF;
	text-shadow : 1px solid #1e7b1e;
	background: -webkit-linear-gradient(top,#80ccff 0%,#007acc 100%);
	border: 1px solid #007acc;
	box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
	cursor: pointer;
}

button:hover,
button:active {
	background: -webkit-linear-gradient(top, #80ccff 0%,#0099ff 100%);
   border: 1px solid #007acc;
}

</style>
<body size="relative">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="welcomepage.php">Home</a>

  <a href="includes/logout.inc.php">logout</a>
</div>
<span class="avx" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<fieldset>
<form action="evaluate.php?id=<?php echo $_GET['id'];?>" method="post">
<?php
session_start();
include 'dbh.php';
$sql = "SELECT question,a_value,b_value,c_value,d_value,correct_id FROM quiz WHERE cat_id='".$_GET['id']."'";

$result = mysqli_query($conn,$sql);
if(!$result)
	echo "query failed";
$i=0; $x=0;
while($row=mysqli_fetch_assoc($result))
{
	$ques = $row['question'];
	$a = $row['a_value'];
	$b = $row['b_value'];
	$c = $row['c_value'];
	$d = $row['d_value'];
	$i=$i+1; 
	{
	echo "<strong>"."$i)".$ques."</strong>"."<br>";		
	echo "<input type='radio' id='1' name=".$x." value='".$a. "'>"
		.$a."<br>"."<input type='radio' id='1' name=".$x." value='".$b."'>"
		.$b."<br>"."<input type='radio' id='3' name=".$x." value='".$c."'>"
		.$c.'<br>'."<input type='radio' id='4' name=".$x." value='".$d."'>"
		.$d.'<br><br>';
	}
	$x=$x+1;
	}	

?>
			<p align="center"><button>Submit</button></p>
</form>
</fieldset>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
	
