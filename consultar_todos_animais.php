<?php
	include ("cabecalho.inc.php");
?>
<?php

	include ('cabecalho_conexao.php');
	
	$SQL = "SELECT * FROM animal" ;
	
    // Executa o comando SQL
    
	$dados_recuperados = mysqli_query ($con, $SQL);

	if ( mysqli_num_rows ($dados_recuperados) > 0){
		echo '<table border = "4">
				<tr>
					<th> Id </th>
					<th> Nome do PET </th>
					<th> Idade do PET </th>
					<th> Telefone do responsável </th>
					<th colspan = "2"> Operações </th>
				</tr>';
		while (($resultado = mysqli_fetch_array ($dados_recuperados)) != null){
	
			echo  '
					<tr>
						<td> ' . $resultado [ 0 ]. '</td>
						<td> ' . $resultado [ 1 ]. '</td>
						<td> ' . $resultado [ 2 ]. '</td>
						<td> ' . $resultado [ 3 ]. '</td>
						<td> <a href="remover_pet.php?id='.$resultado [0].'"> Remover </a> </td>
						<td> <a href="editar_pet.php?id='.$resultado [0].'"> Editar </a> </td>
					</tr>
				';
		}	
		echo  '</table>';	
	}
	mysqli_close ($con);
	echo  '</br> <a href="menu.php"> Voltar </a>';
?>