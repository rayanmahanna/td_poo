<?php
/**
 * Created by PhpStorm.
 * User: dorian
 * Date: 06/12/2017
 * Time: 17:44
 */

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

        $phrase -> setContenu($content);

        $phrase->setCouleur($this->color);

        return $phrase;

    }



    public function getColor()
    {
        return $this->color;
    }

    public function getContent()
    {
        return $this->content;
    }


}