<?php  
/*
function greet(){
	print "Hello\n";
}

greet();

function howdy($lang = 'es'){
	if($lang == 'es') return "Hola";
	if($lang == 'fr') return "Bonjour";
	return "Hello";
}

print howdy() . "Hi";

function double($alias){
	$alias = $alias *2;
	return $alias;
}

$val = 10;
$dval = double($val);
echo "value = $val Doubled = $dval\n";
*/

function triple(&$realthing){
	$realthing = $realthing * 3;
}
$val = 10;
triple($val);
echo "Triple = $val\n";


?>