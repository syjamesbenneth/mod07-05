<?php
 session_start();
 //we can now use $_SESSION['current_user']
 if(isset($_SESSION['current_user'])){//isset=The isset () function is used to check whether a variable is set or not.
 	echo "<h1>Welcome ".$_SESSION['current_user']."</h1>";
 	echo "<a href='logout.php'>Logout</a>";

 	

 }else{
 	echo "Please login first"."<br>";
 	echo "<a href='session_login.php'>Login first</a>";
 }
 ?>