<?php

namespace Yarimadam\Malzeme;

class MozarellaPeyniri extends AbstractMalzeme
{
    public function __construct($miktar)
    {
        parent::__construct('Mozarella Peyniri', $miktar, 'gr');
    }
}