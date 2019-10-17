<?php

    include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	require_once("classeForm/InterfaceExibicao.php");
	require_once("classeForm/classeInput.php");
	require_once("classeForm/classeButton.php");
	require_once("classeForm/classeForm.php");
	


	$v = array("action"=>"insere.php?tabela=PAIS","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"Id_Pais","placeholder"=>"ID Do País...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"Nome","placeholder"=>"Nome do País...");
    $f->add_input($v);
    
	$v = array("texto"=>"ENVIAR");
	$f->add_button($v);	
?>

<h3>Formulário - Inserir Pais</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>