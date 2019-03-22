<?php 
// $conn=mysqli_connect("localhost","Gracy","149807576grasi","users") or die("unable to connect");
// mysqli_select_db($conn,"users");
// echo "connection Successful";
 // session_start();
$server='localhost';
$username='Gracy';
$password='149807576grasi';
$dbname='users';

$conn=mysqli_connect($server,$username,$password,$dbname);

if (!$conn) {
 	die("connection not successful:".mysqli_connect_error());
 
 }
 echo "connection successful";
// $sql="SELECT *FROM 6470users (username,password,phone) WHERE(Username='$username' AND password='$pass' AND phone='$phone'";

// $result=myqli_query($conn,$sql);

// $num=msqli_num_rows($result);

// if ($num==1) {
 	//echo "username is already taken";


// if (isset($_POST['login'])) {
//	$name=$_POST['username'];
//	$pass=md5($pwd);

//	$sql="SELECT FROM 6470users WHERE Username='$username' AND password='$pass'";
//	$result=mysqli_query($conn,$sql);

//	if (mysqli_num_rows($result)>0) {
		//while ($row=mysqli_fetch_assoc($result)) {
			//$id=$row['id'];
			//$Username=$row['username'];
			//session_start();
			//$_SESSION['id']=$id;
			//$_SESSION['username']=$Username;			
		
		//header("location:welcome.php");
	
	
	//echo "<h2>invalid username or password</h2>";



//if(isset($_POST['register'])){
// $name=$_POST['username'];
// $pass=md5($pwd);
//  $phone=$_POST['number'];


 	//$reg="INSERT INTO 6470users(username,password,phone)VALUES('$name','$pass','$phone')";
 	//mysqli_query($conn,$reg);
 	//if ($reg) {
 		//header("location:reglog.php");
 	
 //	echo "<h1>Registration Successful</h1>";
 
 

//if (isset($_POST['register'])) {


//$name=$_POST['username'];
//$password=MD5($pwd);
//$pwd=$_POST['pass'];
//$phone=$_POST['number'];

//$result=mysqli_query($conn,$s);
//
//	echo "Username is already taken";
//else{
	//$reg="INSERT INTO 6470users(username,password,phone) VALUES('$username','$pass','$number'";
//	mysqli_query($conn,$reg);
	//echo "<h2>Registration Successful</h2>";
	//header("location:reglog.php");



///$mysqli=new mysqli('localhost','Gracy','149807576grasi','6470');
//if ($_SERVER['REQUEST_METHOD']=='POST') {
	//if ($_POST['pass']==$_POST['confirmpass']) {
	//	$username=$mysqli->real_escape_string($_POST['username']);
	//	$number=$mysqli->real_escape_string($_POST['number']);
	//	$password=md5($_POST['pass']);



		//$sql="INSERT INTO 6470users(username,password,phone) VALUES('$username','$pass','$number')";
		//if ($mysqli->query($sql)===true)
		// {
		//$_SESSION['message']='Registration is Successful!Added $username to the database!';
		//header("location:welcome.php");

		//}else{
			//$_SESSION['message']='username could not be added to the database';
		//}
	//}
//}

// }else{