<?php include_once 'db.php' ?>
<?php
//session_start();

class USER {
	protected static $db;
	protected static $user_email;
	protected static $instance;
	protected static $attributes;
	
	function __construct($email) {
		self::$db = DB::get_instance(true);
		//self::$db ->connect();
		$result = array();
		if($result = self::$db->query("SELECT * FROM user WHERE (email='".$email."');")) {
			self::$attributes = array(); 
			self::$attributes = mysql_fetch_array($result); 
		}
	}
	
	public static function get_instance() {
		if (!isset(self::$instance)) {
            self::$instance = new USER();
        }
        return new USER();
	}
	
	public function get_email() {
		return self::$attributes['email'];
	}	
	
	public function get_id() {
		return self::$attributes['id'];
	}
	
	public function get_full_name() {
		return self::$attributes['firstname']." ".self::$attributes['lastname'];
	}
	
}
?>