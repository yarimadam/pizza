<?php

namespace Yarimadam\Malzeme;

class Mantar extends AbstractMalzeme
{
    public function __construct($miktar)
    {
        parent::__construct('Mantar', $miktar, 'gr');
    }
}