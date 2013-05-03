<?php  
      
?>

<?php
session_start();
include '_config_db.php';
function loginForm(){
	echo'
	<div id="loginform">
	<form action="chat_index.php" method="post">
		<p>Please enter your name to continue:</p>
		<label for="email">EMAIL:</label>
		<input type="text" name="email" id="email" />
		<label for="password">PASSWORD:</label>
		<input type="text" name="password" id="password" />
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" />
		<input type="submit" name="enter" id="enter" value="Enter" />
	</form>
	</div> ';
}

if(isset($_POST['enter'])){
	
	if($_POST['name'] != ""){
		$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
	}
	else{
		echo '<span class="error">Please type in a name</span>';
	}
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$name = $_SESSION['name'];
	echo'trying to mkae new user';
	new_user($email,$password,$name);
}
?>