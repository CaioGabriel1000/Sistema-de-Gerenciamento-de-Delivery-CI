<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function formatar_preco($valor)
	{
		$negativo = false;
		$preco = "";
		$valor = intval(trim($valor));
		if ($valor < 0) {
			$negativo = true;
			$valor = abs($valor);
		}
		$valor = strrev($valor);
		while (strlen($valor) < 3) {
			$valor .= "0";
		}
		for ($i = 0; $i < strlen($valor); $i++) {
			if ($i == 2) {
				$preco .= ",";
			}
			if (($i <> 2) AND (($i+1)%3 == 0)) {
				$preco .= ".";
			}
				$preco .= substr($valor, $i , 1);
		}
		$preco = strrev($preco);
		return ($negativo ? "-" : "") . $preco;
	}

	function formatarData($entrada){
		$data = date('d/m/Y H:i', strtotime($entrada));
		return $data;
	}