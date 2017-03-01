<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/************/
.container {
  display: block;
  margin-bottom: 8px;
}

form 
{
  max-width: 300px;
  margin: auto;
  padding: 10px 20px;
  background: -webkit-linear-gradient(top, #e6f9ff 0%, #00a3cc 100%);
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
  background: -webkit-linear-gradient(top, 	#99e6ff 0%, #0099cc 100%);
}


/* Modal    */
.modal {
	
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 120px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: none; /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: transparent;
    margin: auto;
    padding: 0;
    border: 1px solid black;
	color:white;
    width: 30%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 14px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: green;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 4px;
    background-color: black;
    color: white;
}

.modal-body {
	padding: 40px;
background-color: rgba(1,0,0,0.6);
	}

.modal-footer {	
    padding: 2px 4px;
    background-color: black;
    color: white;
}

</style>
<link rel="stylesheet" href="nav.css"> 
<body background="" size="relative"  onload="function()">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="welcomepage.php">Home</a>
  <a href="includes/logout.inc.php">logout</a>
</div>
<span class="avx" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<fieldset>
<form background="q.gif">
<br>
<br>
<?php
session_start();
include 'dbh.php';
$sql="select * from quiz where cat_id='".$_GET['id']."'";
$result = mysqli_query($conn,$sql);
$x=0; $i=1; $score=0;
while($row=mysqli_fetch_assoc($result))
{
	echo "$i."."<strong>".$row['question'].'<br></strong>';
	
	$answered=$_POST[$x];
	$correct=$row['correct_id'];
	$x = $x + 1;
	if(strcmp($answered,$correct)==0)
	{
		$score++;
		$acolor='green';
	}
	else{
		$acolor='red';
	}
	
	echo '&nbsp&nbsp&nbsp&nbspYour answer: <font color='.$acolor.'>'.$answered.'<font color=black><br/>';
	echo '&nbsp&nbsp&nbsp&nbspCorrect answer: '.$correct.'<br/>';
	echo'<hr>' ;

     $i = $i + 1;
}
echo 'Score:'.$score.'/'.$x;
?>
<center>
	<div id="myModal" class="modal" >
	<div class="modal-content">
    <div class="modal-header">
     <span class="close">x</span>
    </div>
    <div class="modal-body">
	<div>
<?php echo "Your score is $score"."/10"; ?>

    </div>
	
	</div>
	<div class="modal-footer">
	 
    </div>
	</div>
	
	</div>
	</center>
</fieldset>
  <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
//var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
 onload=function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>