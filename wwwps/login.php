<?php
	
		session_start();

		$conexao = new pdo('sqlite:bancodedados.data');
		$pesquisa = "select * from usuario where nome = ? and  senha = ?; ";
		$dados = [ $_REQUEST['usuario'], $_REQUEST['senha'] ];
		$stmt = $conexao->prepare($pesquisa);
		$stmt->execute($dados);
		$result = $stmt->fetchAll();
		

		if (count ($result) > 0 ) {
			$_SESSION['usuario'] = $_REQUEST['usuario'];
			header('location:relatorio_lista.php');
		}else {
			header('location:home.php');
		}


		


?>