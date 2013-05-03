<!--

	* A MENTEE is created in $_SESSION['this_mentee'] after successful login 
		if the user is a mentee

 -->


<? include_once 'USER.php' ?>

<?php

class MENTEE extends USER {
	
	private static $mentee_id;
	
	function __construct($email) {
		parent::__construct($email);
		if($_SESSION['db']->is_mentee_by_email($email)) {
			self::$mentee_id = $_SESSION['db']->get_mentee_id(self::$attributes['id']);
			echo 'user is mentee'."<br/>";
		}
		else
			echo 'user is not mentee';// $_SESSION['db']->register_mentor($email);
	}
	
	public static function get_mentors_as_array() {
		$mentors = $_SESSION['db']->get_mentors_by_mentee_id(self::$mentee_id);
		return $mentors;
	}
}

?>