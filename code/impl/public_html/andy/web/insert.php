<?php
$con=mysqli_connect("localhost","yousef",'se1U$aemp4&AtIcHR!lx',"webmentordb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  /*confirmpassword should not go in the db*/
$sql="INSERT INTO user (firstname, lastname, dob, subject, email, password, experience) 
VALUES ('$_POST[firstname]',
	'$_POST[lastname]',
	'$_POST[birthday]',
	'$_POST[subject]',
	'$_POST[email]',
	'$_POST[password]',
	'$_POST[experience]')";
echo "You're new login is";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

?>