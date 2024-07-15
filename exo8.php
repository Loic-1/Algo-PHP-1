<h2>Exercice 8</h2>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :</p>
<h2>Résultat</h2>
<?php

$number = 8;

for($i = 1; $i <= 10; $i++){
    echo "$i x $number = ", $i*$number, "<br>";
}