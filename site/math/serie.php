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

<p>Le problème à résoudre est de créer un nuage de points et trouver l'équation de la droite de régression à partir d'une série statistique. Les caractères de la série statistique sont le rang du candidat et la note en math.</p>

<p>Le rang du candidat n'apparaît pas encore sur la feuille de calcul, pour la créer en sélectionne la colonne A puis Clic droit -> Insertion -> Colonne. On donne comme titre 'rang' dans la première celulle on met '1' puis on étire la celulle jusqu'au dernier candidat. On a maintenant nos deux caractères. Pour créer le nuage de points on sélectionne d'abord la colonne du rang ensuite celle de la moyenne, puis Insertion -> Diagramme -> Diagramme XY.</p>

<p>On peut observer que les meilleurs candidats ont eu de très bonne notes maths et que les plus mauvais ont eu de très mauvais résultats en math</p>

<p>Pour faire apparaître la droite de régression on sélectionne les points du graphique puis, Clic droit -> Droite de régression, on coche afficher l'équation er r². En peut vérifier que l'équation donnée est bien une droite de régression de y en x en utilisant la formule COV(X,Y)/VAR(X) qui nous donnera le coéfficient directeur de la droite. On entre dans une cellule la formule : <i>COVARIANCE(A2:A101;D2:D101)/VAR.P(A2:A101)</i> avec A pour la colonne du rang et D la colonne des notes de maths, on trouve -0,14, donc la droite trouver par le graphique est bien une droite de régression de y en x.</p>
<h1>Idem mettre l'image du graphique</h1>
</div>
</body>
