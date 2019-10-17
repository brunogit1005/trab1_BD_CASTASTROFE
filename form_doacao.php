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

$v = array("action"=>"insere.php?tabela=Doacao","method"=>"post");


$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_doacao","placeholder"=>"ID Da Doação...");
	$f->add_input($v);
	$v = array("type"=>"number","name"=>"Valor","placeholder"=>"Valor...");
    $f->add_input($v);


$select = "SELECT ID_CATASTROFE AS value, Nome AS texto FROM CATASTROFE ";

$stmt = $conexao->prepare($select);
$stmt->execute();

while($linha=$stmt->fetch()){
	$matrizSeguranca[] = $linha;
}	
$v = array("name"=>"COD_CATASTROFE");
$f->add_select($v,$matrizCatastrofe);

$select = "SELECT ID_DOADOR AS value, Nome AS texto FROM DOADOR";

$stmt = $conexao->prepare($select);
$stmt->execute();

while($linha=$stmt->fetch()){
	$matrizCompanhia[] = $linha;
}	
	
$v = array("name"=>"COD_DOADOR");
$f->add_select($v,$matrizDoador);
]
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
<h3>Formulário - Inserir Doaçaõ </h3>

<hr />
<?php
$f->exibe();

?>
</body>
</html>
</html>