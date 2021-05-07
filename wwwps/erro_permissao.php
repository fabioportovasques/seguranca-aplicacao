<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	   <link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>
	<?php 
			//construção de um menu
		include 'menu.php';
		initialize_menu(); //executa a função
	?>

	
	
	
	<?php echo "	
	<h3 class='alert alert-danger'>PERMISSÃO NEGADA para o usuario
	" .$_SESSION['usuario'] ?> </h3>	
</body>
</html>