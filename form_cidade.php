<?php

    include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	require_once("classeForm/InterfaceExibicao.php");
	require_once("classeForm/classeInput.php");
	require_once("classeForm/classeButton.php");
	require_once("classeForm/classeForm.php");
	require_once("classeForm/classeOption.php");
	require_once("classeForm/classeSelect.php");


	include("conexao.php");
	
	$select = "SELECT ID_ESTADO_PROVINCIA AS value, Nome AS texto FROM ESTADO_PROVINCIA";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
    

	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
	}	
	$v = array("action"=>"insere.php?tabela=CIDADE","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"Id_Cidade","placeholder"=>"ID da cidade...");
	$f->add_input($v);

	$v = array("type"=>"text","name"=>"Nome","placeholder"=>"Nome...");
	$f->add_input($v);
	
	$v = array("name"=>"COD_ESTADO_PROVINCIA");
	$f->add_select($v,$matriz);
	
	
	$v = array("texto"=>"ENVIAR");
	$f->add_button($v);	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style> input{margin:4px;}</style>
	</head>
<body>
<h3>Formulário - Inserir Cidade</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>