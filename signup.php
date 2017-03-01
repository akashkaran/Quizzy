 <?php
	session_start();
?>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="signup.css">
		<link rel="stylesheet" href="nav.css"> 
       
    </head>
    <body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="quizzy.php">Home</a>
  <a href="login.php">Login</a>
</div>
<span class="avx" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
      <form action="includes/signup.inc.php" method="POST">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email">
		  
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
		
		  <label for="gender">Gender:</label>
		  <input type="radio" id="male" name="gender" value="M" required>Male
		  <input type="radio" id="female" name="gender" value="F" required>Female
		  <input type="radio" id="other" name="gender" value="O" required>Other
		  
          <br><br>
          <label>Age:</label>
          <input type="radio" id="under_13" value="under_13" name="age" value="<13" required><label for="under_13" class="light">Under 13</label><br>
          <input type="radio" id="over_13" value="over_13" name="age" value="13+" required><label for="over_13" class="light">13 or older</label>
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="bio">About You:</label>
          <textarea id="bio" name="profile"></textarea>
        </fieldset>
        <fieldset>
        <label for="work">Field of Work:</label>
        <select id="work" name="work">
		
            <option value="engineer">Engineer</option>
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
         
        </select>
        
          <label for="interests" name="interests">Interests:</label>
          <input type="radio" id="development" value="development" name="interests" required><label class="light" for="development">Development</label><br>
            <input type="radio" id="sports" value="sports" name="interests" required><label class="light" for="sports">Sports</label><br>
          <input type="radio" id="others" value="others" name="interests" required><label class="light" for="othrs">others</label>
        
        </fieldset>
        <button type="submit">Sign Up</button>
      </form>
	
    </body>
	<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</html>