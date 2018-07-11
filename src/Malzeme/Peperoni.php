<?php

namespace Yarimadam\Malzeme;

class Peperoni extends AbstractMalzeme
{
    public function __construct($miktar)
    {
        parent::__construct('Peperoni', $miktar, 'dilim');
    }
}