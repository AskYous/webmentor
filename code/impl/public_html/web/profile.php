<?php
ini_set('display_errors','On');

include 'dbdb.php';

$aa= new dbdb();
$aa->connect();
$aa->query();
$sql1= "SELECT * FROM user where email = '$_POST[email]'";
$result1 = mysqli_query($con, $sql1);
$row=mysqli_fetch_array($result1);

?>