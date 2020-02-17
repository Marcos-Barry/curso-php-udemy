<?php 

$a = 10;


// passando parametro por referencia 
function troca(&$a){

	$a += 50;
	return $a;

}


echo(troca($a));
echo "<br>";
echo($a);
echo "<br>";

$pessoa = array(
	'nome' => 'marcos',
	'idade'=> 20
);

foreach ($pessoa as  &$value) {

	if (gettype($value) === 'integer') $value +=10;

	echo($value).'<br>';
	# code...
}

print_r($pessoa)


?>