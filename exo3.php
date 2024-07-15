<h2>Exercice 3</h2>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>
<h2>Résultat</h2>
<?php

$phrase = "Notre formation DL commence aujourdhui";
$replace = array("aujourdhui" => "demain");
$newPhrase = strtr($phrase, $replace);
echo "$phrase<br>";
echo $newPhrase;