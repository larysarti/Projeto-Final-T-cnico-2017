<?php

include("cabecalho.php");

include("alunos.php");

	$lista = listaAlunos();

	foreach($lista as $aluno){
		echo('<div class="alunos">');
		echo('<img class="foto" src="'.$aluno['foto'].'">');
		echo('<a href="detalhaAluno.php?cod='.$aluno['matricula'].'">' .$aluno['nome'].'</a>');
		echo('<h2>'.$aluno['turma'].'</h2>');
		echo('</div>');
	}




include("rodape.php");




?>