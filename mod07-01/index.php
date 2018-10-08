<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
	<?php echo "Hello Word";	?>

	<?php 
		echo "Today is " .date("l") . ". ";
	 ?>

	 Here's the latest news.

	 <?php 
		$name = "Jobert";
		$age = 19;
		$countries = array("Japan", "Korea", "Philippines");
		echo "$name <br>";
		echo "$age <br>";
		echo "$countries[2] <br>";
	  ?> 

	  <?php 
	  	$username = 'John';
	  	$email_from = 'Pedro Peterson';
	  	$email_subject = "Hey, $username! You have a new message!";
	  	$email_body = "You have received a new message from your website contact form. \n \n"."The message came from $email_from";
	  	echo $username;
	  	echo $email_from;
	  	echo $email_subject;
	  	echo $email_body;
	  	echo "Hello" . $username; //like Javascript concatenate

	  	$team = array('Kato', 'Shem', 'Angel', 'Ali', 'Carmela');
	  	$colors = array('red', 'green', 'blue');
	  	$fruits = array('mango', 'apple', 'orange');

	  	echo $team[2];
	  	echo $colors[0];
	  	echo $fruits[1];
	  	echo $fruits[3];


	   ?>

	 <?php 
	 	$username = "Jane Smith";
		echo $username;
		echo "<br>";
		$current_user = $username;
		echo $current_user;
		 ?>


</body>
</html>