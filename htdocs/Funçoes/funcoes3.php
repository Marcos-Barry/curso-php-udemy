<?php

function soma(int...$valores){

	return array_sum($valores);
}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(2,2.3);
echo "<br>";
echo soma(4,5);
echo "<br>";
echo "<br>";
echo "<br>";

// informando que tipo de dado sera retornado com ":" logo apos passar o paramentro
function soma(int...$valores):float{

	return array_sum($valores);
}

echo var_dump(soma(2,2));

?>