<?php

namespace Appleton\Taxes\Unit\Countries\US\Kentucky;

use Appleton\Taxes\Countries\US\Kentucky\FayetteCountySchoolDistrict\FayetteCountySchoolDistrict;
use Carbon\Carbon;
use TestCase;

class FayetteCountySchoolDistrictTest extends TestCase
{
    public function testFayetteCountySchoolDistrict()
    {
        Carbon::setTestNow(Carbon::parse('2019-02-01'));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.kentucky.fayette_county'));
            $taxes->setWorkLocation($this->getLocation('us.kentucky.fayette_county'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertSame(1.50, $results->getTax(FayetteCountySchoolDistrict::class));
    }
}
