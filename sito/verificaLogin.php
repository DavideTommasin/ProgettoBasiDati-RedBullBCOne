<?php
		session_start();
			$Username=$_POST["Username"];
			$Password=$_POST["Password"];
			
		$db=mysql_connect("localhost:8889","root","root");	
		mysql_select_db("RedBullBCOne", $db);
		$query= "SELECT Username, Password FROM Login WHERE Username= '$Username' AND Password= '$Password'";
		$result= mysql_query($query,$db);
		if(mysql_num_rows($result)==0) {
			header("Location: http://localhost:8888/login.php");
		}//if
		else {
			$_SESSION['Username']= $Username;
			$_SESSION['Password']= $Password;
			if($Username == 'amministratore'){			
				header("Location: http://localhost:8888/homeAmministratore.php");
			}//if
			else{
				header("Location: http://localhost:8888/homeQuery.php");
			}//else
		}//else
?>
<html>
<head><title>VerificaLogin</title></head>
</html>