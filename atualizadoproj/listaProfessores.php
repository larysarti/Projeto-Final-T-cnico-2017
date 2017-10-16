<?php

include("cabecalho.php");

include("professores.php");

//a funcao retorna um array contendo os professores

	$lista = listaProfessores();

	foreach($lista as $professor){
		echo('<div class="professor">');
		echo('<img src="'.$professor['foto'].'">');
		echo('<a href="detalhaProfessor.php?cod='.$professor['siape'].'">' .$professor['nome'].'</a>');
		echo('</div>');
	}


include("rodape.php");


/* 
Objetivo:

<div class="professor">
	<img src="">
	<p>Nome</p>
</div>
*/
?>