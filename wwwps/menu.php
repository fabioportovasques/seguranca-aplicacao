<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" href="css/bootstrap.min.css">

	<title></title>
</head>
<body>

</body>
</html>

<style type="text/css">
	a {
		color: blue;
	}
	.usuario {
		position: fixed;
		top:5px;
		right: 5px;
	}
</style>

	<?php 

			function initialize_menu() {
				session_start();
			
			}
	?>

<div style="padding: 5px 10px 10px 0px;">
	<a href="paciente_cadastro.php">Cadastro</a>
	<a href="triagem_lista.php">Triagem</a>
	<a href="atendimento_lista.php">Atendimento</a>
	<a href="relatorio_lista.php">Relatório</a>
	<a href="logout.php">Sair</a>

	<span class="usuario alert alert-success"><?php if (isset ($_SESSION['usuario']) ) {
		print $_SESSION['usuario']; } ?></span>
</div>

