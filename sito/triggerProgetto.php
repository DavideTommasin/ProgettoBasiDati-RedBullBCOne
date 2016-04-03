<?php
	session_start();
	if (!isset($_SESSION['Username'])||($_SESSION['Username']==NULL))
		header("Location: http://localhost:8888/login.php");
	$xx = $_REQUEST["xx"];
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
							echo "<a href='modificaRecord.php'><button><b>Modifica Dati</b></button></a>";
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
		<h3>Trigger del Progetto</h3>
		</br>
		</br>
		</br>
		<?php
			if ($xx == "1") {
				echo "<table border='1' align='center' width='90%'>";
			}//if
			else{
				echo "<table border='1' align='center'>";
			}//else
		?>
				<td colspan='2' align='center'>
					<form action='triggerProgetto.php?xx=1' method='POST'>	
						<select name='triggerProgetto'>
							<?php
								$triggerProgetto = $_POST["triggerProgetto"];
								if($xx=="1"){
									echo '<option name="ida" value="'.$triggerProgetto.'">Trigger '.$triggerProgetto.'</option>';
									for ($i=1; $i < 3 ; $i++) {
										if($i!=$triggerProgetto){
											echo '<option name="ida" value="'.$i.'">Trigger '.$i.'</option>';
										}//if
									}//for i
								}//if
								else{
									echo '<option name="ida" value=""></option>';
									for ($i=1; $i < 3 ; $i++) { 
										echo '<option name="ida" value="'.$i.'">Trigger '.$i.'</option>';
									}//for i
								}//else
							?>
						</select>
						<input type='submit' name='submit' value='Visualizza'>
					</form>
				</td>
			</tr>
			<tr>
			<td colspan='2' align='center'>
			<?php
			$db=mysql_connect("localhost:8889","root","root");	
			mysql_select_db("RedBullBCOne", $db);
			$triggerProgetto = $_POST["triggerProgetto"];
			if($xx == "1"){
				if( $triggerProgetto == "1" ){
       				echo "</br>";
       				echo "Trigger che dopo aver inserito il contest world final iscrive al sito il BBoy vincitore, se non gia iscritto. Avra' come Username e Password il suo Nickname";
       				echo "</td></tr>";
       				echo "<tr>";
       				echo "<td>";
       				echo "<div style='height: 450; WIDTH: 1150; overflow: auto; padding: 5px;'>";
       				echo "<table>";
       					echo "<tr>";
       						echo "<td>
       								</br></br>
       							  	DELIMITER | </br>
									CREATE TRIGGER creaUserSito </br>
									AFTER INSERT ON WorldFinal </br>
									FOR EACH ROW </br>
									BEGIN </br>
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    								IF NOT EXISTS (SELECT L.Username </br>
    								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          							FROM Login L </br>
          							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          							WHERE L.Username = new.NicknameBBoyVincitoreInvitato </br>
          							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            						OR L.Username = new.NicknameBBoyVincitoreIscritto) THEN </br>
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      								IF (new.NicknameBBoyVincitoreInvitato IS NOT NULL) THEN </br> 
      								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          							INSERT INTO Login (Username, Password, email) VALUES (new.NicknameBBoyVincitoreInvitato,new.NicknameBBoyVincitoreInvitato, 'email@email.com'); </br>
          							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      								ELSE </br>
      								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          							INSERT INTO Login (Username, Password, email) VALUES (new.NicknameBBoyVincitoreIscritto,new.NicknameBBoyVincitoreIscritto , 'email@email.com'); </br>
          							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      								END IF; </br>
      								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    								END IF; </br>
									END | </br>
									DELIMITER ;
       							 </td>";
       					echo "</tr>";
					echo "</table>";
					echo "</div>";
       				echo "</td>";
       				echo "</tr>";	
				}//if
				if( $triggerProgetto == "2" ){
       				echo "</br>";
       				echo "Trigger che controlla se l'e-mail è stata inserita correttamente, per cui nel formato '_ @ _ . _'";
       				echo "</td></tr>";
       				echo "<tr>";
       				echo "<td>";
       				echo "<div style='height: 450; WIDTH: 1150; overflow: auto; padding: 5px;'>";
       				echo "<table>";
       					echo "<tr>";
       						echo "<td >
       								</br></br></br>
       								DELIMITER |
       						 		CREATE TRIGGER controllaMail </br>
									BEFORE INSERT ON Login </br>
									FOR EACH ROW </br>
									BEGIN </br>
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  									DECLARE errore VARCHAR(20); </br>
  									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  									IF(new.email NOT LIKE '%_@%_.__%') THEN  </br>
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    								SELECT Username INTO errore </br>
    								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    								FROM Login </br>
    								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    								LIMIT 1; </br>
    								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    								INSERT INTO Login (Username) VALUES (errore); </br>
    								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  									END IF; </br>
									END | </br>
									DELIMITER ;
       							 </td>";
       					echo "</tr>";
					echo "</table>";
					echo "</div>";
       				echo "</td>";
       				echo "</tr>";	
				}//if
			}//if
			?>
		</table>
		<div align="center">
			</br>
			<a href="queryProgetto.php"><button> Query del Progetto </button></a>
      		<a href="homeQuery.php"><button> Home Query</button></a>
      		<a href="funzioniProgetto.php"><button> Funzioni del Progetto </button></a>
		</div>
	</body>
</html>