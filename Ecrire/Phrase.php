<?php
/**
 * Created by PhpStorm.
 * User: dorian
 * Date: 06/12/2017
 * Time: 18:14
 */

namespace Ecrire;

class Phrase
{
    private $contenu;
    private $couleur;

    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function sur(Cahier $cahier)
    {
        $cahier->setContent($this);
    }
}
