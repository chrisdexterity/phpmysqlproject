<?php 
require 'includes/connection.php'; 

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center>
			<h2>Reset Form</h2>
			<img src="images/photos/bb.jpeg" class="avatar">
		</center>
		<form action="reset.php" method="post" class="myform">
			<label>Username:</label><br>
			<input type="text" name="name" class="inputvalues" placeholder="type username" required><br>
			<label>Phone:</label><br>
			<input type="number" name="phone" class="inputvalues" placeholder="type number" required><br>
			<input type="submit" name="Reset" id="reset_btn" value="Reset Password"><br>
			<a href="reset.php"><input type="submit" name="Go" id="go_btn" value="Go back To Login"></a>
			
		</form>
		<?php 
		if (isset($_POST['Reset'])) {
			extract($_POST);
			$query="SELECT *FROM user_table WHERE username='$name' AND phone='$phone'";
			$run=mysqli_query($conn,$query);
			if (!isset($run)) {
				die("query has failed".mysqli_error($conn));
			}else{
				$count=mysqli_num_rows($run);
				if ($count==1) {
					$password=$_POST['pass'];
					$update="UPDATE users_table SET password='$pass' WHERE username='$name' AND phone='$phone'";
					mysqli_query($conn,$update);
					echo "password successfully changed";
					header("location:reset.php");
				}else{
					echo "username or phone number you entered is incorrect!";
				}
			}
		}

		 ?>

</body>
</html>