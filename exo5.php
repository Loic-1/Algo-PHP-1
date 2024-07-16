<h2>Exercice 5</h2>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>
<h2>Résultat</h2>
<?php

$valeurFR = 100;
$valeurEUR = number_format($valeurFR / 6.5596, 2);
echo $valeurFR, " francs français valent aujourd'hui (en 2024) ", $valeurEUR, " euros.";