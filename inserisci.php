<?php

	require("configure.php");
	session_start();
	$conn=mysql_connect(dbhost, dbuser, dbpwd)
		or die('Connessione al server MySQL fallita!');
	mysql_select_db(dbname);
	
	
	?>
	<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
   "http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">

<html>

<head>
	<title>Gestione Spese - Inserisci</title>
	<link rel="stylesheet" type="text/css" href="stile.css" />
</head>

<body>

	<div id="contenitore">
	
		<div id="testata"><h1>Gestione Spese</div>
	
		<div id="menu">
			<ul id="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="inserisci.php">Inserisci</a></li>
				<li><a href="controlla.php">Controlla</a></li>
				<li><a href="contatti.php">Contatti</a></li>
			</ul>
			<div style="clear:both;"></div>
		</div>	

		<div id="col-cen" class="myform">
			
			<h1>Inserisci Dati</h1>
			<p>Inserisci i dati dell'ultima spesa</p>
			<form id="form" name="form" method="POST" action="inserisci.php">
					
					<div id="uno">
					<img src="immagini/prezzo.gif" class="immagine" align="left" width="73px" height="80px"> 							
					<label>Prezzo
					<span class="small">Costo Totale</span>
					</label>
					<input type="text" name="name" id="name" />
					</div>

					<div id="due">
					<img src="immagini/tipo.gif" class="immagine" align="left" width="73px" height="80px"> 							
					<label>Tipo
					<span class="small">Tipo di Spesa</span>
					</label>	
						<select name="tipo" id="tipo" style="margin-left: 16px;">
 							<option value="1">Alimentari</option>
 							<option value="1">Ecc</option>
 							<option value="1">Una Tantum</option>
 						</select>
 						</div>
 					<button type="submit"></button>
			</form> 					

		</div>	 <!-- FINE CENTRO -->
		
		<div style="clear:both;" />
	
		<div id="footer">Crediti - Ettore Bauchensky</div>
	</div>	<!-- FINE CONTENITORE -->

</body>

</html>