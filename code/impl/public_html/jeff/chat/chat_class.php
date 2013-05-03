<?php
class Chat {

	function _construct($me_id, $mr_id){
		$db_host = "localhost"; 
		$db_username = "root";
		$db_pass = ""; 
		$db_name = "mentorweb"; 
		$mentee = $me_id;
		$mentor = $mr_id;
		$start_time = $_SERVER['REQUEST_TIME'];
		if (!$link = mysql_connect("$db_host", "$db_username", "$db_pass")) {
			echo 'Could not connect to mysql';
			exit;
		}

		if (!mysql_select_db("$db_name", $link)) {
			echo 'Could not select database';
			exit;
		}

		$q = "INSERT INTO chat (mentor_id, mentee_id, message) VALUES ('$mentee', '$mentor', 'first chat');";
		$result = mysql_query($q, $link);
		if (!$result) {
			echo "DB Error, could not query the database\n";
			echo 'MySQL Error: ' . mysql_error();
			exit;
		}   
	}
	function send_message($msg) {
		$q = "INSERT INTO chat (mentor_id, mentee_id, message) VALUES ('$mentee', '$mentor', '$msg');";
		$result = mysql_query($q, $link);
		if (!$result) {
			echo "DB Error, could not query the database\n";
			echo 'MySQL Error: ' . mysql_error();
			exit;
		}   
	}
}
?>