<?php
	include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeLayout/classeTabela.php");
	
	include("conexao.php");
	include("classeControllerBD.php");
	
	
	$colunas = array(   "ID_ESTADO_PROVINCIA as ID",
						"Estado_Provincia.Nome as Nome da provincia",
						"COD_PAIS as codigo do pais",
						"Pais.Nome as Nome do país");
	
	$t[0][0] = "Estado_Provincia";
	$t[0][1] = "Pais";

        
	
	$c = new ControllerBD($conexao);
	
    $r = $c->selecionar($colunas,$t,null);
    

	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
		$matriz[] = $linha;
	}
    

    
    
	$t = new Tabela($matriz,"Estado_Provincia");
	$t->exibe();
?>