<?php

	require 'escolas2.php';

		$array = array();

		$array = lista();

		header("Content-Type: application/json");
		echo json_encode($array);

?>