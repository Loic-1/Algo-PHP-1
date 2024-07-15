<h2>Exercice 10</h2>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.
</p>
<h2>Résultat</h2>
<?php

$coût = 152;
$versé = 200;
$reste = $versé - $coût;
$tmp = $reste;

echo "Montant à payer : $coût €<br>";
echo "Montant versé : $versé €<br>";
echo "Reste à payer : $reste €<br>";
echo "***************************************************<br>";
echo "Rendue de monnaie :<br>" ;

$rendu10 = intdiv($tmp, 10);
$tmp = $tmp % 10;
$rendu5 = intdiv($tmp, 5);
$tmp = $tmp % 5;
$rendu2 = intdiv($tmp, 2);
$tmp = $tmp % 2;
echo $rendu10, " billet(s) de 10 € - ", $rendu5, " billet(s) de 5 € - ", $rendu2, " pièce(s) de 2 € - ", $tmp, " pièce(s) de 1 €";