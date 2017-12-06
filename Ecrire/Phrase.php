<?php

namespace Ecrire;

class Phrase
{
    private $contenu;
    private $couleur;

    public function __construct($contenu, Bic $stylo)
    {
        $this->setContenu($contenu)->setCouleur($stylo->getColor());
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function sur(Cahier $cahier)
    {
        $cahier->setContent($this);
    }
}
