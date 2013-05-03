<?php

session_start();
$_SESSION = array();

$a=session_destroy(); 
if($a==true)
{
print "Signed out successfully";
header("Refresh: 1;url=http://q1337.com/web/signin.html"); 
}
else
{
print "error in signing out";
header("Refresh: 1;url=http://q1337.com/web/dashboard.php"); 
}

?>
