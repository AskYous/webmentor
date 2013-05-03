<?php
    ini_set('display_errors', 'On');
	include 'dbdb.php';
	
    session_start();

    if($_POST['email']) {
        $email= $_POST['email'];
        $pwd= $_POST['password'];
    }
	
	//echo $_SESSION['email'];
    else if($_SESSION['email']) {
        $email=$_SESSION['email'];
        $pwd=$_SESSION['password'];
    }
	else
	{
	die("error occurred");
	}

//accessing dbdb file	
	$aa= new dbdb();

    $db_exists = $aa->connect();   //equivalent to mysql_select_db("webmentordb", $con);

    if($db_exists) {
        $sql= "SELECT * FROM user where email = '$email' and password = '$pwd'";
        $user_result = $aa->query($sql);
        if($user_result) {
	   $row = mysql_fetch_array($user_result);
	        $_SESSION['id'] = $row['id']; 
	        $_SESSION['firstname']=$row['firstname'];
	        $_SESSION['lastname']=$row['lastname'];
			$_SESSION['dob']=$row['dob'];
			$_SESSION['experience']=$row['experience'];
			$_SESSION['dob']=$row['dob'];
			$_SESSION['userid']=$row['id'];
			$_SESSION['fullname']=$row['firstname']." ".$row['lastname'];
	        //still need SUBJECT.
			// adding subjects to session
			$sql1= "SELECT * FROM user_subjects where userid='$row[id]'";
			$subject_result = $aa->query($sql);
			$sub = mysql_fetch_array($subject_result);
			$_SESSION['subject'] = $sub['subject']; 
			$_SESSION['subject_1'] = $sub['subject_1']; 
			$_SESSION['subject_2'] = $sub['subject_2']; 
			
	        header("Location: dashboard.php");

			}
	    else {
	        echo "Invalid email or password";
	        echo "<a href='signin.html'> Go back </a>";
	    }
	    //$_session['id'] = $result['id'];
	    //header("Location:dashboard.html");
	    //die();
            //echo "finished while loop";
        }
 

    mysql_close($con);
?>