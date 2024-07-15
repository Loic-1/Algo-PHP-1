<h2>Exercice 6</h2>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
<h2>Résultat</h2>
<?php

$prixUnit = 9.99;
$qte = 5;
$TVA = 0.2;
$prixHT = $prixUnit * $qte;
$prix = round($prixHT + $prixHT * $TVA, 2);

echo "Prix unitaire de l’article : $prixUnit €<br>";
echo "Quantité : $qte<br>";
echo "Taux de TVA : $TVA<br>";
echo "Le montant de la facture à régler est de : $prix €<br>";
