<html>

	 <head>
	 	<title>PHP ARRAY DEMO</title>
	 </head>
	 <body>
	 	<?php echo "<div>Your user agent is " . $_SERVER['HTTP_USER_AGENT'] . "</div>" ; ?> 

	 	
	 	<?php 
	 		$myArray = array("hello","array","world");
	 		echo "<div>" . $myArray[0] . " " . $myArray[1] . " " . $myArray[2] . " , my array count is " . count($myArray) . "</div>" ; 
	 	?>

	 </body>
	 
</html>