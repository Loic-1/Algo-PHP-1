<h2>Exercice 11</h2>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.
</p>
<h2>Résultat</h2>
<?php

$arrayCars = [" Peugeot ", " Renault ", " BMW ", " Mercedes "];
$nbBrands = count($arrayCars);

echo "Il y a $nbBrands marques de voitures dans le tableau :<br>";
foreach($arrayCars as $brand){
    echo $brand."<br>";
}