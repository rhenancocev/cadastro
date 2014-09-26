<?php
	$operacao = $_POST["operacao"];
	if (strcmp($operacao, "inclusao") == 0 ) {
		// realiza a inclusao do produto
		echo "Produto incluido";
	}
	
	if (strcmp($operacao, "exclusao") == 0 ) {
		// realiza a exclusao do produto
		echo "Produto excluido";
	}
        if (strcmp($operacao, "atualizar") == 0 ) {
		
		echo "Produto atualizado";
        }
?>