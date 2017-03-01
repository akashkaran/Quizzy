<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome_Page</title>
		<link rel="stylesheet" href="quizzy.css">
</head>
<style>
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	 background-color: none; /* Fallback color */
    background-color: rgba(0,0,0,0.2); /* Black w/ opacity */
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: black;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>

<body background="clouds-background.jpg" size="relative">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a id="myBtn">Login/SignUp</a>
</div>
<span class="avx" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
	<center>
	<big><big><h1>Welcome to Quizzy!!</h1></big></big>
	<br>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<h2>Start Your quiz Right Now!</h2>
	<button type="submit" id="ybtn">Start</button>
	<br>
	<br>
	</center>
	<center>
	<div id="myModal" class="modal">
	<div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
    </div>
    <div class="modal-body">
	<div>
	<a href="signup.php">
	<button type="submit">SignUp</button></a>
	<br>
	<br>
	<a href="login.php"></li>
	<button type="submit">Login</button></a>
	<br>
	<br>
	<h3>Or Continue as</h3>
	<a href="welcomepage.php">
	<button type="submit">Guest</button></a>
	<br><br>
	</div>
    </div>
    <div class="modal-footer">
    </div>
    </div>
	</div>
	</center>
  
  <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var ybtn = document.getElementById("ybtn");
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
ybtn.onclick = function() {
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