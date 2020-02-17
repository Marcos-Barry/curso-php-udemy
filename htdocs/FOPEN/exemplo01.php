<?php


//primeiro parametro passado é o caminho do arquivo
//segundo parametro como vc quer usar esse arquivo: ler, inserir , editar algo.
// w+ cria esse arquivo novo caso ele nao exista ainda
// usando a+ o conteudo inicial eh preservado e acrescenta um novo conteudo

$file = fopen("log.txt", 'w+');

// funcao para escrever algo dentro do arquivo citado acima
//  primeiro parametro qual é o arquivo, segundo parametro os dados que quero colocar dentro do arquivo
fwrite($file, date("Y-m-d H:i:s")."\r\n");

// apos manipular o arquivo eh necessario fechar o arquivo.
fclose($file);

echo "Arquivo criado com sucesso ";
?>