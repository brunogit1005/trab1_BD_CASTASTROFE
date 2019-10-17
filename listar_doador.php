<?php
	include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeLayout/classeTabela.php");
	
	include("conexao.php");
	include("classeControllerBD.php");
	
	
	$colunas = array(   "ID_DOADOR as ID",
						"Nome.Doador as Nome do Doador",
						"Email",
						"Sexo",
						"COD_CIDADE as Codigo da cidade",
						"Nome.Cidade as 'Nome da Cidade'");
	
	$t[0][0] = "Doador";
	$t[0][1] = "Cidade";

        
	
	$c = new ControllerBD($conexao);
	
    $r = $c->selecionar($colunas,$t,null);
    

	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
		$matriz[] = $linha;
	}
    

    
    
	$t = new Tabela($matriz,"Doador");
	$t->exibe();
?>