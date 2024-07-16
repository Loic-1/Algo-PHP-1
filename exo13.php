<h2>Exercice 13</h2>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.
</p>
<h2>Résultat</h2>
<?php

$notes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);
$somme = 0;

echo "Les notes obtenues par l’élève sont : ";

foreach($notes as $note){
    $somme += $note;
    echo "$note ";//1 foreach au lieu de 2
}

$moyenne = $somme / count($notes);

echo "<br>Sa moyenne générale est donc de : ".number_format($moyenne, 2)."<br>";