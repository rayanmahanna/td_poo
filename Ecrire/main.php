<?php


use Ecrire\Bic;
use Ecrire\Cahier;

require '../vendor/autoload.php';

$cahier = new Cahier;
$cahier->setFormat('a3');

$stylo = new Bic('bleu');

$stylo->ecrire('Foddfo')->sur($cahier);


$stylo2 = new QuatreCouleurs;
$stylo2->ecrire('Bar')->en('rouge')->sur($cahier)->page(134);


$stylo3 = new Criterium;
$stylo3->ecrire('Bar')->sur($cahier)->page(212);
$stylo3->ecrire('Baz')->sur($cahier)->page(134);

$gomme = new Gomme;
$gomme->effacer($cahier->page(134));

echo $cahier->lire();


