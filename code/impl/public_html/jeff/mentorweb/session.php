<?php 
	session_start();

	include_once 'db.php'; 
 	//include_once 'USER.php'; 
 	include_once 'MENTOR.php';

$_SESSION['db'] = DB::get_instance(true);

$db = $_SESSION['db']->get_instance(true);

$_SESSION['this_mentor'] = MENTOR::get_instance('haha', $db);

echo $_SESSION['this_mentor']->get_attribute('id');
$mntes=$_SESSION['this_mentor']->get_attribute('mentees');
var_dump($mntes);
echo $db->get_mentor_email(3);

echo '<br/>';
$db2 = $_SESSION['db']->get_instance(true);
$db3 = $_SESSION['db']->get_instance(true);
echo '<br/>'.$db2->get_link();
echo '<br/>'.$db3->get_link();
$db4=DB::get_instance(true);
echo '<br/>'.$db4->get_link();



?>