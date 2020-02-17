<?php 

include 'db.php'; # BASE DE DADOS 
include 'header.php'; # CABEÇALHO DA PAGINA

if(isset($_GET['pagina'])){

	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'views/home';
}


if($pagina == 'cursos'){

	include 'views/cursos.php';
}
elseif( $pagina == 'alunos'){
	include 'views/alunos.php';
}
elseif($pagina == 'matriculas'){
	include 'views/matriculas.php';
}
elseif($pagina == 'inserir_alunos'){
	include 'views/inserir_alunos.php';
}
else{
	include 'views/home.php'; # CONTEUDO DA PAGINA 
}


include 'footer.php'; # RODAPE 