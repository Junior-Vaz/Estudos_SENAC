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
	//declarando variaveis
	$id = $_GET['id'];
	$nome = $_GET['nome'];
  $raca = $_GET['raca'];

	//inserindo...
	$insert = sprintf("INSERT INTO pet (id,nomepet,raca) VALUES ('$id','$nome','$raca')");
  mysql_query($insert,$connect) or die('ERRO AO INSERIR');
//--------------------------------
  //select...
  $select = "SELECT * FROM `pet`";
  $result = mysql_query($select,$connect);
  $resultrow = mysql_fetch_assoc($result);

//--------------------------------
    //Fechando conexão
    mysql_close($connect);
?>