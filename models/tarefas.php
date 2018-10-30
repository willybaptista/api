<?php

class Tarefas extends model{

	public function listar(){

		$array = array();

		$sql = "SELECT * FROM tarefas";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){

		$array = $sql->fetchAll();

		}
		
		return $array;

	}

	public function filmes() {

		$array = array();

		$json = file_get_contents("http://localhost/api/todo/listar");
		$array = json_decode($json);

		return $array;

	}

	public function cardapio() {

		$array = array();

		$sql = "SELECT * FROM lista ORDER BY Id";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {

			$array = $sql->fetchAll();
		}

		return $array;

	}

	public function addProduto($produto, $quantidade, $valor) {		

		$this->db->query("INSERT INTO pedidos SET produto = '$produto', quantidade = '$quantidade', valor = '$valor'");

	}

	public function addTarefa($titulo, $quantidade, $valor){

		$this->db->query("INSERT INTO tarefas SET titulo = '$titulo', quantidade = '$quantidade', valor = '$valor'");

	}

	public function delTarefa($id){

		$this->db->query("DELETE * FROM tarefas WHERE id = '$id'");

	}

	public function updateStatus($status, $id) {

		$this->db->query("UPDATE tarefas SET status = '$status' WHERE id = '$id'");

	}

}