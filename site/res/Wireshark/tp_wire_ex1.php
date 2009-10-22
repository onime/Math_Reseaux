<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php
include("../../head.html");
include("../../menu.php");
?>

<body>
<div id="content">

<p>Le but de l'exercice est d'observer ce qu'il se passe lorsqu'on se connecte à http://www.wireshark.fr</p>
<p>Une fois mis à l'écoute et une fois connecter à http://www.wireshark.fr, Wireshark affiche les trames que la
carte résaux à envoyé et recu. Pour écouter d'avoir trop de trame on filtre pour n'avoir que les trames tcp.</p>
<p>Pour obtenir l'adresse ip/mac source/destination, on clic sur la première trame, puis dans la zone en dessous
on apercoit les différents protocoles que le trame encapsule. Comme il n'y a que les trames tcp d'afficher
les protocoles sont Ethernet -> IP -> TCP. Chaque protocole est détaillé, grâce au protocole Ethernet on peut 
obtenir les adresses mac source/destination : <code>@mac source = 00:13:20:08:c5, @mac destination = 00:04:75:d6:b4:98
</code>. Dans le protocole IP on peut voir les adresse IP : <code>@ip source 192.0.3.115, ip destination = 67.228.110.120
</code>. Avec le protocole TCP on remarque que le port de destination est le port 80 (HTTP) et le port source 57212
(attribuer par le système d'éxploitation).</p>

<p>
Le 3 ways handshake de synchronisation apparait dans wireshark ce sont les premières trames qui sont analysée <br>
Ci-dessous le 3 ways handshake quand on se connecte à http://www.wireshark.fr.<br>
<code>	1	0.000000	192.168.1.3	67.228.110.120	TCP	57366 > http [SYN] Seq=0 Win=8192 Len=0 MSS=1460<br>
	2	0.204754	67.228.110.120	192.168.1.3	TCP	http > 57366 [SYN, ACK] Seq=0 Ack=1 Win=5840 Len=0 MSS=1412<br>
	3	0.204864	192.168.1.3	67.228.110.120	TCP	57366 > http [ACK] Seq=1 Ack=1 Win=64952 Len=0</code><br>
	Le numéro de séquence commence à, mais ce n'est pas le vrai numéro de séquence car étant le début de la
	connexion wireshark donne comme numéro de séquence 0</p>

<p>

</p>

<!--<div class="bloc">
<div class="code">

 
</div>
<div class="apercu">




</div>
</div>
-->

</div>

</body>
