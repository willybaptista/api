<?php

require 'escolas_listas.php';

	$conta = 0;
	$array3 = array();

		foreach($array as $indice => $valor){
	
			foreach($array2 as $indice2 => $valor2){

				  if($valor == $valor2) {

				  	$conta++;

				  	echo $conta." - ".$indice." ".$indice2;
				  	echo '<br/>';				  	

				  	$array3[$indice2] = $indice;

				  }
			}
		}

 		echo "<br/>";

 		foreach ($array3 as $key => $value) {
 			
 			echo '"'.$value.'"=>"'.$key.'"';
 			echo "<br/>";

 		}

?>