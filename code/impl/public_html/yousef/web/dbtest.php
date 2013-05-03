<?php include 'db.php' ?>
<?php
	$db = DB::get_instance(true);
	$db->connect();
	if($db->query('SELECT * FROM user;'))
		echo 'yes';
	else
		echo 'no';
	$a = array();
	$a = $db->get_mentors(1);
	var_dump($a);
	echo $a[0];
	echo $a[1];
	echo $a[2];
	echo 'mentorshipid='.$db->get_mentorship_id(1,2);
	echo 'adduser'.$db->add_user('jack','daniels','10/26/1990','stuff','email@mail','pwd','exper',33,'none');
	*/
?>