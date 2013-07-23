<?php
// funcoes

/**
 * funcao quebra de linha
 * @author Michel Recondo
 * @version 0.2
 * recebe 2 parâmetros, quantidade de linhas
 * e se deve conter quebra de linha \n
 */
function linha($qtde=1,$newline=true) {
	if ($qtde > 0) {
		$br = '';
		for ($i=0; $i < $qtde; $i++) { 
			if ($newline) {
				$br.= "<br />\n";
			} else {
				$br.= "<br />";
			}
		}
		return $br;
	} else {
		return false;
	}
}

function debug_a($dados) {
	if (isset($dados)) {
		$ret = "<pre>";
		$ret.= print_r($dados,true);
		$ret.= "</pre>";
		return $ret;
	} else {
		return false;
	}
}

function parametros(&$par,$par2) {
	$par = $par." teste";
	return $par;
}

// $var = 'outro teste';
// echo parametros($var,'')."<br />";
// echo linha();
// echo $var;

function divisao($x,$y) {
	if ($y == 0) {
		return false;
	} else {
		return $x / $y;
	}
}

function valida($campo,$valor,&$msg) {
	return true;
}

//echo divisao(10,2);











?>