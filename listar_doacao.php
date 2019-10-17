<?php
	include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeLayout/classeTabela.php");
	
	include("conexao.php");
	include("classeControllerBD.php");
	
	
	$colunas = array(   "ID_DOACAO  as ID",
						"COD_CATASTROFE AS Codigo do Catastrofe",
						"Data.Catastrofe as Data da catastrofe",
						"COD_DOADOR AS Codigo do Doador",
						"Doador.Nome AS Nome do Doador",
						"Valor"
                        
                    );
	
	$t[0][0] = "Doacao";
	$t[0][1] = "Catastrofe";
	$t[1][0] = "Doador";
	
	$c = new ControllerBD($conexao);
	
	$r = $c->selecionar($colunas,$t,null);
	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
		$matriz[] = $linha;
	}
	
	$t = new Tabela($matriz,"Doacao");
	$t->exibe();
?>