<?php
	include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeLayout/classeTabela.php");
	
	include("conexao.php");
	include("classeControllerBD.php");
	
	
	$colunas = array(   "ID_CATASTROFE as ID",
						"Nome",
						"Data");
	
	$t[0][0] = "Catastrofe";
	$t[0][1] = Null;

        
	
	$c = new ControllerBD($conexao);
	
    $r = $c->selecionar($colunas,$t,null);
    

	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
		$matriz[] = $linha;
	}
    

    
    
	$t = new Tabela($matriz,"Catastrofe");
	$t->exibe();
?>