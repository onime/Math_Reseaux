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
<p>Le but de l'exercice est de manipuler les liens et les images</p>

<table width=100%><div class="bloc">
<div class="code">
<code>
BONJOUR
&lt;br /&gt;
&lt;br /&gt;
Insertion d'image
&lt;hr /&gt;

&lt;img src = "/images/einstein.jpg" alt="einstein"&gt;
</code>
 
</div>
<div class="apercu">
BONJOUR
<br />
<br />
Insertion d'image
<hr />

<img src = "../../images/einstein.jpg" alt="einstein">
</div>
</div></table>
<br>
<p>L'images a été mise dans un répertoire appelé images, on renseigne à l'attribut src de la balise img le
chemin absolu de l'image.</p>
</div>

</body>
