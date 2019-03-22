<?php 
require 'includes/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center>
			<h2>Registration Form</h2>
			<img src="images/photos/bb.jpeg" class="avatar">
		</center>
		<form action="login.php" method="post" class="myform">
			<label><h8>Username:</h8></label><br>
			<input type="text" name="name" class="inputvalues" placeholder="type username" required><br>
			<label><h8>Phone:</h8></label><br>
			<input type="number" name="phone" class="inputvalues" placeholder="type number" required><br>
			<label><h8>Password:</h8></label><br>
			<input type="password" name="pass" class="inputvalues" placeholder="type password" required><br>
			<label> <h8>Confirm Password:</h8></label><br>
			<input type="password" name="confirmpass" class="inputvalues" placeholder="confirm password" required><br>
			<input type="submit" name="Signup" id="signup_btn" value="Sign Up"><br>
			<a href="login.php"><input type="submit" name="Go" id="go_btn" value="Go back To Login"></a>
			
		</form>
		<?php 
		if (isset($_POST['Signup'])) {
			//echo "submit button clicked";
			extract($_POST);
			if ($password==$confirmpass) {
				$passwordfromuser=$pass;
				$convertedpass=sha1($passwordfromuser);
				$query="INSERT INTO users_table(username,phone,password) VALUES('$username','$phone','$convertedpassword')";
				if (mysqli_query($conn,$query)) {
						echo "<h2>User Registered.....Go to login page";
						header("location:register.php")
					}else{
						die("Insert error".mysqli_error($conn));
					}

				}
			}

		 ?>
	</div>

</body>
</html>


