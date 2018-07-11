<?php

namespace Yarimadam\Malzeme;

class Hamur extends AbstractMalzeme
{
    public function __construct($miktar)
    {
        parent::__construct('Hamur', $miktar, 'gr');
    }
}