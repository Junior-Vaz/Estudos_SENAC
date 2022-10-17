<?php
    //Criando conexão

    $host = "localhost";
    $login = "leo_edgard";
    $senha = "JPC@nes2022";
    
    //fazendo conexão com banco

    $connect = mysql_connect("$host","$login","$senha");

    //conectando a base de dados

    $banco = "leo_jp_edgard_junior";
    mysql_select_db($banco,$connect);

	//efetuando consultas
	//criando select
	
	$select = mysql_query('SELECT * FROM clientesPet');

	//Criando listagem
	echo $select;
	
    //Fechando conexão
    echo "<br>Conexão efetuada com sucesso";
    mysql_close($connect);
?>