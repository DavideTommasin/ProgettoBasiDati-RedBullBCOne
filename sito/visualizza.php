<?php
	session_start();
	if (!isset($_SESSION['Username'])||($_SESSION['Username']==NULL) || ($_SESSION['Username'])!='amministratore')
		header("Location: http://localhost:8888/login.php");
?>
<html>
	<head>
		<title>Visualizza Utenti</title>
	</head>
	<body>
		<table align="right">
			<tr>
				<td align="center">
					<?php  
						echo "Username: ".$_SESSION['Username'];
					?>
				</td>
			</tr>
			<tr>
				<td align='center'>
					<a href='homeAmministratore.php'><button><b>Menu Amministratore</b></button></a>
				</td>
			</tr>
			<tr>
				<td align="center">	
					<a href="Logout.php"><button><b>LOGOUT</b></button></a>
				</td>
			</tr>
		</table>
		</br></br></br></br></br>
		<table border="1" align="center"> 
			<tr align ="center">
				<th colspan="3">Utenti Sito</th>
			</tr>
    		<tr>
        		<th>Username</th>
				<th>Password</th>
				<th>e-mail</th>
			</tr>
			<?php
				$db=mysql_connect("localhost:8889","root","root");	
				mysql_select_db("RedBullBCOne", $db);
				$query = "select * from Login";
				$rs = mysql_query($query);
				while($row = mysql_fetch_row($rs)){
					$Username = $row[0];
					$Password = $row[1];
					$email = $row[2];
					echo "<tr><td>$Username</td> <td>$Password</td> <td>$email</td></tr>";
				}//while
			?>
		</table> 
	</body>
</html>


