<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();

    }

    public function index() {  

    	$dados = array();
		$t = new Tarefas();
		$lista = $t->filmes();	

		//header("Content-Type: application/json");
		//$array = var_dump(json_decode($lista, true));
		//echo $array;

		$dados['lista'] = $lista;

		$this->loadTemplate('filmes', $dados);
   
    }

    public function lista(){

		$dados = array();
		$t = new Tarefas();
		$lista = $t->listar();	

		//header("Content-Type: application/json");
		//$array = var_dump(json_decode($lista, true));
		echo $array;

		$dados['titulo'] = $titulo;
		$dados['quantidade'] = $quantidade;
		$dados['valor'] = $valor;

		$this->loadTemplate('home', $dados);

	}

}




