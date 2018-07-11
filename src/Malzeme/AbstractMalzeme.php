<?php

namespace Yarimadam\Malzeme;

abstract class AbstractMalzeme
{
    private $ad;
    private $miktar;
    private $olcu;

    public function __construct($ad, $miktar, $olcu)
    {
        $this->ad = $ad;
        $this->miktar = $miktar;
        $this->olcu = $olcu;
    }

    function __toString()
    {
        return sprintf('%s, %s %s', $this->ad, $this->miktar, $this->olcu);
    }
}