<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	$query="SELECT * FROM testes1";
	function connect($database){
		$link=pg_Connect("host=localhost dbname=$database user= postgres password=post123");
		return $link;
	}

	$link=connect('teste');	

	function query($link, $query){
		$res=pg_exec($link,$query);
		for($i=0;$i<pg_numrows($res);$i++){
			$row=pg_fetch_array($res,$i);
			echo $row['hello'];
		}
	}

	query(connect('teste'), $query);
	//pg_close($link);
	
	
	function printHello(){
		echo 'Hello world';
	}
#	phpinfo();
?>
