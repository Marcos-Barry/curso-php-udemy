<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$query = "select * from cursos";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "select nm_aluno, DATE_FORMAT(dt_nascimento , 'd%/m/%Y') as 'data de nascimento' from alunos";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "select * from matriculas";
$consulta_cursos = mysqli_query($conexao, $query);