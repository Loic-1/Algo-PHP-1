<h2>Exercice 4</h2>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
<h2>Résultat</h2>
<?php

$phrase = "Engage le jeu que je le gagne";
$newPhrase = strtolower(str_replace(" ", "", $phrase));
/*
$lenNewPhrase = strlen($newPhrase);
$verif = true;
$i = 0;
while($i < $lenNewPhrase){
    if($newPhrase[$i] == $newPhrase[$lenNewPhrase - $i - 1]){
        $i++;
    }
    else{
        $verif = false;
        break;
    }
}
if($verif){
    echo "La phrase “ $phrase ” est un palindrôme.";
}
else{
    echo "La phrase “ $phrase ” n'est pas un palindrôme.";
}*/

$reverse = strrev($newPhrase);
if($newPhrase == $reverse){
    echo "La phrase “ $phrase ” est un palindrôme.";
}
else{
    echo "La phrase “ $phrase ” n'est pas un palindrôme.";
}