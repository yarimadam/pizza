<?php

namespace Yarimadam;

use Yarimadam\Malzeme\Domates;
use Yarimadam\Malzeme\Mantar;

class VejeteryanPizza extends AbstractPizza
{
    public function __construct()
    {
        parent::__construct();
        $this->malzemeler[] = new Domates(5);
        $this->malzemeler[] = new Mantar(50);
    }
}