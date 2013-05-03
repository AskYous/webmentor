<?php
session_start();
if(isset($_POST['email'])) {
	echo 'set';
	if(isset($_SESSION['db'])) {
		if( $_SESSION['db']->login_okay($_POST['email'],$_POST['pw']))
			echo 'yes';
		else
			echo 'no';
	}
}
else echo 'not sset';

?>