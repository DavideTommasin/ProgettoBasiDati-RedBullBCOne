<?php
	session_start();
	if (!isset($_SESSION['Username'])||($_SESSION['Username']==NULL) || ($_SESSION['Username'])!='amministratore')
		header("Location: http://localhost:8888/login.php");
?>

<html>
	<head>
		<title>Modifica Utente</title>
	</head>
	<body>
		<?php
			include('visualizza.php');
		?>
		<hr>
		<div align="center">
			<form action="<?php print('modificaRecord.php')?>" method="POST">
				<h3>Inserisci l'ID dell'Utente da modificare</h3>
				<select name="User">
					<?php
						$db=mysql_connect("localhost:8889","root","root");	
						mysql_select_db("RedBullBCOne", $db);
						$query = "select * from Login";
						$rs = mysql_query($query);
						while($row = mysql_fetch_row($rs)){
							echo '<option name="ida" value="'.$row[0].'">'.$row[0].'</option>';
						}
					?>
				</select>
				<input type="submit" name="submit" value="modifica">
			</form>
		</div>
	</body>
</html>