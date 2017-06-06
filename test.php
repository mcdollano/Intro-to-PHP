<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>


<?php
	$names3 = array("aaa", "bbb", "ccc", "ddd", "eee");
	
?>

	<ul>
		<li><?php echo $names3[0]; ?></li>
		<li><?php echo $names3[1]; ?></li>
		<li><?php echo $names3[2]; ?></li>
		<li><?php echo $names3[3]; ?></li>
		<li><?php echo $names3[4]; ?></li>
	</ul>

<?php 
	echo "<ul>
			<li>".$names3[0]."</li>
			<li>".$names3[1]."</li>
			<li>".$names3[2]."</li>
			<li>".$names3[3]."</li>
			<li>".$names3[4]."</li>
		  </ul>";
?>

<hr>
<?php
	echo'
		<table id="table1"
				class="table table-hover">
				<tr>
					<th>Names 1 </th>
					<th>Names 2</th>
				</tr>
				<tr>
					<td>'.$names3[0].'</td>		
					<td>'.$names3[0].'</td>	
				</tr>
				<tr>
					<td>'.$names3[1].'</td>		
					<td>'.$names3[1].'</td>	
				</tr>
				<tr>
					<td>'.$names3[2].'</td>		
					<td>'.$names3[2].'</td>	
				</tr>	
		</table>';

?>			

<hr>

<?php
	
	$x = 5;
	echo $x;
?>

<hr>

<?php

$string = "The quick brown fox jumps over the lazy dog.";

echo strtoupper($string)."<br>";
echo strtolower($string)."<br>";
echo ucfirst($string)."<br>";
echo ucwords($string)."<br>";

echo strpos ($string, 'over');
echo strrev($string);

$word = strtolower("Racecar");
$reversed = strrev($word);

if($word == $reversed){
	echo "palindrome";
} else {
	echo "not a palindrome";
}

?>

<?php

$string = "The quick brown fox jumps over the lazy dog.";

echo strtoupper($string)."<br>";
echo strtolower($string)."<br>";
echo ucfirst($string)."<br>";
echo ucwords($string)."<br>";

echo strpos($string, 'brown');

$brown = strpos($string, 'brown');
echo substr($string, $brown);

$a = 3;
$b = 4;
$a2 = pow($a, 2);
$b2 = pow($b, 2);

echo sqrt($a2 + $b2);

$c = 4;
$d = 3;

//sum difference product, quotient, remainder

echo $c + $d ."<br>";
echo $c - $d ."<br>";
echo $c * $d;
echo $c / $d;
echo fmod($c, $d);
echo ++$c; //increment of c
echo --$c;

	
?>

<hr>

<?php
// $string1 = "quick";
$string = "the brown fox.";

// echo strtoupper($string)."<br>";
// echo strtolower($string)."<br>";
// echo ucfirst($string)."<br>";
// echo ucwords($string)."<br>";

// echo strpos($string, 'brown');

// $brown = strpos($string, 'brown');
// echo substr($string, $brown);

$pos = strpos($string,'brown');
	echo $pos; 

echo "the quick " . substr($string, $pos);	


?>

<hr>

<?php //number_format (<double/float>,<number of decimal places>)

$a = 4;
$b = 3;

echo "string";


?>


<?php
	$a = 4;
	$b = 3;

	list ($a, $b) = array ($b, $a);
	echo $a . ',' . $b ."<br>";

	// $a =  $a + $b;  // 5 + 6 = 11
	// $b = $a - $b;   // 11 - 6 = 5
	// $a = $a - $b;  // 11 - 5 = 6
	// print $a . ',' . $b;


	

	
?>

<!--

<?php
	$a = 4;
	$b = 3;

?>

<hr>

<?php 
	$colors = array (85,90,90,95);
	$sum = array_sum($colors);
	$count = count($colors);
  
	echo $sum / $count;
	
?>

<hr>

<!--even number test -->

<hr>

<?php
	$a = 22;
	if ($a % 2 == 0 and $a % 3 == 0) {
		echo "Even multiple of 3";
	}
	elseif($a % 2 == 1 and $a % 3 == 0){
		echo "Odd multiple of 3";
	}
	else {
		echo "not a multiple of 3";
	}
?>

<hr>


<?php
	$day = 4;
	if ($day == 1)
		echo "Monday";
	elseif ($day == 2)
		echo "Tueday";
	elseif ($day == 3)
		echo "Wednesday";
	elseif ($day == 4)
		echo "Thursday";
	elseif ($day == 5)
		echo "Friday";
?>

<hr>

<?php
	$input = 1;
	switch ($input) {
		case 1:
			echo 'Monday';
			break;
		case 2:
			echo 'Tuesday';
			break;
		case 3:
			echo 'Wednesday';
			break;
		case 4:
			echo 'Thursday';
			break;
		case 5:
			echo 'Friday';
			break;
		case 6:
			echo 'Saturday';
			break;
		case 7:
			echo 'Sunday';
			break;
		default:
		echo 'invalid entry';
		break;

	}
?>

<hr>

<!--date-->

<?php
	$input = 9;

	$days = array('Sunday','Monday','Tueday','Wednesday','Thursday','Friday','Saturday');

	if ($input % 7 == 1 )
		echo "Monday";
	elseif ($input % 7 == 2) 
		echo "Tuesday";
	elseif ($input % 7 == 3) 
		echo "Wednesday";
	elseif ($input % 7 == 4) 
		echo "Thursday";
	elseif ($input % 7 == 5) 
		echo "Friday";
	elseif ($input % 7 == 6) 
		echo "Saturday";
	elseif ($input % 7 == 7) 
		echo "Sunday";

?>

<hr>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
</body>
</html>
