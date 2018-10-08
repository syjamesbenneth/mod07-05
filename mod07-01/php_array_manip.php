<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<?php 
	$lyrics = array('stars', 'shine', 'yellow');
	 
	echo "Look at the $lyrics[0], look how they $lyrics[1] for you, and everything that you do. <br>

		Yeah, they were all $lyrics[2]."

		
	 ?>

	 <ul>
	 	<li><?php echo $lyrics[0] ?></li>
	 	<li><?php echo $lyrics[1] ?></li>
	 	<li><?php echo $lyrics[2] ?></li>
	 </ul>

	 <?php 
	 echo '<pre>';
	print_r($lyrics);
	echo '</pre>';

	foreach($lyrics as $value){
    echo $value . "<br>";
}

 	?>
</body>
</html>