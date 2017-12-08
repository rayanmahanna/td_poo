<?php

/**
 * Created by PhpStorm.
 * User: Rayan
 * Date: 08/12/2017
 * Time: 03:07
 */


namespace Ecrire;

class Criterium extends \Ecrire\Stylo
{

    protected $color = 'gris';

    public function setColor($color)
    {
        throw new \Exception('Un criterium ne peut pas changer de couleur !');
    }
}
