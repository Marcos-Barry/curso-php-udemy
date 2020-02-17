<?php

for ($i=0; $i < 30; $i+=2) { 

	if ($i > 10 && $i < 20)continue;
	if ($i === 24)break;

	echo "VOU SER PROGRAMADOR";
	echo "<br>";

}

/*
for ($i=date("Y"); $i > date("Y")-100 ; $i--){ 
	
	echo "php brabo";
	echo "<br>";

} */

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100 ; $i--){ 
	
	echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>";







?>