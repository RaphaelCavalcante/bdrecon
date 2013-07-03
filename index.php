<!DOCTYPE html>
<html>
	<title>MyCloset</title>
	<body>
		<?php
				
				error_reporting(E_ALL);
				ini_set('display_errors', '1');

				require_once __DIR__ . '/engine.php';
				if(isset($_POST)){
					$teste=new Engine();
					$produtos=$teste->testNums();
					
					$perfil=$teste->genPerfil();
					for($i=0;$i<count($produtos);$i++){
						$produto=$teste->euclidian($perfil, $produtos,$i);
						if($produto==0){
							echo "produto recomendado<p>";
							break;
						}
					}
					echo $produtos[$i][0]." ".$produtos[$i][1]." ".$produtos[$i][2]." ".$produtos[$i][3];
					//$array=$teste->testNums();
					/*for($i=0;$i<count($array);$i++){
						echo $i." ";
						 for($j=0;$j<count($array[$i]);$j++)
						 	printf($array[$i][$j]);
						echo "<p>";
					}*/
					
					/*for($i=0;$i<count($array);$i++){
						printf($array[$i]."<p>");
					}*/
					
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