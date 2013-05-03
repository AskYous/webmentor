<?php
$con=mysqli_connect("localhost","yousef",'se1U$aemp4&AtIcHR!lx',"webmentordb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$sql="SELECT * FROM picture where id = 1";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
?>