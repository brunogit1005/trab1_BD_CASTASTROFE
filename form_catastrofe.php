<?php

    include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	require_once("classeForm/InterfaceExibicao.php");
	require_once("classeForm/classeInput.php");
	require_once("classeForm/classeButton.php");
	require_once("classeForm/classeForm.php");
	


	$v = array("action"=>"insere.php?tabela=CATASTROFE","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"Id_Catastrofe","placeholder"=>"ID Da Catastrofe...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"Nome","placeholder"=>"Nome do País...");
    $f->add_input($v);
	
	$v = array("type"=>"date","name"=>"Data","placeholder"=>"Data...");
    $f->add_input($v);
    
	$v = array("texto"=>"ENVIAR");
	$f->add_button($v);	
?>

<h3>Formulário - Inserir Catastrofe</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>