<?php

namespace Yarimadam\Malzeme;

class PizzaSosu extends AbstractMalzeme
{
    public function __construct($miktar)
    {
        parent::__construct('Pizza Sosu', $miktar, 'kaşık');
    }
}