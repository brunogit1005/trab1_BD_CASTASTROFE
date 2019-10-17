<?php
	include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeLayout/classeTabela.php");
	
	include("conexao.php");
	include("classeControllerBD.php");
	
	
	$colunas = array(   "ID_CIDADE as ID",
                        "Nome.Cidade as Nome da Cidade",
                        "COD_ESTADO_PROVINCIA AS Codigo da Provincia",
						"Nome.Estado_Provincia as Nome da Provincia"
                        
                    );
	
	$t[0][0] = "Cidade";
	$t[0][1] = "Estado_Provincia";


    $c = new ControllerBD($conexao);	
    $r = $c->selecionar($colunas,$t,null);
	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
        $matriz[] = $linha;
        
    }
    
	$t = new Tabela($matriz,"Cidade");
	$t->exibe();
?>