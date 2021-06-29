<?php 
	$stuff = array("name" => "Chuck",
				"course" => "WA4E");
	foreach ($stuff as $key => $value) {
		echo "key=", $key, " value=", $value, "<br />";
	}
	 ?>
	 <?php 
	$stuff = array("Chuck","WA4E");
	for ($i = 0; $i< count($stuff); $i++){
		echo "I=", $i, " val=",$stuff[$i], "<br />";
		}
	 ?>