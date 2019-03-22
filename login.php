<?php
session_start();
require 'includes/connection.php'; 
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center>
			<h2>Login Form</h2>
			<img src="images/photos/bb.jpeg" class="avatar">
		</center>
		<form action="welcome.php" method="post" class="myform">
			<label><h4>Username:</h4></label><br>
			<input type="text" name="name" class="inputvalues" placeholder="type username"><br>
			<label><h4>Password:</h4></label><br>
			<input type="password" name="pass" class="inputvalues" placeholder="type password"><br>
			<a href="welcome.php"><input type="submit" name="Login" id="login_btn" value="Login"><br></a> 
			
		</form>
		<?php 
		if (isset($_POST['Login'])) {
			$username=$_POST['name'];
			$password=$_POST['pass'];
			$query="SELECT * FROM users_table WHERE username='$name' AND password='$pass'";
			$query_run=mysqli_run($conn,$query);
			if (!$query_run) {
					die("query failed:".mysqli_error($conn));
				}

				$count= mysqli_num_rows($query_run);
				if($count>0){
					$_SESSION['username']=$name;
					header("location:welcome.php");
				}else{
					echo "invalid creditials";
				} 
		}

		 ?>
	</div>

</body>
</html>
