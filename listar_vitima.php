<?php
	include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeLayout/classeTabela.php");
	
	include("conexao.php");
	include("classeControllerBD.php");
	
	
	$colunas = array(   "ID_VITIMA as ID",
                        "Nome.Vitima as Nome da vitima",
                        "Email",
                        "Sexo",
						"COD_CIDADE AS Codigo da cidade",
						"Nome.Cidade as Nome da Cidade"
                    );
	
	$t[0][0] = "Vitima";
	$t[0][1] = "Cidade";


    $c = new ControllerBD($conexao);	
    $r = $c->selecionar($colunas,$t,null);
	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
        $matriz[] = $linha;
        
    }
    
	$t = new Tabela($matriz,"Vitima");
	$t->exibe();
?>