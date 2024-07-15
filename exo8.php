<h2>Exercice 8</h2>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :</p>
<h2>Résultat</h2>
<?php

$number = 8;

echo "boucle “for”:<br>";

for($i = 1; $i <= 10; $i++){
    echo "$i x $number = ", $i*$number, "<br>";
}

echo "<br>boucle “while”:<br>";

$j = 1;
while($j <= 10){
    echo "$j x $number = ", $j*$number, "<br>";
    $j++;
}