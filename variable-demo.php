<html>

	 <head>
	 	<title>PHP VARIABLE DEMO</title>
	 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 </head>
	 <body>
	 
		<?php 

			$global_var = "global"; # 函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问
			echo "\$global_var = $global_var";

			function test1() {			
				//echo $global_var; # Notice: Undefined variable: global_var
				global $global_var; # You need to use key word of "global"
				echo "<br>函数内部访问global变量：";
				echo $global_var;

			}

			function test2() {
				$local_var = "local"; # 函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问
				$global_var = $local_var; # 这里的$global_var是个local变量
				echo "<br>local变量覆盖global变量：";
				echo $global_var;
			}

			function test3() {
				# 静态变量仅在局部函数域中存在且只被初始化一次，当程序执行离开此作用域时，其值不会消失，会使用上次执行的结果。
				static $static_var = 0;
				$static_var++;
				echo "<br>";
				echo $static_var;
			}
			
			test1();
			test2();
			echo "<br>local变量覆盖global变量：";
			for ($i=0; $i < 3; $i++) { 
				test3();
			}
	 	
	 	?>

<?php
print <<<END
	<br>
	php中heredoc的使用方法
	以End开始标记开始，以End结束标记结束，结束标记必须顶头写，不能有缩进和空格，且在结束标记末尾要有分号。
	开始标记和开始标记相同，比如常用大写的EOT、EOD、EOF来表示，但是不只限于那几个，只要保证开始标记和结束标记不在正文中出现即可。
END;
?>

	 </body>
	 
</html>