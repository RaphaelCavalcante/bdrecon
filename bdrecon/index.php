<!DOCTYPE html>
<html>
	<title>MyCloset</title>
	<body>
		<?php
				
				error_reporting(E_ALL);
				ini_set('display_errors', '1');

				require_once __DIR__ . '/pgsql.php';
				
				$test=new Conexao();
				
				
				$test->add();
				/*
				
				
				$database="teste";
				$con=new Conexao();
				$link=$con->connect();
				$con->query($link,"SELECT * FROM testes1");
				*/
		?>
		
		
		<form name="nomes" method="post" action="index.php">
			<input type="text" name="nome1">
			<input type="text" name="nome2">
			<input type="text" name="nome3">
			<input type="text" name="nome4">
			<input type="submit" />
		</form>
	</body>
</html>