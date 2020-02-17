<?php

// operadores de atribuiçoes // 

$a = 50;

$b = 45;

var_dump($a <=> $b);

$c = null;

$d = null;

$e = 23;

echo $c ?? $d ?? $e;


// operadores incrementais e decrementais //

$a = 10; 

echo $a++; // possivel incrementar depois, porem primeiro exibe o valor original 

echo ++$a; // incrementando antes de exibir o valor original 

echo "<br>";

echo $a;


// relembrando pressedentes 

$resultado = (10 + 3)/ 2 >5 && 10 + 5 <3;
// operador "and"  no php é = && 
// operador "or no php é = || "

var_dump($resultado);








?>