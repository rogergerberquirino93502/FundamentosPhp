<?php 
	$oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';	
 ?>
 <p>Guessing game...</p>
 <form method="POST">
 	<p><label for="guess">Input Guess</label>
 		<input type="text" name="guess" id="guess" size="40" value="<?= ($oldguess) ?>"/></p>//evitar html Injection
 	<input type="submit"/>
 </form>
 <pre>
	$_POST:
	<?php
	print_r($_POST)
	?>
</pre>    