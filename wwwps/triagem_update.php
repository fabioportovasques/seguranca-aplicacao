<?php  
	require 'secury_check.php';
?>


<?php
	$conexao = new pdo('sqlite:bancodedados.data');
	$update = "update triagem set celsius = ?,
	bpm = ?, pas = ?, pad = ?, historia = ?,avaliacao = ?, 
	datahora = datetime('now') where id = ?; ";
	$dados = [$_REQUEST['celsius'],$_REQUEST['bpm'], $_REQUEST['pas'],$_REQUEST['pad'],
	$_REQUEST['historia'],$_REQUEST['avaliacao'],$_REQUEST['triagem']
	 ];
	$stmt = $conexao->prepare($update);
	$result = $stmt->execute($dados); 
	//$resultado = $conexao->exec($update);
	if ( $resultado > 0 ) {
		print 'Inserido com sucesso.';
		print '<script>window.setTimeout(function(){window.location=\'/triagem_lista.php\';}, 2000);</script>';
	} else {
		print 'Erro na inserção.';
	}
?>