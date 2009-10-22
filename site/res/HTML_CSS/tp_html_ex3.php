<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<?php
include("../../head.html");
include("../../menu.php");
?>

<body>
<div id="content">
<p>Le but de l'exercice est d'apprendre à utiliser les tableaux.</p>

<div class="bloc">
<div class="code">
<code>
&lt;table border="1" cellpadding="0" cellspacing="0" width="100%"&gt;<br>
&lt;tr&gt;<br>
&lt;td&gt;L1C1&lt;/td&gt;<br>
&lt;td&gt;L1C2&lt;/td&gt;<br>
&lt;td&gt;L1C3&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;tr&gt;<br>
&lt;td&gt;L2C1&lt;/td&gt;<br>
&lt;td&gt;L2C2&lt;/td&gt;<br>
&lt;td&gt;L3C3&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;/table&gt;<br>
</code>
 
</div>

<div class="apercu">
<table border="1" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>L1C1</td>
<td>L1C2</td>
<td>L1C3</td>
</tr>
<tr>
<td>L2C1</td>
<td>L2C2</td>
<td>L3C3</td>
</tr>
</table>
</div>
</div>

<p>
On voit que la balise tr sert à créer une colonne alors que la balise td crée une cellule d'une colonne</p>

<p>Test en changeant de valeur les attributs de la balise table : </p>

<div class="bloc">
<div class="code">
<code>
&lt;table border="15" cellpadding="10" cellspacing="10" width="10%"&gt;<br>
&lt;tr&gt;<br>
&lt;td&gt;L1C1&lt;/td&gt;<br>
&lt;td&gt;L1C2&lt;/td&gt;<br>
&lt;td&gt;L1C3&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;tr&gt;<br>
&lt;td&gt;L2C1&lt;/td&gt;<br>
&lt;td&gt;L2C2&lt;/td&gt;<br>
&lt;td&gt;L3C3&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;/table&gt;<br>
</code>
 
</div>

<div class="apercu">
<table border="15" cellpadding="10" cellspacing="10" width="10%">
<tr>
<td>L1C1</td>
<td>L1C2</td>
<td>L1C3</td>
</tr>
<tr>
<td>L2C1</td>
<td>L2C2</td>
<td>L3C3</td>
</tr>
</table>
</div>
</div>


<div class="bloc">
<div class="code">
<code>
&lt;table border="5" cellpadding="2" cellspacing="20" width="10%"&gt;<br>
&lt;tr&gt;<br>
&lt;td&gt;L1C1&lt;/td&gt;<br>
&lt;td&gt;L1C2&lt;/td&gt;<br>
&lt;td&gt;L1C3&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;tr&gt;<br>
&lt;td&gt;L2C1&lt;/td&gt;<br>
&lt;td&gt;L2C2&lt;/td&gt;<br>
&lt;td&gt;L3C3&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;/table&gt;<br>
</code>
 
</div>

<div class="apercu">
<table border="5" cellpadding="2" cellspacing="20" width="10%">
<tr>
<td>L1C1</td>
<td>L1C2</td>
<td>L1C3</td>
</tr>
<tr>
<td>L2C1</td>
<td>L2C2</td>
<td>L3C3</td>
</tr>
</table>
</div>
</div>
</div>



</body>
