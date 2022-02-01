<html>

<head>
	<title></title>
	<style></style>
</head>

<body>
	<p>2.$aと$bに適当に値を入れ、加減乗除と剰余算を行って式と結果を表示しなさい。</p>

	<?php
	$a = 1234;
	$b = 23.4;

	echo "$a + $b = ", $a + $b, "<br />";
	echo $a - $b . '<br />';;
	echo $a * $b . '<br />';
	echo $a / $b . '<br />';
	echo $a % $b . '<br/>';
	?>

	<?php
	$a = '1234AB';
	$b = '23CD';

	echo (int)$a + (int)$b . '<br />';
	echo (int)$a - (int)$b . '<br />';;
	echo (int)$a * (int)$b . '<br />';
	echo (int)$a / (int)$b . '<br />';
	echo (int)$a % (int)$b . '<br />';
	?>
</body>

</html>