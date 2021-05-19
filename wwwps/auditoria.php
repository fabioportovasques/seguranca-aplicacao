<?php 

	$conexao = new pdo ('sqlite:bancodedados.data');

	/*
		Insere os dados na tabela auditoria
	*/
	$insert  = "insert into auditoria values (
	'".$_SESSION['usuario']."', 
	'".$_SERVER['PHP_SELF']."',
	 datetime('now'), 
	 '".$_SERVER['REMOTE_ADDR']."'
	 );";
	$conexao->exec($insert);
	unset($conexao); //Destrói a conexão com o banco de dados



?>