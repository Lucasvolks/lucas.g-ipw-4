<?php

    Try{
    $conexao = new PDO ("mysql:host=localhost;dbname=pdo","root","");
	
	
	}
	
	catch(\PDOexception $e){
		echo'Não foi possivel realizar a conexao';
		echo$e->getCode();
		echo$e->getMessage();
	}
	
	?>