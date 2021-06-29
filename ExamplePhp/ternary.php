<?php 
	$www = 123;
	$msg = $www > 100 ? "Large" : "Small";
	echo "First: $msg \n";
	$smg = ($www % 2 == 0) ? "Even" : "Odd";
	echo "Second: $smg \n";
	$smg = ($www % 2) ? "Odd" : "Even";
	echo "Third: $msg \n"
 ?>