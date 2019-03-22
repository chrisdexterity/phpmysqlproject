<?php
if (isset($_POST['login'])) {
	# code...

$username=$password=$pwd='';

$username=$_POST['username'];
$pwd=$_POST['pass'];
$password=md5($pwd);

$sql="SELECT * FROM 64070users WHERE username='$username'AND password='$pass'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
		$id=$rows['id'];
		$username=$rows['username'];
		echo "<h2>invalid password or username</h2> ";
	
	header("location:welcome.php");
}
}
?>