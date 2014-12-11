<html>

<head>
	<title>PHP STRING DEMO</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php

$newline = "<br>";

print <<<END
	<h4>php中heredoc的使用方法</h4>
	以End开始标记开始，以End结束标记结束，结束标记必须顶头写，不能有缩进和空格，且在结束标记末尾要有分号。
	开始标记和开始标记相同，比如常用大写的EOT、EOD、EOF来表示，但是不只限于那几个，只要保证开始标记和结束标记不在正文中出现即可。
	$newline
END;



echo "<h4>对比subStr所在字符串位置</h4>";
echo strpos("hello", "he");
echo $newline;
echo strpos("hello", "ll");
echo $newline;

echo "<h4>找不到包含关系时，返回false</h4>";
echo strpos("hello", "eh") === false ;
echo $newline;

echo "<h4>true的echo输出为1，false的echo没有内容输出，0可以判断为false，但echo显示仍为0</h4>";
echo true;
echo $newline;
echo false;
echo $newline;
echo 0;
echo $newline;

echo "<h4>==和===的差别</h4>";
echo 0==false;
echo $newline;
echo 0===false;

?>


</body>
</html>