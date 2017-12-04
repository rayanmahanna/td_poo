<?php

namespace PC;

class Mac extends Ordinateur
{
    private $cpu;
    private $design;


    public function faitJoli()
    {
        $this->design;
    }

    public function lireUnDVD()
    {
        // erreur : Cannot override final method Ordinateur->lireUnDVD()
    }
}
