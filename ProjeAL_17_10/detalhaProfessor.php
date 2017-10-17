<?php

include("cabecalho.php");
include("professores.php");


//recupera o codigo enviado via metodo get
	$siape = $_GET['cod'];

//chama funcao passando o codigo do professor
	$professor = buscaProfessores($siape);

?>
	
	<div>
		<img class="foto" src="<?=$professor['foto'] ?>">
		<h2><?=$professor['nome'] ?></h2>
		<p><?=$professor['email'] ?></p>
	</div>


<?php

include("rodape.php");


?>