<?php

class CHAT {

	private static $instance;
	private static $mentorship_id;
	private static $last_message_date_time;
	private static $messages;
	private static $message_count;
	
	function __construct($mentor_id, $mentee_id) {
		self::$message_count = 0;
		self::$mentorship_id = $_SESSION['db']->get_mentorship_id($mentor_id, $mentee_id);
		$this->load_messages();
	}
	
	public static function get_instance($mentor_id, $mentee_id) {
		if(!isset(self::$instance))
			self::$instance = new CHAT($mentor_id, $mentee_id);
		return self::$instance;
	}
	
	public static function load_messages() {
		self::$messages = array();
		echo self::$mentorship_id."ha";
		self::$messages = $_SESSION['db']->get_last_ten_chats(self::$mentorship_id);
		var_dump(self::$messages);
	}
	
	public static function get_new_message() {
		if($new_msg = $_SESSION['db']->has_new_message($mentorship_id))
			$messages[]=$new_msg;
	}
	
	public static function display_messages () {
		while(true) {
			while(self::$message_count < count(self::$messages)) 
				echo self::$messages[self::$message_count++]."<br/>";
			sleep(3);
			echo 'no';
		}
	}

}

?>