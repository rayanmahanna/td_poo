<?php

namespace Ecrire;

class Bic
{
    private $color;

    public function __construct($color)
    {
        $this->setColor($color);
    }

    public function ecrire($content)
    {
        return new Phrase($content, $this);
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
