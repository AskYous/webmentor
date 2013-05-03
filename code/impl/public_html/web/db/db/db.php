<?php
//session_start();
class DB {
	private static $instance;
	private $db_host = 'localhost'; 
	private $db_username = 'yousef';
	private $db_pass = 'se1U$aemp4&AtIcHR!lx'; 
	private $db_name = 'webmentordb'; 
	private $link;
	
	private $start_time;
	
    const MYSQL_DATE_FORMAT = 'Y-m-d';
    const MYSQL_TIME_FORMAT = 'H:i:s';
    const MYSQL_DATETIME_FORMAT = 'Y-m-d H:i:s';
		
	function __construct($connect){
	if($connect)
		self::connect();
	}
	
	public static function get_instance($connect) {
		if (!isset(self::$instance)) {
            self::$instance = new DB($connect);
        }
        return self::$instance;
	}
	
	public function connect() {
		$start_time = $_SERVER['REQUEST_TIME'];
		
		if (!$this->link = mysql_connect($this->db_host, $this->db_username, $this->db_pass)) {
			throw new Exception("Could not connect to mysql database: ".mysql_error());
		}

		if (!mysql_select_db($this->db_name, $this->link)) {
			echo 'Could not select database';
			exit;
		}
	}
	
	public function diconnect() {
		mysql_close();
	} 
	
	public function add_user($fname, $lname, $dob, $subject, 
	$email, $password, $experience, $id, $linkedinid) {
		$query = "INSERT INTO user VALUES ('".$fname."', '".$lname."', '".$dob.
		"', '".$subject."', '".$email."', '".$password."', '".$experience.
		"', '".$id."', '".$linkedinid."');";
		return $this->query($query);
	}
	
	/*
	 *	returns result of a query as if you were to write it
	 */
	public function query($query) {
		if(!$result = mysql_query($query, $this->link))
			$this->query_except($query, $this->link);
		else
			return $result;
	}
	
	/*
	 *	returns mentors' ids as array
	 */
	public function get_mentors($mentee_id) {
		$query = "SELECT * FROM mentorship WHERE (mentee_id = '".$mentee_id."');";
		if($result = $this->query($query)) {
			$return = array();
			while($row = mysql_fetch_array($result))
				$return[] = $row['mentor_id'];
		return $return;
		}
	}
	/*
	 *	returns mentees' ids as array
	 */
	public function get_mentees($mentor_id) {
		$query = "SELECT * FROM mentorship WHERE (mentor_id = '".$mentor_id."');";
		if($result = $this->query($query)) {
			$return = array();
			while($row = mysql_fetch_array($result))
				$return[] = $row['mentee_id'];
		return $return;
		}
	}
	/*
	 *	returns user's subject
	 */
	public function get_user_subject($user_id) {
	$query = "SELECT * FROM user_subjects WHERE (userid = '".$user_id."');";
	if($result = $this->query($query))
		return mysql_fetch_array($result)['subject'];

	}
	
	/*
	 *	returns mentorship_id associated with mentor_id and mentee_id
	 */
	public function get_mentorship_id($mentor_id, $mentee_id) {
	$query = "SELECT * FROM mentorship WHERE ".
	"(mentor_id = '".$mentor_id.
	"' AND mentee_id = '".$mentee_id.
	"');";
	if($result = $this->query($query))
		return mysql_fetch_array($result)['mentorship_id'];
	}
	
	/*
	 *	throw new Exception
	 */
	public function query_except($q,$l) {
	throw new Exception("UNABLE TO QUERY DATABASE WITH LINK: ".$l.
				"AND QUERY: ".$q.". ".mysql_error());
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