<?php
	session_start();
	if (!isset($_SESSION['Username'])||($_SESSION['Username']==NULL))
		header("Location: http://localhost:8888/login.php");
?>

<?php
	$db=mysql_connect("localhost:8889","root","root");	
	mysql_select_db("RedBullBCOne", $db);
	
	$xx = $_REQUEST["xx"];	
	$User = $_POST["User"];
	$Username = $_POST["Username"];
	$Password = $_POST["Password"];
	$email = $_POST["email"];
			
	if(isset($Username) and isset($Password) and isset($email)){
		$query = "UPDATE Login SET Username='$Username', Password='$Password' , email='$email' WHERE Username='$User'";
		$rs = mysql_query($query);
	}//if
?>

<html>
<head>
	<title>Modifica Utente</title>
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
		<?php
			if($_SESSION['Username'] == 'amministratore'){
				echo "<tr>";
					echo "<td align='center'>";
						echo "<a href='homeAmministratore.php'><button><b>Menu Amministratore</b></button></a>";
					echo "</td>";
				echo "</tr>";
			}//if
			else{
				echo "<tr>";
					echo "<td align='center'>";
						echo "<a href='homeQuery.php'><button><b>Home Query</b></button></a>";
					echo "</td>";
				echo "</tr>";
			}//else
		?>
		<tr>
			<td align="center">	
				<a href="Logout.php"><button><b>LOGOUT</b></button></a>
			</td>
		</tr>
	</table>
	<h3>Modifica Dati Utente</h3>
	</br>
	</br>
	</br>
	</br>
	<div align="center">
		<form action="modificaRecord.php?xx=1" method="POST">
			<table border="1">
				<tr>
					<th>Username</th>
					<th>Password</th>
					<th>e-mail</th>
				</tr>
				<tr>
					<?php
					  	if($_SESSION['Username']!="amministratore"){
					  		$User=$_SESSION['Username'];
					  	}//if
						$db=mysql_connect("localhost:8889","root","root");	
						mysql_select_db("RedBullBCOne", $db);
						$query = "select * from Login WHERE Username='$User'";
						$rs = mysql_query($query);
						$row = mysql_fetch_row($rs);
						echo '<td><input type="text" name="Username" value="'.$row[0].'" size="15"></td>';
						echo'<td><input type="text" name="Password" value="'.$row[1].'" size="15"></td>';
						echo'<td><input type="text" name="email" value="'.$row[2].'" size="30"></td>';
						
					?>
				</tr>
			</table>
			</br>
			<input type="submit" name="submit" value="invia">
			<?php
				echo '<input type="hidden" name="User" value="'.$row[0].'">';
				if ($xx == 1){
					echo "</br></br>";
					echo "Utente Aggiornato, se modificato l'Username aggiornare la pagina";
					if ($_SESSION['Username']!="amministratore") {
						$_SESSION['Username'] = $Username;
					}//if
				}//if
			?>
		</form>
		<?php
			if ($_SESSION['Username']!="amministratore") {
				echo '<a href="homeQuery.php" align="center"><button>Indietro</button></a>';
			}//if
			else{
				echo '<a href="modifica.php" align="center"><button>Indietro</button></a>';
			}//else
		?>
	</div>
</body>
</html>