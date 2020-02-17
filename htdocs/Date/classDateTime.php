<?php 

$dt = new DateTime();

$periodo = new DateInterval("P15D");


echo $dt->format("d/m/Y");
echo "<br>";

$dt-> add($periodo);

echo $dt->format("d/m/Y");

?>