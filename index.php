<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require './classes/Maison.php';

$bloc = new Maison('France', 'Avesne', 59440, 3, 7, true, 2, true);

echo $bloc->getPays() . "<br>";
echo $bloc->getVille() . "<br>";
echo $bloc->getCodePostal() . "<br>";
echo $bloc->getChambres() . "<br>";
echo $bloc->getPieces() . "<br>";
echo $bloc->getJardin() . "<br>";
echo $bloc->getEtages() . "<br>";
echo $bloc->getGarage() . "<br><br>";

$bloc2 = new Maison('France', 'Fourmies', 59610, 5, 12, true, 3, true);

echo $bloc2->getPays() . "<br>";
echo $bloc2->getVille() . "<br>";
echo $bloc2->getCodePostal() . "<br>";
echo $bloc2->getChambres() . "<br>";
echo $bloc2->getPieces() . "<br>";
echo $bloc2->getJardin() . "<br>";
echo $bloc2->getEtages() . "<br>";
echo $bloc2->getGarage() . "<br><br>";

require './classes/Appartement.php';

$apparte = new Appartement('France', 'Maubeuge', 59605, 2, 4, true);

echo $apparte->getPays() . "<br>";
echo $apparte->getVille() . "<br>";
echo $apparte->getCodePostal() . "<br>";
echo $apparte->getChambres() . "<br>";
echo $apparte->getPieces() . "<br>";
echo $apparte->getGarage() . "<br><br>";

echo $apparte->setPays('Belgique') . "<br>";
echo $apparte->setVille('Bruxelle') . "<br>";
echo $apparte->SetCodePostal(345645) . "<br>";
echo $apparte->SetChambres(4) . "<br>";
echo $apparte->SetPieces(6) . "<br>";
echo $apparte->SetGarage(true) . "<br><br>";
