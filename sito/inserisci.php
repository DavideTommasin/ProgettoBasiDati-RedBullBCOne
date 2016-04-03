<?php
	session_start();
	if (!isset($_SESSION['Username'])||($_SESSION['Username']==NULL) || ($_SESSION['Username'])!='amministratore')
		header("Location: http://localhost:8888/login.php");
?>
<html>
	<head>
		<title>Inserisci Utenti</title>
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
		</br>
		</br>
		</br>
		</br>
		<div align="center">
			<h3 align="center">Inserimento di un Utente</h3>
			<?php
				$xx=$_REQUEST["xx"];
	    		$db=mysql_connect("localhost:8889","root","root");	
				mysql_select_db("RedBullBCOne", $db);
	    		$Username = $_POST["Username"];
				$Password = $_POST["Password"];
				$email= $_POST["email"];
				if($Username!="Username" AND $Password!="Password" AND $email!="email"){
					$sql = "INSERT INTO Login (Username,Password,email) VALUES ('$Username','$Password','$email')";
					$rs = mysql_query($sql);
				}//if
			?>
			<form action="inserisci.php?xx=1" method="POST">
				<table border="1">
					<tr>
        				<th>Username</th>
						<th>Password</th>
						<th>e-mail</th>
					</tr>
					<tr>
						<td><input type="text" name="Username"  size="20"/></td>
						<td><input type="text" name="Password"  size="20"></td>
						<td><input type="text" name="email" size="20" value='esempio@esempio.com'/></td>
					</tr>
				</table>
				<br/>
				<input type="submit" value="Iscrivi" ></p>
			</form>
			<?php
				if($xx == 1){
					echo "Utente Insrito Correttamente";
				}//if
			?>
		</div>
	</body>
</html>