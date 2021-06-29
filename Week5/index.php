<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Roger Tambriz PHP</title>
</head>
<body>
	<h1>Roger Tambriz PHP</h1>
	<p>The SH256 hash of "Roger Tambriz is:"</p>
	<pre>
	<?php  
	$str = "\n";
	print hash('sha256', 'Roger Tambriz');
	$myname = 'ASCCI ART: 
	*******
	*     *
	*******
	* * 
	*   *
	*     * ';
	echo $str,$myname;
	?>
</pre>
<h1><a href="check.php">Check Here</a></h1>
<h2><a href="fail.php">Fail Here</a></h2>
</body>
</html>
