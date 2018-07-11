<?php

namespace Yarimadam\Malzeme;

class Domates extends AbstractMalzeme
{
    public function __construct($miktar)
    {
        parent::__construct('Domates', $miktar, 'dilim');
    }
}