<?php 
    //Criando conexão

    $host = "localhost"; //aqui vai o local host
    $login = "leo_edgard"; //logindo banco
    $senha = "JPC@nes2022"; //senha do banco
    
    //fazendo conexão com banco..

    $connect = mysql_connect("$host","$login","$senha");

    //conectando a base de dados..

    $banco = "leo_jp_edgard_junior";
    mysql_select_db($banco,$connect) or  die("Erro ao acessar base");

//------------------------------------------

	//query de busca dos dados
	$selectpet = "SELECT * FROM clientesPet";

	//verifica se a conexão foi realizada
	$selectrow = mysql_query($selectpet,$connect) or ("error");

	//Estrutura /Array com os resultados do database
	$row_rs_pet_array = mysql_fetch_assoc($selectrow);

//--------------------------------
    //Fechando conexão
    //echo "<br>Conexão efetuada com sucesso";
    //mysql_close($connect);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrados</title>
  <style>body{font-family: arial;};</style>
</head>
<body>
    <h1>Cadastros</h1>
    <table>
        <tr>
            <th colspan="3" Align="left">Listragem de Pets Cadastrados</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nome Cliente:</th>
            <th>Raça</th>
        </tr>
        <?php do { ?>
                  <tr>
                     <td><?= $row_rs_pet_array[idCliente];?></td>
                     <td><?= $row_rs_pet_array[nome];?></td>
                     <td><?= $row_rs_pet_array[cpf];?></td>
                </tr>
        <?php } while ($row_rs_pet_array = mysql_fetch_assoc($rs_pet));?>
    </table>
</body>
</html>
<a href=""></a>