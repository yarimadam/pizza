<?php

namespace Yarimadam;

use Yarimadam\Malzeme\Mantar;
use Yarimadam\Malzeme\Jambon;
use Yarimadam\Malzeme\Peperoni;

class GurmePizza extends AbstractPizza
{
    public function __construct()
    {
        parent::__construct();
        $this->malzemeler[] = new Mantar(50);
        $this->malzemeler[] = new Jambon(6);
        $this->malzemeler[] = new Peperoni(10);
    }
}