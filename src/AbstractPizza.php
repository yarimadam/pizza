<?php

namespace Yarimadam;

use Yarimadam\Malzeme\Hamur;
use Yarimadam\Malzeme\MozarellaPeyniri;
use Yarimadam\Malzeme\PizzaSosu;

class AbstractPizza
{
    protected $malzemeler;

    public function __construct()
    {
        $this->malzemeler = [new Hamur(200), new PizzaSosu(4), new MozarellaPeyniri(150)];
    }

    public function Malzemeler()
    {
        return implode(PHP_EOL, $this->malzemeler);
    }
}