<?php session_start(); ?>
<?php include 'db.php'; ?>
<?php include 'USER.php'; ?>
<?php include 'MENTOR.php'; ?>
<?php

	echo 'hello'."<br/>";
	//create new DB object
	$db = DB::get_instance(true);
	
	//check if query worked
  	if($db->query('SELECT * FROM user;'))
  		echo 'yes'."<br/";
  	else
  		echo 'no'."<br/";
  	
  	$a = array();
  	//get mentors of user_id=1
  	$a = $db->get_mentors(1);
 	var_dump($a);
	echo "<br/>";

 	$msid = array();
 	$msid = $db->get_mentorship_id(1,1);
 	echo 'mentorshipid='.$msid['mentorship_id'];
 	echo "<br/";

	$_SESSION['user'] = new USER('asdf');
	$email = $_SESSION['user']->get_email();
	echo $email."<br/";
	

	
?>