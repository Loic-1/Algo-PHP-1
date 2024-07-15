<h2>Exercice 7</h2>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>
<h2>Résultat</h2>
<?php

$age = 8;

switch($age){
    case($age > 5 && $age < 8):
        echo "L’enfant qui a $age ans appartient à la catégorie « Poussin »";
        break;
    case($age > 7 && $age < 10):
        echo "L’enfant qui a $age ans appartient à la catégorie « Pupille »";
        break;
    case($age > 9 && $age < 12):
        echo "L’enfant qui a $age ans appartient à la catégorie « Minime »";
        break;
    case($age > 11):
        echo "L’enfant qui a $age ans appartient à la catégorie « Cadet »";
        break;
}