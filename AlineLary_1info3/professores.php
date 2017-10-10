<?php

//contem funcoes para acesso e manipulaçao dos dados de professores

function buscaProfessores($codigo){

// exemplo: $professor = array ("nome" => "Rafael");
	
	$professor = array();

//abrir arquivo

	$dados = file("dados/professores.csv");

//percorrer
	
	foreach( $dados as $linha){
		$colunas = explode(",",$linha);
		if ($colunas[0]==$codigo){
			$professor['siape'] = $colunas[0];
			$professor['nome'] = $colunas[1];
			$professor['email'] = $colunas[2];
			$professor['foto'] = $colunas[3];
		}
	}

	return $professor;

}

function listaProfessores(){
	
	$professores = array();
	
	$dados = file("dados/professores.csv");
	
	foreach( $dados as $linha){
		
		$colunas = explode(",",$linha);
		
			$professor['siape'] = $colunas[0];
			$professor['nome'] = $colunas[1];
			$professor['email'] = $colunas[2];
			$professor['foto'] = $colunas[3];

			$professores[] = $professor;
	}


	return $professores;
}

$lista = listaProfessores();

print_r($lista);

?>