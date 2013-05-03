<?php

	function new_user($email, $pw, $un) {
		$db_host = 'localhost'; 
		$db_username = 'root';
		$db_pass = ''; 
		$db_name = 'mentorweb'; 

		if (!$link = mysql_connect("$db_host", "$db_username", "$db_pass")) {
			echo 'Could not connect to mysql';
			exit;
		}

		if (!mysql_select_db("$db_name", $link)) {
			echo 'Could not select database';
			exit;
		}
		$q = "INSERT INTO user (email, password, name) VALUES ('$email', '$pw', '$un');";
		$result = mysql_query($q, $link);
		if (!$result) {
			echo "in new_user\n";
			echo "DB Error, could not query the database\n";
			echo 'MySQL Error: ' . mysql_error();
			exit;
		}   
		mysql_close();
	}
	
	function send_message($mentor, $mentee, $msg) {
		$db_host = 'localhost'; 
		$db_username = 'root';
		$db_pass = ''; 
		$db_name = 'mentorweb'; 

		if (!$link = mysql_connect("$db_host", "$db_username", "$db_pass")) {
			echo 'Could not connect to mysql';
			exit;
		}

		if (!mysql_select_db("$db_name", $link)) {
			echo 'Could not select database';
			exit;
		}
		$q = "SELECT mentorship_id FROM mentorship WHERE mentor_id = '" . $mentor .
		"' AND mentee_id = '" . $mentee . "'";
		//$q = "INSERT INTO chat (mentor, mentee, message) VALUES ('jeff', 'yousef', ".$msg.");";
		$result = mysql_query($q, $link);
		$row = mysql_fetch_assoc($result);
		$mentorship = $row['mentorship_id'];
		$date = $_POST['date'];
		$time = $_POST['time'] . ':00';
		$datetime = mysql_real_escape_string($datetime);
		$q = "INSERT INTO chatlog (date, time, mentorship_id, chat_msg) ".
		"VALUES (
		if (!$result) {
			echo "in send_message\n";
			echo "DB Error, could not query the database\n";
			echo 'MySQL Error: ' . mysql_error();
			exit;
		}  
		mysql_close();
	}


?>