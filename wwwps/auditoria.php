<?php 

	$conexao = new pdo ('sqlite:bancodedados.data');

	/*
		Insere os dados na tabela auditoria
	*/

	$date = date('Y-m-d H:i');	
	$insert  = "insert into auditoria values (
	'".$_SESSION['usuario']."', 
	'".$_SERVER['PHP_SELF']."',
	 '".$date."', 
	 '".$_SERVER['REMOTE_ADDR']."'
	 );";
	$conexao->exec($insert);
	unset($conexao); //Destrói a conexão com o banco de dados



?>