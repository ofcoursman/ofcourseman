<html>
<body>
<meta charset="UTF-8">
<form method="post" action="">
	<p>a: <input type="number" name="a"></p>
	<p>b: <input type="number" name="b"></p>
	<p>c: <input type="number" name="c"></p>
	<p><input type="submit"></p>
</form>

<?php
    header("Content-Type:text/html; charset=utf-8");

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];

echo $a."x² + ".$b."x + ".$c." = 0<p>";

$delta=(pow($b,2))-(4*$a*$c);

if (!isset($a) or !isset($b) or !isset($c)) {
	echo "Please input all values above!";
}

elseif ($a==0) {
	echo "The equation is not quadratic!";
}

elseif ($delta<0) {
    echo "nema rieseinie";
}

elseif ($delta>0) {
	$rootplus=round((($b*-1)+sqrt(pow($b,2)-4*$a*$c))/(2*$a),3);
	$rootmin=round((($b*-1)-sqrt(pow($b,2)-4*$a*$c))/(2*$a),3);
	echo "x = $rootplus or $rootmin.";
}

elseif ($delta==0) {
	$rootrep=round((($b*-1)+sqrt(pow($b,2)-4*$a*$c))/(2*$a),3);
	echo "x = $rootrep (repeated)";
}

?>









</body>
</html>
