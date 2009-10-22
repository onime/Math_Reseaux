<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php

include("../head.html");
include("../menu.php");

?>

<body>
<div id="content">

<p>Le problème à résoudre est de créer une distribution statistique à partir des notes une des matières. Ensuite il faut représenter le résultat selon un graphique approprié.</p>

<p>Réaliser une distribution statistique consiste à prendre une liste de caractère et de compter combien de fois apparait un caractère. Içi on prend ccomme discipline les maths. Le caractère étudié est la note d'un étudiant en math, il peut prendre les valeurs 0..20. On crée un tableau de 21 lignes avec toutes les notes possibles. Pour compter le nombre d'occurence on va utiliser la formule <i>SI.NB</i> qui va compter le nombre d'occurence du nombre passé en paramètre. La commande <i>SI.NB</i> fonctionne ainsi : <i>SI.NB(plage_à_compter;nombre_à_compter)</i>. Le nombre à compter sera la note (0,1,...,20).</p>

<p>Quand la formule sera rentré et étirée la plage de donnée doit rester la même, on utilisera donc le caractère '$' pour fixer la plage de donnée. Le paramètre lui ne doit pas être fixé. Soit D La colonne des maths et 2 la ligne du premier étudiant, la cellule K16 la note 0, K17 la note 1 etc... La formule a étiré est <i>SI.NB($D$2:$D$102;K16)</i>.</p>

<p>Maintenant que la première parti du problème est résolu il faut maintenant représenter ce résultat sous la forme d'un graphique approprié. Le diagramme le plus approprié pour réprésenter une distribution statistique est le diagramme en batons ou histogramme. Pour générer le diagramme on sélectionne les notes et les effectifs puis Insérer -> Diagramme. Dans la fenêtre qui s'ouvre on sélectionne le diagramme en baton.</p>

<h1>Mettre l'image du diagramme </h1>

</div>
</body>
