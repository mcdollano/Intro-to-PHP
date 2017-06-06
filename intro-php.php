<html>
<head>
	<title></title>
</head>
<body>

<?php
 echo "Hello World!"; 
 ?>
<br>
<?php

	$name='Mark';
	echo "Hello $name";
	echo "<br>";
	echo 'Hello $name';

?>

<br>

<?php
	echo 'Buzz Lightyear once said: "You\'re a toy!"';
	define("ROOT_LOCATION","Desktop/Capstone 1-final/images/banner-1.jpeg");
	echo "ROOT_LOCATION";

?>

<br>
<hr>

<?php
	$a = "1000";
	$b = "+1000";
	if ($a == $b) echo "1";
	if ($a === $b) echo "2";
?>

<hr>

<?php
	if (TRUE OR FALSE) {
		echo "true";
	}
	else {
		echo "false";
	}
?>



</body>
</html>
