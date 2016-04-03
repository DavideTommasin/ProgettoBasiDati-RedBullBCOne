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
		<h3>Query del Progetto</h3>
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
					<form action='queryProgetto.php?xx=1' method='POST'>	
						<select name='queryProgetto'>
							<?php
								$queryProgetto = $_POST["queryProgetto"];
								if($xx=="1"){
									echo '<option name="ida" value="'.$queryProgetto.'">Query '.$queryProgetto.'</option>';
									for ($i=1; $i < 7 ; $i++) {
										if($i!=$queryProgetto){
											echo '<option name="ida" value="'.$i.'">Query '.$i.'</option>';
										}//if
									}//for i
								}//if
								else{
									echo '<option name="ida" value=""></option>';
									for ($i=1; $i < 7 ; $i++) { 
										echo '<option name="ida" value="'.$i.'">Query '.$i.'</option>';
									}//for i
								}//else
							?>
						</select>
						<input type='submit' name='submit' value='Prova'>
					</form>
				</td>
			</tr>
			<tr>
			<td colspan='2' align='center'>
			<?php
			$db=mysql_connect("localhost:8889","root","root");	
			mysql_select_db("RedBullBCOne", $db);
			$queryProgetto = $_POST["queryProgetto"];
			if($xx == "1"){
				if( $queryProgetto == "1" ){
					$query = " 
								SELECT WF1.NicknameBBoyVincitoreInvitato, WF1.EdizioneRedBull
								FROM   WorldFinal WF1 JOIN WorldFinal WF2 
       								   ON (WF1.NicknameBBoyVincitoreInvitato = WF2.NicknameBBoyVincitoreInvitato AND WF1.NazionalitaBBoyVincitoreInvitato = WF2.NazionalitaBBoyVincitoreInvitato AND WF1.EdizioneRedBull <> WF2.EdizioneRedBull)
								UNION
								SELECT WF1.NicknameBBoyVincitoreIscritto, WF1.EdizioneRedBull 
								FROM   WorldFinal WF1 JOIN WorldFinal WF2
      								   ON (WF1.NicknameBBoyVincitoreIscritto = WF2.NicknameBBoyVincitoreIscritto AND WF1.NazionalitaBBoyVincitoreIscritto = WF2.NazionalitaBBoyVincitoreIscritto AND WF1.EdizioneRedBull <> WF2.EdizioneRedBull)
                UNION         
       					SELECT WF1.NicknameBBoyVincitoreIscritto, WF1.EdizioneRedBull 
                FROM   WorldFinal WF1 JOIN WorldFinal WF2
                         ON (WF1.NicknameBBoyVincitoreIscritto = WF2.NicknameBBoyVincitoreInvitato AND WF1.NazionalitaBBoyVincitoreIscritto = WF2.NazionalitaBBoyVincitoreInvitato AND WF1.EdizioneRedBull <> WF2.EdizioneRedBull)
                UNION
                SELECT WF2.NicknameBBoyVincitoreInvitato, WF2.EdizioneRedBull 
                FROM   WorldFinal WF1 JOIN WorldFinal WF2
                         ON (WF1.NicknameBBoyVincitoreIscritto = WF2.NicknameBBoyVincitoreInvitato AND WF1.NazionalitaBBoyVincitoreIscritto = WF2.NazionalitaBBoyVincitoreInvitato AND WF1.EdizioneRedBull <> WF2.EdizioneRedBull)
                 ";
       				$rs = mysql_query($query);
       				echo "</br>";
       				echo "Query che visualizzi nickname di tutti i bboy che hanno vinto piu di un world final, e mostrare anche in che anno lo hanno vinto";
       				echo "</td></tr>";
       				echo "<tr>
       						<td>";
       				echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       				echo "<table>
       					 <tr>
       					 <td>";
       				echo "</br>";
       				echo "
       						SELECT WF1.NicknameBBoyVincitoreInvitato, WF1.EdizioneRedBull</br>  
							FROM &nbsp&nbsp 
							WorldFinal WF1 JOIN WorldFinal WF2 </br>
       						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       						ON (WF1.NicknameBBoyVincitoreInvitato = </br> 
       						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       						WF2.NicknameBBoyVincitoreInvitato </br>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							AND WF1.NazionalitaBBoyVincitoreInvitato = </br>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							WF2.NazionalitaBBoyVincitoreInvitato </br>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       						AND WF1.EdizioneRedBull <> WF2.EdizioneRedBull)</br>
							UNION<br>
							SELECT WF1.NicknameBBoyVincitoreIscritto, WF1.EdizioneRedBull </br>
							FROM   
							&nbsp&nbsp
							WorldFinal WF1 JOIN WorldFinal WF2 </br>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      						ON (WF1.NicknameBBoyVincitoreIscritto = </br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  WF2.NicknameBBoyVincitoreIscritto </br>
      						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      						AND WF1.NazionalitaBBoyVincitoreIscritto = </br>
      						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      						WF2.NazionalitaBBoyVincitoreIscritto </br>
      						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      						AND WF1.EdizioneRedBull <> WF2.EdizioneRedBull) <br>
              UNION<br>
              SELECT WF1.NicknameBBoyVincitoreIscritto, WF1.EdizioneRedBull </br>
              FROM   
              &nbsp&nbsp
              WorldFinal WF1 JOIN WorldFinal WF2 </br>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  ON (WF1.NicknameBBoyVincitoreIscritto = </br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  WF2.NicknameBBoyVincitoreInvitato </br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  AND WF1.NazionalitaBBoyVincitoreIscritto = </br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  WF2.NazionalitaBBoyVincitoreInvitato </br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  AND WF1.EdizioneRedBull <> WF2.EdizioneRedBull) <br>
              UNION<br>
              SELECT WF2.NicknameBBoyVincitoreInvitato, WF2.EdizioneRedBull </br>
              FROM   
              &nbsp&nbsp
              WorldFinal WF1 JOIN WorldFinal WF2 </br>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  ON (WF1.NicknameBBoyVincitoreIscritto = </br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  WF2.NicknameBBoyVincitoreInvitato </br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  AND WF1.NazionalitaBBoyVincitoreIscritto = </br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  WF2.NazionalitaBBoyVincitoreInvitato </br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  AND WF1.EdizioneRedBull <> WF2.EdizioneRedBull)
      					 ";
      				echo "</td>
      					  </tr>
      					  </table>";
      				echo "</div>";
       				echo "</td>";
       				echo "<td align='center'>";
       					echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       					echo "<table>";
       					echo "<tr>";
       					echo "<th align='center'>Nickname BBoy</th><th align='center'>Edizione RedBull</th>";
       					echo "</tr>";
       					while($row = mysql_fetch_row($rs)){
							$Nickname = $row[0];
							$EdizioneRedBull = $row[1];
						echo "<tr><td align='center'>$Nickname</td><td align='center'>$EdizioneRedBull</td></tr>";
						}//while
						echo "</table>";
						echo "</div>";
       				echo "</td>";	
				}//if
				if( $queryProgetto == "2" ){
					$query = " 
								SELECT Fi.NicknameBBoyVincitore, PC.NazioneCypher, PC.CittaCypher
								FROM   Final Fi, Giudice G, PresiedereCypher PC
								WHERE  Fi.EdizioneRedBull = '2014'
	 								   AND G.EdizioneRedBull = '2015'
      								   AND Fi.NicknameBBoyVincitore = G.Nickname
      								   AND Fi.NazionalitaBBoyVincitore = G.Nazionalita
      								   AND PC.EdizioneRedBull = '2015'
      								   AND PC.NicknameGiudice = G.Nickname
      								   AND PC.NazionalitaGiudice = G.Nazionalita
								GROUP BY Fi.NicknameBBoyVincitore
       					 ";
       				$rs = mysql_query($query);
       				echo "</br>";
       				echo "Query che visualizzi tutti i bboy che hanno vinto un final nel 2014 e fanno da giudice nel 2015, visualizzare anche in quale cypher presiedono come giudici";
       				echo "</td></tr>";
       				echo "<tr><td>";
       				echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       				echo "<table>
       					 <tr>
       					 <td>";
       				echo "</br>";
       				echo "
       						SELECT Fi.NicknameBBoyVincitore, PC.NazioneCypher, PC.CittaCypher </br>
							FROM   
							&nbsp&nbsp
							Final Fi, Giudice G, PresiedereCypher PC </br>
							WHERE Fi.EdizioneRedBull = '2014' </br>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	 						AND G.EdizioneRedBull = '2015' </br>
	 						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      						AND Fi.NicknameBBoyVincitore = G.Nickname </br>
      						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      						AND Fi.NazionalitaBBoyVincitore = G.Nazionalita </br>
      						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      						AND PC.EdizioneRedBull = '2015' </br>
      						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      						AND PC.NicknameGiudice = G.Nickname </br>
      						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      						AND PC.NazionalitaGiudice = G.Nazionalita </br>
      						GROUP BY Fi.NicknameBBoyVincitore
      					 ";
      				echo "</td>
      					  </tr>
      					  </table>";
      				echo "</div>";
       				echo "</td>";
       				echo "<td align='center'>";
       					echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       					echo "<table>";
       					echo "<tr>";
       					echo "<th align='center'>Nickname BBoy</th><th align='center'>Nazione Cypher</th><th align='center'>Citta' Cypher</th>";
       					echo "</tr>";
       					while($row = mysql_fetch_row($rs)){
							$Nickname = $row[0];
							$NazioneCy = $row[1];
							$CittaCy = $row[2];
						echo "<tr><td align='center'>$Nickname</td><td align='center'>$NazioneCy</td><td align='center'>$CittaCy</td></tr>";
						}//while
						echo "</table>";
						echo "</div>";
       				echo "</td>";	
				}//if
				if( $queryProgetto == "3" ){
					$query = " 
								SELECT COUNT(*) AS numeroBBoy
								FROM   Iscrizione I, BBoyIscritto Isc, BBoyInvitato Inv
								WHERE  I.EdizioneRedBull = '2014'
									   AND I.NicknameBBoyIscritto = Isc.Nickname
									   AND I.NazionalitaBBoyIscritto = Isc.Nazionalita
     								   AND YEAR(CURDATE())-YEAR(Isc.DataNascita)>'25'
      								   AND Inv.EdizioneRedBull = '2015'
      								   AND I.NicknameBBoyIscritto = Inv.Nickname
      								   AND I.NazionalitaBBoyIscritto = Inv.Nazionalita
       					 	 ";
       				$rs = mysql_query($query);
       				echo "</br>";
       				echo "Query che conta quanti bboy si sono iscritti nel 2014 che hanno piu di 25 anni e che nel 2015 sono stati invitati al world final";
       				echo "</td></tr>";
       				echo "<tr><td>";
       				echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       				echo "<table>
       					 <tr>
       					 <td>";
       				echo "</br>";
       				echo "
       						SELECT COUNT(*) AS numeroBBoy </br>
							FROM 
							&nbsp&nbsp
							Iscrizione I, BBoyIscritto Isc, BBoyInvitato Inv </br>
							WHERE  I.EdizioneRedBull = '2014' </br>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     						AND I.NicknameBBoyIscritto = Isc.Nickname </br>
     						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     						AND I.NazionalitaBBoyIscritto = Isc.Nazionalita </br>
     						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     						AND YEAR(CURDATE())-YEAR(Isc.DataNascita)>'25' </br>
     						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      						AND Inv.EdizioneRedBull = '2015' </br>
      						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      			 		    AND I.NicknameBBoyIscritto = Inv.Nickname </br>
      			 		    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      			 		    AND I.NazionalitaBBoyIscritto = Inv.Nazionalita
      					 ";
      				echo "</td>
      					  </tr>
      					  </table>";
      				echo "</div>";
       				echo "</td>";
       				echo "<td align='center'>";
       					echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       					echo "<table>";
       					echo "<tr>";
       					echo "<th align='center'>Numero BBoy</th>";
       					echo "</tr>";
       					while($row = mysql_fetch_row($rs)){
							$numeroBBoy = $row[0];
						echo "<tr><td align='center'>$numeroBBoy</td></tr>";
						}//while
						echo "</table>";
						echo "</div>";
       				echo "</td>";	
				}//if
				if( $queryProgetto == "4" ){
					$query = "
								SELECT DISTINCT Fi.Nazione, Fi.Citta, Fi.DataSvolgimento
								FROM Final Fi
								WHERE Fi.EdizioneRedBull ='2014'
     								  AND
     								  Fi.Nazione = any (SELECT Cy.Nazione
                          						   		FROM Cypher Cy
                         						   		WHERE Cy.EdizioneRedBull = '2014'     
                          						   		GROUP BY Cy.Nazione
                       							   		HAVING COUNT(Cy.Nazione) > '1')
							 ";
       				$rs = mysql_query($query);
       				echo "</br>";
       				echo "Query che visualizza nazione, citta e data svogimento di un final nel 2014, il quale è svolto nella stessa nazione di un cypher del 2014, dove se ne sono svolti almeno 2";
       				echo "</td></tr>";
       				echo "<tr><td>";
       				echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       				echo "<table>
       					 <tr>
       					 <td>";
       				echo "</br>";
       				echo "
							SELECT DISTINCT Fi.Nazione, Fi.Citta, Fi.DataSvolgimento </br>
							FROM 
							&nbsp&nbsp
							Final Fi </br>
							WHERE Fi.EdizioneRedBull ='2014' </br>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     						AND Fi.Nazione = any (SELECT Cy.Nazione </br>
     						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      		FROM Cypher Cy </br>
                      		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      		WHERE Cy.EdizioneRedBull = '2014' </br> 
                      		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    
                       		GROUP BY Cy.Nazione  </br>
                       		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                       		HAVING COUNT(Cy.Nazione) > '1') </br>
							 ";
					echo "</td>
      					  </tr>
      					  </table>";
      				echo "</div>";
       				echo "</td>";
       				echo "<td align='center'>";
       					echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       					echo "<table>";
       					echo "<tr>";
       					echo "<th align='center'>Nazione Final</th><th align='center'>Citta' Final</th><th align='center'>Data Svolgimento</th>";
       					echo "</tr>";
       					while($row = mysql_fetch_row($rs)){
							$NazioneFi = $row[0];
							$CittaFi = $row[1];
							$Data = $row[2];
						echo "<tr><td align='center'>$NazioneFi</td><td align='center'>$CittaFi</td><td align='center'>$Data</td></tr>";
						}//while
						echo "</table>";
						echo "</div>";
       				echo "</td>";	
				}//if
				if( $queryProgetto == "5" ){
					$query = "
							 SELECT *
							 FROM (SELECT G.Nickname, G.Nazionalita, Cy.Nazione, Cy.Citta
      							   FROM Giudice G, Cypher Cy, PresiedereCypher PC
      							   WHERE G.Nickname = PC.NicknameGiudice
      							   AND G.Nazionalita = PC.NazionalitaGiudice
     							   AND PC.NazioneCypher = Cy.Nazione
     							   AND PC.CittaCypher = Cy.Citta
       							   UNION
      							   SELECT G.Nickname, G.Nazionalita, Fi.Nazione, Fi.Citta
     							   FROM Giudice G, Final Fi, PresiedereFinal PF
      							   WHERE G.Nickname = PF.NicknameGiudice
      							   AND G.Nazionalita = PF.NazionalitaGiudice
      							   AND PF.NazioneFinal = Fi.Nazione
      							   AND PF.CittaFinal = Fi.Citta
     							   UNION
      							   SELECT G.Nickname, G.Nazionalita, WF.Nazione, WF.Citta
     							   FROM Giudice G, WorldFinal WF, PresiedereWorldFinal PWF
     							   WHERE G.Nickname = PWF.NicknameGiudice
     							   AND G.Nazionalita = PWF.NazionalitaGiudice
      							   AND PWF.NazioneWorldFinal = WF.Nazione
      							   AND PWF.CittaWorldFinal = WF.Citta
      						 ) as TAB
							 ORDER BY TAB.Nickname
							 ";
       				$rs = mysql_query($query);
       				echo "</br>";
       				echo "Query che visualizza tutte le gare presiedute da un giudice, e ordinare i giudici per nickname";
       				echo "</td></tr>";
       				echo "<tr><td>";
       				echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       				echo "<table>
       					 <tr>
       					 <td>";
       				echo "</br>";
       				echo "
						 SELECT * </br>
						 FROM 
						 (SELECT G.Nickname, G.Nazionalita, Cy.Nazione, Cy.Citta </br>
						 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      					 FROM 
      					 &nbsp&nbsp
      					 Giudice G, Cypher Cy, PresiedereCypher PC </br>
      					 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      				     WHERE G.Nickname = PC.NicknameGiudice </br>
      				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      				     AND G.Nazionalita = PC.NazionalitaGiudice </br>
      				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     				     AND PC.NazioneCypher = Cy.Nazione </br>
     				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     				     AND PC.CittaCypher = Cy.Citta </br>
     				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       				     UNION </br>
       				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      				     SELECT G.Nickname, G.Nazionalita, Fi.Nazione, Fi.Citta </br>
      				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     				     FROM 
     				     &nbsp&nbsp
     				     Giudice G, Final Fi, PresiedereFinal PF </br>
     				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      				     WHERE G.Nickname = PF.NicknameGiudice </br>
      				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      			  	     AND G.Nazionalita = PF.NazionalitaGiudice </br>
      			  	     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      				     AND PF.NazioneFinal = Fi.Nazione </br>
      				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      				     AND PF.CittaFinal = Fi.Citta </br>
      				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     				     UNION </br> 
     				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      				     SELECT G.Nickname, G.Nazionalita, WF.Nazione, WF.Citta </br>
      				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     				     FROM
     				     &nbsp&nbsp
     				     Giudice G, WorldFinal WF, PresiedereWorldFinal PWF </br>
     				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     				     WHERE G.Nickname = PWF.NicknameGiudice </br>
     				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     				     AND G.Nazionalita = PWF.NazionalitaGiudice </br>
     				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      				     AND PWF.NazioneWorldFinal = WF.Nazione </br>
      				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      				     AND PWF.CittaWorldFinal = WF.Citta </br>
      				     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      					 ) as TAB </br>
						 ORDER BY TAB.Nickname
						 ";
					echo "</td>
      					  </tr>
      					  </table>";
      				echo "</div>";
       				echo "</td>";
       				echo "<td align='center'>";
       					echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       					echo "<table>";
       					echo "<tr>";
       					echo "<th align='center'>Nickname Giudice</th><th align='center'>Nazionalita' Giudice</th><th align='center'>Nazione</th><th align='center'>Citta'</th>";
       					echo "</tr>";
       					while($row = mysql_fetch_row($rs)){
							$Nickname = $row[0];
							$Nazionalita = $row[1];
							$NazioneCy = $row[2];
							$CittaCy = $row[3];
						echo "<tr><td align='center'>$Nickname</td><td align='center'>$Nazionalita</td><td align='center'>$NazioneCy</td><td align='center'>$CittaCy</td></tr>";
						}//while
						echo "</table>";
						echo "</div>";
       				echo "</td>";	
				}//if
				if( $queryProgetto == "6" ){
					$query = "
							 SELECT MONTH(Cy.DataSvolgimento) as Mesi, COUNT(MONTH(Cy.DataSvolgimento))/60
							 FROM Cypher Cy
							 WHERE Cy.EdizioneRedBull = '2014'
							 GROUP BY Mesi
   							 ";
       				$rs = mysql_query($query);
       				echo "</br>";
       				echo "Query che visualizza con quale frequenza, in percentuale, vengono effettuati i cypher durante l'anno 2014";
       				echo "</td></tr>";
       				echo "<tr><td>";
       				echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       				echo "<table>
       					 <tr>
       					 <td>";
       				echo "</br>";
       				echo "
						 SELECT MONTH(Cy.DataSvolgimento) as Mesi,  </br>
						 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						 COUNT(MONTH(Cy.DataSvolgimento))/60 </br>
						 FROM 
						 &nbsp&nbsp
						 Cypher Cy </br>
						 WHERE Cy.EdizioneRedBull = '2014' </br>
						 GROUP BY Mesi </br>
   						 ";
   					echo "</td>
      					  </tr>
      					  </table>";
      				echo "</div>";
       				echo "</td>";
       				echo "<td align='center'>";
       					echo "<div style='height: 450; WIDTH: 575; overflow: auto; padding: 5px;'>";
       					echo "<table>";
       					echo "<tr>";
       					echo "<th align='center'>Mese</th><th align='center'>Frequeza Cypher</th>";
       					echo "</tr>";
       					$Mesi = array(Gennaio, Febbraio, Marzo, Aprile, Maggio, Giugno, Luglio, Agosto, Settembre, Ottobre, Novembre, Dicembre);
       					$row = mysql_fetch_row($rs);
       					$MesiMesi = $row[0];
       					$Frequenza = $row[1]; 
       					for ($i=0; $i < 12; $i++) {
       						if($MesiMesi-1 == $i){
      							echo "<tr><td align='center'>".$Mesi[$i]."</td><td align='center'>".$Frequenza."%</td></tr>";
      							$row = mysql_fetch_row($rs);
       							$MesiMesi = $row[0];
       							$Frequenza = $row[1];
       						}
       						else{
       							echo "<tr><td align='center'>".$Mesi[$i]."</td><td align='center'>0</td></tr>";
       						}	
						}//for i
						echo "</table>";
						echo "</div>";
       				echo "</td>";	
				}//if
			}//if
			?>
		</table>
		<div align="center">
			</br>
			<a href="triggerProgetto.php"><button> Trigger del Progetto</button></a>
      <a href="homeQuery.php"><button> Home Query</button></a>
      <a href="funzioniProgetto.php"><button> Funzioni del Progetto </button></a>
		</div>
	</body>
</html>