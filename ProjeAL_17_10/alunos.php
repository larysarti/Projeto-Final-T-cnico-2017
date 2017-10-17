<?php



function buscaAluno($matricula){


	$alunos = array();



	$dados = file("dados/alunos.csv");


	
	foreach( $dados as $linha){
		$colunas = explode(",",$linha);
		if ($colunas[0]==$matricula){
			$alunos['matricula'] = $colunas[0];
			$alunos['nome'] = $colunas[1];
			$alunos['turma'] = $colunas[2];
			$alunos['email'] = $colunas[3];
			$alunos['foto'] = $colunas[4];
		}
	}

	return $alunos;

}

function listaAlunos(){
	
	$alunos = array();
	
	$dados = file("dados/alunos.csv");
	
	foreach( $dados as $posicao=>$linha){
		
		if($posicao!=0){ //se posicao diferente de zero
		
			$colunas = explode(",",$linha);
		
			$aluno['matricula'] = $colunas[0];
			$aluno['nome'] = $colunas[1];
			$aluno['turma'] = $colunas[2];
			$aluno['email'] = $colunas[3];
			$aluno['foto'] = $colunas[4];

			$alunos[] = $aluno;
		}
	}


	return $alunos;
}


function listaAlunosTurma($turma){

}

/*
$lista = listaAlunos();
print_r($lista);

$p1 = buscaAluno(2017308864);
print_r($p1);

*/


?>