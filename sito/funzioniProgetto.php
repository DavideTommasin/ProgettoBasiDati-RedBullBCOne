<?php
	session_start();
	if (!isset($_SESSION['Username'])||($_SESSION['Username']==NULL))
		header("Location: http://localhost:8888/login.php");
	$xx = $_POST["xx"];
  $yy = $_REQUEST["yy"];
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
		<h3>Funzioni del Progetto</h3>
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
					<form action='funzioniProgetto.php?' method='POST'>	
						<select name='funzioniProgetto'>
							<?php
								$funzioniProgetto = $_POST["funzioniProgetto"];
								if($xx=="1"){
									echo '<option name="ida" value="'.$funzioniProgetto.'">Funzione '.$funzioniProgetto.'</option>';
									for ($i=1; $i < 3 ; $i++) {
										if($i!=$funzioniProgetto){
											echo '<option name="ida" value="'.$i.'">Funzione '.$i.'</option>';
										}//if
									}//for i
								}//if
								else{
									echo '<option name="ida" value=""></option>';
									for ($i=1; $i < 3 ; $i++) { 
										echo '<option name="ida" value="'.$i.'">Funzione '.$i.'</option>';
									}//for i
								}//else
							?>
						</select>
            <input type='hidden' name='xx' value='1'>
						<input type='submit' name='submit' value='Visualizza'>
					</form>
				</td>
			</tr>
			<tr>
			<td colspan='2' align='center'>
			<?php
			$db=mysql_connect("localhost:8889","root","root");	
			mysql_select_db("RedBullBCOne", $db);
			$funzioniProgetto = $_POST["funzioniProgetto"];
			if($xx == "1"){
				if( $funzioniProgetto == "1" ){
       				echo "</br>";
       				echo "Funzione che restituisce il numero di vittorie complessive di un certo BBoy";
       				echo "</td></tr>";
       				echo "<tr>";
       				echo "<td>";
       				echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       				echo "<table>";
       					echo "<tr>";
       						echo "<td>
       								</br>
       								DELIMITER | </br>
                      CREATE FUNCTION numeroVittorie (NicknameBBoy VARCHAR(20)) </br>
                      RETURNS INT </br>
                      BEGIN  </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      DECLARE numeroCY INT; </br> 
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      DECLARE numeroFI INT; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      DECLARE numeroWF INT; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      SELECT COUNT(*) INTO numeroCY </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                      FROM Cypher  </br> 
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      WHERE NicknameBBoyVincitore = NicknameBBoy ; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      SELECT COUNT(*) INTO numeroFI </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                      FROM Final  </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      WHERE NicknameBBoyVincitore = NicknameBBoy ; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      SELECT COUNT(*) INTO numeroWF  </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      FROM WorldFinal  </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      WHERE NicknameBBoyVincitoreInvitato = NicknameBBoy  </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      OR NicknameBBoyVincitoreIscritto = NicknameBBoy ; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      RETURN numeroCY+numeroFI+numeroWF ; </br>
                      END | </br>
                      DELIMITER;
       							 </td>";
       					echo "</tr>";
					echo "</table>";
					echo "</div>";
       				echo "<td>";
       				echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       				echo "<table>
       							<tr>
       								<td>
                      <form action='funzioniProgetto.php?yy=1' method='POST'>
                      <select name='bboy'>";
                      $sel = 'select Nickname from BBoyInvitato UNION select Nickname from BBoyIscritto';
                      $rs = mysql_query($sel);
                      while($row = mysql_fetch_row($rs)){
                      echo '<option name="ida" value="'.$row[0].'">'.$row[0].'</option>';
                      }//while
              echo   "</select>";
              echo   "<input type='hidden' name='xx' value='".$_POST["xx"]."'>
                      <input type='hidden' name='funzioniProgetto' value='".$_POST["funzioniProgetto"]."'>
                      <input type='submit' name='submit' value='Prova'>
                      </form>";
                      if($yy == "1"){
                        $nomebboy = $_POST["bboy"];
                        $ret = "select numeroVittorie('".$nomebboy."')";
                        $return = mysql_query($ret);
                        $row = mysql_fetch_row($return);
                        echo "<table border='1'>
                                <tr><th>Nome BBoy</th><th>Vittorie Totali</th></tr>
                                <tr><td align='center'>".$nomebboy."</td><td align='center'>".$row[0]."</td></td>
                              </table>
                             ";
                      }//if
              echo   "</td>
       							</tr>
       					  </table>";
       				echo "</div>";
       				echo "</td>";
       				echo "</tr>";	
				}//if
				if( $funzioniProgetto == "2" ){
       				echo "</br>";
       				echo "Funzione che restituisce il Nickname del BBoy (Invitato, Iscritto o Giudice) più vecchio in un determinato anno";
       				echo "</td></tr>";
       				echo "<tr>";
       				echo "<td>";
       				echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       				echo "<table>";
       					echo "<tr>";
       						echo "<td >
       								</br>
       								DELIMITER | </br>
                      CREATE FUNCTION piuVecchio(annoRedBull YEAR(4)) </br>
                      RETURNS VARCHAR(500) </br>
                      BEGIN </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      DECLARE oldInv VARCHAR(20); </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      DECLARE dataInv DATE; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      DECLARE oldIsc VARCHAR(20); </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      DECLARE dataIsc DATE; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      DECLARE oldGiu VARCHAR(20); </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      DECLARE dataGiu DATE; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      SELECT Nickname, DataNascita INTO oldInv, dataInv </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      FROM BBoyInvitato </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      WHERE DataNascita <= All (SELECT DataNascita FROM BBoyInvitato) </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      AND EdizioneRedBull = annoRedBull; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      SELECT Nickname, DataNascita INTO oldIsc, dataIsc </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      FROM BBoyIscritto </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      WHERE DataNascita <= All (SELECT DataNascita FROM BBoyIscritto) </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      AND EdizioneRedBull = annoRedBull; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      SELECT Nickname, DataNascita INTO oldGiu, dataGiu </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      FROM Giudice </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      WHERE DataNascita <= All (SELECT DataNascita FROM Giudice) </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      AND EdizioneRedBull = annoRedBull; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      IF (dataInv < dataIsc) THEN </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      IF (dataInv < dataGiu) THEN </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      RETURN oldInv; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      END IF; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      ELSEIF (dataIsc < dataGiu) THEN </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      RETURN oldIsc; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      ELSE </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      RETURN oldGiu; </br>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      END IF; </br>
                      END | </br>
                      DELIMITER;
       							 </td>";
       					echo "</tr>";
					echo "</table>";
					echo "</div>";
       				echo "</td>";
       				echo "<td>";
       				echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       				echo "<table>
                    <tr>
                      <td>
                      <form action='funzioniProgetto.php?yy=1' method='POST'>
                      <select name='anno'>";
                      $sel = 'select * from EdizioneRedBull';
                      $rs = mysql_query($sel);
                      while($row = mysql_fetch_row($rs)){
                      echo '<option name="ida" value="'.$row[0].'">'.$row[0].'</option>';
                      }//while
              echo   "</select>";
              echo   "<input type='hidden' name='xx' value='".$_POST["xx"]."'>
                      <input type='hidden' name='funzioniProgetto' value='".$_POST["funzioniProgetto"]."'>
                      <input type='submit' name='submit' value='Prova'>
                      </form>";
                      if($yy == "1"){
                        $anno = $_POST["anno"];
                        $ret = "select piuVecchio('".$anno."')";
                        $return = mysql_query($ret);
                        $row = mysql_fetch_row($return);
                        echo "il BBoy piu' vecchio nell'anno ".$anno." e': ".$row[0];
                      }//if
              echo   "</td>
                    </tr>
                  </table>";
       				echo "</div>";
       				echo "</td>";
       				echo "</tr>";	
				}//if
			}//if
			?>
		</table>
		<div align="center">
			</br>
			<a href="triggerProgetto.php"><button> Trigger del Progetto</button></a>
      <a href="homeQuery.php"><button> Home Query</button></a>
      <a href="queryProgetto.php"><button> Query del Progetto </button></a>
		</div>
	</body>
</html>