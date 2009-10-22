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
<p>Le but de l'exercice est de manipuler les formulaires</p>

<div class="bloc">
<div class="code">
<code>
&lt;form name="nom_du_form" action="mailto:@mel" method="post"&gt;<br>
LOGIN : &lt;input type="text" name="login" value=""&gt;&lt;br&gt;&lt;br&gt;<br>
PASSWORD : &lt;input type="password"&gt;&lt;br&gt;&lt;br&gt;<br>
&lt;table summary="envoi" cellspacing="3"&gt;<br>
&lt;tr&gt;&lt;td&gt;&lt;button type="submit"&gt;Envoyer&lt;/button&gt;&lt;/td&gt;<br>
&lt;td&gt;&lt;button type="reset"&gt;ANNULER&lt;/button&gt;&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;/table&gt;&lt;/form&gt;<br>
</code>
 
</div>
<div class="apercu">

<form name="nom_du_form" action="mailto:@mel" method="post">
LOGIN : <input type="text" name="login" value=""><br><br>
PASSWORD : <input type="password"><br><br>
<table summary="envoi" cellspacing="3">
<tr><td><button type="submit">Envoyer</button></td>
<td><button type="reset">ANNULER</button></td>
</tr>
</table></form>

</div>
</div>
<br>
<p>Le formulaire crée içi est un formualire d'inscription basique. Le formulaire est crée d'abbord par la balise form</p>

<p>La balise form possède 3 attributs principaux : name, action, method.<br>
L'attribut name sert a libeller le formulaire.<br>
L'attribut action sert à rediriger vers la page quand le formulaire est valider.<br>
L'attribut method peut prendre deux paramètres GET ou POST, dans le cas d'un GET les valeurs du formulaire sont 
envoyé dans l'url, dans le cas d'un POST les valeurs sont envoyé de façon transparente.</p>
<p>Le bouton ENVOYER sert va envoyer les paramètre à la valeurs de l'attribut action.<br>
Le bouton RESET va effacer toutes les valeurs des champs LOGIN et PASSWORD.</p>
<p>On remarque que si la method n'est pas renseigné les valeurs du formulaire sont envoyé dans l'url</p>
<br>
<table width=100%>
<div class="bloc">
<div class="code">
<code>
&lt;h1&gt;UN FORMULAIRE&lt;/h1&gt;<br>
&lt;hr /&gt;<br>
&lt;br /&gt;<br>
&lt;form action="ex12.html" &gt;<br>
<br>
&lt;fieldset border="5px"&gt;<br>
	&lt;legend&gt; Identité &lt;/legend&gt;<br>
<br>
	Nom : &lt;input type="text" name="nom" size="50"&gt;&lt;br /&gt;&lt;br /&gt;<br>
	Prénom : &lt;input type="text" name="prenom" size="50"&gt;&lt;br /&gt;&lt;br /&gt;<br>
&lt;/fieldset&gt;&lt;br /&gt;<br>
<br>
<br>
&lt;fieldset&gt;<br>
	&lt;legend&gt; Informations &lt;/legend&gt;<br>
	Nature du Bac : &lt;select name="bac"&gt;<br>
					&lt;option&gt;S<br>
					&lt;option&gt;ES<br>
					&lt;option&gt;L<br>
					&lt;/select&gt;&lt;br /&gt;<br>
<br>
	Temps de transport aller et retour : &lt;br/&gt;&lt;br /&gt;<br>
	<br>
	&lt;input type="radio" name="transport"&gt; Moins d'1 heure &lt;br /&gt;<br>
	&lt;input type="radio" name="transport"&gt;plus d'une heure &lt;br /&gt;&lt;br /&gt;<br>
&lt;/fieldset&gt;&lt;br/&gt;<br>
<br>
&lt;fieldset&gt;<br>
	&lt;legend&gt; Validation &lt;/legend&gt;<br>
<br>
	&lt;input type="submit" value="VALIDER"&gt;<br>
	&lt;input type="reset" value="ANNULER"&gt;<br>
&lt;/fieldset&gt;<br>
	<br>
&lt;/form&gt;<br>
</code>
 
</div>
</div></table>

<br><center><a href ="ex5.html">Essayer</a></center>


</div>

</body>
