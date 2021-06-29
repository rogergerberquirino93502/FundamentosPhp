<?php
	//Scope 
	function tryzap(){
		$val = 100;
	}
	$val = 10;
	tryzap();
	echo "TryZap = $val\n";
 	//Global scope

 	function dozap(){
 		global $val;
 		$val = 100;
 	}

 	$val = 10;
 	dozap();
 	echo "Dozap = $val\n";
 ?>
