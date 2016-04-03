<?php
	session_start();
	if (!isset($_SESSION['Username'])||($_SESSION['Username']==NULL) || ($_SESSION['Username'])!='amministratore')
		header("Location: http://localhost:8888/login.php");
?>
<html>
    <head>
		<title>Cancella Utenti</title> 
	</head>
	<body>
	    <center>
			<?php
				$Username = $_POST["Username"];
				if(isset($Username)){
					$db=mysql_connect("localhost:8889","root","root");	
					mysql_select_db("RedBullBCOne", $db);
					$sql = "DELETE FROM Login WHERE Username = '$Username'";
					$rs = mysql_query($sql);
				}//if
				include('Visualizza.php');
			?>
			<hr>
			<form action="<?php print $PHP_SELF ?>" method="POST">
				<h3>Inserisci l'Username dell'Utente da cancellare</h3>
				<select name="Username">
				<?php
					$db=mysql_connect("localhost:8889","root","root");	
					mysql_select_db("RedBullBCOne", $db);
					$query2 = "select * from Login";
					$rs2 = mysql_query($query2);
					while($row2 = mysql_fetch_row($rs2)){
						echo ('<option value="'.$row2[0].'">'.$row2[0].'</option>');
					}
				?>
				</select>
				<input type="submit" name="submit" value="cancella">
			</form>
		</center>
	</body>
</html>

