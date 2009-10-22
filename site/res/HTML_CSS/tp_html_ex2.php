<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<?php
include("../../head.html");
include("../../menu.php");
?>

<body>
<div id="content">
<p>Le but de l'exercice est d'apprendre à utiliser les puces.</p>
 <table width=100%><div class="bloc">
<div class="code">

<code>
&lt;html&gt;<br>
&lt;head&gt;<br>
&lt;title&gt;TITRE de la PAGE &lt;/title&gt;<br>
&lt;/head&gt;<br>
&lt;body&gt;<br>
BONJOUR<br>
&lt;/br&gt;<br>
voici le plan du cours :<br>
&lt;hr&gt;<br><br>

&lt;ol&gt;<br>
&lt;li&gt;Item 1&lt;/li&gt;<br>
&lt;ul&gt;<br>
&lt;li&gt;puce 1&lt;/li&gt;<br>
&lt;ol&gt;<br>
&lt;li&gt;sous puce 1 numérotée &lt;/li&gt;<br>
&lt;/ol&gt;<br>
&lt;/li&gt;<br>
&lt;/ul&gt;<br>
&lt;/ol&gt;<br><br>

&lt;/body&gt;<br>
&lt;/html&gt;

</code>

</div>
<div class="apercu">
BONJOUR
</br>
voici le plan du crous :
<hr>
<ol>
<li>Item 1</li>
<ul>
<li>puce 1</li>
<ol>
<li>sous puce 1 numéroté</li>
</ol>
</li>
</ul>
</ol>


</div></div></table>
<br>
<p>Explication : </p>
<p>
Dans cette exemple on voit les 3 balises pouvant créer des puces. Ces trois balises sont &lt;ol;&gt;, &lt;ul&gt;, et &lt;li&gt;. Les balises &lt;ol;&gt;, &lt;ul&gt;, servent à délimiter les paragraphes. La différence entre les deux balises est que la balise &lt;ol;&gt; numérotera les puces alors que la balise &lt;ul&gt; affichera les puces sans numéro. La balise &lt;li&gt; crée les puces. Une balise &lt;ul&gt; ou &lt;ol&gt; fonctionne toujours avec une balise &lt;li&gt;.</p>

<p>Test :</p> 

<table width=100%><div class="bloc">
<div class="code">
<code>
&lt;ul&gt;<br>
 &lt;li&gt;Premier paragraphe&lt;/li&gt;<br>
  &lt;ol&gt;<br>
   &lt;li&gt;Première note du premier paragraphe&lt;/li&gt;<br>
   &lt;li&gt;Deuxième note du premier paragraphe&lt;/li&gt;<br>
  &lt;/ol&gt;<br>
 &lt;li&gt;Deuxième paragraphe&lt;/li&gt;<br>
  &lt;ul&gt;<br>
   &lt;li&gt;Premier sous pragraphe du deuxième paragraphe&lt;/li&gt;<br>
    &lt;ol&gt;<br>
     &lt;li&gt;Première sous sous pragraphe numéroté&lt;/li&gt;<br>
    &lt;/ol&gt;<br>
  &lt;/ul&gt;<br>
 &lt;ul&gt;Test ul seul&lt;/ul&gt;<br>
&lt;/ul&gt;<br>
&lt;li&gt;Test li seul&lt;/li&gt;<br>
</code>
</div>
<div class="apercu">

<ul>
 <li>Premier paragraphe</li>
  <ol>
   <li>Première note du premier paragraphe</li>
   <li>Deuxième note du premier paragraphe</li>
  </ol>
 <li>Deuxième paragraphe</li>
  <ul>
   <li>Premier sous pragraphe du deuxième paragraphe</li>
    <ol>
     <li>Première sous sous pragraphe numéroté</li>
    </ol>
  </ul>
 <ul>Test ul seul</ul>
</ul>
<li>Test li seul</li> 
</div>
</div></table><br>
<p>Comme on le voit les balise ul et ol fonctionne toujours avec la balise li, sinon le texte est bien aligné mais sans la numéro ou la puce devant<p>

<p>Reproduction d'un sommaire : </p>

<table width=100%><div class="bloc">
<div class="code">
<code>
BONJOUR &lt;br /&gt; <br>
voici le plan du cours :<br>
&lt;hr&gt;<br>
<br>
&lt;ol&gt;<br>
<br>
&lt;li&gt;Vocabulaire<br>
<br>
&lt;ul&gt;<br>
	&lt;li&gt;population&lt;/li&gt;<br>
	&lt;li&gt;individu&lt;/li&gt;<br>
	&lt;li&gt;caractère&lt;/li&gt;<br>
	&lt;li&gt;modalité&lt;/li&gt;<br>
&lt;/ul&gt;<br>
<br>
&lt;li&gt;Notations&lt;/li&gt;<br>
<br>
&lt;li&gt;Indicateurs de position&lt;/li&gt;<br>
&lt;ul&gt;<br>
	&lt;li&gt;Mode&lt;/li&gt;<br>
	&lt;li&gt;Moyenne&lt;/li&gt;<br>
	&lt;li&gt;Mediane&lt;/li&gt;<br>
&lt;/ul&gt;<br>

&lt;li&gt;Indicateurs de dispersion&lt;/li&gt;<br>
&lt;ul&gt;
<br>	&lt;li&gt;Etendue&lt;/li&gt;
<br>	&lt;li&gt;Ecart inter quartile&lt;/li&gt;
<br>	&lt;li&gt;Ecrat type&lt;/li&gt;
<br>&lt;/ul&gt;

<br>&lt;/ol&gt;<br>
</code>
</div>
<div class="apercu">
BONJOUR <br />

voici le plan du cours :
<hr>

<ol>

<li>Vocabulaire

<ul>
	<li>population</li>
	<li>individu</li>
	<li>caractère</li>
	<li>modalité</li>
</ul>

<li>Notations</li>

<li>Indicateurs de position</li>
<ul>
	<li>Mode</li>
	<li>Moyenne</li>
	<li>Mediane</li>
</ul>

<li>Indicateurs de dispersion</li>
<ul>
	<li>Etendue</li>
	<li>Ecart inter quartile</li>
	<li>Ecrat type</li>
</ul>

</ol>
</div>

</div></table>

</div>
</body>
<html>







