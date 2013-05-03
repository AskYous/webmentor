<?php
$con=mysqli_connect("localhost","yousef","se1U$aemp4&AtIcHR!lx","webmentordb");
$sql= "SELECT * FROM User"; // where email = '$_POST[email]' and password = '$_POST[password]'
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){
	//There was results. Forward user to his profile page.
	echo "Welcome " . $row['firstname'];
} //else
{
	//Wrong Password
}

mysqli_close($con);
?>