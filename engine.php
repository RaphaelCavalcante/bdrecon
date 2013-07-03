<?php
	/*$tipo;
	$tamanho;
	$estilo;
	$cor;*/
	
	class roupa{
		function __contruct(){
			$this->criaRoupa();//comentario
		}
		function criaRoupa($tipo1,$tamanho1,$estilo1,$cor1){
			$arrayTipo=array();
			array_push($arrayTipo,$tipo1);
			array_push($arrayTipo,$tamanho1);
			array_push($arrayTipo,$estilo1);
			array_push($arrayTipo,$cor1);
			return $arrayTipo;
		}
	}
	
	class Engine{
		function __contruct(){
			$this->engine();
		}
		function __destruct(){
			$this->close();
		}
		function genPerfil(){
			$obj=new roupa();
			$perfil=$obj->criaRoupa(rand(0,3), rand(0,4), rand(0,3), rand(0,4));
			return $perfil;
		}
		function testNums(){
			$arrayroupas=array();
			for($i=0;$i<100;$i++){
				$obj=new roupa();
				$roupa=$obj->criaRoupa(rand(0,3), rand(0,4), rand(0,3), rand(0,4));
				
				array_push($arrayroupas,$roupa);
			}
		return $arrayroupas;
		}
		
		function euclidian($perfil,$produto,$i){
			$recomenda=0;
			
			for ($j=0;$j<count($produto[$i]);$j++){
				$recomenda=((($perfil[$j]-$produto[$i][$j])*($perfil[$j]-$produto[$i][$j])));
			}
			return $recomenda;
		}
	}
?>
