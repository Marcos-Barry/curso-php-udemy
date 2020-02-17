<?php

$json = '[{"nome": "Joao","idade": 20},{"nome": "Marcos","idade": 28}]';

$data = json_decode($json, true);

var_dump($data);

?>