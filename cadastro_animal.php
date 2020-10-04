<?php
	include("cabecalho.inc.php");
?>
	<fieldset>
		<legend> 
            Cadastre um PET no sistema: 
        </legend>
			<form action="insere.php" method="POST">
            
				<label>Nome do PET:</label>
				<input type="text" name="nomepet" />
				<br>
				
				<label>Idade do Pet:</label>
				<input type="number" name="idade" />
				<br>
				
				<label>Contato do responsável:</label>
				<input type="number" name="telefone" />
				<br>
				
				<input type="submit" value="Salvar" />
			</form>
	</fieldset>
		
<?php
	include("rodape.inc.php");
?>