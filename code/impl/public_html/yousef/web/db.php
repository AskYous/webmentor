<?php

class DB {
/* 
 * This class is to be used any time you need to query the database unless an ADT has the 
 * appropriate functionality.
 */

	private static $instance;		
	private $db_host = 'localhost';  
	private $db_username = 'mentorweb';
	private $db_pass = 'learn'; 
// 	private $db_username = 'yousef';
// 	private $db_pass = 'se1U$aemp4&AtIcHR!lx'; 

	private $db_name = 'webmentordb'; 
	private $link;
	
	private $start_time;
	
    const MYSQL_DATE_FORMAT = 'Y-m-d';
    const MYSQL_TIME_FORMAT = 'H:i:s';
    const MYSQL_DATETIME_FORMAT = 'Y-m-d H:i:s';
	
	/*
	 * default constructor
	 * @param $connect: boolean to connect or not
	 */ 
	function __construct($connect){
	if($connect)
		self::connect();
	
	}
	
	/*
	 * returns instance of DB object
	 */
	public static function get_instance($connect) {
		if (!isset(self::$instance)) {
            self::$instance = new DB($connect);
        }
        return self::$instance;
	}
	
	/*
	 * connects to DB with instance variables defined above
	 */
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
	
	/*
	 * closes connection to the DB
	 */
	public function diconnect() {
		mysql_close();
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
	 * adds a new user to the database
	 * precondition: all parameters are passed (shitty for now)
	 */
	public function register_user($fname, $lname, $dob, 
	$email, $password, $experience, $linkedinid) {
		if(!$this->get_user_id_by_email($email)) {
			$query = "INSERT INTO user VALUES ('".$fname."', '".$lname."', '".$dob.
			"', '".$email."', '".$password."', '".$experience.
			"', '"."null', '".$linkedinid."')";
			if ($result = $this->query($query))
				return true;
		}
		return false;
	}
	
	/*
	 *	returns mentors' ids as array
	 */
	public function get_mentors_by_mentee_id($mentee_id) {
		$query = "SELECT * FROM mentorship WHERE (mentee_id = '".$mentee_id."')";
		if($result = $this->query($query))
			if( mysql_num_rows($result) > 0) {
				$return = array();
				while($row = mysql_fetch_array($result))
					$return[] = $row['mentor_id'];
				return $return;
			}
		
		return false;
	}
	/*
	 *	returns mentees' ids as array
	 */
	public function get_mentees_by_mentor_id($mentor_id) {
		$query = "SELECT * FROM mentorship WHERE (mentor_id = '".$mentor_id."')";
		if($result = $this->query($query))
			if( mysql_num_rows($result) > 0) {
				$return = array();
				while($row = mysql_fetch_array($result))
					$return[] = $row['mentee_id'];
				return $return;
			}
		return false;
	}
	
	/*
	 *	returns user's subjects as array
	 */
	public function get_user_subject($user_id) {
	$query = "SELECT * FROM user_subjects WHERE (userid = '".$user_id."')";
	if($result = $this->query($query))
		return mysql_fetch_array($result);

	}
	
	/*
	 *	returns mentorship_id associated with mentor_id and mentee_id as string
	 */
	public function get_mentorship_id($mentor_id, $mentee_id) {
	$query = "SELECT * FROM mentorship WHERE ".
		"(mentor_id = '".$mentor_id.
		"' AND mentee_id = '".$mentee_id.
		"')";
	if($result = $this->query($query))
		return mysql_fetch_array($result);//['mentorship_id'];
	}
	
	/*
	 *	throw new Exception
	 */
	public function query_except($q,$l) {
		throw new Exception("UNABLE TO QUERY DATABASE WITH LINK: \n".$l.
				"AND QUERY: ".$q.". \n".mysql_error());
	}
	
	function send_message($msg) {
		$q = "INSERT INTO chat (mentor_id, mentee_id, message) VALUES ('$mentee', '$mentor', '$msg')";
		$result = mysql_query($q, $link);
		if (!$result) {
			echo "DB Error, could not query the database\n";
			echo 'MySQL Error: ' . mysql_error();
			exit;
		}   
	}
	
	function register_mentor($email) {
		if(!self::is_mentor_by_email($email)) {
			$user_id = self::get_user_id_by_email($email);
			return(self::query("INSERT INTO mentor (user_id, mentee_count) VALUES ('".$user_id."', 0)"));
		}
	}
	
	function get_user_id_by_email($email) {
		if($result = $this->query("SELECT id FROM user WHERE (email='".$email."')")) {
			if($row = mysql_fetch_array($result))
				return $row['id'];
		}
		return false;
	}
	
	
	/*
	 * returns the user's attributes in the user db table as an array
	 */
	function get_user_attributes_by_email($email) {
		$query = "SELECT * FROM user WHERE (email = '".$email."')";
		if($result = $this->query($query))
			return mysql_fetch_array($result);
	}
	
	/*
	 * returns true if the user_id is a registered mentor
	 */	
	function is_mentor_by_id($user_id) {
		$query = "SELECT * FROM mentor WHERE (user_id = '".$user_id."')";
		if($result = $this->query($query))
			 if(mysql_num_rows($result) > 0)
			 	return true;
			 else
			 	return false;
	}
	
	/*
	 * returns true if the @param $email passed is a valid MENTOR
	 */
	public function is_mentor_by_email($email) {
		$row = array();
		if($result = $this->query("SELECT id FROM user WHERE (email='".$email."')")){
			$row = mysql_fetch_array($result);
			echo $id = $row['id'];
			if($result = $this->query("SELECT mentor_id FROM mentor WHERE (user_id='".$id."')"))
				if(mysql_num_rows($result) > 0)
					return true;
				else return false;
			else return false;
		}
		else return false;
	}
	
	/*
	 * returns true if the user_id is a registered mentee
	 */	
	function is_mentee_by_id($user_id) {
		$query = "SELECT * FROM mentee WHERE (user_id = '".$user_id."')";
		if($result = $this->query($query))
			if( mysql_num_rows($result) > 0)
				return true;
			else return false;
		return false;
	}
	
	/*
	 * returns true if the @param $email passed is a valid MENTEE
	 */
	public function is_mentee_by_email($email) {
		$row = array();
		if($result = $this->query("SELECT id FROM user WHERE (email='".$email."')")){
			$row = mysql_fetch_array($result);
			echo $id = $row['id'];
			if($result = $this->query("SELECT mentee_id FROM mentor WHERE (user_id='".$id."')"))
				if(mysql_num_rows($result) > 0)
					return true;
				else return false;
			else return false;
		}
		else return false;
	}
	function get_mentor_id($user_id) {
		$query = "SELECT mentor_id FROM MENTOR WHERE (user_id ='".$user_id."')";
		if($result = $this->query($query))
			if($result > 0)
				return result;
		return false;
	}
	
	/*
	 * returns true if the update to the db table was successful
	 */		
	function update_email_by_id($user_id, $new_email) {
		$query = "UPDATE user SET email =  '".$new_email."' WHERE id = '".$user_id."'";
		if($result = $this->query($query))
			return true;
		return false;
	}
	
	/*
	 * returns true if the login information was valid
	 */
	function login_okay($email,$pwd) {
		$query = "SELECT id FROM user WHERE (email='$email' AND password='$pwd')";
		if($result = $this->query($query))
			if(mysql_num_rows($result) > 0)
				return true;
			else return false;
		else return false;
	}
}
?>