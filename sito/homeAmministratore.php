<?php
	session_start();
	if (!isset($_SESSION['Username'])||($_SESSION['Username']==NULL) || ($_SESSION['Username'])!='amministratore')
		header("Location: http://localhost:8888/login.php");
?>
<html>
	<head>
		<title>Red Bull BC One</title>
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
				<td align="center">	
					<a href="Logout.php"><button><b>LOGOUT</b></button></a>
				</td>
			</tr>
		</table>
		<h3>Home Amministratore</h3>
		</br>
		<table align="center">
			<tr></tr>
			<tr>
				<td align="center">
					<a href="homeQuery.php"><button>Home Query</button></a>
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td align="center">
					<a href="visualizza.php"><button>Visualizzazione Utenti</button></a>
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td align="center">
					<a href="inserisci.php"><button>Inserisci Utente</button></a>
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td align="center">
					<a href="modifica.php"><button>Modifica Dati Utente</button></a>
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td align="center">
					<a href="cancella.php"><button>Cancellazione Utente</button></a>
				</td>
			</tr>
		</table>
	</body>
</html>