<?php

namespace Appleton\Taxes\Unit\Countries\US\Kentucky;

use Appleton\Taxes\Countries\US\Kentucky\PendletonCounty\PendletonCounty;
use Carbon\Carbon;
use TestCase;

class PendletonCountyTest extends TestCase
{
    public function testPendletonCounty()
    {
        Carbon::setTestNow(Carbon::parse('2019-02-01'));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.kentucky.pendleton_county'));
            $taxes->setWorkLocation($this->getLocation('us.kentucky.pendleton_county'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertSame(1.50, $results->getTax(PendletonCounty::class));
    }
}
