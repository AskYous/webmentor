<?php 
include_once 'db.php'; 
include 'session.php';
include_once 'MENTOR.php';
 //include 'CHAT.php'; 


	echo 'hello'."<br/>";
	//create new DB object
	//$db = DB::get_instance(true);
	
	//test if it works
  	$result = $_SESSION['db']->query('SELECT * FROM user');
	$matchFound = mysql_num_rows($result) > 0 ? 'yes' : 'no';
	echo $matchFound."<br/>";
  	
  	//get user id by email
	$result = $_SESSION['db']->get_user_id_by_email('haha');
	echo "eu2 has userid ".$result."<br/>";

  	echo 'get mentors of mentee_id=2'."<br/>";
  	$a = $_SESSION['db']->get_mentors_by_mentee_id(2);
  	echo 'mentee_id=2 has mentors with mentor_ids: '.$a[0].' and '.$a[1];
	echo "<br/>";

 	$msid = array();
 	echo $msid = $_SESSION['db']->get_mentorship_id(2,3);
 	echo 'mentorshipid='.$msid['mentorship_id'];
 	echo "<br/>";
 	
  	if(!$_SESSION['db']->register_user('ftest','ltest','dtest','etest3','ptest','xtest','lidtest3'))
  		echo 'nouseradded';


	$m = MENTOR::get_instance('asdf');
	$mentees = $m->get_mentees_as_array();
 	echo count($count);
 	
 	$chats = $_SESSION['db']->get_last_ten_chats(2);
 	var_dump($chats);
 	echo "<br/>";
 	
 //	$chat = new CHAT(2,2);
 	//$chat->display_messages();

 	// echo "<br/>".'trying login with eu3,pu3';
 	echo $_SESSION['db']->login_okay('eu3','pu3');
 	echo 'trying with posting';
 	// 
 	$_POST['email'] = 'eu4';
 	$_POST['pw'] = 'pu4';
 	//header("Location: login.php");

 	

//	$_SESSION['user'] = 
	$u = new USER("eu7");
	$u->set_email("asdf");
  	$email = $u->get_email();
  	echo $email;
 	 	
//	echo login('Test2',null);

	
?>