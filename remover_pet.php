<?php
	$id = $_GET['id'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "DELETE FROM animal WHERE id=$id";

	include('rodape_conexao.php');
	
	header('location:consultar_todos_animais.php');
?>