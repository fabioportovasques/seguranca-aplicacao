<?php
	
		session_start();

		$conexao = new pdo('sqlite:bancodedados.data');
		$pesquisa = "select * from usuario where nome = '".$_REQUEST['usuario']. "' and  senha = '".$_REQUEST['senha']. "'  ";
		$resultado = $conexao->query($pesquisa)->fetchAll();

		if (count ($resultado) > 0 ) {
			$_SESSION['usuario'] = $_REQUEST['usuario'];
			header('location:relatorio_lista.php');
		}else {
			header('location:home.php');
		}


		


?>