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
	<title>Gestione Spese</title>
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

		<div id="col-cen" class="sinistra">
			<p>
			
Lorem ipsum 
<img src="immagini/prova.gif" align="left"> dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar, mauris non dapibus sagittis, enim velit mattis ante, nec egestas sapien orci id risus. Nam vel augue est. Donec pharetra consequat massa, ac sagittis urna egestas eu. Mauris nec quam sit amet mi rhoncus rutrum. Mauris nec bibendum odio. Fusce iaculis faucibus neque, sit amet porttitor nisi eleifend sed. Nulla libero lacus, interdum quis eleifend a, porta sit amet dui. Praesent mollis, est sed volutpat tincidunt, lorem mi luctus neque, id commodo enim augue non dolor. Nullam non lacus ante, non condimentum nunc. Praesent sed turpis magna. Nam diam odio, fermentum sed luctus eget, auctor sit amet tellus. Nunc nisl nibh, pulvinar fermentum dapibus ac, blandit id orci. Integer tristique ipsum eu erat blandit vel fringilla nulla imperdiet. In hac habitasse platea dictumst. Sed eleifend urna at lorem fermentum et suscipit justo posuere.

Nunc nisl turpis, vehicula nec aliquet cursus, suscipit et quam. Cras vitae dolor sit amet nisl tristique ullamcorper. Duis eget turpis dui, vel luctus turpis. Mauris eleifend tincidunt massa, in congue mi rutrum a. Donec rhoncus, mauris in facilisis viverra, neque est tempor lorem, at commodo est nisi aliquet odio. Nam tincidunt rhoncus eros id faucibus. Mauris porttitor tempus lectus, sed fringilla libero imperdiet et. Donec leo nisi, ornare ut molestie at, dapibus placerat dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque id ante metus. Donec a magna eget nulla condimentum scelerisque ultricies eu mauris. Sed at ante eget purus gravida lacinia. Aenean ac nibh id orci iaculis euismod. Aliquam lorem sapien, mollis aliquet auctor eu, consectetur in neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
			</p>

		</div>	 <!-- FINE CENTRO -->
		
		<div style="clear:both;" />
	
		<div id="footer">Crediti - Ettore Bauchensky</div>
	</div>	<!-- FINE CONTENITORE -->

</body>

</html>
	 
	 
	 