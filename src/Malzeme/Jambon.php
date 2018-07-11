<?php

namespace Yarimadam\Malzeme;

class Jambon extends AbstractMalzeme
{
    public function __construct($miktar)
    {
        parent::__construct('Jambon', $miktar, 'dilim');
    }
}