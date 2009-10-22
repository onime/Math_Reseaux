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
<p> Le problème à résoudre est de calculer la moyenne des 100 étudiants en fonction de leur origine et du nombre de redoublement </p>

<p> La difficultée est de prendre en compte la grille des coefficients. Un élève venant de S n'aura pas les mêmes coéfficients qu'un élève venant de ES. Il faut donc le faire apparaître dans les formules.
</p>

<p> J'ai donc copier la grille des coefficients à côté du tableau des notes, puis pour plus de lisibilitée j'ai assigné un nom a chacune des plages des différents coefficients (Insérer -> Noms -> Définir). Ainsi le nom S aura pour valeurs dans les formules : 7 3 2 3. Puis j'ai créer une colonne Moyenne à côté de Redoublement.</p>

<p>L'autre paramètre à prendre en compte est le nombre de redoublement. Cependant comme une colonne inclu le nombre de redoublement et que personne n'a redoublé plus de 2 fois il suffit d'ajouter la celulle du redoublement à la somme des coéfficient.</p>

<p>Pour calculer la moyenne on utilise les formules <i>SOMMEPROD</i> et <i>SOMME</i>. Les 100 étudiants ne venant pas de la même série on doit utiliser 4 formules différentes et pour éviter de chercher qui vient de la série S pour affecter la formule et qui vient d'une autre série pour lui affecter la bonne formule on va utiliser la confidition <i>SI</i>. La condition <i>SI</i> fonctionne ainsi : <i>SI(condition,formule_si_condition_vrai,action_si_condition_faux)</i>.<br><br> Soit C la colonne origine, H la colonne du redoublement, D E F G les colonnes des notes de math langue français philo, et 2 la ligne du premier étudiant. La formule de la moyenne pour le premier étudiant devient donc : <i>SI(C2=1;SOMMEPROD(D2:G2;S)/(SOMME(S)+H2);SI(C2=2;SOMMEPROD(D2:G2;ES)/(SOMME(ES)+H2);SI(C2=3;SOMMEPROD(D2:G2;STG)/(SOMME(STG)+H2);SI(C2=4;SOMMEPROD(D2:G2;STI)/(SOMME(STI)+H2)))))</i>. On étire la cellule jusqu'au dernier élève et on toutes les moyennes avec les bons coéfficients et le redoublement pris en compte.
</div>
</body>
