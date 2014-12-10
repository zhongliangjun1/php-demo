<html>

	 <head>
	 	<title>PHP ARRAY DEMO</title>
	 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 </head>
	 <body>
	
	 	<?php 
	 		echo "<h3>索引数组</h3>";
	 		$myArray = array("hello","array","world");
	 		echo "<div>" . $myArray[0] . " " . $myArray[1] . " " . $myArray[2] . " , my array count is " . count($myArray) . "</div>" ; 
	 	?>

	 	<?php 
	 		echo "<h3>关联数组</h3>";
	 		$myArray = array("word"=>"hello", "name"=>"zhong");
	 		echo "<div>" . $myArray["word"] . " " . $myArray["name"] . " !</div>" ; 
	 	?>

	 	<?php
	 		echo "<h3>遍历关联数组</h3>";
			$age = array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
			foreach( $age as $x=>$x_value) {
			  echo "key=" . $x . ", value=" . $x_value;
			  echo "<br>";
			}
		?>


	 </body>
	 
</html>