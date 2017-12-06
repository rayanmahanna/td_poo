<?php

namespace Ecrire;

class Bic
{
    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function ecrire($content)
    {
        $phrase = new Phrase();

        $phrase->setContenu($content);

        $phrase->setCouleur($this->color);

        return $phrase;
    }

    public function getColor()
    {
        return $this->color;
    }
}
