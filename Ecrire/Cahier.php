<?php

namespace Ecrire;

use Exception;

class Cahier
{
    public const FORMATS_AUTORISES = ["A3", "A4"];
    private $format;
    private $content;

    public function setFormat($format)
    {
        $format = strtoupper($format);
        if (!in_array($format, self::FORMATS_AUTORISES)) {
            throw new Exception("Ce format n'est pas accepté");
        }

        $this->format = $format;
    }

    public function setContent(Phrase $phrase)
    {
        $this->content = 'Ton texte ' . $phrase->getContenu() . ' au format ' . $this->format . ' en couleur ' . $phrase->getCouleur();
    }

    public function lire()
    {
        return $this->content;
    }
}
