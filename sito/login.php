<html>
<head>
	<title>Login</title>
</head>
	<body>
		<h3>Login</h3>
		<div align = "center">
		<div align="right">
			<a href="index.php"><button><b>Torna alla Home</b></button></a>
		</div>
		<br/>   
	    <br/>
	    <?php
		    $db=mysql_connect("localhost:8889","root","root");	
			mysql_select_db("RedBullBCOne", $db);
			$query= "SELECT Username, Password FROM Login";
			$result= mysql_query($query,$db);
		    echo "<table border='1'>";
		    	echo "<tr>";
		    		echo "<th>Username</th><th>Password</th>";
		    	echo "</tr>";
		    	while($row = mysql_fetch_row($result)){
					echo "<tr><td align='center'>".$row[0]."</td><td align='center'>".$row[1]."</td></tr>";
				}//while
		    echo "</table>";
	    ?>
		</br>
		<form action="verificaLogin.php" method="POST">  
			<table border="1">
				<tr>
					<th>Username:</th>
					<th><input type="text" name="Username"></th>
				</tr>
				<tr>
					<th>Password:</th>
					<td><input type="password" name="Password"></td>
				</tr>
			</table>
			</br>
			<input type="submit" name="submit" value="Accedi">
			<A HREF="registrazione.php"><h5>REGISTRATI</h5></A>
		</form>
		</div>
	</body>
</html>