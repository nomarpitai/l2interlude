<?php
	
	function nomeProjeto(){
		$ci = get_instance();
		return $ci->config->item('nome_projeto');
	}
?>