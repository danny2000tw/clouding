<?php

	include("mysql_connect.inc.php");
	//$id = $_SESSION['username'];
	$id = 'ww2308';                   
	
	//mysql_select_db("foodbook");
	
	$sql = "SELECT * FROM article where author = '$id' ORDER BY ID DESC";	
	//$sql = "SELECT * FROM article where author = '$id'";
	//mysql_query("SET NAMES utf8;");
	$result = mysql_query($sql);

	$n=0;
	while($n < 5){  	
		$row = mysql_fetch_row($result);
		$record[$n]['author'] = $row[1];
		$record[$n]['class'] = $row[2];
		$record[$n]['region'] = $row[4];
		$record[$n]['date'] = $row[5];
		$record[$n]['title'] = $row[6];
		$record[$n]['content'] = $row[7];
		$content[$n] = str_replace("\n","<br/>",$row[7]);
		//$POC[$n] = $row[7];
		$n++;
	}	
	
	for($n=0;$n<5;$n++){
		$POC[$n] = "";
		$tmp[$n] = explode("\n",$record[$n]['content']);   //����
		for($i=0;$i<10;$i++){
			$POC[$n] = $POC[$n].$tmp[$n][$i].'<br/>';  //Part Of Content
		}
	}
?>