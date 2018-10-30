<?php
class todoController extends controller {

	public function __construct(){

		parent::__construct();

	}

	public function index(){}

	public function listar(){

		$array = array();
		$t = new Tarefas();
		$array = $t->listar();

		header("Content-Type: application/json");
		echo json_encode($array);

	}

	public function filmes() {

		$array = array();
		$json = file_get_contents("http://localhost/api/todo/listar");

		//header("Content-Type: application/json");
		$array = json_decode($json);

		return $array;	

		//foreach ($array as $ac) {

			//echo $ac->titulo;	
				
			//}				

	}

	public function addProduto() {

			if(isset($_GET['produto']) && !empty($_GET['produto'])) {

				$produto = addslashes($_GET['produto']);
				$quantidade = addslashes($_GET['quantidade']);
				$valor = addslashes($_GET['valor']);

				$t = new Tarefas();
				$t->addProduto($produto, $quantidade, $valor);

				echo "Adicionado";

			}
	}

	public function add(){

		if(isset($_POST['titulo']) && !empty($_POST['titulo'])){

			$titulo = addslashes($_POST['titulo']);
			$quantidade = addslashes($_POST['quantidade']);
			$valor = addslashes($_POST['valor']);

			$t = new Tarefas();
			$t->addTarefa($titulo, $quantidade, $valor);

		}

		//header("Location:http://mococadelivery.com.br/api");

	}

	public function del(){}
	public function update(){}


}

