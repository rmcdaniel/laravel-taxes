<?php

namespace Appleton\Taxes\Unit\Countries\US\Kentucky;

use Appleton\Taxes\Countries\US\Kentucky\HodgenvilleCity\HodgenvilleCity;
use Carbon\Carbon;
use TestCase;

class HodgenvilleCityTest extends TestCase
{
    public function testHodgenvilleCity()
    {
        Carbon::setTestNow(Carbon::parse('2019-02-01'));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.kentucky.hodgenville_city'));
            $taxes->setWorkLocation($this->getLocation('us.kentucky.hodgenville_city'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertSame(3.00, $results->getTax(HodgenvilleCity::class));
    }
}
