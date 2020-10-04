<?php

    //Capturei as informações do formulário
    
	$nomepet = $_POST['nomepet'];
	$idade = $_POST['idade'];
	$telefone = $_POST['telefone'];
	
    //Abrindo conexão com o BD
    
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO animal (nomepet, idade, telefone) 
			VALUE ('$nomepet', '$idade', '$telefone')";
			
	$texto = "Animal Inserido com Sucesso!<br>";
	include('rodape_conexao.php');
?>