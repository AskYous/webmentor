<?php //include_once 'db.php';


class USER {
	protected static $my_db;
	protected static $user_email;
	protected static $instance;
	
	// this holds all of the values of user in the db
	protected static $attributes; 
	
	function __construct($email) {
		self::$my_db = $_SESSION['db']->get_instance(true);;
		self::$attributes = self::$my_db->get_user_attributes_by_email($email);
	}	
	
	// overloaded constructor
/*	function __construct($email, $db_pass) {
		self::$my_db = $db_pass;
		self::$attributes = self::$my_db->get_user_attributes_by_email($email);
	}
*/

	public static function get_instance($email) {
		if (!isset(self::$instance)) {
            self::$instance = new USER($email);
        }
        return self::$instance;
	}
	// overloaded factory
/*	public static function get_instance($email, $db_pass) {
		if (!isset(self::$instance)) {
            self::$instance = new USER($email, $db_pass);
        }
        return self::$instance;
	}	
*/
	
	function __destruct() {
		self::$my_db->disconnect(self::$my_db->get_link());
	}
	
	public function get_attribute($attr) {
		return self::$attributes[$attr];
	}

	public function set_email($new_email) {
		if(self::$my_db->update_email_by_id($this->get_id(),$new_email)) {
			self::$attributes['email'] = $new_email;
			return true;
		}
		return false;
	}
	
	public function get_email() {
		return self::$attributes['email'];
	}	
	
	public function get_user_id() {
		return self::$attributes['id'];
	}
	
	public function get_full_name() {
		return self::$attributes['firstname']." ".self::$attributes['lastname'];
	}
	
	public function is_mentor() {
		return self::$my_db->is_mentor_by_id(self::$attributes['id']);
	}
	
}
?>