<?php 
	$pass1 = sha1($_POST['pass1']);
	$pass2 = sha1($_POST['pass2']);

	if($pass1 == $pass2){
		echo "Passwords matched";
	} else {
		echo "Passwords don't match";
	}
 ?>