<?php
ini_set('display_errors', 'On');
session_start();
if($_POST["email"])
{
$email= $_POST["email"];
$pwd= $_POST["password"];
}
if($_SESSION['email'])
{
$email=$_SESSION['email'];
$pwd=$_SESSION['password'];

}


//$con = mysql_connect("localhost","yousef",'se1U$aemp4&AtIcHR!lx');
$con = mysql_connect("localhost","root",'tiger');

$db_exists = mysql_select_db("webmentordb", $con);

if($db_exists){
	$sql= "SELECT * FROM user where email = '$email' and password = '$pwd'";
	$result = mysql_query($sql);
	if($result){
		if($row = mysql_fetch_array($result)){
			$_SESSION['id'] = $row['id']; 
			$_SESSION['firstname']=$row['firstname'];
			$_SESSION['lastname']=$row['lastname'];
			//still need SUBJECT.


			header("Location: dashboard.php");
			//echo "Hello " . $_SESSION['id'];
		}
		else{
			echo "Invalid email or password";
			echo "<a href='signin.html'> Go back </a>";
		}
		//$_session['id'] = $result['id'];
		//header("Location:dashboard.html");
		//die();
//		echo "finished while loop";
	}
	
}

mysql_close($con);
?>