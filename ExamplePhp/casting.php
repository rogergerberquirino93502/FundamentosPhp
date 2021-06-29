<?php 
	$a = 56; $b = 12;
	$c = $a / $b;
	echo "C: $c\n";
	$d = "100" + 36.25 + TRUE;
	echo "D: " . $d . "\n";
	echo "D2: ". (string) $d . "\n";
	$e = (int) 9.9 - 1;
	echo "E: $e\n";
	$f = "sam" + 25;
	echo "F: $f\n";
	$g = "sam" . 25;
	echo "G: $g\n";

	echo "A".FALSE."B\n";
	echo "X".TRUE."Y\n";
 ?>