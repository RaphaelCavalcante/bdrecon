<!DOCTYPE html>
<html>
	<title>MyCloset</title>
	<body>
		<?php
				
				error_reporting(E_ALL);
				ini_set('display_errors', '1');

				require_once __DIR__ . '/pgsql.php';
				if(isset($_POST)){
					$array=array(0=>$_POST["nome1"]);
					$teste=new Conexao();
					$teste->add(NULL,$array,count($_POST), "TABLE", NULL);
					//echo count($_POST);
				}
				/*
				
				
				$database="teste";
				$con=new Conexao();
				$link=$con->connect();
				$con->query($link,"SELECT * FROM testes1");
				*/
		?>
		
		
		<form name="nomes" method="post" action="index.php">
			<input type="text" name="nome1">
			<input type="submit" />
		</form>
	</body>
</html>