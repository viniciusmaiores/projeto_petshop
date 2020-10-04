<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Editar </title>
    </head>
    <body>
        <?php
            if(empty($_POST))
            {
                include('cabecalho_conexao.php');
                
                $id= $_GET['id'];
                $SQL = "SELECT * FROM animal WHERE id= '$id'";

                // Executa o comando SQL
                $dados_recuperados = mysqli_query($con, $SQL);

                if(mysqli_num_rows($dados_recuperados) > 0){
                    
                    while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
                        
                        $nomepet=$resultado[1];
                        $idade=$resultado[2];
                        $telefone=$resultado[3];
                    }
                    echo'<form action="editar_pet.php" method="POST">
                            <fieldset>
                                <legend>Editar dados do pet</legend>
                                <p>
                                    <label>Nome do pet</label>
                                    <input type="text" name="nomeE" value="'.$nomepet.'"/>
                                </p>
                                <p>
                                    <label>Idade do pet</label>
                                    <input type="number" name="idadeE" value="'.$idade.'"/>
                                </p>
                                <p>
                                    <label>Telefone</label>
                                    <input type="number" name="telE" value="'.$telefone.'"/>
                                </p>
                                <p>
                                    <input type="hidden" name="id" value="'.$id.'"/>
                                </p>
                                <p>
                                    <input type="submit" value="Enviar"/>
                                </p>
                            </fieldset>
                        </form>';	
                }
            }else{
                $id = $_POST['id'];

                $nomeE = $_POST['nomeE'];
                $idadeE = $_POST['idadeE'];
                $telefoneE = $_POST['telelefoneE'];

                include('cabecalho_conexao.php');
                    
                $SQL = "UPDATE animais set nome_do_pet='$nomeE', idade_do_pet='$idadeE', telefone='$telefoneE' WHERE id=$id";

                include('rodape_conexao.php');

            }

        ?>
    </body>
</html>