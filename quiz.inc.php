<?php
 //session_start();
 include '../dbh.php';
 
 /*$q_id =  $_POST['q_id'];
 $question =  $_POST['question'];
 $a_id=  $_POST['a_id'];
 $a_value =  $_POST['a_value'];
 $b_id=  $_POST['b_id'];
 $b_value =  $_POST['b_value'];
 $c_id=  $_POST['c_id'];
 $c_value =  $_POST['c_value'];
 $d_id=  $_POST['d_id'];
 $d_value =  $_POST['d_value'];
*/
 
$sql = "SELECT question,a_value,b_value,c_value,d_value FROM quiz";

$result = mysqli_query($conn,$sql);
if(!$result)
	echo "query failed";
$i=0;
while($row=mysqli_fetch_assoc($result))
{
	$i=$i+2;
	{ ?>
		 <!-- Modal content -->
    <div class="modal-content">
    <div class="modal-header">
	<span class="close">×</span>
	<h4 class="modal-title">
	<?php
	echo "<strong>"."$i)".$row['question']."</strong>"; ?>
	</div>
	<div class="modal-body">
			<div>
				<div class="form-group">
	<?php			
	echo             "<br>"."<input type=\"radio\" id=\"1\" name=\"1\" value=\"1\">"
	.$row['a_value']."<br>"."<input type=\"radio\" id=\"2\" name=\"1\" value=\"2\">"
	.$row['b_value']."<br>"."<input type=\"radio\" id=\"3\" name=\"1\" value=\"3\">"
	.$row['c_value']."<br>"."<input type=\"radio\" id=\"4\" name=\"1\" value=\"4\">"
	.$row['d_value']."<br>";
	}

}	
	//header("Location: ../quiz.php");
?>

