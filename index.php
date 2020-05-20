<?php

echo 'Cours sur la poo <br><hr>';

require('Voiture.class.php');

//Voiture est la classe
//$voiture est l'objet
$voiture1 = new Voiture('blanche','audi');

echo 'Voiture 1 <br/>';

//Accès au propriétés
echo 'Couleur : '.$voiture1->couleur.'<br/>';
//echo 'Couleur : '.Voiture::$couleur.'<br/>'; //Impossible en l'état

echo 'Marque : '.$voiture1->marque.'<br/>';
echo 'Vitesse max : '.$voiture1->vitesse_max.'<br/>';
echo 'Nombre places : '.$voiture1->nb_places.'<br/>';
echo 'Nombre portes : '.$voiture1->nb_portes.'<br/>';

//J'accès à une constante de ma classe directement
echo 'Nombre de roues :'.Voiture::NBROUES.'<br/>';
//Ou j'accède à une constante de ma classe via une méthode
echo 'Infos :'.$voiture1->infos_sur_la_voiture().'<br/>';


//Accès à l'éxecution des méthodes
$result = $voiture1->demarrer();
echo $result;

echo $voiture1->avancer();
echo $voiture1->reculer();
echo $voiture1->tourner('gauche');
echo $voiture1->activer_nitro();
echo $voiture1->activer_klaxon();

echo '<br><br>';

$voiture2 = new Voiture('rouge','ferrari',200);

echo 'Voiture 2 <br/>';
echo 'Couleur : '.$voiture2->couleur.'<br/>';
echo 'Marque : '.$voiture2->marque.'<br/>';
echo 'Vitesse max : '.$voiture2->vitesse_max.'<br/>';
echo 'Nombre places : '.$voiture2->nb_places.'<br/>';
echo 'Nombre portes : '.$voiture2->nb_portes.'<br/>';
echo 'Nombre de roues :'.Voiture::NBROUES.'<br/>';
echo 'Infos :'.$voiture2->infos_sur_la_voiture().'<br/>';

echo $voiture2->demarrer(rand(0,1),50);
echo $voiture2->avancer(150);
echo $voiture2->reculer();
echo $voiture2->tourner('droite');
echo $voiture2->activer_nitro();
echo $voiture2->activer_klaxon();