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
<p>Le but de l'exercice est d'observer le protocole HTTP</p>

<div class="bloc">
<div class="code">
<code>
Code CSS : <br>
p<br>
{<br>
width:250px;<br>
height:100px;<br>
margin:20px;<br>
padding: 5px;<br>
border:solid 2px #ffcc00;<br>
}<br><br>

Code HTML :<br>
&lt;p&gt;Un texte est une succession de caractères organisée selon un langage. Cette définition désigne aussi<br>
bien une sémiotique du langage (proprement acte sémique) qui en tant que tel transcende l'acte textuel. <br>
Il en résulte que le texte est exprimé par plusieurs phrases en différentes langues.&lt;/p&gt;

</code>
 
</div>
<div class="apercu">


<p class="p1">
Un texte est une succession de caractères organisée selon un langage. Cette définition désigne aussi
bien une sémiotique du langagequi en tant que tel transcende l'acte textuel.
</p>

</div>
</div>
<br>
<p>On fait varier plusieurs valeur du fichier CSS : </p><br>

<div class="bloc">
<div class="code">
<code>
Code CSS : <br>
p<br>
{<br>
width:250px;<br>
height:100px;<br>
margin:20px;<br>
padding: 15px;<br>
border:solid 2px #ffcc00;<br>
}<br><br>

p<br>
{<br>
width:250px;<br>
height:150px;<br>
margin:20px;<br>
padding: 5px;<br>
border:solid 2px #ffcc00;<br>
}<br><br>

p<br>
{<br>
width:350px;<br>
height:100px;<br>
margin:2px;<br>
padding: 5px;<br>
border:solid 2px blue;<br>
}<br><br>

</code>
 
</div>
<div class="apercu">


<p class="p1">
Un texte est une succession de caractères organisée selon un langage. Cette définition désigne aussi
bien une sémiotique du langagequi en tant que tel transcende l'acte textuel.
</p>

<p class="p2">
Un texte est une succession de caractères organisée selon un langage. Cette définition désigne aussi
bien une sémiotique du langagequi en tant que tel transcende l'acte textuel.
</p>

<p class="p3">
Un texte est une succession de caractères organisée selon un langage. Cette définition désigne aussi
bien une sémiotique du langagequi en tant que tel transcende l'acte textuel.
</p>

<p class="p4">
Un texte est une succession de caractères organisée selon un langage. Cette définition désigne aussi
bien une sémiotique du langagequi en tant que tel transcende l'acte textuel.
</p>

</div>
</div>

<p>En ouvrant le fichier avec firefox et internet explorer la pages s'affiche normalement dans les deux navigateurs.</p>
<p>Le code #ffcc00 est le code héxadécimal pour afficher une couleur, on peut séparer les 6 lettres/chiffres et 3 parties
ff-cc-00. Ces trois parties représente le format de codage RGB : ff = 255, cc=204, 00=00. La couleur final sera donc
un mélange de Rouge et de vert.</p>

</div>

</body>
