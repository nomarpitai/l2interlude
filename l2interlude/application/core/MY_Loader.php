<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader{
	
	public function template($nome, $dados = array()){
		$this->view('templates/site/header');
		$this->view('templates/site/banner');
		$conteudo = $this->view($nome, $dados, true);
		$dados += array("conteudo" => $conteudo);
		$this->view('templates/site/menu', $dados);
		$this->view('templates/site/footer');
	}
	
}