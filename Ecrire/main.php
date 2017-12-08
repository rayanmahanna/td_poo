<?php

namespace Ecrire;

require '../vendor/autoload.php';

$cahier = new Cahier;
try {
    $cahier->setFormat('a3');
}
 catch (Exception $e) {
}

$stylo = new Bic('bleu');

$stylo->ecrire('Foddfo')->sur($cahier);

$stylo2->ecrire('Bar')->en('rouge')->sur($cahier)->page(134);
$stylo2->ecrire('Un texte')->en('vert')->sur($cahier)->page(134);
$stylo2->ecrire('Un texte')->en('noir')->sur($cahier)->page(212);


$stylo3 = new Criterium;
$stylo3->ecrire('Mon texte')->sur($cahier)->page(212);
$stylo3->ecrire('Baz')->sur($cahier)->page(134);

$gomme = new Gomme;
$gomme->effacer($cahier, 134, 'Mon texte');
$gomme->effacer($cahier, 212);
$gomme->effacer($cahier);

$cahier->lire();
