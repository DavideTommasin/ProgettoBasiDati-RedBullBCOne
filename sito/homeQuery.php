<?php
	session_start();
	if (!isset($_SESSION['Username'])||($_SESSION['Username']==NULL))
		header("Location: http://localhost:8888/login.php");
	$xx = $_REQUEST["xx"];

?>
<html>
	<head>
		<title>Red Bull BC One</title>
		<script type="text/javascript" src="jQuery.js"></script>
		<script type="text/javascript">
			$( document ).ready(function() {
				$("#tabella").change(function(event){
					$.ajax({
						method: "POST",
						url: "ajaxRequest.php",
						data: { tab: $("#tabella").val() }
					})
					.done(function( data ) {
						$("#checkCampi").html(data);
					});
				});
			});
		</script>
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
		<h3>HomeQuery</h3>
		</br></br>
		<div align="center">
			<a href="queryProgetto.php"><button> Query del Progetto </button></a>
			<a href="triggerProgetto.php"><button> Trigger del Progetto </button></a>
			<a href="funzioniProgetto.php"><button> Funzioni del Progetto </button></a>
		</div>
		</br>
		<p>Si ricorda che il database è stato interamente popolato solo per l'anno 2014</p>
		<form action='homeQuery.php?xx=1' method='POST'>	
			<select name='anno'>
				<?php
					$db=mysql_connect("localhost:8889","root","root");	
					mysql_select_db("RedBullBCOne", $db);
					$q1 = "select * from EdizioneRedBull";
            		$rs1 = mysql_query($q1);
           			echo '<option name="ida" value="anno">Anno</option>';
           			while($row = mysql_fetch_row($rs1)){
           				echo '<option name="ida" value="'.$row[0].'">'.$row[0].'</option>';
           			}//while
				?>
			</select>
			<select name='tabella' id="tabella" >
				<option name="ida" value="Tabella">Tabella</option>
				<option name="ida" value="BBoyInvitato">BBoyInvitato</option>
				<option name="ida" value="BBoyIscritto">BBoyIscritto</option>
				<option name="ida" value="Giudice">Giudice</option>
				<option name="ida" value="Dj">Dj</option>
				<option name="ida" value="Cypher">Cypher</option>
				<option name="ida" value="Final">Final</option>
				<option name="ida" value="WorldFinal">WorldFinal</option>
				<option name="ida" value="Iscrizione">Iscrizione</option>
				<option name="ida" value="PresiedereCypher">PresiedereCypher</option>
				<option name="ida" value="PresiedereFinal">PresiedereFinal</option>
				<option name="ida" value="PresiedereWorldFinal">PresiedereWorldFinal</option>
			</select>
			<input type='submit' name='submit' value='Prova'>
			</br></br>
			<div id="checkCampi"></div>
		</form>
		<?php
			$db=mysql_connect("localhost:8889","root","root");	
			mysql_select_db("RedBullBCOne", $db);
			$anno = $_POST["anno"];
			$tabella = $_POST["tabella"];
			$query1 = "select * from ".$tabella;
			$result1 = mysql_query($query1);
			$field = mysql_num_fields($result1);
			if (isset($_POST["*"])) {
				for ($i=0; $i < $field; $i++) { 
					$name[] = mysql_field_name($result1,$i);
				}//for i
				if($_POST["tabella"] == "Dj"){
					echo "SELECT * </br>";
					echo "FROM &nbsp&nbsp&nbsp".$tabella." </br>";
					echo "</br></br>";
					$query = "select * from ".$tabella;
				}//if
				else{
					echo "SELECT * </br>";
					echo "FROM &nbsp&nbsp&nbsp".$tabella." </br>";
					echo "WHERE EdizioneRedBull='".$anno."'";
					echo "</br></br>";
					$query = "select * from ".$tabella." where EdizioneRedBull='".$anno."'";
				}//else
				$result = mysql_query($query);
				echo "<table border='1'>";
				echo "<tr>";
				for($i=0;$i<count($name);$i++){
					echo "<th>".$name[$i]."</th>";
				}//for
				echo "</tr>";
				while($row = mysql_fetch_row($result)){
					echo "<tr>";
					for($i=0;$i<count($name);$i++){
						echo "<td>".$row[$i]."</td>";
					}//for
	           		echo "</tr>";
	           	}//while
				echo "</table>";
			}//if
			else{
				for ($i=0; $i < $field; $i++) { 
					$name[] = mysql_field_name($result1,$i);
				}//for i
				$fieldcheck[] = null;
				$j=0;
				for ($i=0; $i < count($name); $i++) { 
					if(isset($_POST[$name[$i]])){
						$fieldcheck[$j] = $name[$i];
						$j++;
					}//if
				}
				$str = "";
				for($i=0;$i<count($fieldcheck);$i++){
					if($i == count($fieldcheck)-1){
						$str .= " ".$fieldcheck[$i];
					}//if
					else{
						$str .= " ".$fieldcheck[$i].", ";
					}//else
				}
				if($xx=="1"){
					if($_POST["tabella"] == "Dj"){
						echo "SELECT ".$str."</br>";
						echo "FROM &nbsp&nbsp&nbsp".$tabella." </br>";
						echo "</br></br>";
						$query = "select ".$str." from ".$tabella;
					}//if
					else{
						echo "SELECT ".$str."</br>";
						echo "FROM &nbsp&nbsp&nbsp".$tabella." </br>";
						echo "WHERE EdizioneRedBull='".$anno."'";
						echo "</br></br>";
						$query = "select ".$str." from ".$tabella." where EdizioneRedBull='".$anno."'";
					}//else
					$result = mysql_query($query);
					echo "<table border='1'>";
					echo "<tr>";
					for($i=0;$i<count($fieldcheck);$i++){
						echo "<th>".$fieldcheck[$i]."</th>";
					}//for
					echo "</tr>";
					while($row = mysql_fetch_row($result)){
						echo "<tr>";
						for($i=0;$i<count($fieldcheck);$i++){
							echo "<td>".$row[$i]."</td>";
						}//for
		           		echo "</tr>";
		           	}//while
					echo "</table>";
				}//if
			}//else
		?>
	</body>
</html>