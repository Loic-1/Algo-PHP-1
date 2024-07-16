<h2>Exercice 7</h2>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>
<h2>Résultat</h2>
<?php

$age = 8;

switch($age){
    case($age >= 12):
        echo "L’enfant qui a $age ans appartient à la catégorie « Cadet »";
        break;
    case($age >= 10):
        echo "L’enfant qui a $age ans appartient à la catégorie « Minime »";
        break;
    case($age >= 8):
        echo "L’enfant qui a $age ans appartient à la catégorie « Pupille »";
        break;
    case($age >= 6):
        echo "L’enfant qui a $age ans appartient à la catégorie « Poussin »";
        break;
    
}