<?php
	$db=mysql_connect("localhost:8889","root","root");	
	mysql_select_db("RedBullBCOne", $db);
	$tabella = $_POST["tab"];
	$query = "select * from ".$tabella;
	$result = mysql_query($query);
	$field = mysql_num_fields($result);
	echo "<input type='checkbox' name='*' value='*'/>* </br>";
	for ($i=0; $i < $field; $i++) { 
		$name = mysql_field_name($result,$i);
		echo "<input type='checkbox' name='".$name."' value='".$name."'/>".$name."</br>";
	}//for i
?>