<?php 
	session_start();

	include_once 'db.php'; 
 	//include_once 'USER.php'; 
 	include_once 'MENTOR.php';

$_SESSION['db'] = DB::get_instance(true);

$db = $_SESSION['db']->get_instance(true);

$_SESSION['this_mentor'] = MENTOR::get_instance('haha', $db);

echo $_SESSION['this_mentor']->get_attribute('id');
$mntes=array();
$mntes=$_SESSION['this_mentor']->get_attribute('mentees');
var_dump($mntes);
echo $db->get_mentor_email(3);

?>