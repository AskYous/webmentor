<?php 
/****************/
// RG02 validate password 8 characters
	
	public function Validate($password) {
		return (
			count($password) >=8 
			// && has a letter
			// && has a number
			);
	}
	
/****************/
// Confirmation email RG03
	
	Chirag?
	
/****************/
// RG04 make it low

/****************/
// Linkedin profile Jeff RG05

echo 'working on it';

/****************/
// Remove RG05-02 career goal, duration 

echo 'good idea';

/****************/
// account to be disabled AC-02

// in dashboard.php
	if($_POST['do_disable'])
		redirect('www.q1337.com/web/do_disable.php');
									/* 	TODO:
										add do_disable.php
									*/
	
// in do_disable.php:
	
	//$db -> connect()
	if(isset($_SESSION['email'])) {
		$result = $db->$query("SELECT * FROM user WHERE (email = '".$_SESSION['email']."')");
		if($row = mysql_fetch_array($result)) {
			if(!$row['enabled']) {	/* 	TODO:
										add 'enabled' column to database
									*/
				echo throw new Exception() {};
									/* 	TODO:
										add what to do??
									*/
			} else echo '<html>Are you sure?</html>';
		}		
	} else throw new Exception() {};
									/* 	TODO:
										add what to do??
									*/
	if($_POST['certain_disable']) {
									/* 	TODO:
										set $_POST['certain_disable'] 
											when user clicks 'certainly'
									*/
		
		//$db -> connect()
		$result = $db->$query("SELECT * FROM user WHERE (email = '".$_SESSION['email']."')");
		if($row = mysql_fetch_array($result)) {
			if(!$row['enabled']) {
				$result = $db->$query("INSERT INTO enabled VALUES TRUE");
			if(!$result)
				throw new Exception() {};	// try again?
			else redirect('www.q1337.com/web/just_disabled.php');
									/* 	TODO:
										add just_disabled.php
											THIS could be just refresh page??
									*/
	}
	
/****************/
// account to be enabled AC-02

	if($_POST['do_enable'])
		redirect('www.q1337.com/web/do_enable.php');
									/* 	TODO:
										A request to re-enable account is asked at time of
										attemp to login to disabled account.
									*/
	
// do_disable.php:
	
	//$db -> connect()
	if(isset($_SESSION['email'])) {
		$result = $db->$query("SELECT * FROM user WHERE (email = '".$_SESSION['email']."')");
		if($row = mysql_fetch_array($result)) {
			if(!$row['enabled']) {
				echo throw new Exception() {};
			} else echo '<html>Are you sure?</html>';
		}		
	} else throw new Exception() {};

/****************/
// Upgrade option ME-01

	if($_POST['do_upgrade'])
		redirect('www.q1337.com/web/do_upgrade.php');
									/* 	TODO:
										add this to dashboard.php
										make do_upgrade.php script
									*/
		
// do_upgrade.php:
	
	//$db -> connect()
	if(isset($_SESSION['email'])) {
		$result = $db->$query("SELECT * FROM user WHERE (email = '".$_SESSION['email']."')");
		if($row = mysql_fetch_array($result)) {
			if(!$row['premium']) {
				echo '<html>Payment info Form</html>';
			} else echo '<html>You are already premium</html>';
		}		
	}
/****************/
//- Mentee Basic can have 1 mentor per subject ME-01-01


 set $_SESSION['wanted_mentor_id']
	if($_POST['do_mentor_add']) 
		include 'do_mentor_add.php';
									/* 	TODO:
										in search_mentors_result.php (or equivalent), 
											set $_SESSION['wanted_mentor_id'] when user 
											clicks the mentor they want to add.
									*/		
// do_mentor_add.php
	if($_SESSION['premium'] && $_SESSION['mentee_count'] < $_SESSION['MAX_MENTEE_COUNT']) {
		$result = $db -> query("INSERT INTO mentorship (mentor_id, mentee_id, start_date)  VALUES(
			'".$_SESSION['wanted_mentor_id']."',
			'".$_SESSION['mentee_id']."', 
			'"date(MYSQL_DATE_FORMAT)"')");
									/* 	TODO:
										add PREMIUM to user table in DB as boolean
										set $_SESSION['premium'] in login
										set $_SESSION['MAX_MENTEE_COUNT'] constant in login
									*/
		if($result) {
			$_POST['wanted_mentor_added'] = true;
									/* 	TODO:
										go to search_mentors_result.php (or equivalent)
									*/	
			
		}
	}

	if(!isset($_POST['wanted_mentor'])) {
		redirect('www.q1337.com/web/view_mentors.php');
	}

/****************/
//- Mentee basic can have 1/4 of results for searching mentor ME-01-02

if($_POST['mentor_search_result_list']) {
	$search_result_list = $_POST['mentor_search_result_list'];
	for(int $i=0; $i<$_SESSION['MENTOR_SEARCH_RESULT_MAX']; $i++) {
		echo 'Mentor '.$i.': '.$search_result_list[$i];

/****************/
//- Mentee Premium can have 10 mentors per subject ME-01-03

/****************/
//- mentee mentor matching ME-02

/****************/
//- mentee can terminate mentorship

/****************/
//- Alert for mentee for feedback.

/****************/
//- Change ME-04 (This is like add request NOT DOING IT)

/****************/ 
//- MR-01-01 No scheduling

/****************/
//- Mentor can cancel mentorship

/****************/
//- user can edit profile

/****************/
//- user can upload photo

/****************/
//- usr dashboard display area of interest

/****************/
//- Match algorithm according to study

/****************/
//- fix notification and make it go to chat

/****************/
//- Feedback to mentor

/****************/
//- Administrator page --- showing count of mentor and mentee


?>