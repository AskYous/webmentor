<? include_once 'USER.php' ?>

<?php

class MENTOR extends USER {

	function __construct($email) {
		parent::__construct($email);
		if($exists = self::$db->is_mentor_by_email($email))
			echo 'user is mentor'."<br/>";
		else
			echo self::$db->register_mentor($email);
	}
}

?>