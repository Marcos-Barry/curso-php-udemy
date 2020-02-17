<?php

	include 'db.php';

	$nm_aluno = $_POST['nome_aluno'];
	$dt_nascimento = $_GET['dt_nascimento'];
	$dt_nascimento = date("Y-m-d",strtotime(str_replace('/','-',$dt_nascimento)));
	

	$query = "insert into alunos(nm_aluno, dt_nascimento)
				values ('$nm_aluno' , '$dt_nascimento')";

	mysqli_query($conexao, $query);
	header('location:index.php?pagina=alunos');
