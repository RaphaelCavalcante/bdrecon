<?php
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
		$link=pg_Connect("host=localhost dbname=teste user= postgres password=post123");
		return $link;
	}	
	function read($link, $query){
		$res=pg_exec($link,$query);
		for($i=0;$i<pg_numrows($res);$i++){
			$row=pg_fetch_array($res,$i);
			echo $row['hello'];
		}
	}
	function add($link, $params, $table){
		//$query="INSERT INTO ".$table." VALUES( $data )"
		
		echo $params;
		
	}
	function close(){
		pg_close();
	}

	//pg_close($link);
	}
#	phpinfo();
?>
