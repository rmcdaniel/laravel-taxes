<?php

namespace Appleton\Taxes\Classes;

class TaxesTest extends \TestCase
{
    public function testTaxes()
    {
        $taxes = $this->app->make(Taxes::class);
        $this->assertInstanceOf(Taxes::class, $taxes);
    }
}
