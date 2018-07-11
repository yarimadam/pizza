<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Yarimadam\VejeteryanPizza;

class VejeteryanPizzaTest extends TestCase
{
    public function testVejeteryanPizzadaDomatesVar()
    {
        $vejetaryanPizza = new VejeteryanPizza();

        $this->assertContains('Domates', $vejetaryanPizza->Malzemeler());
    }
}
