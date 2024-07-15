<h2>Exercice 9</h2>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>
<h2>Résultat</h2>
<?php

$age = 18;
$sexe = "F";

if($age > 17 && $age < 36 && $sexe == "F" || $age > 20 && $sexe == "H"){
    echo "La personne est imposable";
}
else{
    echo "La personne n'est pas imposable";
}