<?php 
session_start();

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Welcome User</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center>
			<h2>Home Page</h2>
			<h3>Welcome User</h3>
			<img src="images/photos/mmm.jpeg" class="avatar">
		</center>
		<form action="login.php" method="post" class="myform">
			
			<input type="submit" name="Logout" id="logout_btn" value="Log Out"><br>
			
		</form>
		<div class="form-conntrol">
			<label>Insert a job</label><br>
			<input type="text" name="job" placeholder="insert a to do job"><br>	<br>	
			<button class="btn btn-primary btn-block">Add a job</button>
		</div>
		<?php 
		if (isset($_POST['Logout'])){
			session_destroy();
			header("location:login.php");
			
		}
		;
		 ?>
		 <?php

		  ?>
	</div>


</body>
</html>