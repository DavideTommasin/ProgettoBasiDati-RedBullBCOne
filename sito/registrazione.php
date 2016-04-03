<?php
    $xx=$_REQUEST["xx"];
	$Username=$_POST["Username"];
	$Password=$_POST["Password"];
	$email=$_POST["email"];
	$db=mysql_connect("localhost:8889","root","root");	
	mysql_select_db("RedBullBCOne", $db);
	if(isset($Username) && isset($Password) && isset($email)){
		$db=mysql_connect("localhost:8889","root","root");	
		mysql_select_db("RedBullBCOne", $db);
		$query="INSERT INTO Login (Username,Password,email) VALUES ('$Username','$Password','$email')";
		$result=mysql_query($query,$db);
		header("Location: http://localhost:8888/login.php");
	}
?>
<html>
<head>
	<title>Registrazione</title>
</head>
<body>
	<h3>Registrazione</h3>
	<div align="center">
		<div align="right">
			<a href="login.php"><button><b>Torna al Login</b></button></a>
			</br>
			<a href="index.php"><button><b>Torna alla Home</b></button></a>
		</div>
        <br/>   
	    <br/>
		<form action="registrazione.php?xx=1" method="POST">
			<table border="1">
				<tr>
					<th>Username</th>
					<td><input type="text" name="Username"></td>
				</tr>
				<tr>
                    <th>Password</th>
					<td><input type="password" name="Password"></td>
				</tr>
				<tr>
					<th>e-mail</th>
					<td><input type="text" name="email" value='esempio@esempio.com'></td>
				</tr>
			</table>
			<br>
			<input type="submit" name="submit" value="invia">
		</form>
	</div>
</body>
</html>