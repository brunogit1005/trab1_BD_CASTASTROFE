<?php

	$c = new CabecalhoHTML();
	$v = array("Vitima"=>"Vitima","Cidade"=>"Cidade","Catastrofe"=>"Catastrofe","Estado_Provincia"=>"Estado_Provincia","Doador"=>"Doador","Doacao"=>"Doacao","Pais"=>"Pais");
	$c->add_menu($v);
	$c->exibe();

?>