<?php
	
	session_start();

	session_destroy();

	header('location:relatorio_lista.php');
	

?>