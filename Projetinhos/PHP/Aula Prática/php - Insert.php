<?php
$connect = mysql_connect("localhost","root","user") or die("Não foi possivel fazer a conexão"); // aqui se unicia a conexçao com o banco de dados

mysql_select_db("user",$connect); //aqui sera ultilizado qual base iremos trabalhar

            $insere1 = insert into alunos(id,nome,cidade)
							values(1, 'rodrigo','caçador');

			$insere1 = insert into alunos(id,nome,cidade)
							values(2, 'maria','fraiburgo');

			$insere1 = insert into alunos(id,nome,cidade)
							values(3, 'leandro','videira');

			$mysql_query(mysql_query($insere1, $conexão) or die("insert não realizadoo"); // variavel recebendo o valor do insert mostrando na tela,.)
			$mysql_query(mysql_query($insere2, $conexão) or die("insert não realizadoo"); // variavel recebendo o valor do insert mostrando na tela,.)
			$mysql_query(mysql_query($insere3, $conexão) or die("insert não realizadoo"); // variavel recebendo o valor do insert mostrando na tela,.)

			mysql_query ($delete, $conexão);   // comando para deletar.
			echo(""); 

			mysql_close($conexão); //fechando conexão


		?>