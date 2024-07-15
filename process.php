<?php
include 'database.php';

/////////// Check Form submitted


if(isset($_POST['submit'])) {
	$user    = strip_tags(mysqli_real_escape_string($con ,$_POST['user']));
    $message = strip_tags(mysqli_real_escape_string($con ,$_POST['message']));

///////////// SET TIMEZONE
date_default_timezone_set('America/New_York');
$time = date('h:i:s a', time());

/////////// Validate input
if(!isset($user) || $user == '' || !isset($message) || $message == '' ) {
	$error = "Please fill your name and message";
	//echo $error;
	   //header("location:index.php?error=".urlencode($error));
	 header("location:index.php?error=".urlencode($error));
	 exit();
   } else {
     $query = "INSERT INTO shouts (user ,message,time)
	          VALUES ('$user','$message','$time')";
			  
			  if(!mysqli_query($con,$query))  {
				die ('Error:'.mysqli_error($con));  
			  } else {
				  header("Location:index.php");
				  exit();
			  } 
	}
}

?>
