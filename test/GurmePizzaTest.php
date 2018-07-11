<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Yarimadam\GurmePizza;

class GurmePizzaTest extends TestCase
{
    public function testGurmePizzadaJambonVar()
    {
        $gurmePizza = new GurmePizza();

        $this->assertContains('Jambon', $gurmePizza->Malzemeler());
    }
}
