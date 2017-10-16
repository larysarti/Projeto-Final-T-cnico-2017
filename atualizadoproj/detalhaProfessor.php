<?php

include("cabecalho.php");
include("professores.php");

//recupera o codigo enviado via metodo get
	$siape = $_GET['cod'];

//chama funcao passando o codigo do professor
	$professor = buscaProfessor($siape);
//exibe o array com o dados do professor
	print_r($professor);

include("rodape.php");


?>