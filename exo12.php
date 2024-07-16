<h2>Exercice 12</h2>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.
</p>
<h2>Résultat</h2>
<?php

$list = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
    "FRANCAIS" => "FRA",
    "ESPAGNOL" => "ESP",
    "ANGLAIS" => "ENG"
];

foreach($list as $name => $language){
    switch($language){
        case("FRA"):
            echo "Salut $name<br>";
            break;
        case("ESP"):
            echo "Hola $name<br>";
            break;
        case("ENG"):
            echo "Hello $name<br>";
            break;
    }
}