<?php
//MAGIC DO NOT TOUCH


	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
class Conexao{
		
	function __contruct(){
		$this->connect();
	}
	function __destruct(){
		$this->close();
	}
	function connect(){
		//@TODO NAO ESQUECER DE COLOCAR O NOME CERTO DO BANCO
		$link=pg_Connect("host=localhost dbname=teste user= postgres password=post123");
		return $link;
	}	
	function read($link, $query){
		$res=pg_exec($link,$query);
		for($i=0;$i<pg_numrows($res);$i++){
			$row=pg_fetch_array($res,$i);
		}
	return $row;
	}
	/*Função para adicionar no banco de dados
	 * parametros: $link - objeto do banco de dados
	 * 				$array - um array contendo atributos do bd
	 *				$size  - quantidade de atributos, exemplo: count($_POST)
	 * 				$table - tabela para adicionar os atributos
	 * 				$extra - comando extra caso seja necessario, eg. WHERE OR
	 */
	function add($link, $array, $size, $table, $extra){
		$query="INSERT INTO $table VALUES (";
		
		if($size > 1){
			for($i=0;$i<$size;$i++){
				if($i==0)
					$query=$query.$array[$i];
				else
					$query=$query.",".$array[$i];
			}
		}else{
			$query=$query.$array[0];
		}
		$query=$query.")".$extra;
		
		//@TODO COLOCAR COMANDOS PARA ADCIONAR NO BANCO DE DADOS	
	}
	function close(){
		pg_close();
	}
}
?>
