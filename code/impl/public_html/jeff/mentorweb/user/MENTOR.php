<?php include_once 'USER.php';

class MENTOR extends USER {

	protected static $instance;
	protected static $mentor_id;
	protected static $mentees = array();
	//protected static $my_db;
	
	
	function __construct($email, $db_pass) {
		parent::__construct($email);
		if($result = self::$my_db->is_mentor_by_email($email)) {
			self::$attributes['mentor_id'] = self::$my_db->get_mentor_id($this->get_user_id());
			self::$attributes['mentees'] = self::$my_db->get_mentees_by_mentor_id($this->get_attribute('mentor_id'));
			echo 'mentor created with id:'.self::$attributes['mentor_id']."<br/>";
		} 
		else 
			echo 'user is not mentor';// $my_db->register_mentor($email);
	}
	
	function __destruct() {
		parent::__destruct();
	}
	
	public static function get_instance($email, $db_pass) {
		if(!isset(self::$instance))
			self::$instance = new MENTOR($email, $db_pass);
		return self::$instance;
	}
	
	public static function get_mentees_as_array() {
		return self::$mentees;
	}

}

?>