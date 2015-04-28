<?php

function criaHeaderContainer($conteudo){
	return "<div class='blockHeader'><div class='headerLeftDeco'><div class='headerRightDeco'>{$conteudo}</div></div></div>";
}

function criaWidget($titulo, $conteudo){
	$header = criaHeaderContainer($titulo);
	return "{$header}<div class='blockContent'><div class='contentBlock'>{$conteudo}</div></div>";
}

function criaItemMenu($descricao, $link){
	$a = anchor($link,$descricao);
	return "<li>{$a}</li>";
}

function criaMenu(){
	$ci = get_instance();
	$menu = $ci->config->item('options_menu');
	$menuLink = $ci->config->item('options_menu_link');
	$itens = array_map("criaItemMenu", $menu, $menuLink);
	$html = "<div id='navi'><ul>";
	foreach ($itens as $value){
		$html .= $value;
	}
	$html .= "</ul></div>";
	
	return $html;
	
}


?>