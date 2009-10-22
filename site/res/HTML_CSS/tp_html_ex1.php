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
<p>Le premier exercice est l'écriture d'un fichier minimal de base HTML</p>

<table width=100%><div class="bloc">
<div class="code">
<code>
&lt;html&gt;<br>
&lt;head&gt;<br>
&lt;title&gt;TITRE de la PAGE Ũ EX1&lt;/title&gt;<br>
&lt;/head&gt;<br>
&lt;body&gt;<br>
&lt;!-- ceci est un commentaire --><br>
BONJOUR<br>
&lt;/body&gt;<br>
&lt;/html&gt;
</code>
 
</div>
</div></table>
<br><center><a href="ex1.html">Essayer</a></center><br>
<p>
Le code source de la page est minimal, les balises de ce fichier sont les principales balises d'un fichier HTML.</p>

<p>Le langage HTML est un langage de balisage, c'est à dire qu'il fonctionne par bloc.Le début d'un bloc commence par une balise ouvrante, par exemple &lt;html&gt;, et fini par une balise fermante, par exemple &lt;/html&gt;.</p>

<p>La balise &lt;html&gt; commence est fini un fichier html</p>
<p>La balise &lt;head&gt; est à placer après la balise &lt;html&gt;, c'est l'en-tête du fichier html, la balise encapsule les balises &lt;title&gt; et &lt;meta&gt;</p>
<p>La balise &lt;title&gt; donne le titre de la page HTML elle est afficher dans la fenêtre du navigateur.</p>
<p>La balise &lt;body&gt; est le corps du fichier html c'est là que réside le code da la page html elle se situe après la balise &lt;head&gt;</p>

<p>La balise &lt;!-- ... --&gt; sert à écrire un commentaire dans le code, ce qu'il y a entre les balises de commentaire n'est pas interprété par le navigateur. Les commentaire servent à la lisibilité du code.</p>

<p>Remarque : sur la page html ex1.html le titre de la page n'est pas afficher correctement car on ne renseigne pas l'encodage dans le &lt;head&gt; qui devrait être en utf-8.
</div>

</body>
