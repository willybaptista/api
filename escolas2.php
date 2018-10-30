<?php

	function lista() {

	require 'escolas_listas.php';

		$conta = 0;
		$array3 = array();

			foreach($array as $indice => $valor){
		
				foreach($array2 as $indice2 => $valor2){

					  if($valor == $valor2) {	  	

					  	$array3[$indice2] = $indice;					  	

					  }
				}
			}

	 		return $array3;

 	}
 		
?>