<?php 
	session_start();
	session_unset();
	session_destroy();
	echo "Logged out successfully. <br>";

?>
<button><a href="./session_login.php">Login</a></button>
<?php


 ?>