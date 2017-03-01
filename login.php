 <?php
	session_start();
?>
 <html>
 <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>User Login</title>
        <link rel='stylesheet' href='login.css'>
		<link rel="stylesheet" href="nav.css"> 
</head>
    <body>

<div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="quizzy.php">Home</a>
  <a href="signup.php">SignUp</a>
</div>
<span class="avx" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
    <br><br><br><br>
      <form action='includes/login.inc.php' method='POST'>     
        <h1>Login</h1>
        
        <fieldset>
			
          <label for='email'>Email:</label>
          <input type='email' id='email' name='email'>
		  
          <label for='password'>Password:</label>
          <input type='password' id='password' name='password'>
          <button type='submit'>Login</button>
		  <marquee><a href='signup.php'><pre>New here?     Create your account now!!</marquee>
		 
      </form>
	  </fieldset>
	  <br><br><br><br><br>
	  
	
<?php	 
     if (isset($_SESSION['id'])) {
	header("Location: welcomepage.php");
	} 
?>
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
