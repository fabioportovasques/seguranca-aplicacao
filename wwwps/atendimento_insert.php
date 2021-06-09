<?php
	require 'secury_check.php';
	$conexao = new pdo('sqlite:bancodedados.data');
	//$drop = "drop table if exists atendimento; ";
	//$conexao->exec($drop);
	$create = "create table if not exists atendimento (id integer primary key autoincrement, triagem integer, diagnostico text, medicamento text, encaminhamento text, datahora timestamp); ";
	$conexao->exec($create);
	$insert = "insert into atendimento values (null, ?,
	 ?,	 ?,  ?, datetime('now') );";
	 $dados = [$_REQUEST['triagem'], $_REQUEST['diagnostico'],$_REQUEST['medicamento'],
	 $_REQUEST['encaminhamento']
	]; 
	$stmt = $conexao->prepare($insert);
	$result = $stmt->execute($dados);

	//$resultado = $conexao->exec($insert);
	if ( $resultado > 0 ) {
		print 'Inserido com sucesso.';
		print '<script>window.setTimeout(function(){window.location=\'/atendimento_lista.php\';}, 2000);</script>';
	} else {
		print 'Erro na inserção.';
	}
?>