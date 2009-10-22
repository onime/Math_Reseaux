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
<p>Le but de l'exercice est de reproduire une page Web, le code CSS étant partiellement donné.</p>

<table width="100%"><div class="bloc">
<div class="code">
<code>
body
<br>{
<br>font-family: verdana, arial, sans-verif;
<br>font-size: 12px;
<br>margin:0px;
<br>}
<br>
<br>#header1
<br>{
<br>
<br>background:blue;
<br>width:900px;
<br>height:90px;
<br>
<br>}
<br>
<br>#titre
<br>{
<br>margin-left:60px;
<br>padding-top:6px;
<br>font-size:16px;
<br>font-weight:bold;
<br>}
<br>
<br>#logo
<br>{
<br>float:left;
<br>margin-top:5px;
<br>margin-right:30px;
<br>}
<br>
<br>#header2
<br>{
<br>background:yellow;
<br>height:25px;
<br>width:900px;
<br>}
<br>
<br>.rubrique
<br>{
<br>padding:5px;
<br>float:right;
<br>margin-right:5px;
<br>}
<br>
<br>.rubrique a
<br>{
<br>font-size:16px;
<br>color:blue;
<br>text-decoration:  ;
<br>margin-left: 15px;
<br>}
<br>
<br>.menu
<br>{
<br>float:left ;
<br>background-color:green;
<br>width:200px;
<br>height:500px;
<br>margin-right:15px;
<br>}
<br>
<br>.menu a
<br>{
<br>margin-left:46px;
<br>}
<br>
<br>.item
<br>{
<br>margin-top:60px;
<br>margin-left:27px;
<br>padding:0px;
<br>width:120px;
<br>height:200px;
<br>border:3px solid #ff4000;
<br>background-color:#fff4ff;
<br>text-align:center;
<br>}
<br>
<br>ul,li
<br>{
<br>list-style-type:none;
<br>line-height:20px;
<br>width:112px;
<br>margin-top:15px;
<br>margin-right:1px;
<br>margin-left:1px;
<br>text-align:center;
<br>font-size:12px;
<br>}
<br>
<br>.contenu
<br>{
<br>
<br>width:900px;
<br>
<br>}
<br>
<br>h1
<br>{
<br>text-align:right;
<br>}
<br>
<br>h2
<br>{
<br>color:#ff0000;
<br>text-align:right;
<br>}
<br>
<br>
</code>
 
</div>

</div></table>
<p>En utilisant correctement les div, les id et les class du fichier CSS on obtient le résultat suivant
(on pourra lire le code source de la page avec le raccourci Ctrl+U sous Mozilla Firefox).</p>
<center><a href="ex_css.html">Essayer</a></center>

<br><br>
<p>Pour réaliser une autre version de la page avec des onglets il faut modifier le fichier CSS.
Le fichier CSS devient : <br>
<table width="100%"><div class="bloc">
<div class="code">
<code>
body
<br>{
<br>font-family: verdana, arial, sans-verif;
<br>font-size: 12px;
<br>margin:0px;
<br>}
<br>
<br>#header1
<br>{
<br>
<br>background:blue;
<br>width:900px;
<br>height:90px;
<br>
<br>}
<br>
<br>#titre
<br>{
<br>margin-left:60px;
<br>padding-top:6px;
<br>font-size:16px;
<br>font-weight:bold;
<br>}
<br>
<br>#logo
<br>{
<br>float:left;
<br>margin-top:5px;
<br>margin-right:30px;
<br>}
<br>
<br>#header2
<br>{
<br>background:yellow;
<br>height:25px;
<br>width:900px;
<br>}
<br>
<br>.rubrique
<br>{
<br>list-style-type:none;
<br>font-size:12px;
<br>color:#ffff78;
<br>margin:0px;
<br>}
<br>
<br>.menu
<br>{
<br>float:left ;
<br>width:200px;
<br>height:500px;
<br>}
<br>
<br>.item
<br>{
<br>margin-top:60px;
<br>margin-left:27px;
<br>padding:0px;
<br>width:120px;
<br>height:200px;
<br>border:3px solid #ff4000;
<br>background-color:#fff4ff;
<br>text-align:center;
<br>}
<br>
<br>ul,li
<br>{
<br>float : right;
<br>margin:2px 2px 0 2px;
<br>border:1px solid white;
<br>background-color:#ff4000;
<br>-moz-border-radius-topright:10px;
<br>-moz-border-radius-topleft:10px;
<br>}
<br>
<br>.contenu
<br>{
<br>width:900px;
<br>text-align:justify;
<br>
<br>}
<br>
<br>h1
<br>{
<br>text-align:right;
<br>}
<br>
<br>h2
<br>{
<br>color:#ff0000;
<br>text-align:right;
<br>}
<br>
<br>a
<br>{
<br>display:block;
<br>color:#000000;
<br>text-decoration:none;
<br>padding:4px;
<br>}
<br>
</code>
</div>
</div></table>

<p>Pour pouvoir afficher le contenu comme il faut et non au bord du navigateur il suffit de supprimer le
<code>background-color:green;</code> et de mettre un <code>&lt;div class="menu"&gt;&lt;/div&gt;</code> vide.
Ensuite pour les onglet le code CSS est donné par <code>-moz-border-radius-topright:10px; -moz-border-radius-topleft:10px;</code>
(les angles arrondis ne fonctionnent pas sous Internet Explorer).</p>

<center><a href="ex_css_onglet.html">Essayer</a></center>
</div>

</body>
