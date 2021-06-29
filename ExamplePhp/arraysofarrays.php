<?php 
	$products = array(
		'paper' => array(
			'copier' => "Copier & Multipurpose",
			'inkjet' => "inkjet Printer"
			),
		'pens' => array(
			'ball' => "Ball Point",
			'hilite' => "Highlighters",
			'marker' => "Markers"),
		'misc' => array(
		'tape' => "sticky tape",
		'glue' => "Adhesives",
		'clips' => "Paperclips")
	);

	echo $products["pens"]["marker"];
 ?>