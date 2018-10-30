<?php

$base = 2;
$expoente = 3;

public function conta($base, $expoente){

$resultado = 0;
$n = 1;

while($expoente > $n){

	$resultado = $base * $expoente;
	$n++;
}

return $resultado;

}

?>